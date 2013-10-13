<?php if (!defined('CMS')) exit; ?>
<?php echo $this->doctypeDeclaration(); ?>
<html<?php echo $this->htmlAttributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  $site->addCss(BASE_URL.THEME_DIR.THEME.'/css/bootstrap.min.css');
  $site->addCss(BASE_URL.THEME_DIR.THEME.'/css/bootstrap-lightbox.min.css');
  $site->addCss(BASE_URL.THEME_DIR.THEME.'/css/site.css');
  $site->addCss(BASE_URL.LIBRARY_DIR.'js/colorbox/themes/2/colorbox.css');
  echo $site->generateHead();
  ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->
    </head>

    <body<?php if ($site->managementState()) { echo ' class="manage"'; } ?>>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" <?php if ($site->managementState()) { echo ' style="z-index: 0;"'; } ?>>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php global $parametersMod; echo $parametersMod->getValue('standard', 'configuration', 'main_parameters', 'name');?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="level1 nav navbar-nav">
            <?php
            echo $this->generateMenu('top', 'top');
            ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php echo $this->generateBlock('ipLanguages'); ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
          <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
              <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
             <?php echo $site->generateBlock('main'); ?>
           </div>
         </div><!--/span-->

         <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <?php if ($this->generateMenu('left', 'left') != ""): ?>
          <div class="well sidebar-nav">
            <ul class="level1 nav">
              <?php
              echo $this->generateMenu('left', 'left');
              ?>
            </ul>
          </div><!--/.well -->
        <?php endif; ?>
        <?php echo $this->generateBlock('side', true) ?>
      </div><!--/span-->
    </div><!--/row-->

    <hr>

    <footer>
      <?php echo $this->generateManagedText('ipSlogan', 'div', 'Drag &amp; drop with <a href="http://www.impresspages.org">ImpressPages CMS</a>', 'right'); ?>
    </footer>

  </div>

</div> <!-- /container -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>

<?php
$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/jquery/jquery.js');
$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/colorbox/jquery.colorbox.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/bootstrap.min.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/bootstrap-lightbox.min.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/site.js');
echo $site->generateJavascript();
?>
</body>
</html>
