<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpstudy\PHPTutorial\WWW\shop\public/../application/member\view\account\reg.htm";i:1559396053;}*/ ?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="大商创 免费商城系统 免费B2B2C 免费多商户系统  多店铺商城系统 企业级电商系统  ecsho" />
<meta name="Description" content="大商创是由商创网络（模板堂）推出的免费B2B2C商城系统，支持多店铺入驻，包含多城市多仓库等众多功能，能帮助企业及个人快速搭建多商户电商系统，并减少二次开发带来的成本" />

<title>用户中心_注册新用户名</title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="__index__/css/base.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/style_account.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="__index__/css/quickLinks.css" />
<script type="text/javascript" src="__index__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__index__/js/jquery.cookie.js"></script>
<script type="text/javascript" src="__index__/js/jquery.json.js"></script>
<script type="text/javascript" src="__index__/js/transport_jquery.js"></script>
<style type="text/css">
    .sms-btn{
        background: none;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 3px;
        cursor: pointer;
        outline: none;
    }
</style>
<script type="text/javascript">
/*登录、注册、找回密码js语言包*/
var default_username = "<i class='iconfont icon-info-sign'></i>支持中文、字母、数字、”-”的组合，3-20个字符";
var username_empty = "<i class='iconfont icon-minus-sign'></i>请输入用户名";
var username_shorter = "<i class='iconfont icon-minus-sign'></i>用户名长度不能少于 4 个字符。";
var username_invalid = "<i class='iconfont icon-minus-sign'></i>用户名只能是由字母数字以及下划线组成。";
var password_empty = "<i class='iconfont icon-minus-sign'></i>请输入密码";
var password_shorter = "<i class='iconfont icon-minus-sign'></i>登录密码不能少于 6 个字符。";
var confirm_password_invalid = "<i class='iconfont icon-minus-sign'></i>两次输入密码不一致";
var captcha_empty = "<i class='iconfont icon-minus-sign'></i>请输入验证码";
var email_empty = "<i class='iconfont icon-minus-sign'></i>Email不能为空";
var email_invalid = "<i class='iconfont icon-minus-sign'></i>Email 不是合法的地址";
var agreement = "<i class='iconfont icon-minus-sign'></i>您没有接受协议";
var msn_invalid = "<i class='iconfont icon-minus-sign'></i>msn地址不是一个有效的邮件地址";
var qq_invalid = "<i class='iconfont icon-minus-sign'></i>QQ号码不是一个有效的号码";
var home_phone_invalid = "<i class='iconfont icon-minus-sign'></i>家庭电话不是一个有效号码";
var office_phone_invalid = "<i class='iconfont icon-minus-sign'></i>办公电话不是一个有效号码";
var mobile_phone_invalid = "<i class='iconfont icon-minus-sign'></i>手机号码不是一个有效号码";
var no_select_question = "<i class='iconfont icon-minus-sign'></i>您没有完成密码提示问题的操作";
var mobile_phone_username_equalTo = "<i class='iconfont icon-minus-sign'></i>用户不能和手机号码相同";
var msg_un_blank = "<i class='iconfont icon-minus-sign'></i>用户名不能为空";
var msg_un_length = "<i class='iconfont icon-minus-sign'></i>用户名最长不得超过15个字符，一个汉字等于2个字符";
var msg_un_format = "<i class='iconfont icon-minus-sign'></i>用户名含有非法字符";
var msg_un_registered = "<i class='iconfont icon-minus-sign'></i>用户名已经存在,请重新输入";
var msg_email_blank = "<i class='iconfont icon-minus-sign'></i>邮件地址不能为空";
var msg_email_registered = "<i class='iconfont icon-minus-sign'></i>邮箱已存在,请重新输入";
var msg_email_format = "<i class='iconfont icon-minus-sign'></i>格式错误，请输入正确的邮箱地址";
var msg_blank = "<i class='iconfont icon-minus-sign'></i>不能为空";
var passwd_balnk = "<i class='iconfont icon-minus-sign'></i>密码中不能包含空格";
var msg_phone_blank = "<i class='iconfont icon-minus-sign'></i>手机号码不能为空";
var msg_phone_registered = "<i class='iconfont icon-minus-sign'></i>手机已存在,请重新输入";
var msg_phone_invalid = "<i class='iconfont icon-minus-sign'></i>无效的手机号码";
var msg_phone_not_correct = "<i class='iconfont icon-minus-sign'></i>手机号码不正确，请重新输入";
var msg_mobile_code_blank = "<i class='iconfont icon-minus-sign'></i>手机验证码不能为空";
var msg_mobile_code_not_correct = "<i class='iconfont icon-minus-sign'></i>手机验证码不正确";
var msg_confirm_pwd_blank = "<i class='iconfont icon-minus-sign'></i>确认密码不能为空";
var msg_identifying_code = "<i class='iconfont icon-minus-sign'></i>验证码不能为空";
var msg_identifying_not_correct = "<i class='iconfont icon-minus-sign'></i>验证码不正确";
var msg_email_code = "<i class='iconfont icon-minus-sign'></i>邮箱验证码不能为空";
var msg_email_code_not = "<i class='iconfont icon-minus-sign'></i>邮箱验证码不正确";
var weak = "弱";
var In = "中";
var strong = "强";
var null_username = "<i class='iconfont icon-minus-sign'></i>用户名不能为空";
var null_email = "<i class='iconfont icon-minus-sign'></i>邮箱不能为空";
var null_captcha = "<i class='iconfont icon-minus-sign'></i>验证码不能为空";
var null_phone = "<i class='iconfont icon-minus-sign'></i>手机不能为空";
var select_password_question = "<i class='iconfont icon-minus-sign'></i>请选择密码提示问题";
var null_password_question = "<i class='iconfont icon-minus-sign'></i>问题不能为空";
var error_email = "<i class='iconfont icon-minus-sign'></i>验证码错误";
var msg_can_rg = "<i class='iconfont icon-ok'></i>可以注册";
var user_name_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的用户名";
var email_address_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的电子邮件地址";
var phone_address_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的手机号";
var phone_address_empty_11 = "<i class='iconfont icon-minus-sign'></i>请输入正确11位手机号码";
var phone_address_empty_bzq = "<i class='iconfont icon-minus-sign'></i>您输入的手机号码不正确";
var wenti_address_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的注册问题";
var email_address_error = "<i class='iconfont icon-minus-sign'></i>您输入的电子邮件地址格式不正确";
var new_password_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的新密码";
var confirm_password_empty = "<i class='iconfont icon-minus-sign'></i>请输入您的确认密码";
var both_password_error = "<i class='iconfont icon-minus-sign'></i>您两次输入的密码不一致";
</script>
<script type="text/javascript">
    var phone_url="<?php echo url('member/Account/sendMsg'); ?>";
    var email_url="<?php echo url('member/Account/sendmail'); ?>";
    var is_regisitered="<?php echo url('member/Account/isRegistered'); ?>";
    var check_phone="<?php echo url('member/Account/checkPhone'); ?>";
    var check_email="<?php echo url('member/Account/checkEmail'); ?>";
    var checkd_email_send_code="<?php echo url('member/Account/checkdEmailSendCode'); ?>";
    var code_notice="<?php echo url('member/Account/codeNotice'); ?>";
    // $.cookie('total','60',{ expires: 7 });
