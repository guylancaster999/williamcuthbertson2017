<?php 
	require "funcz/m.functionz.php";
     print head("ch","链接","index.php","Y");
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
             <?php photorightnolink("FotoChopinKonzertSept2010_350.jpg", "William Cuthbertson-Chopin Konzert Sept 2010");?>
                 <table class="tbl">
						<tr>
						<td  ><strong>Post</strong></td>
						<td>:</td>
						<td  >William Cuthbertson<br/>
						Theodor-Heuss-Str.16<br/>
						79183 Waldkirch<br/>
						Baden-Württemberg<br/>
						Germany</td>
						</tr>
						<tr>
						<td  ><strong>Tel.</strong></td>
						<td>:&nbsp;</td>
						<td  ><a href="tel:+497681409260">0049-76 81 40 92 60</a></td></tr>
						<tr>
						<td  ><strong>E-Mail</strong>&nbsp;&nbsp;</td>
						<td>:</td>
						<td  ><a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a></td>
						</tr><tr>
							<td><strong>E-Mail (website)</strong></td>
							<td>:</td>
							<td><a href="mailto:guylancaster@hotmail.com">guylancaster@hotmail.com</a></td>
						</tr>
						</table>
	   </div>
	   </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>