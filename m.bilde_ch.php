<?php 
	require "funcz/m.functionz.php";
     print head("ch","速写","bilde_ch.php","Y");
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone"> 
  <header>
  <div data-role="header">
    <?php print top("ch","速写","速写"); ?>
</div>
  </header>
  <main>
        <div data-role="main" class="ui-content">
          <table class="table">
  <tr>
  <td><?php photo("1.png","1_tn.png","Sketches%20von%20Gosia%20Kulczyk","速写%201","m.bilde_ch.php","ch");?> &nbsp;  </td>
  <td><?php photo("2.jpg","2_tn.jpg","Sketches%20von%20Gosia%20Kulczyk","速写%202","m.bilde_ch.php","ch");?> &nbsp;  </td>
  <td><?php photo("4.jpg","4_tn.jpg","Sketches%20von%20Gosia%20Kulczyk","速写%203","m.bilde_ch.php","ch");?> &nbsp; </td>
  <td><?php photo("5.jpg","5_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","速写%208","m.bilde_ch.php","ch"); ?></td>
 </tr>
  <tr>
 <td><?php photo("6.jpg","6_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","速写%204","m.bilde_ch.php","ch");?> &nbsp; </td>
 <td><?php photo("7.png","7_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","速写%205","m.bilde_ch.php","ch");?> &nbsp; </td>
 <td><?php photo("8.jpg","8_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","速写%206","m.bilde_ch.php","ch");?>  </td>
  <td><?php photo("3.jpg","3_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","速写%207","m.bilde_ch.php","ch");?></td>
 </tr>
   </table>
<br/>
 <div class="alpha" >Click on Photos to view full size</div>
 </div>
  
	   </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>