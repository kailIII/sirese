<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title><?=$title?></title>
<script type="text/javascript" src="<? echo base_url();?>jQuery/scripts/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?=$js?>/menu.js"></script>
<script type="text/javascript" src="<?=$js?>/slideshow.js"></script>
<script type="text/javascript" src="<?=$js?>/cufon-yui.js"></script>
<script type="text/javascript" src="<?=$js?>/Arial.font.js"></script>
<script type="text/javascript">
	Cufon.replace('h1,h2,h3,h4,h5,#menu,#copy,.blog-date');
</script>
<script type="text/javascript" src="<?=$js?>/fancyzoom.min.js"></script>

<link href='<?=$css?>main.css' rel='stylesheet' type='text/css' />
<link type="text/css" href="<?=$css?>ui-darkness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?=$css?>js/jquery-ui-1.8.22.custom.min.js"></script>
<script src="http://www.google.com/jsapi"></script>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>images/logo_1.ico">

<script type="text/javascript">
$(function(){
	// Accordion
		$("#accordion").accordion({ header: "h3" });
	// Tabs
		$('#tabs').tabs();
	// Dialog
		$('#dialog').dialog({
			autoOpen: false,
			width: 600,
			buttons: {
				"Ok": function() {
					$(this).dialog("close");
				},
				"Cancel": function() {
					$(this).dialog("close");
				}
			}
		});
	// Dialog Link
		$('#dialog_link').click(function(){
			$('#dialog').dialog('open');
				return false;
			});
	// Datepicker
		$('.fechador').datepicker({
			showOtherMonths: true,
			selectOtherMonths: true,
			dateFormat: "yy-mm-dd"
		});
	// Slider
		$('#slider').slider({
			range: true,
			values: [17, 67]
		});
	// Progressbar
		$("#progressbar").progressbar({
			value: 20
		});
	//hover states on the static widgets
		$('#dialog_link, ul#icons li').hover(
			function() { $(this).addClass('ui-state-hover'); },
			function() { $(this).removeClass('ui-state-hover'); }
		);
	});
</script>
<script type="text/javascript" src="<?echo base_url()?>jQuery/sorttable/sorttable.js"></script>
</head>
