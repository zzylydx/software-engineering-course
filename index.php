<?php
	//session缓存11
	session_start();
	//连接数据库 
	include ('mysql.php');
	//获取用户信息
	include ('getadmin.php');

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>主页</title>
<?php
	include('link.php');
?>
<!-- //end-smoth-scrolling -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header strat here-->
<?php
	include('header.php');
?>
<!--header end here-->
<!--banner strat here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
			<div class="col-md-6 banner-left">
				<a href="emo.php"><img src="images/e2.jpg" alt="" class="img-responsive"></a>
			</div>
			<div class="col-md-6 banner-right simpleCart_shelfItem">
				<span class="bann-heart"> </span>
				<h2>施华洛世奇手链</h2>
				<h1>恶魔之眼Swarovski/施华洛世奇项链女锁骨链玫瑰金色水晶吊坠</h1>
				<h5 class="item_price">¥519.00</h5>
				<ul class="bann-small-img">
					
				</ul>
				<h6>尺码</h6>
				<ul class="bann-btns">
				<li><select class="bann-size">
					<option value="select your location">尺码</option>
					<option value="saab">均码</option>
					
				</select>
				</li>
				<li><a href="#" class="item_add">加入购物车</a></li>
               </ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--banner end here-->
<!--block-layer2 start here-->
<div class="blc-layer2">
	<div class="container">
		<div class="blc-layer2-main">
			 <div class="col-md-6 blc-layer2-left">
			 	  <h3>亲爱的顾客朋友们</h3>
			 	  <p>欢迎来到我们的购物商场!</p>
			 </div>
			 <div class="col-md-6 blc-layer2-right">
			 	
			 </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--block-layer2 end here-->
<!--block-layer1 start here-->
<div class="blc-layer3">
	<div class="container">
		<div class="blc-layer3-main">
			   <div class="col-md-4 blc-layer3-grids1">
			   	    <h6>潘多拉</h6>
			   	    <h3>挚爱一生</h3>
			   	    <p>这款爱情鸟吊饰将两只精心打造的小鸟镶嵌在心形装饰之中，粉色闪烁琉璃如沐浴在艳阳下的花瓣般娇俏可人，再挑选一颗简约风硅胶固定夹牢牢卡在手镯上，表达对爱意满满的生活的赞美 </p>
			         <h6>串饰</h6>
			        <ul>
			        	<li><h4>满载爱意固定夹</h4>
			        		
			        	</li>
						<li><h4>爱情鸟</h4>
			        		
			        	</li>
			        	<li><h4>粉色闪烁琉璃</h4>
			        		
			        	</li>
			        </ul>
			   </div>
			   <div class="col-md-4 blc-layer3-grids2">
			   	<a href="forlove.php"><img src="images/forlove.jpg" alt=""></a>
			   </div>
			   <div class="col-md-4 blc-layer3-grids-3 simpleCart_shelfItem">
				 <div class="box-grid">
				   	<h3><a href="amani.php">Armani男士手表AR2472</a></h3>
				   	<p>Armani阿玛尼官方蓝色渐变钢带石英表圆形时尚商务男士手表AR2472</p>
				   	<h5></h5>
				   	<a href="amani.php"><img src="images/amani.jpg" alt=""></a>
				   	<div class="box-grid-price">
				   		<div class="box-grid-price-left">
				   			<h4>发货地：浙江杭州</h4>
				   		</div>
				   		<div class="box-grid-price-rit">
				   			<h4 class="item_price">¥2590</h4>
				   		</div>
				   		<div class="clearfix"> </div>
				   	</div>
				   	<ul class="bann-btns">
						<li class="ys-margin"><select class="bann-size">
							<option value="saab">银色</option>
							
						</select>
						</li>
						<li><a href="#" class="item_add">加入购物车</a></li>
	               </ul>
				 </div>
			   </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--block-layer1 end here-->
<!--home-block start here-->
<div class="home-block">
	<div class="container">
		<div class="home-block-main">
			<div class="col-md-3 home-grid">
				<div class="home-product-main">
				   <div class="home-product-top">
				      <a href="dgwomen.php"><img src="images/dgw.jpg" alt="" class="img-responsive zoom-img"></a>
				   </div>
					<div class="home-product-bottom">
							<h3><a href="dgwomen.php">女士手提包</a></h3>
							<p>查看更多</p>						
					</div>
					<div class="srch">
						<span>¥31500</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 home-grid">
				<div class="home-product-main">
				   <div class="home-product-top">
				      <a href="dgmen.php"><img src="images/DG.jpg" alt="" class="img-responsive zoom-img"></a>
				   </div>
					<div class="home-product-bottom">
							<h3><a href="dgmen.php">男士背包</a></h3>
							<p>查看更多</p>						
					</div>
					<div class="srch">
						<span>¥10500</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 home-grid">
				<div class="home-product-main">
				   <div class="home-product-top">
				      <a href="babi.php"><img src="images/babi1.jpg" alt="" class="img-responsive zoom-img"></a>
				   </div>
					<div class="home-product-bottom">
							<h3><a href="babi.php">芭比娃娃</a></h3>
							<p>查看更多</p>						
					</div>
					<div class="srch">
						<span>¥279</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 home-grid">
				<div class="home-product-main">
				   <div class="home-product-top">
				      <a href="single.php"><img src="images/k5.jpg" alt="" class="img-responsive zoom-img"></a>
				   </div>
					<div class="home-product-bottom">
							<h3><a href="single.php">女士手表</a></h3>
							<p>查看更多</p>						
					</div>
					<div class="srch">
						<span>¥156370</span>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>	
<!--home block end here-->
<!--footer strat here-->
<?php
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>