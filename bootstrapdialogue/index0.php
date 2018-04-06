
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.min.js"></script>
<meta charset="utf-8" />
<title>BootstrapDialog examples</title>
<style>
    .login-dialog .modal-dialog {
        width: 300px;
    }
</style>
</head>
<body style="padding-bottom: 100px;">
<div class="container">
    <h2>Make use of Bootstrap's modal more monkey-friendly.</h2>
    <hr />
    <p>
        Monkeys love the <a href="http://getbootstrap.com/javascript/#modals" target="_blank">Modal Dialog from Bootstrap</a>, but they're getting angry because they have to write this stuff:
    </p>
    <pre class="prettyprint">&lt;div class="modal fade"&gt;<br />  &lt;div class="modal-dialog"&gt;<br />    &lt;div class="modal-content"&gt;<br />      &lt;div class="modal-header"&gt;<br />        &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;&times;&lt;/button&gt;<br />        &lt;h4 class="modal-title"&gt;Modal title&lt;/h4&gt;<br />      &lt;/div&gt;<br />      &lt;div class="modal-body"&gt;<br />        &lt;p&gt;One fine body&hellip;&lt;/p&gt;<br />      &lt;/div&gt;<br />      &lt;div class="modal-footer"&gt;<br />        &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;<br />        &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;<br />      &lt;/div&gt;<br />    &lt;/div&gt;&lt;!-- /.modal-content --&gt;<br />  &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;<br />&lt;/div&gt;&lt;!-- /.modal --&gt;
    </pre>
    <p>
        What they want is more like this:
    </p>
    <div class="source-code runnable">
        BootstrapDialog.alert('I want banana!');
    </div>
    <p></p>
    <p>
        Like it? See <a href="#available-options">Available Options</a> or try more <a href="#examples">Examples</a> below. 
    </p>
    
    <!-- Examples -->
    <a name="examples"></a>
    <h2>Examples</h2>
    <hr />
    
    <h3>Simplest</h3>
    <p>Provide only the message to show, and keep all other things default.</p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: 'Hi Apple!'
        });
        -->
    </div>
    
    <h3>Dialog Title</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Say-hello dialog',
            message: 'Hi Apple!'
        });
        -->
    </div>
    
    <a name="manipulating-title-message"></a>
    <h3>Manipulating Dialog Title</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Default Title',
            message: 'Click buttons below.',
            buttons: [{
                label: 'Title 1',
                action: function(dialog) {
                    dialog.setTitle('Title 1');
                }
            }, {
                label: 'Title 2',
                action: function(dialog) {
                    dialog.setTitle('Title 2');
                }
            }]
        });
        -->
    </div>
    
    <h3>Manipulating Dialog Message</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Default Title',
            message: 'Click buttons below.',
            buttons: [{
                label: 'Message 1',
                action: function(dialog) {
                    dialog.setMessage('Message 1');
                }
            }, {
                label: 'Message 2',
                action: function(dialog) {
                    dialog.setMessage('Message 2');
                }
            }]
        });
        -->
    </div>

    <a name="loading-remote-page"></a>
    <h3>Loading remote page (1)</h3>
    <p>
        There are some workarounds for loading remote page into BootstrapDialog as message, one of those workarounds is as below. <br />
        Check out the <a href="./remote.html" target="_blank">remote.html</a>.
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: $('<div></div>').load('remote.html')
        });
        -->
    </div>
    
    <h3>Loading remote page (2)</h3>
    <p>
        Another solution of loading remote page into BootstrapDialog. <br />
        This one is more flexible and customizable, but it's also a bit more complicated to use.
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: function(dialog) {
                var $message = $('<div></div>');
                var pageToLoad = dialog.getData('pageToLoad');
                $message.load(pageToLoad);
        
                return $message;
            },
            data: {
                'pageToLoad': 'remote.html'
            }
        });
        -->
    </div>    
    
    <h3>Buttons</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: 'Hi Apple!',
            buttons: [{
                label: 'Button 1',
                title: 'Mouse over Button 1'
            }, {
                label: 'Button 2',
                // no title as it is optional
                cssClass: 'btn-primary',
                data: {
                    js: 'btn-confirm',
                    'user-id': '3'
                },
                action: function(){
                    alert('Hi Orange!');
                }
            }, {
                icon: 'glyphicon glyphicon-ban-circle',
                label: 'Button 3',
                title: 'Mouse over Button 3',
                cssClass: 'btn-warning'
            }, {
                label: 'Close',
                action: function(dialogItself){
                    dialogItself.close();
                }
            }]
        });
        -->
    </div>
    
    <h3>Manipulating Buttons</h3>
    <p>
        Buttons that created by BootstrapDialog have some extra functions available: <br />
        $button.toggleEnable(true|false); <br />
        $button.enable(); // Equals to $button.toggleEnable(true); <br />
        $button.disable(); // Equals to $button.toggleEnable(false); <br />
        $button.toggleSpin(true|false); <br />
        $button.spin(); // Equals to $button.toggleSpin(true);<br />
        $button.stopSpin(); // Equals to $button.toggleSpin(false);<br />
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Manipulating Buttons',
            message: function(dialog) {
                var $content = $('<div><button class="btn btn-success">Revert button status right now.</button></div>');
                var $footerButton = dialog.getButton('btn-1');
                $content.find('button').click({$footerButton: $footerButton}, function(event) {
                    event.data.$footerButton.enable();
                    event.data.$footerButton.stopSpin();
                    dialog.setClosable(true);
                });
                
                return $content;
            },
            buttons: [{
                id: 'btn-1',
                label: 'Click to disable and spin.',
                action: function(dialog) {
                    var $button = this; // 'this' here is a jQuery object that wrapping the <button> DOM element.
                    $button.disable();
                    $button.spin();
                    dialog.setClosable(false);
                }
            }]
        });
        -->
    </div>
    
    <a name="button-hotkey"></a>
    <h3>Button Hotkey</h3>
    <p>
        Try to press the keys that have been associated with buttons below. <br /> 
        The <strong>last button</strong> is disabled so nothing is going to happen when pressing its hotkey. <br />
        Please note that if there are some components that require keyboard operations in your dialog, conflicts may occur, you can try next example.
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Button Hotkey',
            message: 'Try to press some keys...',
            onshow: function(dialog) {
                dialog.getButton('button-c').disable();
            },
            buttons: [{
                label: '(A) Button A',
                hotkey: 65, // Keycode of keyup event of key 'A' is 65.
                action: function() {
                    alert('Finally, you loved Button A.');
                }
            }, {
                label: '(B) Button B',
                hotkey: 66,
                action: function() {
                    alert('Hello, this is Button B!');
                }
            }, {
                id: 'button-c',
                label: '(C) Button C',
                hotkey: 67,
                action: function(){
                    alert('This is Button C but you won\'t see me dance.');
                }
            }]
        });
        -->
    </div>
    
    <h3>Keys Conflicts</h3>
    <p>Try to avoid doing similar in your code.</p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Button Hotkey',
            message: $('<textarea class="form-control" placeholder="Try to input multiple lines here..."></textarea>'),
            buttons: [{
                label: '(Enter) Button A',
                cssClass: 'btn-primary',
                hotkey: 13, // Enter.
                action: function() {
                    alert('You pressed Enter.');
                }
            }]
        });
        -->
    </div>

    <a name="opening-multiple-dialogs"></a>
    <h3>Opening multiple dialogs</h3>
    <p>A good looking stacked dialogs. Please also note the second and the third dialog are draggable.</p>
    <div class="source-code runnable">
        <!--
        var shortContent = '<p>Something here.</p>';
        var longContent = '';
        for(var i = 1; i <= 200; i++) {
            longContent += shortContent;
        }
        BootstrapDialog.show({
            title: 'Another long dialog',
            message: longContent
        });
        BootstrapDialog.show({
            title: 'Another short dialog',
            message: shortContent,
            draggable: true
        });
        BootstrapDialog.show({
            title: 'A long dialog',
            message: longContent,
            draggable: true
        });
        BootstrapDialog.show({
            title: 'A short dialog',
            message: shortContent
        });
        -->
    </div>
    
    <h3>Creating dialog instances</h3>
    <p>BootstrapDialog.show(...) is just a shortcut method, if you need dialog instances, use 'new'.</p>
    <div class="source-code runnable">
        <!--
        // Using init options
        var dialogInstance1 = new BootstrapDialog({
            title: 'Dialog instance 1',
            message: 'Hi Apple!'
        });
        dialogInstance1.open();
        
        // Construct by using setters
        var dialogInstance2 = new BootstrapDialog();
        dialogInstance2.setTitle('Dialog instance 2');
        dialogInstance2.setMessage('Hi Orange!');
        dialogInstance2.setType(BootstrapDialog.TYPE_SUCCESS);
        dialogInstance2.open();
        
        // Using chain callings
        var dialogInstance3 = new BootstrapDialog()
            .setTitle('Dialog instance 3')
            .setMessage('Hi Everybody!')
            .setType(BootstrapDialog.TYPE_INFO)
            .open();
        -->
    </div>
    <p>In fact BootstrapDialog.show(...) will also return the created dialog instance.</p>
    <div class="source-code runnable">
        <!--
        // You can use dialogInstance later.
        var dialogInstance = BootstrapDialog.show({
            message: 'Hello Banana!'
        });
        -->
    </div>
    
    <h3>Open / Close multiple dialogs</h3>
    <p>This example demonstrates opening and closing a batch of dialogs at one time. <br />Dialog that created by BootstrapDialog will be in a container <strong>BootstrapDialog.dialogs</strong> before it's closed and destroyed, iterate <strong>BootstrapDialog.dialogs</strong> to find all dialogs that havn't been destroyed.</p>
    <div class="source-code runnable">
        <!--
        var howManyDialogs = 5;
        for(var i = 1; i <= howManyDialogs; i++) {
            var dialog = new BootstrapDialog({
                title: 'Dialog No.' + i,
                message: 'Hello Houston, this is dialog No.' + i,
                buttons: [{
                    label: 'Close this dialog.',
                    action: function(dialogRef){
                        dialogRef.close();
                    }
                }, {
                    label: 'Close ALL opened dialogs',
                    cssClass: 'btn-warning',
                    action: function(){
                        // You can also use BootstrapDialog.closeAll() to close all dialogs.
                        $.each(BootstrapDialog.dialogs, function(id, dialog){
                            dialog.close();
                        });
                    }
                }]
            });
            dialog.open();
        }
        -->
    </div>
    
    <h3>Button with identifier</h3>
    <div class="source-code runnable">
        <!--
        var dialog = new BootstrapDialog({
            message: 'Hi Apple!',
            buttons: [{
                id: 'btn-1',
                label: 'Button 1'
            }]
        });
        dialog.realize();
        var btn1 = dialog.getButton('btn-1');
        btn1.click({'name': 'Apple'}, function(event){
            alert('Hi, ' + event.data.name);
        });
        dialog.open();
        -->
    </div>
    
    <h3>Message types</h3>
    <div class="source-code runnable">
        <!--
        var types = [BootstrapDialog.TYPE_DEFAULT, 
                     BootstrapDialog.TYPE_INFO, 
                     BootstrapDialog.TYPE_PRIMARY, 
                     BootstrapDialog.TYPE_SUCCESS, 
                     BootstrapDialog.TYPE_WARNING, 
                     BootstrapDialog.TYPE_DANGER];
                     
        $.each(types, function(index, type){
            BootstrapDialog.show({
                type: type,
                title: 'Message type: ' + type,
                message: 'What to do next?',
                buttons: [{
                    label: 'I do nothing.'
                }]
            });     
        });
        -->
    </div>
    
    <a name="changing-dialog-type"></a>
    <h3>Changing dialog type</h3>
    <div class="source-code runnable">
        <!--
        var types = [BootstrapDialog.TYPE_DEFAULT, 
                     BootstrapDialog.TYPE_INFO, 
                     BootstrapDialog.TYPE_PRIMARY, 
                     BootstrapDialog.TYPE_SUCCESS, 
                     BootstrapDialog.TYPE_WARNING, 
                     BootstrapDialog.TYPE_DANGER];
                     
        var buttons = [];
        $.each(types, function(index, type) {
            buttons.push({
                label: type,
                cssClass: 'btn-default btn-sm',
                action: function(dialog) {
                    dialog.setType(type);
                }
            });
        });

        BootstrapDialog.show({
            title: 'Changing dialog type',
            message: 'Click buttons below...',
            buttons: buttons
        });
        -->
    </div>
    
    <h3>Larger dialog</h3>
    <p>
        By default, the dialog size is 'size-normal' or BootstrapDialog.SIZE_NORMAL, but you can have a larger dialog by setting option 'size' to 'size-large' or BootstrapDialog.SIZE_LARGE.
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            size: BootstrapDialog.SIZE_LARGE,
            message: 'Hi Apple!',
            buttons: [{
                label: 'Button 1'
            }, {
                label: 'Button 2',
                cssClass: 'btn-primary',
                action: function(){
                    alert('Hi Orange!');
                }
            }, {
                icon: 'glyphicon glyphicon-ban-circle',
                label: 'Button 3',
                cssClass: 'btn-warning'
            }, {
                label: 'Close',
                action: function(dialogItself){
                    dialogItself.close();
                }
            }]
        });
        -->
    </div>
    
    <a name="more-dialog-sizes"></a>
    <h3>More dialog sizes</h3>
    <p>
        Please note that specifying BootstrapDialog.SIZE_WIDE is equal to using css class 'modal-lg' on Bootstrap Modal.
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'More dialog sizes',
            message: 'Hi Apple!',
            buttons: [{
                label: 'Normal',
                action: function(dialog){
                    dialog.setTitle('Normal');
                    dialog.setSize(BootstrapDialog.SIZE_NORMAL);
                }
            }, {
                label: 'Small',
                action: function(dialog){
                    dialog.setTitle('Small');
                    dialog.setSize(BootstrapDialog.SIZE_SMALL);
                }
            }, {
                label: 'Wide',
                action: function(dialog){
                    dialog.setTitle('Wide');
                    dialog.setSize(BootstrapDialog.SIZE_WIDE);
                }
            }, {
                label: 'Large',
                action: function(dialog){
                    dialog.setTitle('Large');
                    dialog.setSize(BootstrapDialog.SIZE_LARGE);
                }
            }]
        });
        -->
    </div>
    
    <h3>Rich message</h3>
    <p>BootstrapDialog supports displaying rich content, so you can even use a video clip as your message in the dialog.</p>
    <div class="source-code runnable">
        <!--
        var $textAndPic = $('<div></div>');
        $textAndPic.append('Who\'s this? <br />');
        $textAndPic.append('<img src="./images/pig.ico" />');
        
        BootstrapDialog.show({
            title: 'Guess who that is',
            message: $textAndPic,
            buttons: [{
                label: 'Acky',
                action: function(dialogRef){
                    dialogRef.close();
                }
            }, {
                label: 'Robert',
                action: function(dialogRef){
                    dialogRef.close();
                }
            }]
        });
        -->
    </div>
    
    <h3>Dialog closable / unclosable</h3>
    <p>
        If option 'closable' is set to false, the default closing behaviors will be disabled, but you can still close the dialog by using dialog.close().
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: 'Hi Apple!',
            closable: false,
            buttons: [{
                label: 'Dialog CLOSABLE!',
                cssClass: 'btn-success',
                action: function(dialogRef){
                    dialogRef.setClosable(true);
                }
            }, {
                label: 'Dialog UNCLOSABLE!',
                cssClass: 'btn-warning',
                action: function(dialogRef){
                    dialogRef.setClosable(false);
                }
            }, {
                label: 'Close the dialog',
                action: function(dialogRef){
                    dialogRef.close();
                }
            }]
        });
        -->
    </div>
    
    <a name="more-close-controls"></a>
    <h3>More controls on closing a dialog.</h3>
    <p>
        By default, when option 'closable' is set to true, dialog can be closed by these ways: clicking outside the dialog, pressing ESC key, clicking the close icon on the right of dialog header. <br />
        If you want your dialog closes only when the close icon in dialog header was clicked, try setting both of the options 'closeByBackdrop' and 'closeByKeyboard' to false.
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: 'Hi Apple!',
            message: 'You can not close this dialog by clicking outside and pressing ESC key.',
            closable: true,
            closeByBackdrop: false,
            closeByKeyboard: false,
            buttons: [{
                label: 'Close the dialog',
                action: function(dialogRef){
                    dialogRef.close();
                }
            }]
        });
        -->
    </div>
    
    <a name="dialog-animate"></a>
    <h3>Disabling Animation</h3>
    <p>
        Setting option 'animate' to false to disable animation for the opening dialog. <br />
        If you want to disable animation globally, try to do this: <br />
        BootstrapDialog.configDefaultOptions({
            animate: false
        });
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: 'There is no fading effects on this dialog.',
            animate: false,
            buttons: [{
                label: 'Close the dialog',
                action: function(dialogRef){
                    dialogRef.close();
                }
            }]
        });
        -->
    </div>
    
    <h3>Auto spinning icon</h3>
    <p>
        Lazy guys must love this.
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: 'I send ajax request!',
            buttons: [{
                icon: 'glyphicon glyphicon-send',
                label: 'Send ajax request',
                cssClass: 'btn-primary',
                autospin: true,
                action: function(dialogRef){
                    dialogRef.enableButtons(false);
                    dialogRef.setClosable(false);
                    dialogRef.getModalBody().html('Dialog closes in 5 seconds.');
                    setTimeout(function(){
                        dialogRef.close();
                    }, 5000);
                }
            }, {
                label: 'Close',
                action: function(dialogRef){
                    dialogRef.close();
                }
            }]
        });
        -->
    </div>
    
    <a name="dialog-draggable"></a>
    <h3>Dialog Draggable</h3>
    <p>
        When option 'draggable' is set to <strong>true</strong>, your dialog can be moved by dragging on its header. <br />
        If you would like to change the cursor shape of hovering on dialog header, you can try the following css lines: <br />
        <div class="source-code">
            .bootstrap-dialog .modal-header.bootstrap-dialog-draggable {
                cursor: move;
            }
        </div>
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Draggable Dialog',
            message: 'Try to drag on dialog title to move your dialog.',
            draggable: true
        });
        -->
    </div>
    
    <h3>Manipulating your dialog</h3>
    <div class="source-code runnable">
        <!--
        var dialog = new BootstrapDialog({
            message: function(dialogRef){
                var $message = $('<div>OK, this dialog has no header and footer, but you can close the dialog using this button: </div>');
                var $button = $('<button class="btn btn-primary btn-lg btn-block">Close the dialog</button>');
                $button.on('click', {dialogRef: dialogRef}, function(event){
                    event.data.dialogRef.close();
                });
                $message.append($button);
        
                return $message;
            },
            closable: false
        });
        dialog.realize();
        dialog.getModalHeader().hide();
        dialog.getModalFooter().hide();
        dialog.getModalBody().css('background-color', '#0088cc');
        dialog.getModalBody().css('color', '#fff');
        dialog.open();
        -->
    </div>
    
    <h3>Adding additional css classes to your dialog</h3>
    <p>This is useful for applying effects to specific dialogs.<br />
    For example if you would like to give your 'login-dialog' a smaller size, you can do this way:</p>
    <div class="source-code">
        <!--
        <style>
           .login-dialog .modal-dialog {
                width: 300px;
            }
        </style>
        -->
    </div>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Sign In',
            message: 'Your sign-in form goes here.',
            cssClass: 'login-dialog',
            buttons: [{
                label: 'Sign In Now!',
                cssClass: 'btn-primary',
                action: function(dialog){
                    dialog.close();
                }
            }]
        });
        -->
    </div>
    
    <h3>Adding a description to your dialog (for accessibility)</h3>
    <p>This adds an 'aria-describedby' attribute to your dialog, which provides a description of the dialog for screen readers.</p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            title: 'Add Description',
            message: 'The description is shown to screen readers.',
            description: 'This is a Bootstrap Dialog'
        });
        -->
    </div>
    
    <h3>Data binding</h3>
    <div class="source-code runnable">
        <!--
        var data1 = 'Apple';
        var data2 = 'Orange';
        var data3 = ['Banana', 'Pear'];
        BootstrapDialog.show({
            message: 'Hi Apple!',
            data: {
                'data1': data1,
                'data2': data2,
                'data3': data3
            },
            buttons: [{
                label: 'See what you got',
                cssClass: 'btn-primary',
                action: function(dialogRef){
                    alert(dialogRef.getData('data1'));
                    alert(dialogRef.getData('data2'));
                    alert(dialogRef.getData('data3').join(', '));
                }
            }]
        });
        -->
    </div>
    
    <h3>Dialog events</h3>
    <p>
        Please note that if you're going to use setters to configure event handlers, use dialog.onShow(function) and dialog.onHide(function).
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: 'Hello world!',
            onshow: function(dialogRef){
                alert('Dialog is popping up, its message is ' + dialogRef.getMessage());
            },
            onshown: function(dialogRef){
                alert('Dialog is popped up.');
            },
            onhide: function(dialogRef){
                alert('Dialog is popping down, its message is ' + dialogRef.getMessage());
            },
            onhidden: function(dialogRef){
                alert('Dialog is popped down.');
            }
        });
        -->
    </div>
    
    <a name="stop-closing-dialog"></a>
    <h3>Stop closing your dialog.</h3>
    <p>
        Option 'onhide' gives you an opportunity to stop closing the dialog according to some conditions, making your 'onhide' callback returns false to stop closing the dialog. <br />
        In the following example, the dialog closes only when your most favorite fruit is '<strong>banana</strong>' (Case insensitive).
    </p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.show({
            message: 'Your most favorite fruit: <input type="text" class="form-control">',
            onhide: function(dialogRef){
                var fruit = dialogRef.getModalBody().find('input').val();
                if($.trim(fruit.toLowerCase()) !== 'banana') {
                    alert('Need banana!');
                    return false;
                }
            },
            buttons: [{
                label: 'Close',
                action: function(dialogRef) {
                    dialogRef.close();
                }
            }]
        });
        -->
    </div>
    
    <h2>More shortcut methods</h2>
    <hr />
    <h3>Alert</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.alert('Hi Apple!');
        -->
    </div>
    
    <h3>Alert with callback</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.alert('Hi Apple!', function(){
            alert('Hi Orange!');
        });
        -->
    </div>
    
    <a name="advanced-alert-window"></a>
    <h3>Customizing dialog type, title, and more.</h3>
    <p>All options shown below are optional.</p>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.alert({
            title: 'WARNING',
            message: 'Warning! No Banana!',
            type: BootstrapDialog.TYPE_WARNING, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
            closable: true, // <-- Default value is false
            draggable: true, // <-- Default value is false
            buttonLabel: 'Roar! Why!', // <-- Default value is 'OK',
            callback: function(result) {
                // result will be true if button was click, while it will be false if users close the dialog directly.
                alert('Result is: ' + result);
            }
        });
        -->
    </div>
    
    <h3>Confirm</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.confirm('Hi Apple, are you sure?');
        -->
    </div>
    
    <h3>Confirm with callback</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.confirm('Hi Apple, are you sure?', function(result){
            if(result) {
                alert('Yup.');
            }else {
                alert('Nope.');
            }
        });
        -->
    </div>

    <a name="advanced-confirm-window"></a>
    <h3>Just like what we have done in alert, we can control confirm dialog more.</h3>
    <div class="source-code runnable">
        <!--
        BootstrapDialog.confirm({
            title: 'WARNING',
            message: 'Warning! Drop your banana?',
            type: BootstrapDialog.TYPE_WARNING, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
            closable: true, // <-- Default value is false
            draggable: true, // <-- Default value is false
            btnCancelLabel: 'Do not drop it!', // <-- Default value is 'Cancel',
            btnOKLabel: 'Drop it!', // <-- Default value is 'OK',
            btnOKClass: 'btn-warning', // <-- If you didn't specify it, dialog type will be used,
            callback: function(result) {
                // result will be true if button was click, while it will be false if users close the dialog directly.
                if(result) {
                    alert('Yup.');
                }else {
                    alert('Nope.');
                }
            }
        });
        -->
    </div>
    
    <a name="i18n-message"></a>
    <h3>I18N</h3>
    <p>To provide local messages for you needed, reset those messages below before using BootstrapDialog.</p>
    <div class="source-code">
        <!--
        BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_DEFAULT] = 'Information';
        BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_INFO] = 'Information';
        BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_PRIMARY] = 'Information';
        BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_SUCCESS] = 'Success';
        BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_WARNING] = 'Warning';
        BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_DANGER] = 'Danger';
        BootstrapDialog.DEFAULT_TEXTS['OK'] = 'OK';
        BootstrapDialog.DEFAULT_TEXTS['CANCEL'] = 'Cancel';
        BootstrapDialog.DEFAULT_TEXTS['CONFIRM'] = 'Confirmation';
        -->
    </div>
    
    <!-- Available options -->
    <a name="available-options"></a>
    <h2>Available options</h2>
    <hr />
    <p>
        Please note that all options described below are <strong>optional</strong>, but you will have a weird dialog if you don't even give it a message to display.
        <br />
        Most options can be set via init options or property setters.
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Option
                </th>
                <th>
                    Possible values
                </th>
                <th>
                    Description
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>type</td>
                <td>
                    BootstrapDialog.TYPE_DEFAULT or 'type-default' <br />
                    BootstrapDialog.TYPE_INFO or 'type-info' <br />
                    <strong>BootstrapDialog.TYPE_PRIMARY or 'type-primary' (default)</strong> <br />
                    BootstrapDialog.TYPE_SUCCESS or 'type-success' <br />
                    BootstrapDialog.TYPE_WARNING or 'type-warning' <br />
                    BootstrapDialog.TYPE_DANGER or 'type-danger'
                </td>
                <td>
                    Give your dialog a specific look, color scheme can be seen on <a href="http://getbootstrap.com/css/#buttons" target="_blank">Bootstrap's Button</a>.
                </td>
            </tr>
            <tr>
                <td>size</td>
                <td>
                    <strong>BootstrapDialog.SIZE_NORMAL or 'size-normal' (default)</strong> <br />
                    BootstrapDialog.SIZE_WIDE or 'size-wide' <br />
                    BootstrapDialog.SIZE_LARGE or 'size-large' <br />
                </td>
                <td>
                    -
                </td>
            </tr>
            <tr>
                <td>cssClass</td>
                <td>
                    -
                </td>
                <td>
                    Additional css classes that will be added to your dialog.
                </td>
            </tr>
            <tr>
                <td>title</td>
                <td>
                    String or Object(html)
                </td>
                <td>
                    -
                </td>
            </tr>
            <tr>
                <td>message</td>
                <td>
                    String or Object(html)
                </td>
                <td>
                    -
                </td>
            </tr>
            <tr>
                <td>buttons</td>
                <td>
                    array
                </td>
                <td>
                    Examples:
