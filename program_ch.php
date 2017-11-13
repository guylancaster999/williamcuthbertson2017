<?php
require "funcz/functionz.php";
function rwcp($c='&nbsp;',$p='&nbsp;')
{
	return '<div class="row">
		    <div class="col-lg-4 col-4 col-sm-4">'.$c.'</div>
		    <div class="col-lg-8 col-8 col-sm-8"><i>'.$p.'</i></div>
		</div>';
	
}	
function rwyr($y)
{
	return '<div class="row">
                 <div class="col-lg-12 col-12 col-sm-12 year"><h4>'.$y.'</h4></div>
			</div>';
}
require "gprogram_e.php";
 $x 		= json_decode($program,true);
$sz		= count($x["program"]);     
print head("ch","Program");?>
<body>
<div class="container">
  <div class="row">
    <div <?php mnuClass();?> >  
		<?php print menu("ch","节目","program_e.php","program.php","program_ch.php");?>
	</div>	  
      <div <?php mainClass();?> >
		<?php print shead1("节目");?>       
		<main>
<?php

for ($i=0;$i<$sz;$i++)
{ 
	$y 		= $x["program"][$i];
	print "<article>".rwYr($y["yr"]); 
	print '<div class="row">
             <div class="col-8 col-lg-8 col-md-8 col-sm-8">';
    $progs=$y["progs"];	
 	$img=$y["img"];
	$imgttl=$y["imgttl"];
	$imglink=$y["imglink"];
	for ($q=0;$q<count($progs);$q++)
	{
		$p		=$progs[$q];
		$pttl	=$p["ttl"];
		$prg=$p["ttl"];
		if ($prg !="Program")print rwcp('<br/><b>'.$prg.'</b>');
		$pitems=$p["items"];
		
		for ($k=0;$k<count($pitems);$k++)
		{
			$pitem=$pitems[$k];
			$cmpsr=$pitem["cmpsr"];
			$pieces=$pitem["pieces"];
			for ($l=0;$l<count($pieces);$l++)
			{
				$piece=$pieces[$l];
				print rwcp($cmpsr,$piece);
				$cmpsr="&nbsp;"	;			
			}
		}
	}
	print '</div> '  ;
	print '<div class="col-4 col-lg-4 col-md-4 col-sm-4">';
	print photorightlinked($img,$imgttl,$imglink);
	print '</div>';
	print '</div>';
	print '</article>';			 
}

?>
</main>				  
<div class="row">
				<div class="col-12">
					<?php print foot(); ?>
			</div>
		</div>
		 </div>
		  	</div>
			</div>
 			<?php print endPage();?>
		</body>
</html>