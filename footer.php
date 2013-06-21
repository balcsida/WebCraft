                </div><!--/section inner div-->
	        </section>
	        <aside class="span3">
				<div>
					<h1>Sidebar</h1>
				</div>
			</aside>
	    </div>
		<footer class="row-fluid span12">
		  <div>
			  "Minecraft" is a trademark of Notch Development AB<br>This theme is made by <a href="http://balcsida.hu/">balcsida</a>
		  </div>
		</footer>
	</div><!--/container-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
// My Google Analytics code, feel free to remove it!
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-18390714-5']);
_gaq.push(['_trackPageview']);
(function () {
    var a = document.createElement('script');
    a.type = 'text/javascript';
    a.async = true;
    a.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(a, s)
})();

//Loading animation
var messages = new Array("O o o", "o O o", "o o O", "o O o");
var i = 0;
function changeText() {
    if ($("#loading").is(":visible")) {
        document.getElementById("loading").innerHTML = messages[i];
        if (i < messages.length - 1) {
            i++
        } else {
            i = 0
        }
    } else {
        return
    }
}
setInterval('changeText()', 200);
$(window).load(function () {
    $('#loading').fadeOut(200)
});
</script>
</body>
</html>
<?php 
	// Save the cached content to a file    
	$fp = fopen($cachefile, 'w');    
	fwrite($fp, ob_get_contents());    
	fclose($fp);    

	// Send browser output    
	ob_end_flush();

?>