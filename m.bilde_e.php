<?php 
require "funcz/m.functionz.php";
print head("en","Sketches","bilde_e.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
     <?php print top("en","Sketches","Sketches");?>
 </div>
  <div data-role="main" class="ui-content">
          <table class="table">
  <tr>
  <td><?php photo("1.png","1_tn.png","Sketches%20von%20Gosia%20Kulczyk","Bild%201","m.bilde_e.php","en");?> &nbsp;  </td>
  <td><?php photo("2.jpg","2_tn.jpg","Sketches%20von%20Gosia%20Kulczyk","Bild%202","m.bilde_e.php","en");?> &nbsp;  </td>
  <td><?php photo("4.jpg","4_tn.jpg","Sketches%20von%20Gosia%20Kulczyk","Bild%203","m.bilde_e.php","en");?> &nbsp; </td>
  <td><?php photo("5.jpg","5_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%208","m.bilde_e.php","en"); ?></td>
 </tr>
  <tr>
  <td><?php photo("6.jpg","6_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%204","m.bilde_e.php","en");?> &nbsp; </td>
  <td><?php photo("7.png","7_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%205","m.bilde_e.php","en");?> &nbsp; </td>
 <td><?php photo("8.jpg","8_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%206","m.bilde_e.php","en");?>  </td>
  <td><?php photo("3.jpg","3_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%207","m.bilde_e.php","en"); ?>  </td>
 </tr>
   </table>
<br/>
 <div class="alpha" >Click on Photos to view full size</div>
 </div>
  <div data-role="footer">
      <?php print foot();?>
  </div>
</div> 
</body>
</html>
