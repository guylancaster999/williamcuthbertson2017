<?php
	require "funcz/functionz.php";
	print head("de","Homepage","index.php");
?> 
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("de","Homepage",'index_e.php','index.php','index_ch.php');?>
         </div>
         <div id="page-content-wrapper">
            <div class="container-fluid">
			<?php topRight(); 
       	     shead('Homepage');?> 
		
			 <main>
             <div class="row">
               <div class="col-lg-12">
                <?php photocenter("frontpagephoto1.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               </div>
              </div>

			<div class="row">
               <div class="col-lg-12">	
				<ul>
					<li>
					<article><h4>Samstag 1.April 2017 : Liszt Konzert mit William Cuthbertson und Stephan Ronkov</h4>
					<ul>
						<li>F.Liszt, Fantasie und Fuge &uuml;ber den Choral &quot;Ad nos, ad salutem undam&quot; f&uuml;r Orgel</li>
						<li>F.Liszt, Sonate H-Moll für Klavier</li>
					</ul>
					<a href="http://www.ksew.de/cms/website.php?id=/w/index.htm">Kirche St.Margarethen</a>, Waldkirch.
					<br/>
					<br/>
					</article>
				</li>	
		
		
		
		
		
		
		
		
					</ul>
				</main>
				</div>
			</div>
		 </div>
	
	<?php  print endPage();?>
</body>
</html>