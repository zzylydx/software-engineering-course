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
<title>条款</title>
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
<!--tems start here-->
<div class="tems">
	<div class="container">
		<div class="tems-main">
			<div class="tems-top">
				<h1>条款</h1>
				<p>您的信任对我们非常重要，505深知个人信息对您的重要性，我们将按照法律法规要求，采取相应安全保护措施，尽力保护您的个人信息。您在使用我们的产品与/或服务时，我们可能会收集和使用您的相关信息。我们希望通过《505隐私政策》（“本隐私政策”）向您说明我们在您使用我们的产品与/或服务时如何收集、使用、保存、共享和转让这些信息，以及我们为您提供的访问、更新、删除和保护这些信息的方式。</p>
				<h3>隐私政策</h3>	
				<p>本隐私政策与您所使用的唯品会商城服务以及该服务所包括的各种业务功能（以下统称“我们的产品与/或服务”）息息相关，希望您在使用我们的产品与/或服务前仔细阅读并确认您已经充分理解本政策所写明的内容，并让您可以按照本隐私政策的指引做出您认为适当的选择。本隐私政策中涉及的相关术语，我们尽量以简明扼要的表述，并提供进一步说明的链接，以便您更好地理解。您使用或在我们更新本隐私政策后（我们会及时提示您更新的情况）继续使用我们的产品与/或服务，即意味着您同意本隐私政策(含更新版本)内容，并且同意我们按照本隐私政策收集、使用、保存和共享您的相关信息。</p>
				<h3>客服与售后功能</h3>	
				<p>我们的电话客服和售后功能会使用您的账号信息和订单信息。为保证您的账号安全，我们的呼叫中心客服和在线客服会使用您的账号信息与您核验您的身份。当您需要我们提供与您订单信息相关的客服与售后服务时，我们将会查询您的订单信息。您有可能会在与我们的客服人员沟通时，提供给出上述信息外的其他信息，如当您要求我们变更配送地址、联系人或联系电话。</p>
			    <h3>提供安全保障</h3>
                <p>为提高您使用我们及我们关联公司、合作伙伴提供服务的安全性，保护您或其他用户或公众的人身财产安全免遭侵害，更好地预防钓鱼网站、欺诈、网络漏洞、计算机病毒、网络攻击、网络侵入等安全风险，更准确地识别违反法律法规或唯品会相关协议规则的情况，我们可能使用或整合您的会员信息、交易信息、设备信息、有关网络日志以及我们关联公司、合作伙伴取得您授权或依据法律共享的信息，来综合判断您账户及交易风险、进行身份验证、检测及防范安全事件，并依法采取必要的记录、审计、分析、处置措施。</p>
			   <div class="tems-list">
				   <div class="col-md-6 tems-list-left">
				   	 <ul class="terms-lists">
				   	 	<li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"><a href="#">隐私政策</a></span></li>
				   	 	<li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"><a href="#">客服与售后功能</a></span></li>
				   	 	<li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"><a href="#">提供安全保障</a></span></li>
				   	 </ul>
				   </div>
				
				  <div class="clearfix"> </div>
			   </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--tems end here-->
<!--footer strat here-->
<?php 
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>