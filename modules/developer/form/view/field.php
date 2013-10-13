<div class="form-group <?php if($field->isRequired()) { echo " ipmRequired"; } ?>">
    <label for="<?php echo $field->getId(); ?>">
        <?php echo $this->esc($field->getLabel()); ?>
        <?php if($field->isRequired()) { ?>
            <span class="ipmMarker">*</span>
        <?php } ?>
    </label>
    <div class="ipmControl"><?php echo $field->render($this->getDoctype()); ?></div>
<?php if($field->getNote()) { ?>
    <div class="ipmNote"><?php echo $field->getNote(); ?></div>
<?php } ?>
<?php if($field->getHint()) { ?>
    <div class="ipmHint"><?php echo $field->getHint(); ?></div>
<?php } ?>
</div>
