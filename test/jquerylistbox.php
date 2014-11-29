<html>
<body>
<form>
<input class="target" type="text" value="Field 1">
<select class="target">
<option value="option1" selected="selected">Option 1</option>
<option value="option2">Option 2</option>
</select>
</form>
<div id="other">
Trigger the handler
</div>
</body>
</html>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js">
</script>
<script>
$( ".target" ).change(function() {
var v=$(this).val();
window.location = "http://www.markbuilders.co/test/gallery?proj="+v;
/*$.ajax({
type: "POST",
url: "http://markbuilders.co/hai.php",
//data: "lastmsg="'last', 
//cache: false,
success: function(html){
/*$(".slider_btn1").hide();
$("div#updates").append(html);
$("#more"+ID).remove();
}
});*/
});
</script>