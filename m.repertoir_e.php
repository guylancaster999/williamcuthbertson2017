<?php 
require "funcz/m.functionz.php";
require "grepertoire_e.php";
$x 		= json_decode($repertoire,true);
$sz		= count($x["repertoire"]); 
function rep($ttl,$img,$imgttl,$lnk,$list)
{
   $ret='<tr>';
   $ret.='<td valign="top">';
   $ret.='<a href="'.$lnk.'"><h3>'.$ttl.'</h3></a>';
   $ret.='<ul>';
	foreach($list as $v)$ret.='<li>'.$v.'</li>'; 
    $ret.='</ul>';
	 $ret.='</td>
	<td>&nbsp;</td>
	<td>'.  dophotorightlinked($img,$imgttl,$lnk).'<br class="brclear"/></td>
	</tr>';
	return $ret; 
};

print head("de","repertoire","repertoire.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
       <?php print  top("de","Repetoire","Repetoire");?>
   </div>
  <div data-role="main" class="ui-content">
    
<table>
<?php 
for ($i=0;$i<$sz;$i++)
{ 
 
	$y 		= $x["repertoire"][$i];
 	$img	= $y["img"];
	$imgttl	= $y["imgttl"];
	$ttl	= $y["ttl"];
	$ttllink= $y["ttllink"];
	$pieces	= $y["pieces"];
	echo rep($ttl,	$img,	$imgttl,$ttllink,	$pieces );
}
?>
	</table>
 </div>
  <div data-role="footer">
     <?php print foot();?>
  </div>
</div> 
</body>
</html>
