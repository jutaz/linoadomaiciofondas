<?php if (isset($images) && is_array($images)){ ?>
<div class="row">
	<div class="row">
		<?php foreach ($images as $imageKey => $image):?>
		<?php 
		$curImage = isset($image['imageSmall']) ? $image['imageSmall'] : '';
		$curImageBig = isset($image['imageBig']) ? $image['imageBig'] : '';
		$curTitle = isset($image['title']) ? $image['title'] : '';
		?>
		<div class="col-lg-3 col-sm-4 col-6">
			<a href="#" title="<?php echo htmlspecialchars($curTitle); ?>">
				<img src="<?php echo htmlspecialchars(BASE_URL.$curImageBig); ?>" alt="<?php echo htmlspecialchars($curTitle); ?>" class="thumbnail img-responsive">
			</a>
		</div>
	<?php endforeach; ?>
</div>
</div>

<?php } ?>