</script>
</head>

<body class="bg-ligtGary">
<div class="register">
    <div class="loginRegister-header">
        <div class="w w1200">
            <div class="logo">
                <div class="logoImg"><a href="./index.php" class="logo"><img src="__index__/img/user_login_logo.png" /></a></div>
                <div class="logo-span">
                    <b style="background:url(__index__/img/login_logo_pic.png) no-repeat;"></b>                </div>
            </div>
            <div class="header-href">
                <span>已注册可<a href="<?php echo url('member/Account/login'); ?>" class="jump">在此登录</a></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="w w1200">
            <div class="register-wrap">
                <div class="register-adv">
                <a href="affiche.php?ad_id=456&amp;uri=https%3A%2F%2Fwww.dscmall.cn%2F" target="_blank"><img width="400" height="324" src="__index__/img/1488939821671881226.jpg" /></a>
                </div>
                <div class="register-form">
                    <div class="form form-other">
                        <form action="" method="post" name="formUser">
                            <div class="item">
                                <div class="item-label">用　户　名</div>
                                <div class="item-info">
                                    <input type="text" name="username" id="username" class="text" value="" autocomplete="off" />
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item">
                                <div class="item-label">设 置 密 码</div>
                                <div class="item-info">
                                    <input type="password" name="password" id="pwd" class="text" value="" autocomplete="off" />
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item">
                                <div class="item-label">确 认 密 码</div>
                                <div class="item-info">
                                    <input type="password" name="confirm_password" id="pwdRepeat" class="text" value="" autocomplete="off" />
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item" id="phone_yz">
                                <div class="item-label">手 机 号 码</div>
                                <div class="item-info">
                                    <input type="text" name="mobile_phone" id="mobile_phone" class="text" value="" autocomplete="off" />
                                    <a href="javascript:void(0);" class="meswitch" ectype="meSwitch" data-type="phone">或邮箱验证</a>
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item" id="email_yz">
                                <div class="item-label">邮 箱 验 证</div>
                                <div class="item-info">
                                    <input type="text" name="email" id="regName" class="text ignore" value="" autocomplete="off" />
                                    <a href="javascript:void(0);" class="meswitch" ectype="meSwitch" data-type="email">或手机验证</a>
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            
                                                                                                                                                                        
                                                                                    
                            <div class="item" id="code_email">
                                <div class="item-label">邮箱验证码</div>
                                <div class="item-info">
                                    <input type="text" name="send_code" id="send_code" class="text text-2 ignore" value="" autocomplete="off" />
                                     <input type="botton"  id="btn" onclick="sendChangeEmail();" class="sms-btn" value="获取验证码">
                                    <!-- <a href="javascript:sendChangeEmail();" id="zemail" class="sms-btn">获取验证码</a> -->
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item" id="code_mobile">
                                <div class="item-label">短信验证码</div>
                                <div class="item-info">
                                    <input type="text" name="mobile_code" id="mobile_code" class="text text-2 ignore" value="" autocomplete="off" />
                                    <input type="botton"  id="btn" onclick="sendChangePhone();" class="sms-btn" value="获取验证码">
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item item2">
                                <div class="item-checkbox">
                                    <input type="checkbox" id="clause2" class="ui-solid-checkbox" checked="checked" value="1" name="mobileagreement">
                                    <label class="ui-solid-label" for="clause2">我已阅读并同意<a href="" class="ftx-05" target="_blank">《用户注册协议》</a></label>
                                </div>
                                <div class="input-tip"></div>
                            </div>
                            <div class="item item2 item-button">
                                <input name="register_type" type="hidden" value="1" autocomplete="off" />
                                <input type="submit" id="registsubmit" name="Submit" maxlength="8" class="btn sc-redBg-btn" value="立即注册"/>
                            </div>
                        </form>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript"> 
