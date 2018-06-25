<div class="consent">  
<p>「同意する」にチェックを入れてください</p>  
<form>  
<label class="checkbox"><input type="checkbox">同意する</label>  
<div class="button-container">  
<button type="submit" disabled><span class="enter-btn-inactive">お問い合わせ</span></button>  
</div>  
</form>  
</div> 

<?php
$(function() {  
$(".consent :checkbox").click(function() {  
if($(".consent :checked").length > 0) {  
$(".button-container :button").removeAttr("disabled");  
$("span.enter-btn-inactive").removeClass("enter-btn-inactive").addClass("enter-btn");  
} else {  
$(".button-container :button").attr("disabled", "disabled");  
$("span.enter-btn").removeClass("enter-btn").addClass("enter-btn-inactive");  
}  
});  
});  ?>