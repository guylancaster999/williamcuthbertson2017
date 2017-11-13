<?php 
	require "funcz/m.functionz.php";
     print head("ch","视频","video_ch.php","Y");
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone"> 
  <header>
  <div data-role="header">
    <?php print top("ch","视频","视频"); ?>
</div>
  </header>
  <main><div data-role="main" class="ui-content" style="text-align: center;">
      	      	William Cuthbertson in Balakhna, Nizhny Novgorod, Russia (TV News 31/5/16)  
				<br/>
				<br/>
					 <iframe src="http://www.youtube.com/embed/dOqKpMH53b8" height="300" width="500"></iframe>
				<br/>
				<br/>				
				<iframe src="http://www.youtube.com/embed/s9yxdd37QuU" width="500" height="300"></iframe>
					<br/>
					William Cuthbertson plays Nocturnes Op.15 by Frédérick Chopin, Gutshof Güntert, Sulzburg. September 2013
					<br class="brclear"/>
					<br/>
					<br>
					<iframe src="http://www.youtube.com/embed/OJF0MTa3QH4" height="300" width="500"></iframe>
					<br/>
					William Cuthbertson at the Feuchtwanger Piano Festival in 2006, playing:
					<ul class="ulsquare">
					<li>Franz Liszt: Liebestraum No. 3 in A flat major</li>
					<li>Frédéric Chopin: Study in A flat major Op.25 No.1</li>
					<li>Alexander Scriabin: Study in D sharp minor Op.8 No.12</li>
						</ul>

						<br/>
					<iframe src="http://www.youtube.com/embed/HczH9E5nhQc" height="300" width="500"></iframe>
					<br/>
					William Cuthbertson plays Felix Blumenfeld, Etude for the Left hand op 36
					<br/><br/>
					 <table>
					<tr>
					<td>
					<iframe src="http://www.youtube.com/embed/HAh3FAbdicU" width="500" height="300"></iframe>
					<br/>
					<a href="#" title="Amaryllis Waltz von William Cuthbertson, Copyright  William Cuthbertson &copy;2012">
					   <img class="img-responsive" src="img/anarylliswalz.png" alt="Amaryllis Walz von William Cuthbertson, Copyright &copy;2012 William Cuthbertson 2013"/>
					   </a>
					   </td>
					   </tr>
				   </table>
	  	   </div>
		   </div>
 </div>
	   </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>