$(function(){
    if($.cookie('total') != undefined && $.cookie('total') != 'NaN' && $.cookie('total') != 'null'){
        timekeeping();
    }else{
      $("#btn").attr('disabled',false);  
    }
});
</script>

<div class="footer user-footer">
	<div class="dsc-copyright">
		<div class="w w1200">
			 
			<p class="footer-ecscinfo pb10">
				 
				<a href="index.php" >首页</a> 
				 
				| 
				 
				 
				<a href="article.php?id=2" >隐私保护</a> 
				 
				| 
				 
				 
				<a href="article.php?id=4" >联系我们</a> 
				 
				| 
				 
				 
				<a href="article.php?id=1" >免责条款</a> 
				 
				| 
				 
				 
				<a href="article.php?id=5" >公司简介</a> 
				 
				| 
				 
				 
				<a href="merchants.php"  target="_blank" >商家入驻</a> 
				 
				| 
				 
				 
				<a href="message.php" >意见反馈</a> 
				 
				 
			</p>
			 
						<p class="footer-otherlink">	
																<a href="http://www.ecmoban.com" target="_blank" title="模板堂">模板堂</a>
				 
				| 
				 
								<a href="http://www.ecjia.com" target="_blank" title="ECJia">ECJia</a>
				 
				| 
				 
								<a href="http://www.ectouch.cn" target="_blank" title="ECTouch">ECTouch</a>
				 
				| 
				 
								<a href="http://help.ecmoban.com" target="_blank" title="电商学院">电商学院</a>
				 
											</p>
						 
			<p class="copyright_info">ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank">DSC00000123</a> POWERED BY<a href="http://www.dscmall.cn/" target="_blank">大商创</a>2.0</p>
					</div>
	</div>
    
    
    <div class="hidden">
        <input type="hidden" name="seller_kf_IM" value="" rev="" ru_id="" />
        <input type="hidden" name="seller_kf_qq" value="349488953" />
        <input type="hidden" name="seller_kf_tel" value="4000-000-000" />
        <input type="hidden" name="user_id" value="0" />
    </div>
