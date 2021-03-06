<!-- ############################################################### -->
<!-- ######################### ajax loading ######################### -->
<!-- ############################################################### -->
<div id="loading" style="display:none; height: 100%; left: 0; opacity: 0.7; position: fixed; top: 0; width: 100%; z-index: 10000;FILTER: alpha(opacity=70);">
<img id="loading-image" src="/smart_omr/_images/loading.gif" alt="Loading..." />
</div>


<!-- ############################################################### -->
<!-- ######################### Modal LOGIN ######################### -->
<!-- ############################################################### -->
<?php  include($_SERVER["DOCUMENT_ROOT"]."/smart_omr/_common/elements/login.php");?>

<!-- ############################################################## -->
<!-- ######################### Modal ISBN ######################### -->
<!-- ############################################################## -->
<?php  include($_SERVER["DOCUMENT_ROOT"]."/smart_omr/_common/modal/about_ISBN.php");?>

<!-- ############################################################### -->
<!-- ######################### Modal eMail ######################### -->
<!-- ############################################################### -->
<?php  include($_SERVER["DOCUMENT_ROOT"]."/smart_omr/_common/modal/form_mail.php");?>

<!-- ################################################################## -->
<!-- ######################### PureCSS GNB JS ######################### -->
<!-- ################################################################## -->
<script src="/smart_omr/_js/purecss/js/ui.js"></script>

<!-- ############################################################# -->
<!-- ######################### LOGIN API ######################### -->
<!-- ############################################################# -->
<? if(!$_SESSION['smart_omr']['member_key']){ ?>
<!-- kakao -->
<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
<script src="/smart_omr/_js/ka_social.js"></script>
<!-- facebook -->
<script src="/smart_omr/_js/fa_social.js"></script>

<? if( ($API_key['naver']['client_id']!="CLIENT_ID" && trim($API_key['naver']['client_id'])) ) { ?>
<!-- naver -->
<script type="text/javascript"
	src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.2.js"
	charset="utf-8"></script>
<script src="/smart_omr/_js/na_social.js"></script>
<? } ?>

<? } ?>


<script>
$(document).ready(function(){
<? if(count($arr_output['manager'])){ ?>
alert('<?=$arr_output['manager']['manager_msg']?>');
<? }else if(!$_SESSION['smart_omr'] && $_GET['mat']){ ?>
alert('스마트한 학습매니져 마마OMR입니다.\n로그인 하시면 매니저로 등록됩니다.');
UIkit.offcanvas.show('#LOGIN');
<? } ?>
});
</script>

</body>
</html>