<?php
require "gnews_e.php";
	$x 					= json_decode($news,true);
	$sz					= count($x["news"]);     
	require "funcz/functionz.php";
	function newsItem($pic,$ttl,$txt)
	{
		echo '<li><article>';
		photorightnolink($pic,$ttl);
		echo '<h4><b>'.$ttl.'</b></h4>'.$txt.'</article>
				<br/>
				<br class="brclear"/>
				<br class="brclear"/></li>';
		return;
	}
	print head("en","News","",",Thai, Juror, Competion, Judge");
 ?>
<body> 
<div class="container">
  <div class="row">	
    <div class="col-sm-2 col-md-2 col-lg-2" >  
			<?php 
			print menu("en","News",'news_e.php','news.php','news_ch.php');
			?>
	 </div>	  
      <div class="col-sm-10   col-md-10 col-lg-10">
		<?php print  shead1('News');?>        
	 		   <main>
             <div class="row">
               <div class="col-	12 col-sm-12 col-md-12  col-lg-12">
			<ul style="margin-left:-30px;">
				<?php 
				for ($i=0;$i<$sz;$i++)
				{ 	
					$y 		= $x["news"][$i]; 
					$ttl	= $y["ttl"];
					$txt	= $y["txt"];
			    	$img	= $y["img"];
					newsItem($img,$ttl,$txt);
				}
				?>
			
			  </ul>
					</div>
		</div>
				</main>
		<?php print foot();	?>	   
		 </div>
		  	</div>
			</div>	
 	<?php  print endPage();?>
</body>
</html>

