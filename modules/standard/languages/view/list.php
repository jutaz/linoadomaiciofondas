<?php foreach ($languages as $key => $language) { ?>
<?php $actClass = ($language['current']) ? ' class="active"' : ''; ?>
<li <?php echo $actClass ?>>
	<a title="<?php echo $this->esc($language['longTitle']) ?>" href="<?php echo $language['url'] ?>">
		<?php echo $this->esc($language['shortTitle'])?>
	</a>
</li>
<?php } ?>
