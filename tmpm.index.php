<?php 
	require "funcz/m.functionz.php";
    print head("de","homepage","index.php","Y");
	require "ghome.php";
	$x 		= json_decode($home,true);
	$sz		= count($x["home"]);     
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone">
  <div data-role="header">
    <?php print top("de","Homepage","Homepage"); ?>
</div>
  <div data-role="main" class="ui-content" >
				<?php photocenter("m.frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
				<ul>

				<?php 
				for ($i=0;$i<$sz;$i++)
				{ 	
					$y 		= $x["home"][$i]; 
					$ttl	= $y["ttl"];
					$txt	= $y["txt"];
					echo "<li>";
					echo "<h4>".$ttl."</h4>";
					echo $txt;
					echo "<br/><br/></li>";
				}
				?>
	 			</ul> 
	   </div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>