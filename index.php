<?php
defined('_JEXEC') or die;

JHtml::_('behavior.framework', true);

JHTML::_('behavior.modal');

$loadjquery = NULL;
JLoader::import( 'joomla.version' );
$version = new JVersion();
if (version_compare( $version->RELEASE, '2.5', '<=')) {
	if (JFactory::getApplication()->get('jquery') !== true) {
		$loadjquery = TRUE;	
	}
} else {
	JHtml::_('jquery.framework');
}
/**
 * Template for Joomla! CMS, created by Chris Tzatzakis.
 * See readme.txt for more details on how to use the template.
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);

//Slide
$slides = $this->params->get('slides');
$slideseffect = $this->params->get('slideseffect');
$slidesimage1 = $this->params->get('slidesimage1');
$slidesimage2 = $this->params->get('slidesimage2');
$slidesimage3 = $this->params->get('slidesimage3');
$slidesimage4 = $this->params->get('slidesimage4');
$slidesimage5 = $this->params->get('slidesimage5');
$slidesimage6 = $this->params->get('slidesimage6');

if ($slidesimage1 || $slidesimage2 || $slidesimage3 || $slidesimage4 || $slidesimage5 || $slidesimage6) {
	// use images from template manager
} else {
	// use default images
	$slidesimage1 = $this->baseurl . '/templates/' . $this->template . '/images/slide1.jpg';
	$slidesimage2 = $this->baseurl . '/templates/' . $this->template . '/images/slide2.jpg';
}

$slideslink1 = $this->params->get('slideslink1');
$slideslink2 = $this->params->get('slideslink2');
$slideslink3 = $this->params->get('slideslink3');
$slideslink4 = $this->params->get('slideslink4');
$slideslink5 = $this->params->get('slideslink5');
$slideslink6 = $this->params->get('slideslink6');

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>	<TITLE>Energy First</TITLE>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />
 
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">


    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
	
	<!-- Slides Scripts -->
	<?php if ($loadjquery): ?>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<?php endif; ?>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/slides.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#slides').slides({
				play: 5000,
				pause: 2500,
				hoverPause: true<?php if ($slideseffect == 1): ?>,
				effect: 'fade',
				crossfade: true,
				fadeSpeed: 500<?php endif; ?>
			});
		});
		
		jQuery(document).ready(function() {
			jQuery("#slides").hover(function() {
		    	jQuery(".slides_nav").css("display", "block");
		  	},
		  		function() {
		    	jQuery(".slides_nav").css("display", "none");
		  	});

		});
	
	</script>

</head>
<body>
<div class="art-menuheadnav"></div>
<div id="art-main">
    <div id="art-header-bg">
          </div> 
    <div class="art-sheet clearfix">
<header class="art-header"><?php echo $view->position('position-30', 'art-nostyle'); ?>

    <div class="art-shapes">
        <div class="art-object471433297" data-left="0%"></div>
            </div>






                
                    
</header>


<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="art-nav">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="art-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="art-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
    </nav>
<?php endif; ?>
<div style="height:10px"></div>

<div class="art-menuheadnav"></div>


<?php echo $view->position('position-15', 'art-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'art-block'); ?>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="art-layout-cell art-sidebar1">
<?php echo $view->position('position-7', 'art-block'); ?>
<?php echo $view->position('position-4', 'art-block'); ?>
<?php echo $view->position('position-5', 'art-block'); ?>




                        </div>
<?php endif; ?>

                        <div class="art-layout-cell art-content">
<?php
  echo $view->position('position-19', 'art-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'art-article');
  echo $view->position('position-12', 'art-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' art-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'art-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'art-article');
  echo $view->position('position-25', 'art-nostyle');
?>



                        </div>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'art-block'); ?>
<?php echo $view->position('position-26', 'art-nostyle'); ?>


    </div>

<footer class="art-footer"><div class="art-menuheadnav"></div>
  <div class="art-footer-inner">
<div class="art-content-layout layout-item-0">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 18%">
<?php if ($view->containsModules('position-31')) : ?>
    <?php echo $view->position('position-31', 'art-nostyle'); ?>
<?php else: ?>
        <p style="font: 18px Arial; color: #444444">INFO</p>
        <br>
        <ul>
        <li><a href="#">Welcome</a></li>
        <li><a href="#">People</a></li>
        <li><a href="#">Management</a></li>
        </ul>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-1" style="width: 18%">
<?php if ($view->containsModules('position-32')) : ?>
    <?php echo $view->position('position-32', 'art-nostyle'); ?>
<?php else: ?>
        <p style="font: 18px Arial; color: #444444">LOCATION</p>
        <br>
        <ul>
        <li><a href="#">Map</a></li>
        <li><a href="#">Address</a></li>
        <li><a href="#">Contact Us</a></li>
        </ul>
    <?php endif; ?>
</div><div style="width: 20%"></div>
<div class="art-layout-cell layout-item-1" style="width: 18%">
<?php if ($view->containsModules('position-33')) : ?>
    <?php echo $view->position('position-33', 'art-nostyle'); ?>
<?php else: ?>
        <p style="font: 18px Arial; color: #444444">ABOUT</p>
        <br>
        <ul>
        <li><a href="#">Company</a></li>
        <li><a href="#">Terms</a></li>
        </ul>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-1" style="width: 26%">
<?php if ($view->containsModules('position-34')) : ?>
    <?php echo $view->position('position-34', 'art-nostyle'); ?>
<?php else: ?>
        <p style="text-align:right"><br>
        <br>Energy First © 2014</p>
    <?php endif; ?>
</div>
    </div>
</div>

    <p class="art-page-footer">
        <span id="art-footnote-links"><b>Powered by <a href="https://www.facebook.com/chris.tzatzakis" style="font-size:1.1em;">Chris Tzatzakis</a>.</b></span>
    </p>
  </div>
</footer>

</div>



<?php echo $view->position('debug'); ?>
</body>
</html>