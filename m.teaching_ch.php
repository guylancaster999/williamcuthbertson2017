  <?php 
	require "funcz/m.functionz.php";
     print head("ch","钢琴课程","teaching_ch.php","Y");
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone"> 
  <header>
  <div data-role="header">
    <?php print top("ch","钢琴课程","钢琴课程");?>
</div>
  </header>
  <main>
      <div data-role="main" class="ui-content" >
         	 <main>
              <?php photorightnolink("foto3_240.jpg","William%20Cuthbertson%20with%20student%20am%20Master%20Class");?>
				 	<ul>
						<li>威廉•卡思伯森对于钢琴课程拥有丰富的授课经验，并熟悉适合各年龄段的学生的教学方法。
						<br/><br/>
						</li>
						<li>提供初学者到专业演奏家的训练<br/><br/>
						</li>
						<li>音乐伴奏和其他乐器演奏的训练<br/><br/>
						</li>
						<li>凭借其丰富及专业的方法理论知识，配合学生的个人化需求，协助学生创造个人理想的风格。<br/><br/>
						</li>
						<li>教授自然却又充满个人风格的钢琴演奏技巧（目前担任彼得•福伊希特万格教授提供的钢琴练习课程的指导老师）
						<br/><br/></li>
						<li>通过对各音乐作品的意义，结构和的目的，以及对聆听者所产生的效果来进行分析，协助学生的塑造动人的个人音乐风格。
						<br/><br/></li>
						</ul>
						<br clear="all"/>
						   <?php photorightnolink("Alban6_240.JPG","William%20Cuthbertson%20Accompanying%20Alban");?>
				<br clear="all"/><br clear="all"/> 
				</main>
			 
                <?php print foot();	?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper --> 
	<?php  print endPage();?>
	</body>
</html>