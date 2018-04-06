
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
