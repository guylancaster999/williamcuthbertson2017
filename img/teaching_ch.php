<?php 
require "funcz/functionz.php";
print head("ch","钢琴课程，辅导和伴奏");
?>
<body>
    <div id="wrapper">
      <div id="sidebar-wrapper">
            <?php  print  menu("ch","钢琴课程","teaching_e.php","teaching.php","teaching_ch.php"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
             <?php topRight(); ?>
                <div class="row">
                 <div class="col-lg-12"> 
                      <h2>钢琴课程，辅导和伴奏</h2>
                   </div>
             </div>
           <div class="row">
                 <div class="col-lg-12">     
            			<ul>
						<li>威廉•卡思伯森对于钢琴课程拥有丰富的授课经验，并熟悉适合各年龄段的学生的教学方法。
						</li>
						<li>提供初学者到专业演奏家的训练
						</li>
						<li>音乐伴奏和其他乐器演奏的训练
						</li>
						<li>凭借其丰富及专业的方法理论知识，配合学生的个人化需求，协助学生创造个人理想的风格。
						</li>
						<li>教授自然却又充满个人风格的钢琴演奏技巧（目前担任彼得•福伊希特万格教授提供的钢琴练习课程的指导老师）
						</li>
						<li>通过对各音乐作品的意义，结构和的目的，以及对聆听者所产生的效果来进行分析，协助学生的塑造动人的个人音乐风格。
						</li>
						</ul>
					</div>
					</div>
           <div class="row">
                 <div class="col-lg-6">     
					<?php photocenterfs("foto3.JPG","foto3_240.jpg","Teaching",
			"William Cuthbertson teaching students at Peter Feuchtwanger Masterclass","teaching_ch.php","picturecenter");?>
				 </div>
				 <div class="col-lg-6">     
			      <?php photocenterfs("Alban6.JPG","Alban6_240.JPG","Teaching",
				   "William%20Cuthbertson (Piano) accompanies Alban (French Horn)","teaching_ch.php","picturecenter");?>
              </div>
			  </div>
           <div class="row">
                 <div class="col-lg-12">     
		  
						<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>   <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
		<?php  print endPage();?>
</body>
</html>