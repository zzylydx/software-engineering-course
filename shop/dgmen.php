<?php
	//session缓存
	session_start();

	//连接数据库
	include ('mysql.php');
	//获取用户信息
	include ('getadmin.php');

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>男士背包</title>
<?php
	include('link.php');
?>
<!-- //end-smoth-scrolling -->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
    <script>$(document).ready(function(c) {
            $('.item_add').on('click', function(c){
                var name = $(".goods_name").text();
                var data = "name="+name; //如果后台是$_POST方法获取数据，那么一定要索引（例如：索引name）

                $.ajax({
                    type: "POST",
                    url: "checkout.php",  //同目录下的php文件
                    data:data,  // 等号前后不要加空格
                    success: function(msg){  //请求成功后的回调函数

                        $("#result").append("你的名字是"+msg);

                    }
                });

            });
        });
    </script>
<!--flex slider-->
</html>

<script src="js/imagezoom.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header strat here-->
<?php
	include('header.php');
?>
<!--header end here-->
<!--single start here-->
<div class="single">
   <div class="container">
   	 <div class="single-main">
   	 	<div class="single-top-main">
	   		<div class="col-md-5 single-top">	
			   <div class="flexslider">
				  <ul class="slides">
				    <li data-thumb="images/DG.jpg">
				        <div class="thumb-image"> <img src="images/DG.jpg" data-imagezoom="true" class="img-responsive"> </div>
				    </li>
				    <li data-thumb="images/DG1.jpg">
				         <div class="thumb-image"> <img src="images/DG1.jpg" data-imagezoom="true" class="img-responsive"> </div>
				    </li>
				    <li data-thumb="images/DG3.jpg">
				       <div class="thumb-image"> <img src="images/DG3.jpg" data-imagezoom="true" class="img-responsive"> </div>
				    </li> 
				
				  </ul>
			</div>
			</div>
			<div class="col-md-7 single-top-left simpleCart_shelfItem">
				
				<h1 class="goods_name">男士拼饰尼龙双肩包</h1>
				<h4><b>Dolce&Gabbana/杜嘉班纳Mediterraneo系列徽标拼饰嵌花皇冠刺绣尼龙双肩包<b></h4>
				<h6 class="item_price">¥10500.00</h6>			
				</p><h5>运费：00.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;尺寸： 24 x 37.5 x 9 厘米</h5></p>
				<h4>颜色大小分类</h4>
				<ul class="bann-btns">
					<li><select class="bann-size">
						<option value="select your location">颜色</option>
						<option value="saab">黑色</option>
						
					</select>
					</li>
					<li><a href="checkout.php" class="item_add">添加到购物车</a></li>
	            </ul>
			</div>
		   <div class="clearfix"> </div>
	   </div>
	   <div class="singlepage-product">
		   	 <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="amaniwoman.php"><img src="images/amn1.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="amaniwoman.php">阿玛尼女士手表</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥2590</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="baoshijie.php"><img src="images/car1.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="baoshijie.php">乐高模型拼装</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥2799</span>
						</div>
					</div>
				 </div>
				 <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="forlove.php"><img src="images/forlove.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="forlove.php">潘多拉手链</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥2042</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="emo.php"><img src="images/e2.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="emo.php">施华洛世奇手链</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥519</span>
						</div>
					</div>
				 </div>
		  <div class="clearfix"> </div>
	   </div>
   	 </div>
   </div>
</div>
<!--single end here-->
<!--footer strat here-->
<?php 
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>



