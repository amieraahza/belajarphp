
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
