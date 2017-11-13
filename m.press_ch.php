<?php 
	require "funcz/m.functionz.php";
     print head("ch","","index.php","Y");
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone"> 
  <header>
  <div data-role="header">
    <?php print top("ch","",""); ?>
</div>
  </header>
  <main>
      <div data-role="main" class="ui-content" >
            <ul>

<li><?php photorightnolink("chopin1_240.png","Chopin" );?>
					 William Cuthbertson will be serving on the jury of the
			  Thailand 4th International Chopin Competition in November 2017, Bangkok <br/>
				<br class="brclear"/>
				</li>
			  
			  <li><?php photorightnolink("musicschule.jpg","Music School, Waldkirch" );?>
				Work in progress on the the new building for the Waldkirch Music School,
				a gift from the Sick AG and the Sick Foundation, 
				where the next master class will take place in November 2017. 

			  </li>
			  </ul>
	   </div>
	   </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>