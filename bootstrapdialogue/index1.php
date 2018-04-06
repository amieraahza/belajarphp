
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
