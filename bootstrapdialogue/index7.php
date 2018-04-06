
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
