<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>江南 </title>
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.jpg" />
	<link type="text/css" rel="stylesheet" href="css/index.css">
	<bgsound src="林俊杰 - 江南.mp3" loop="-1"> <!--只有IE支持-->
	<style type="text/css">
	body {
		background-image: url(images/bj3.png);
		background-repeat: repeat;
	}
	</style>
</head>
<body>
<?php SESSION_START();
?>
<div id="container">
	<div class="header">
	
	<script language="javascript" src="css/pic.js"></script>
	<script language="javascript" >
		var da=[];

		da.push({src:"images/b2.jpeg",name:"第一张"});
		da.push({src:"images/banner1.jpeg",name:"第二张"});
		da.push({src:"images/banner2.jpeg",name:"第三张"});
		
		var c={
			 bg:"#333",//右下数字背景颜色
			 color:"#FFF",//右下数字颜色
			 cbg:"#FFF",//右下当前数字背景颜色
			 ccolor:"#333",//右下当前数字颜色
			 bc:"#ccc",//边框颜色
			 step:3000 //步长即图片切换速度
			}
		new IMGS("TopI",1000,350,da,c);//调用函数实现图片轮播效果
		//new IMGS("id",宽度,高度,数据[,设置]);
	</script>
	<h1>江南</h1>
	<h2>regions south of the Yangtze River</h2>
	<ul class="daohang">
		<li>欢迎来到江南景色介绍首页</li>
		<li><?php 
			if(isset($_SESSION['username']))
			{
				echo "欢迎你,". $_SESSION['username'];
				echo "&nbsp";
				echo"<a href='exit.php'>退出</a>";
			}
			else
			{
				echo"<a href='login.html'>登录</a>";
				echo "&nbsp";
				echo"<a href='register.html'>注册</a>";
			}
			?>
		</li>
	</ul>
	
	<hr>
	</div>
	<div class="main">	
	<ul>
		<li class="pd">
			<a target="_blank" href="hz.html">
				<h3><em>1.</em><strong>杭州：淡妆浓抹总相宜</strong></h3>
				<img src="images/hz.jpeg" width="311" height="183" align="left">
			</a>
			<p class="zi">“江南忆，最忆是杭州！”杭州美景或珠帘玉带、烟柳画桥，
				或万千姿态、蔚然奇观，或山青水秀、风情万种，
				它以“浓妆淡抹总相宜”的自然风光情系天下众生。
				<BR>&nbsp;<BR clear="left">
			</p>
			<hr>
		</li>
		<li class="pd">
			<a target="_blank" href="nj.html">
				<h3><em>2.</em><strong>南京: 千古绝美在秦淮</strong></h3>
				<img src="images/nj.jpeg" width="311" height="183" align="left">
			</a>
			<p class="zi">“六朝金粉地，金陵帝王州”。
				南京，古称金陵，与北京、西安、洛阳并称为“中国四大古都”，
				这里有着6000多年文明史和2400多年建城史。自公元229年东吴孙权迁都南京以来，
				历史上先后有10个朝代在此建都，故有“十朝都会”之称。
				<BR>&nbsp;<BR clear="left">
			</p>
			<hr>
		</li>
		<li class="pd">
			<a target="_blank" href="sz.html">
				<h3><em>3.</em><strong>苏州：风华绝美姑苏城</strong></h3>
				<img src="images/sz.png" width="311" height="183" align="left">
			</a>
			<p class="zi">苏州，古称吴，简称为苏，又称姑苏、平江等，
				苏州是中国首批24座国家历史文化名城之一，
				有近2500年历史，是吴文化的发祥地 。
				苏州人多属江浙民系，使用吴语。
				苏州园林是中国私家园林的代表，被联合国教科文组织列为世界文化遗产。
				<BR>&nbsp;<BR clear="left">
			</p>
			<hr>
		</li>
		<li class="pd">
			<a target="_blank" href="wz.html">
				<h3><em>4.</em><strong>乌镇：小桥流水听雨眠</strong></h3>
				<img src="images/wz.png" width="311" height="183" align="left">
			</a>
			<p class="zi">乌镇古镇是国家5A级景区，全国二十个黄金周预报景点及江南六大古镇之一。
				曾名乌墩和青墩，具有六千余年悠久历史。乌镇是典型的江南水乡古镇，
				素有“鱼米之乡，丝绸之府”之称。风景名胜乌镇虽历经2000多年沧桑，
				完整地保存着原有的水乡古镇的风貌和格局，
				梁、柱、门、窗上的木雕和石雕工艺精湛。
				<BR>&nbsp;<BR clear="left">
			</p>
			<hr>
		</li>
		<li class="pd">
			<a target="_blank" href="xt.html">
				<h3><em>5.</em><strong>西塘：古意石桥月半弯</strong></h3>
				<img src="images/xt.jpeg" width="311" height="183" align="left">
			</a>
			<p class="zi">古名斜塘，平川。是吴地汉文化的千年水乡古镇，江南六大古镇之一。西塘被誉为生活着的千年古镇。
				已被列入世界历史文化遗产预备名单，中国首批历史文化名镇，国家AAAA级景区。
				西塘历史悠久，是古代吴越文化的发祥地之一。
				在春秋战国时期是吴越两国的交壤之境，故有“吴根越角”和“越角人家”之称。
				<BR>&nbsp;<BR clear="left">
			</p>
			<hr>
		</li>
		<li class="pd">
			<a target="_blank" href="wx.html">
				<h3><em>6.</em><strong>无锡：碧波荡漾太湖水</strong></h3>
				<img src="images/wx.jpeg" width="311" height="183" align="left">
			</a>
			<p class="zi">碧波荡漾太湖水，悠悠流淌古运河。无锡，简称“锡”，古称梁溪、金匮，被誉为“太湖明珠”。
				“太湖明珠”无锡是国家历史文化名城，距今已有3000多年的历史。
				太湖佳绝处，毕竟在鼋头”是诗人郭沫若用来形容无锡太湖的风景的。
				<BR>&nbsp;<BR clear="left">
			</p>
			<hr>
		</li>
	</ul>
	</div>
	<footer>
		<hr>
		&copy;2016,JiangNanJingse
		<br>
		All trademarks and registered trademarks appearing on this site are the property of Hallie.
	</footer>
</div>
</body>
</html>