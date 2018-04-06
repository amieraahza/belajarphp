
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
        Check out the <a href="./remote.php" target="_blank">remote.php</a>.
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
    
    <hr />
    <footer class="text-center"><a href="https://github.com/nakupanda/bootstrap3-dialog">Go to the project.</a> 
        | <a href="mailto:javanoob@hotmail.com">Contact me</a> if you can help to improve this example page.</footer>
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
