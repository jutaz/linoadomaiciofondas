<?php
$showEmpty = true;
if ($site->managementState() && count($widgetsHtml) == 0) {
	$showEmpty = true;
}
if (!$site->managementState() && count($widgetsHtml) == 0) {
	$showEmpty = false;
}
if($blockName != 'side') {
	$blockClass = 'ipBlock';
} elseif($site->managementState()) {
	$blockClass = 'ipBlock well';
} else {
	$blockClass = "well";
}
?>
<div id="ipBlock-<?php echo $blockName; ?>" data-revisionid='<?php echo $revisionId ?>' class="<?= $blockClass?>" <?= (!$showEmpty) ? ' style="display: none; "' : ''; ?>>
	<?php
	foreach($widgetsHtml as $key => $widgetHtml) {
		echo $widgetHtml;
	}
	?>
</div>
