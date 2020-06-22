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
<title>购物车</title>
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
<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h1>我的购物袋</h1>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
			<div class="in-check" >
				<ul class="unit">
					<li><span>项目</span></li>
					<li><span>产品名称</span></li>		
					<li><span>单价</span></li>
					<li><span>交货细节</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header simpleCart_shelfItem">
					<div class="close1"> </div>
						<li class="ring-in"><a href="emo.php" ><img src="images/e2.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>手链</span></li>
						<li><span class="item_price">¥ 519.00</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">添加</a></li>				
					<div class="clearfix"> </div>
				</ul>
				<ul class=" cart-header1 simpleCart_shelfItem">
					<div class="close2"> </div>
						<li class="ring-in"><a href="single.php" ><img src="images/k5.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>手表</span></li>
						<li><span class="item_price">¥ 156370.0</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">添加</a></li>						
						<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header2 simpleCart_shelfItem">
					<div class="close3"> </div>
						<li class="ring-in"><a href="dgwomen.php" ><img src="images/dgw.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>手提包</span></li>
						<li><span class="item_price">¥ 31500.00</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">添加</a></li>						
						<div class="clearfix"> </div>
				</ul>
			</div>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-danger btn-lg pull-right" data-toggle="modal" data-target="#myModal" style="margin-top: 20px;">
			  结算账单
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">账单结算</h4>
			      </div>
			      <div class="modal-body">
			         <h4>总计：<div class="total">
							<span class="simpleCart_total"></span></div>
</h4>
			         <h4 style="margin-top: 20px;">付款方式：
			         	<div class="radio">
						  <label>
						    <input type="radio" id="zfb" name="optionsRadios"  value="option1" checked>
						    支付宝
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" id="wy" name="optionsRadios" value="option2">
						    网银支付
						  </label>
						</div>
						</h4>
			      </div>
			      <img id="zfbimg" src="images/erweima.png" alt="" width="300" style="margin-left: 100px;">
			      <ul class="list-group" id="yh">
					  <li class="list-group-item">
						  <label>
						    <input type="radio" name="optionsRadios"  value="option1"><a href="http://www.boc.cn/">
						    中国银行
						  </label>
						  	<label>
						    <input type="radio" name="optionsRadios" value="option1"><a href="http://www.icbc.com.cn/">
						    工商银行
						  </label>
						  	<label>
						    <input type="radio" name="optionsRadios"  value="option1"><a href="http://www.abchina.com/cn/">
						    农业银行
						  </label>
					  </li>
					  					  <li class="list-group-item">
						  <label>
						    <input type="radio" name="optionsRadios" value="option1"><a href="https://www.cmbchina.com/">
						    招商银行
						  </label>
						  	<label>
						    <input type="radio" name="optionsRadios"  value="option1"><a href="http://www.ccb.com/cn/home/indexv3.html">
						    建设银行 
						  </label>
						  	<label>
						    <input type="radio" name="optionsRadios"  value="option1"><a href="http://www.bankcomm.com/BankCommSite/default.shtml">
						    交通银行
						  </label>
					  </li>
					  					  <li class="list-group-item">
						  <label>
						    <input type="radio" name="optionsRadios"  value="option1"><a href="http://www.hxb.com.cn/index.shtml">
						    华夏银行
						  </label>
						  	<label>
						    <input type="radio" name="optionsRadios" value="option1"><a href="http://www.cebbank.com/">
						    光大银行
						  </label>
						  	<label>
						    <input type="radio" name="optionsRadios"  value="option1"><a href="http://www.hzbank.com.cn/">
						    杭州银行
						  </label>
					  </li>
					  					  <li class="list-group-item">
						  <label>
						    <input type="radio" name="optionsRadios" value="option1"><a href="http://www.citicbank.com/">
						    中信银行
						  </label>
						  	<label>
						    <input type="radio" name="optionsRadios" value="option1"><a href="http://www.cmbc.com.cn/">
						    民生银行
						  </label>
						  	<label>
						    <input type="radio" name="optionsRadios" value="option1"><a href="https://www.cib.com.cn/cn/index.html">
						    兴业银行
						  </label>
					  </li>
					</ul>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">我再想想</button>
			        <button type="button" class="btn btn-primary">确认提交</button>
			      </div>
			<script type="text/javascript" charset="utf-8" async defer>
				window.onload = function(){
					var zfb = document.getElementById('zfb');
					var wy = document.getElementById('wy');
					var zfbimg = document.getElementById('zfbimg');
					var yh = document.getElementById('yh');
					if(zfb.checked){
						zfbimg.style.display = 'block';
						yh.style.display = 'none';
					}
					wy.onclick = function(){
						yh.style.display = 'block';
						zfbimg.style.display = 'none';
					}
					zfb.onclick = function(){
						yh.style.display = 'none';
						zfbimg.style.display = 'block';
					}
				}
			</script>
			    </div>
			  </div>
			</div>
			</div>  
		 </div>
		</div>
	</div>
<!--end-ckeckout-->
<!--footer strat here-->
<?php 
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>