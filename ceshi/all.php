<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>全屏滚动</title>

		<link rel="stylesheet" href="css/myfirst.css" />
		<link rel="stylesheet" href="css/mysecond.css" />
		<link rel="stylesheet" href="css/mythird.css" />
		<link href="css/css.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery-3.1.1.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="js/echarts.js" ></script>
		<script type="text/javascript" src="js/china.js" ></script>
    <script type="text/javascript" src="js/world.js" ></script>
	
	<script type="text/javascript" src="js/jquery.mousewheel.js" ></script>


<script type="text/javascript" >
	$(function(){
	
	
	var refreshIndexPage1;
	refreshIndexPage1=function(){
		window.location.href='http://dms.yiwu2world.com' ;
		
	};
	
	//一小时刷新下首页
	setInterval(refreshIndexPage1, 1000 * 60 * 60);
	
});
</script>

</head>

<div class="fixed_r">
	<ul>
		<li>&nbsp;</li>
		<li>&nbsp;</li>
		<li>&nbsp;</li>
	</ul>
</div>
<div class="num_box">
	<div class="num" id="num_0">
       <iframe src="./first.php" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%"></iframe>
      
   </div>
	<div class="num" id="num_1">
      <iframe src="./second.php" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%">
      
      </iframe>   
    </div>
    
	<div class="num" id="num_2">
       <iframe src="./third.php" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%"></iframe>
    </div>
</div>
<input type="hidden" value="0" class="ddw"/>
<input type="hidden" value="0" class="ddw2"/>

<script type="text/javascript" src="js/scroll.js" ></script> 
</body>
</html>