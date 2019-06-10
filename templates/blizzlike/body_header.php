<?php
/****************************************************************************/
/*  						< Emerald Sanctum >  							*/
/*              Copyright (C) <2018> <emeraldsanctum.com>   		        */
/*					  < https://emeraldsanctum.com >					 	*/
/*																			*/
/*			Origional MangosWeb v4 (C) 2017 Mistvale.com					*/
/*			Original MangosWeb Enhanced (C) 2010-2011 KeysWow				*/
/*			Original MangosWeb (C) 2007, Sasha, Nafe, TGM, Peec				*/
/****************************************************************************/

header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo $Template['path']; ?>/images/favicon.ico" type="image/x-icon" />
<link rel="icon" href="<?php echo $Template['path']; ?>/images/favicon.ico" type="image/x-icon"> /
<script src="https://wow.zamimg.com/widgets/power.js"></script>
<link rel="alternate" href="<?php echo $mwe_config['site_base_href']."rss.php"; ?>" type="application/rss+xml" title="<?php echo (string)$mwe_config['site_title'];?> RSS News Feed"/>
<title><?php echo (string)$mwe_config['site_title']; echo $title_str;?></title>
<style media="screen" title="currentStyle" type="text/css">
    @import url("<?php echo $Template['path']; ?>/css/newhp.css");
    @import url("<?php echo $Template['path']; ?>/css/newhp_basic.css");
    @import url("<?php echo $Template['path']; ?>/css/newhp_icons.css");
    @import url("<?php echo $Template['path']; ?>/css/newhp_layout.css");
    @import url("<?php echo $Template['path']; ?>/css/newhp_specific.css");
    @import url("<?php echo $Template['path']; ?>/css/additional_optimisation.css");
	@import url("<?php echo $Template['path']; ?>/css/topnav.css"); 
</style>
<script type="text/javascript"><!--
    var SITE_HREF = '<?php echo $mwe_config['site_base_href'];?>';
    var DOMAIN_PATH = '<?php echo $_SERVER["HTTP_HOST"];?>';
    var SITE_PATH = '<?php echo $mwe_config['site_href']?>';
--></script>
<script src="<?php echo $Template['path']; ?>/js/detection.js" type="text/javascript"></script>
<script src="<?php echo $Template['path']; ?>/js/functions.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $Template['script_path']; ?>/js/global.js"></script>
<script type="text/javascript" src="<?php echo $Template['script_path']; ?>/js/compressed/behaviour.js"></script>
<script type="text/javascript" src="<?php echo $Template['script_path']; ?>/js/core.js"></script>
<script type="text/javascript"><!--
    if (is_ie)
        document.write('<link rel="stylesheet" type="text/css" href="<?php echo $Template['path']; ?>/css/additional_win_ie.css" media="screen, projection" />');
    function loadPage(list) {
        location.href=list.options[list.selectedIndex].value
    }
--></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  <!-- Top Navbar Start -->
  <script>
	var global_nav_lang = '<?php echo ""; ?>';
	var site_name = '<?php echo 'Home'; ?>';
	var site_link = '<?php echo (string)$mwe_config['site_base_href'] . $mwe_config['site_href']; ?>';
	var forum_link = '<?php echo $mwe_config['site_forums']; ?>';
	var armory_link = '<?php echo $mwe_config['site_base_href']; ?>';
  </script>
  <div id="shared_topnav">
	<script src="<?php echo $Template['path']; ?>/js/buildtopnav.js"></script>
  </div>

  <!-- TOOLTIP start --> 
  <div id="contents">
  <table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr>
		<td><img src="<?php echo $Template['path']; ?>/images/pixel.gif" width="1" height="1" alt="" /></td>
		<td bgcolor="#000000"></td>
		<td><img src="<?php echo $Template['path']; ?>/images/pixel.gif" width="1" height="1" alt="" /></td>
	</tr>
	<tr>
		<td bgcolor="#000000"></td>
		<td>
		<table cellspacing="0" cellpadding="0" border="0" width="100%">
			<tr>
				<td width="1" height="1" bgcolor="#000000"></td>
				<td bgcolor="#D5D5D7" height="1"><img src="<?php echo $Template['path']; ?>/images/pixel.gif" width="1" height="1" alt="" /></td>
				<td width="1" height="1" bgcolor="#000000"></td>
			</tr>
			<tr>
				<td bgcolor="#A5A5A5" width="1"><img src="<?php echo $Template['path']; ?>/images/pixel.gif" width="1" height="1" alt="" /></td>
				<td valign="top" class="trans_div"><div id="tooltiptext"></div></td> 
				<td bgcolor="#A5A5A5" width="1"><img src="<?php echo $Template['path']; ?>/images/pixel.gif" width="1" height="1" alt="" /></td>
			</tr>
			<tr>
				<td width="1" height="1" bgcolor="#000000"></td>
				<td bgcolor="#4F4F4F"><img src="<?php echo $Template['path']; ?>/images/pixel.gif" width="1" height="2" alt="" /></td>
				<td width="1" height="1" bgcolor="#000000"></td>
			</tr>
        </table>
		</td>
		<td bgcolor="#000000"></td>
	</tr>
	<tr>
		<td><img src="<?php echo $Template['path']; ?>/images/pixel.gif" width="1" height="1" alt="" /></td>
		<td bgcolor="#000000"></td>
		<td><img src="<?php echo $Template['path']; ?>/images/pixel.gif" width="1" height="1" alt="" /></td>
	</tr>
  </table>
  </div>
  <script src="<?php echo $Template['path']; ?>/js/tooltip.js" type="text/javascript"></script>
  <!-- TOOLTIP end --> 
