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
            
	   </div>
	   </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>