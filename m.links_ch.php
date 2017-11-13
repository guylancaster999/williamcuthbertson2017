<?php 
	require "funcz/m.functionz.php";
	require "glinks.php";
	$x 					= json_decode($links,true);
	$sz					= count($x["links"]);
     print head("ch","链接","links_ch.php","Y");
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone"> 
  <header>
  <div data-role="header">
    <?php print top("ch","链接","链接"); ?>
</div>
  </header>
  <main>
      <div data-role="main" class="ui-content" >
          <table>
		   <table cellpadding="10">
				<?php 
			for($i=0;$i<$sz;$i++)
			{
				$y 		= $x["links"][$i]; 
				$img	= $y["img"];
				$ttl	= $y["ttl"];
				$href	= $y["href"];
			    alink($img,$ttl,$href);
			}
			?>
		</table>
	   </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>