<?php
$realms = array(); 
$realms = getRealmlist();
$languages = explode(",", $mwe_config['available_lang']);
?>
    <div style="background: url(<?php echo $Template['path']; ?>/images/page-bg-top.jpg) repeat-x 0 0; height: 88px; position: relative; width: 100%; "></div>
    <center>
		<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<div id="hp">
						<div class="top-nav-container">
							<div id="loginbox">
								<div class="loginboxleft"></div>
								<div class="loginboxbg">
									<form action="?p=account&amp;sub=login&amp;exec=login" method="POST">
									<?php 
									$accountid = $user['id'];
									if($user['id'] > 0)
									{
									?>
										<?php echo $user['username']." | "; ?>
										<a href="<?php echo mw_url('account'); ?>"> <?php echo $user['web_points']; ?> <?php echo $lang['web_points'];?></a>&nbsp;&nbsp;
										<a href="?p=account&amp;sub=login&amp;exec=profile"><img src="<?php echo $Template['path']; ?>/images/buttons/button-profile.gif" /></a>
										<a href="?p=account&amp;sub=login&amp;exec=logout"><img src="<?php echo $Template['path']; ?>/images/buttons/button-logout.gif" /></a>
								<?php 
									}
									else
									{ 
								?>
										Login: <input name="login" size="14" type="text"/>
										Password: <input name="pass" size="14" type="password"/>
										<div style="padding-top: 5px;"><input type="image" src="<?php echo $Template['path']; ?>/images/buttons/button-login.gif" value="Login"/></div>
								<?php 
									} 
								?>
									</form>
								</div>
								<div class="loginboxright"></div>
							</div>


						</div>
						<div style="position: absolute; top: 0; left: 0; z-index: 20002;">
							<div id="wow-logo">
								<a href="./"><img title="World of Warcraft" alt="wowlogo" height="103" width="252" src="<?php echo $Template['path']; ?>/images/pixel000.gif"/></a>
							</div>
						</div>
					</div>
				<div>
                <div id="hpwrapper">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td valign="top">
                        <div id="navwrapper">
                          <div id="nav">
                            <div id="left-bg"></div>
							<div id="right-bg"></div>
                            <div id="leftmenu">
                              <div id="leftmenucontainer">
<?php 
										build_main_menu(); // MAIN LINKS HERE!!!
?>
                              </div>
                            </div>
                          </div>
                          <div style="clear: both;"></div>
                        </div>
                      </td><td valign="top">
                        <div id="mainwrapper"><br><br>
						<div id="main">
                            <div id="main-content-wrapper">
                              <div id="main-content">
                                <table cellspacing="0" cellpadding="0" border="0">
                                  <tr>
                                    <td>
                                      <div id="main-top">
                                        <div>
                                          <div><div></div></div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div id="contentpadding">
                                        <div id="cnt">
                                          <div id="cnt-wrapper">
                                            <div id="contentcontainer">
                                              <table cellspacing="0" cellpadding="0" border="0" width="99%">
                                                <tr>
                                                  <td valign="top">
                                                    <div id="cntmain">
                                                      <div id="cnt-top">
                                                        <div>
                                                          <div></div>
                                                        </div>
                                                      </div>
                                                      <div id="content">
                                                        <div id="content-left">
                                                          <div id="content-right">
                                                            <div style="padding-right:10px; margin-left:11px;" id="compcont"> 
                                                            <div style="clear:both;display:block;position:relative;width:100%;margin-top:-4px;">
                                                            <!-- Pathway -->
                                                            <?php 
																if(isset($_GET['p']) || isset($_GET['module']))
																{ ?>
																	<div class="redbannerbg">
																		<div class="redbannerleft"></div>
																		<div class="redbannerlabel">
																			<?php echo $pathway_str;?>
																		</div>
																		<div class="redbannerright"></div>
																	</div>
															<?php 
																} ?>
                                                            <?php echo $GLOBALS['messages']; ?>
                                                            <!-- Component body BEGIN -->
