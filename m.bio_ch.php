<?php 
	require "funcz/m.functionz.php";
     print head("ch","生平经历","index.php","Y");
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone"> 
  <header>
  <div data-role="header">
    <?php print top("ch","生平经历","生平经历"); ?>
</div>
  </header>
  <main>
      <div data-role="main" class="ui-content" >
            <article>  
				<?php	photoright("IMG_2402.JPG","Img_2402_200.jpg","Bio", "William Cuthbertson plays Beethoven","bio_ch.php","ch");?>		
                生于英格兰的塞文欧克斯（Sevenoaks），于中学时期接受 Bernd King 大师的指导。威廉卡思伯
				森专精于萧邦作品的演奏，于童年时就已得到无数的钢琴演奏大奖。1975-1979 年间于位于露 丝·哈特和戈登·格林的皇家音乐学院完成音乐教育。
				<br/>
				<br/>
				由于对于萧邦作品的喜好而前往波兰，于当地接受 Ludwik Stefanski 大师的指导，并接受波兰政
				府的奖学金的补助。在他的音乐教育的经历中 Peter Feuchtwanger 大师扮演着一个很重要的角色。
				<br/>
				<br/>
				目前威廉·卡思伯森是自由钢琴演奏家，定居于德国 Waldkirch，专精于钢琴演奏会和钢琴课程
				的授予。威廉·卡思伯森是即兴演奏的大师，他的音乐常出现于无声电影中，为电影作更自
				由即兴的诠释。
				<br/>
				<br/>
				威廉·卡思伯森目前已于德国，荷兰，波兰，丹麦，挪威，英国，奥地利，瑞典，瑞士和美
				国举办个人的演奏会。并于 2010 年在 Waldkirch 各个不同演奏厅所举办庆祝萧邦 200 年诞辰的一
				系列 6 场连环演奏会，及 2011 年 3 场庆祝李斯特 200 年诞辰演奏会中演出      
		</article>
 	   </div>
	   </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>