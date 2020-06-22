<?php
	//session缓存
	session_start();
	//连接数据库
	include ('mysql.php');
	//获取用户信息
	include ('getadmin.php');
	//获取所有商品信息
	$sql = "SELECT * FROM `product`";
	$mysqli_result_pro = $mysqli->query($sql);
	while($row_pro = $mysqli_result_pro->fetch_array(MYSQLI_ASSOC)){
		$rows_pro[] = $row_pro;
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>商品专区</title>
<?php
	include('link.php');
?>
<!-- //end-smoth-scrolling -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header strat here-->
<?php
	include('header.php');
?>
<!--header end here-->
<!--product start here-->

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="搜索...">

<ul id="myUL">
<?php
if($rows_pro){
	foreach($rows_pro as $row_pro){
?>
	<li><a href="<?php echo $row_pro['linkhtml']; ?>"><?php echo $row_pro['name']; ?></a></li>
<?php
}
}
?>

<!--   <li><a href="#" class="header">A</a></li>
  <li><a href="#">Adele</a></li>
  <li><a href="#">Agnes</a></li>

  <li style=""><a href="#" class="header">B</a></li>
  <li style=""><a href="#">Billy</a></li>
  <li style=""><a href="#">Bob</a></li>

  <li style=""><a href="#" class="header">C</a></li>
  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li style=""><a href="#">Cindy</a></li> -->
</ul>
<style>
#myInput {
    background-image: url('https://static.runoob.com/images/mix/searchicon.png'); /* 搜索按钮 */
    background-position: 10px 12px; /* 定位搜索按钮 */
    background-repeat: no-repeat; /* 不重复图片*/
    width: 50%;
    font-size: 16px; /* 加大字体 */
    padding: 12px 20px 12px 40px; 
    border: 1px solid #ddd; 
    margin-left: 25%;
    margin-bottom: 12px; 
}

#myUL {
    /* 移除默认的列表样式 */
    list-style-type: none;
    padding: 0;
    margin: 0;
    width: 50%;
    margin-left: 25%;
    position: absolute;
    z-index: 9999;
    display: none;
}

#myUL li a {
    border: 1px solid #ddd; /* 链接添加边框 */
    margin-top: -1px; 
    background-color: #f6f6f6; 
    padding: 12px; 
    text-decoration: none;
    font-size: 18px; 
    color: black; 
    display: block; 
}

#myUL li a.header {
    background-color: #e2e2e2; 
    cursor: default; 
}

#myUL li a:hover:not(.header) {
    background-color: #eee;
}</style><script>function myFunction() {
    // 声明变量
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    input.onblur = function(){
    	for (var i = li.length - 1; i >= 0; i--) {
    		li[i].onclick = function(){
    			ul.style.display = "none";
    		}
    	}
    	document.querySelector("body").onclick = function(){
    		ul.style.display = "none";
    	};
    }

    // 循环所有列表，查找匹配项
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        	ul.style.display = "block";
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}</script>


<div class="product">
	<div class="container">
		<div class="product-main">
			  <div class=" product-menu-bar">
			    	<div class="col-md-3 prdt-right">
					<div class="w_sidebar">
						<section  class="sky-form">
							<h1>分类</h1>
							<div class="row1 scroll-pane">
								<div class="col col-4">
									<label>全部产品</label>
								</div>
								<div class="col col-4">								
									</p><label>珠宝</label></p>
									</p><label>皮包</label></p>
									</p><label>手表</label></p>
									</p><label>玩具</label></p>		
								</div>
							</div>
						</section>
						<section  class="sky-form">
							<h2>品牌</h2>
							<div class="row1 row2 scroll-pane">
								<div class="col col-4">
									</p><label>所有品牌</label></p>
								</div>
								<div class="col col-4">
								    </p><label>Armani/阿玛尼</label></p>
									</p><label>Cartier/卡地亚</label></p>
									</p><label>Gucci/古奇</label></p>
									</p><label>杜嘉班纳</label></p>
									</p><label>施华洛世奇</label></p>
									</p><label>Pandora/潘多拉</label></p>
									</p><label>乐高</label></p>
									</p><label>barbie系列</label></p>								
								</div>
							</div>
						
						<section class="sky-form">
							<h4>颜色</h4>
								<ul class="w_nav2">
									<li><a class="color1" href="#"></a></li>
									<li><a class="color2" href="#"></a></li>
									<li><a class="color3" href="#"></a></li>
									<li><a class="color4" href="#"></a></li>
									<li><a class="color5" href="#"></a></li>
									<li><a class="color6" href="#"></a></li>
									<li><a class="color7" href="#"></a></li>
									<li><a class="color8" href="#"></a></li>
									<li><a class="color9" href="#"></a></li>
									<li><a class="color10" href="#"></a></li>
									<li><a class="color12" href="#"></a></li>
									<li><a class="color13" href="#"></a></li>
									<li><a class="color14" href="#"></a></li>
									<li><a class="color15" href="#"></a></li>
									<li><a class="color5" href="#"></a></li>
									<li><a class="color6" href="#"></a></li>
									<li><a class="color7" href="#"></a></li>
									<li><a class="color8" href="#"></a></li>
									<li><a class="color9" href="#"></a></li>
									<li><a class="color10" href="#"></a></li>
								</ul>
						</section>
					</div>
				</div>
			  </div>
			</div>
			   <div class="col-md-9 product-block">
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="amani.php"><img src="images/ami1.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="amani.php">Armani男士手表</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥156370</span>
						</div>
					</div>
				 </div>
				 <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single2.php"><img src="images/k1.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="single2.html">卡地亚男表</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥127030.00</span>
						</div>
					</div>
				 </div>
				<div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single3.php"><img src="images/kk1.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="single3.html">Gucci男士手提包</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥21010.00</span>
						</div>
					</div>
				 </div>
				 <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="dgmen.php"><img src="images/DG.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="dgmen.html">杜嘉班纳男士包</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥10500.00</span>
						</div>
					</div>
				 </div>
			</div>
		</div>
<!--product end here-->
<!--footer strat here-->
<?php
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>