<div class="source-code runnable">
BootstrapDialog.show({
    title: 'Say-hello dialog',
    message: 'Hello world!',
    buttons: [{
        id: 'btn-ok',   
        icon: 'glyphicon glyphicon-check',       
        label: 'OK',
        cssClass: 'btn-primary',
        data: {
            js: 'btn-confirm',
            'user-id': '3'
        },
        autospin: false,
        action: function(dialogRef){    
            dialogRef.close();
        }
    }]
});
</div>
                    <strong>id</strong>: optional, if id is set, you can use dialogInstance.getButton(id) to get the button later. <br />
                    <strong>icon</strong>: optional, if set, the specified icon will be added to the button. <br />
                    <strong>cssClass</strong>: optional, additional css class to be added to the button. <br />
                    <strong>data</strong>: optional, object containing data attributes to be added to the button. <br />
                    <strong>autospin</strong>: optional, if it's true, after clicked the button a spinning icon appears. <br />
                    <strong>action</strong>: optional, if provided, the callback will be invoked after the button is clicked, and the dialog instance will be passed to the callback function.
                </td>
            </tr>
            <tr>
                <td>closable</td>
                <td>
                    true | false
                </td>
                <td>
                    When set to <strong>true</strong>, you can close the dialog by: <br />
                    <ul>
                        <li>Clicking the close icon in dialog header.</li>
                        <li>Clicking outside the dialog.</li>
                        <li>ESC key.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>spinicon</td>
                <td>
                    Icon class name, for example 'glyphicon glyphicon-check'. <br />
                    <strong>Default value is 'glyphicon glyphicon-asterisk'.</strong>
                </td>
                <td>
                    Specify what icon to be used as the spinning icon when button's 'autospin' is set to true.
                </td>
            </tr>
            <tr>
                <td>data</td>
                <td>
                    Key-value object. For example {'id' : '100'}
                </td>
                <td>
                    Data to be bound to the dialog.
                </td>
            </tr>
            <tr>
                <td>onshow</td>
                <td>
                    function
                </td>
                <td>
                    If provided, it will be invoked when the dialog is popping up. <br />
                </td>
            </tr>
            <tr>
                <td>onshown</td>
                <td>
                    function
                </td>
                <td>
                    If provided, it will be invoked when the dialog is popped up. <br />
                </td>
            </tr>
            <tr>
                <td>onhide</td>
                <td>
                    function
                </td>
                <td>
                    If provided, it will be invoked when the dialog is popping down. <br />
                </td>
            </tr>
            <tr>
                <td>onhidden</td>
                <td>
                    function
                </td>
                <td>
                    If provided, it will be invoked when the dialog is popped down. <br />
                </td>
            </tr>
            <tr>
                <td>autodestroy</td>
                <td>
                    <strong>true (default)</strong> | false
                </td>
                <td>
                    When it's true, all modal stuff will be removed from the DOM tree after the dialog is popped down, set it to false if you need your dialog (same instance) pups up and down again and again.
                </td>
            </tr>
            <tr>
                <td>description</td>
                <td>
                    String
                </td>
                <td>
                    If provided, 'aria-describedby' attribute will be added to the dialog with the description string as its value.  This can improve accessibility, as the description can be read by screen readers.
                </td>
            </tr>
            <tr>
                <td>nl2br</td>
                <td>
                    true | false
                </td>
                <td>
                    Automatically convert line breaking character to &lt;br /&gt; if it's set to true, everything keeps original if it's false.
                </td>
            </tr>
        </tbody>
            
    </table>
    
    <!-- Available methods -->
    <a name="available-methods"></a>
    <h2>Available methods</h2>
    <hr />
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Method
                </th>
                <th>
                    Description
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>open()</td>
                <td>Open the dialog. Usage: dialogInstance.open()</td>
            </tr>
            <tr>
                <td>close()</td>
                <td>Close the dialog. Usage: dialogInstance.close()</td>
            </tr>
            <tr>
                <td>getModal()</td>
                <td>Return the raw modal, equivalent to $('&lt;div class='modal fade'...&gt;&lt;/div&gt;')</td>
            </tr>
            <tr>
                <td>getModalDialog()</td>
                <td>Return the raw modal dialog.</td>
            </tr>
            <tr>
                <td>getModalContent()</td>
                <td>Return the raw modal content.</td>
            </tr>
            <tr>
                <td>getModalHeader()</td>
                <td>Return the raw modal header.</td>
            </tr>
            <tr>
                <td>getModalBody()</td>
                <td>Return the raw modal body.</td>
            </tr>
            <tr>
                <td>getModalFooter()</td>
                <td>Return the raw modal footer.</td>
            </tr>
            <tr>
                <td>getData(key)</td>
                <td>Get data entry according to the given key, returns null if no data entry found.</td>
            </tr>
            <tr>
                <td>setData(key, value)</td>
                <td>Bind data entry to dialog instance, value can be any types that javascript supports.</td>
            </tr>
            <tr>
                <td>enableButtons(boolean)</td>
                <td>Disable all buttons in dialog footer when it's false, enable all when it's true.</td>
            </tr>
            <tr>
                <td>setClosable(boolean)</td>
                <td>When set to true (default), dialog can be closed by clicking close icon in dialog header, or by clicking outside the dialog, or, ESC key is pressed.</td>
            </tr>
            <tr>
                <td>realize()</td>
                <td>Calling dialog.open() will automatically get this method called first, but if you want to do something on your dialog before it's shown, you can manually call dialog.realize() before calling dialog.open().</td>
            </tr>
        </tbody>
    </table>
    
    <hr />
    <footer class="text-center"><a href="https://github.com/nakupanda/bootstrap3-dialog">Go to the project.</a> | <a href="mailto:javanoob@hotmail.com">Contact me</a> if you can help to improve this example page.</footer>
</div>

<script type="text/javascript">
$(function(){
    $('.source-code').each(function(index){
        var $section = $(this);
        var code = $(this).html().replace('<!--', '').replace('-->', '');
        
        // Code preview
        var $codePreview = $('<pre class="prettyprint lang-javascript"></pre>');
        $codePreview.text(code);
        $section.html($codePreview);
        
        // Run code
        if($section.hasClass('runnable')){
            var $button = $('<button class="btn btn-primary">Run the code</button>');
            $button.on('click', {code: code}, function(event){
                eval(event.data.code);
            });
            $button.insertAfter($section);
            $('<div class="clearfix" style="margin-bottom: 10px;"></div>').insertAfter($button);
        }
    });
});
</script>
</body>
</html>
