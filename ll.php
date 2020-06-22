

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台登录</title>
<?php
	include('link.php');
?>
<!-- <link href="/statics/admin/css/style.css" rel="stylesheet" type="text/css"/> -->
<!-- <link href="/statics/admin/css/login.css" rel="stylesheet" type="text/css"/> -->
<script language="javascript" type="text/javascript" src="/statics/js/jquery/jquery-1.4.2.min.js"></script>
<style type="text/css">
	* {
	    margin: 0px;
	    padding: 0px;
	    box-sizing: border-box;
	}
	html{height: 100%;}
	.loginWrap{border-radius: 3px; overflow: hidden; width: 400px;height: auto;background: #fff;position: absolute; left: 50%;margin-left: -200px; top: 50%;margin-top: -200px;border: 1px solid #ddd;}
	.loginWrap h1{background: #2e2e2e;color: #fff;text-align: center; padding: 12px 0; font-size: 20px;}
	.list{width: 100%;margin:18px auto;}
	.wrapBox{padding: 13px 25px 30px 25px;position: relative;    margin: 0 auto;}
	.list input{border-radius: 3px; width: 100%;padding: 10px 6px 10px 32px; border:1px solid #ccc;}
	.list input:focus{border-color: #facd18}
	.list4 input{position: relative; top: 1px;}
	.list4{color: #888}
	.wrapBox .btn{margin-top: 17px;width: 100%;color: #fff; border:none;background: #272B2C;padding: 10px 0;border-radius: 3px;}
	.wrapBox .btn:hover{background: #272B2C;cursor: pointer;}
	.list3 div{ float: right;margin-top: 2px;}
	.list3 div img{margin-right: 5px;}
	.list3 div a{color: #186dad;position: relative; top: 2px;}
	.list3 div a:hover{color: #0d456f}
	
	.wrapBox s.qq1 {
	    position: absolute;
	    left: 36px;
	    top: 43px;
	    z-index: 10;
	    width: 13px;
	    height: 15px;
	    background: url(./statics/admin/images/Shape03.png) no-repeat;
	}
	.wrapBox s.qq2 {
	    position: absolute;
	    left: 36px;
	    top: 100px;
	    z-index: 10;
	    width: 13px;
	    height: 15px;
	    background: url(./statics/admin/images/padd.png) no-repeat;
	}
	.wrapBox s.qq3 {
	    position: absolute;
	    left: 36px;
	    top: 154px;
	    z-index: 10;
	    width: 13px;
	    height: 15px;
	    background: url(./statics/admin/images/code.png) no-repeat;
	}
</style>
</head>
<body style="background: url('./statics/admin/images/bg.png');">
<div id="login">
	<div class="loginWrap">
		<form action="llog.php" method="post">
        <h1>在线商城系统</h1>
        <div class="wrapBox">
        	<s class="qq1"></s>
        	<s class="qq2"></s>
        	<s class="qq3"></s>
            <div class="list">
                <input type="text" class="formdata" placeholder="请输入用户名" name="username" id="username">
            </div>
            <!-- background: url(./statics/Admin/images/padd.png) 10px center no-repeat; -->
            <div class="list list2">
                <input type="password" class="formdata"  placeholder="请输入密码" name="password" id="password">
            </div>
            <div class="list4">
                <!-- <input type="checkbox"> 记住密码 -->
            </div>
            <button type="submit" name="dosubmit" class="btn">登 录</button>
        </div>
        </form>
    </div>
</div>
<script>
	var second=60;
	$(document).ready(function(){
		var timer;
		$('#getsmscode').click(function(){
			$(this).attr('disabled',true);
			$.post("/lnsnkey.php?m=Public&a=getsmscode",{
				username:$('#username').val()
			},function(data){
				if(data.status==0){
					alert(data.info);
				}else{
					second=data.data;
					countSec();
				}
			},'json');
		});

		$(document).keyup(function(event){
            if(event.keyCode ==13){
                $("#myform").submit();
            }
        });
	});
	
	}
</script>
</body>
</html>