<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $menuItem \Ip\Menu\Item
 * @var $this \Ip\View
 */
?>

<?php
$css = array();
if($menuItem->getCurrent()) {
    $css[] = 'active';
    $selected = true;
} elseif ($menuItem->getSelected()) {
    $css[] = 'selected';
    $selected = true;
}

if(sizeof($menuItem->getChildren()) > 0) {
    $css[] = 'subnodes';
}

$css[] = 'type'.ucwords($menuItem->getType());

if ($menuItem->getType() != 'inactive' && $menuItem->getUrl()) {
    $href = 'href="'.$menuItem->getUrl().'"';
} else {
    $href = '';
}
?>

<li class="<?php echo implode(' ', $css) ?>">
    <a <?php echo $href ?> title="<?php addslashes($menuItem->getPageTitle()) ?>">
        <?php echo $this->esc($menuItem->getTitle()) ?>
    </a>
    <?php if ($menuItem->getChildren()){ ?>
        <?php echo $this->subview('menu.php', array('items' => $menuItem->getChildren(), 'depth' => $depth + 1)) ?>
    <?php } ?>
</li>