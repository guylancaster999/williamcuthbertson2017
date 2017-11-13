<?php 
require "funcz/functionz.php";
print head("de","Program");

function rwcp($c='&nbsp;',$p='&nbsp;')
{
	print'<div class="row">
		    <div class="col-lg-4 col-4 col-sm-4">'.$c.'</div>
		    <div class="col-lg-8 col-8 col-sm-8">'.$p.'</div>
		</div>';
	return;
}	
function rwyr($y)
{
	print '<div class="row">
                 <div class="col-lg-12 col-12 col-sm-12 year"><h4>'.$y.'</h4></div>
			</div>';
	return;
}
require "grepertoire.php";
$x 		= json_decode($repertoire,true);
$sz		= count($x["repertoire"]);     
?><body>
 <div class="container">
  <div class="row">
    <div <?php  mnuClass(); ?>>  
			<?php print menu("de","Repertoire","repertoire_e.php","repertoire.php","repertoire_ch.php");?>
	</div>	  
      <div <?php mainClass();?>>
		<?php print shead1("Repertoire");?>       
        <main>
<?php
for ($i=0;$i<$sz;$i++)
{ 
	echo "<article>";
	$y 		= $x["repertoire"][$i];
 	$img	= $y["img"];
	$imgttl	= $y["imgttl"];
	$ttl	= $y["ttl"];
	$ttllink= $y["ttllink"];
	$pieces	= $y["pieces"];
     echo "<a href=\"".$ttllink."\"><h3><b>".$ttl."</b></h3></a>";	
    echo '<img class="picturerightfs img-responsive img-rounded" width="160" src="img/'.$img.'" alt="'.$imgttl.'" >';
    echo "<ul>";	
     
    for ($j=0;$j<count($pieces);$j++) 
 	{
		echo "<li>". $pieces[$j]."</li>";
 	}
	echo "</ul>";
	echo '</article><br class="brclear">';	
}
?>

</main>
		<?php print foot();	?>	   
		 
		 </div>
		  	</div>
			</div>	
		 
	<?php  print endPage();?>
</body>
</html>




 		