<form <?php echo $form->getClassesStr(); ?> <?php echo $form->getAttributesStr(); ?> role="form" method="<?php echo $form->getMethod(); ?>" action="<?php echo $form->getAction(); ?>" enctype="multipart/form-data">
    <?php foreach ($form->getPages() as $pageKey => $page) { ?>
    <?php foreach ($page->getFieldsets() as $fieldsetKey => $fieldset) { ?>
    <?php foreach ($fieldset->getFields() as $fieldKey => $field) { ?>
    <?php 
    switch ($field->getLayout()) {
        case \Modules\developer\form\Field\Field::LAYOUT_DEFAULT :
        echo $this->subview('field.php', array('field' => $field))->render()."\n";
        break;
        case \Modules\developer\form\Field\Field::LAYOUT_BLANK:
        default:
        echo $field->render($this->getDoctype())."\n";
        break;
    }
    ?>
    <?php } ?>
    <?php } ?>
    
    <?php } ?>
</form>
