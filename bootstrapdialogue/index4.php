<!-- button 2nd-->
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
