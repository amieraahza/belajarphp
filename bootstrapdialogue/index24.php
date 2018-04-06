
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