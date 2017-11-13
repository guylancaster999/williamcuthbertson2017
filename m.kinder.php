<?php 
require "funcz/m.functionz.php";
print head("de","kinder","kinder.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
      <?php print  top("de","Kinder","Unterricht f&uuml;r Kinder");?>
   </div>
  <div data-role="main" class="ui-content">
                 William Cuthbertson unterrichtet auch Kinder, von Anfängern bis Fortgeschrittene. 		
                 Dabei könnten die Kinder ausser klassischen Stücken auch Stücke aus derm Pop- und Jazzrepertoire kennenzulernen.  
                 Es besteht auch die Möglichkeit ABRSM Prufüngen zu machen.
                 <br/>
				 <br />
				 <h3>Erwachsene (Laien)</h3>
 				 Späteinsteiger und Wiedereinsteiger sind auch herzlich willkommmen.
<table>
<tr>
<td valign="top">
<?php  photorightfs("Vorspiel1.jpg","Vorspiel1_240.jpg","Kinder","Kind%201", "kinder.php","de");?>
<br  class='brclear'/>
<br  class='brclear'/>
<?php  photorightfs("Vorspiel2.jpg","Vorspiel2_240.jpg","Kinder","Kind%202","kinder.php","de");?>
<br  class='brclear'/>
<br  class='brclear'/> 
 <?php  photorightfs("Vorspiel3.jpg","Vorspiel3_240.jpg","Kinder","Kind%203","kinder.php","de");?>
</td>
<td>
 <?php photorightfs("Abrsm1-1.jpg","Abrsm1-1_240.jpg","Kinder","Kind%204","kinder.php","de");?>
<br  class='brclear'/>
<br  class='brclear'/>
<?php photorightfs("Abrsm2-1.jpg","Abrsm2-1_240.jpg","Kinder","Kind%205","kinder.php","de");?> 
</td>
</tr>
</table>
</div>
  <div data-role="footer">
     <?php print foot();?>
  </div>
</div> 
</body>
</html>
