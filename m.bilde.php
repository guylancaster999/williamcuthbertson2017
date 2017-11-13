<?php 
require "funcz/m.functionz.php";
print head("de","skizzen","bilde.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
     <?php print top("de","Skizzen","Skizzen");?>
 </div>
  <div data-role="main" class="ui-content">
 <table class="table">
  <tr>
  <td><?php photo("1.png","1_tn.png","Skizzen%20von%20Gosia%20Kulczyk","Bild%201","m.bilde.php","de");?> &nbsp;  </td>
  <td><?php photo("2.jpg","2_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%202","m.bilde.php","de");?> &nbsp;  </td>
  <td><?php photo("4.jpg","4_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%203","m.bilde.php","de");?> &nbsp; </td>
  <td><?php photo("5.jpg","5_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%208","m.bilde.php","de"); ?></td>
  </tr>
 <tr>
  <td><?php photo("7.png","7_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%205","m.bilde.php","de");?> &nbsp; </td>
  <td><?php photo("8.jpg","8_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%206","m.bilde.php","de");?>  </td>
  <td><?php photo("6.jpg","6_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%204","m.bilde.php","de");?> &nbsp; </td>
  <td><?php photo("3.jpg","3_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%207","m.bilde.php","de"); ?>  </td>
  </tr>
  </table>
<br/>
 <div class="alpha" >Klicken Sie auf die Fotografien in voller Größe zu sehen</div>       
 </div>
  <div data-role="footer">
      <?php print foot();?>
  </div>
</div> 
</body>
</html>