</div>

<script type="text/javascript" src="__index__/js/scroll_city.js"></script><script type="text/javascript" src="__index__/js/user.js"></script><script type="text/javascript" src="__index__/js/user_register.js"></script><script type="text/javascript" src="__index__/js/utils.js"></script><script type="text/javascript" src="__index__/js/jquery.SuperSlide.2.1.1.js"></script><script type="text/javascript" src="__index__/js/sms.js"></script><script type="text/javascript" src="__index__/js/perfect-scrollbar.min.js"></script><script type="text/javascript" src="__index__/js/jquery.validation.min.js"></script><script type="text/javascript" src="__index__/js/dsc-common.js"></script>
<script type="text/javascript" src="__index__/js/jquery.purebox.js"></script>
<script type="text/javascript">
$(function(){
    $("#email_yz,#code_email").hide(); //手机验证 邮箱号和邮箱验证码隐藏
            $("#phone_yz,#code_mobile").show(); //手机验证 手机号码和短信显示
            
            $("input[name='register_type']").val(1); //手机注册标识
            $("input[name='mobile_phone'],input[name='mobile_code']").removeClass("ignore"); //手机验证 手机号码和短信验证标识
            $("input[name='email'],input[name='send_code']").addClass("ignore"); //手机验证 邮箱和邮箱验证码去除验证标识
		//邮箱验证和手机验证切换
	$("*[ectype='meSwitch']").on("click",function(){
		var type = $(this).data("type");
		if(type == "phone"){
			$("#email_yz,#code_email").show(); //邮箱验证 邮箱号和邮箱验证码显示
			$("#phone_yz,#code_mobile").hide(); //邮箱验证 手机号码和短信隐藏
			
			$("input[name='register_type']").val(0); //邮箱验证标识
			$("input[name='mobile_phone']").val(""); //手机号码清空
			$("input[name='mobile_phone'],input[name='mobile_code']").addClass("ignore"); //邮箱验证 邮箱和邮箱验证码添加验证标识
			$("input[name='email'],input[name='send_code']").removeClass("ignore"); //邮箱验证 手机号码和短信去除验证标识
		}else{
			$("#email_yz,#code_email").hide(); //手机验证 邮箱号和邮箱验证码隐藏
			$("#phone_yz,#code_mobile").show(); //手机验证 手机号码和短信显示
			
			$("input[name='register_type']").val(1); //手机注册标识
			$("input[name='mobile_phone'],input[name='mobile_code']").removeClass("ignore"); //手机验证 手机号码和短信验证标识
			$("input[name='email'],input[name='send_code']").addClass("ignore"); //手机验证 邮箱和邮箱验证码去除验证标识
		}
	});
		
	//注册问题下拉
	$.divselect("#divselect","#passwd_quesetion");
});
</script>
</body>
</html>

