<?php 
require "funcz/m.functionz.php";
print head("de","Aktuelles","news.php","Y");
require "gnews.php";
$x 					= json_decode($news,true);
$sz					= count($x["news"]);     
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
     <?php print  top("de","Aktuelles","Aktuelles");?>
   </div>
  <div data-role="main" class="ui-content"> 
 <ul>
		<?php 
		for ($i=0;$i<$sz;$i++)
		{ 	
			$y 		= $x["news"][$i]; 
			$ttl	= $y["ttl"];
			$txt	= $y["txt"];
			$img	= $y["img"];
			echo"<li>";
			photorightnolink($img,$ttl);
			echo "<b>".$ttl."</b><br/>";
			echo $txt;
			echo"<br clear=\"all\"/><br/></li>";
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
