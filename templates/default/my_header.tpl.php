<!--#
##
#	Project: PHPDISK File Storage Solution
#	This is NOT a freeware, use is subject to license terms.
#
#	Site: http://www.phpdisk.com
#
#	$Id: my_header.tpl.php 25 2014-01-10 03:13:43Z along $
#
#	Copyright (C) 2008-2014 PHPDisk Team. All Rights Reserved.
#
##
#-->
<?php !defined('IN_PHPDISK') && exit('[PHPDisk] Access Denied!'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={$charset}" />
<title>PHPDISK User's Control Panel - PHPDisk.com</title>
<script type="text/javascript">var tpl_dir = '{$user_tpl_dir}';</script>
<base href="{$settings[phpdisk_url]}" />
<script type=text/javascript src="includes/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="images/js/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="images/js/jquery.jBox-zh-CN.js"></script>
<link type="text/css" rel="stylesheet" href="images/js/skins/blue/jbox.css"/>
<script type="text/javascript" src="includes/js/common.js"></script>
<meta name="copyright" content="Powered by PHPDisk Team, {PHPDISK_EDITION} {PHPDISK_VERSION} build{PHPDISK_RELEASE}" />
<meta name="generator" content="PHPDisk {PHPDISK_VERSION}" />
<link href="{$user_tpl_dir}images/mydisk.css" rel="stylesheet" type="text/css">
</head>

<!--#if($inner_box){#-->
<body style="background:#FFFFFF">
<!--#}else{#-->
<body>
<!--#}#-->
<script>var folder_id={#(int)$folder_id#};</script>
