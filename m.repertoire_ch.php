<?php 
require "grepertoire_e.php";
$x 		= json_decode($repertoire,true);
$sz		= count($x["repertoire"]); 
	require "funcz/m.functionz.php";
     print head("ch","剧目","repertoire_ch.php","Y");
	 
function rep($ttl,$img,$imgttl,$lnk,$list)
{
   $ret='<tr>';
   $ret.='<td valign="top">';
   $ret.='<a href="'.$lnk.'" target="_blank" title="'.$title.'"><h3>'.$ttl.'</h3></a>';
   $ret.='<ul>';
	foreach($list as $v)$ret.='<li>'.$v.'</li>'; 
    $ret.='</ul>';
	 $ret.='</td>
	<td>&nbsp;</td>
	<td>'.dophotorightlinked($img,$imgttl,$lnk).'<br class="brclear"/></td>
	</tr>';
	return $ret; 
};
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone"> 
  <header>
  <div data-role="header">
    <?php print top("ch","剧目","剧目");?>
</div>
  </header>
  <main>
      <div data-role="main" class="ui-content" >
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
	    </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>