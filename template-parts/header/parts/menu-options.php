<?php // Initialize Variables
	$whatHamb = get_field('hamburger_style', 'option');
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hamburgers.css">
<?php if ($whatHamb == "0") : ?>
      <span id="hambBut" class="fa fa-bars fa-2x hamb-icon" aria-hidden="true"></span>
    <?php endif; ?>
    <?php if ($whatHamb == "1") : ?>
      <div id="hambBut" class="hamb-menu">
        MENU
      </div>
    <?php endif; ?>
    <?php if ($whatHamb == "2") : ?>
      <div class="hamburger hamburger--3dx">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "3") : ?>
      <div class="hamburger hamburger--3dx-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "4") : ?>
      <div class="hamburger hamburger--3dy">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "5") : ?>
      <div class="hamburger hamburger--3dy-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "6") : ?>
      <div class="hamburger hamburger--3dxy">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "7") : ?>
      <div class="hamburger hamburger--3dxy-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "8") : ?>
      <div class="hamburger hamburger--arrow">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "9") : ?>
      <div class="hamburger hamburger--arrow-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "10") : ?>
      <div class="hamburger hamburger--arrowalt">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "11") : ?>
      <div class="hamburger hamburger--arrowalt-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "12") : ?>
      <div class="hamburger hamburger--arrowturn">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "13") : ?>
      <div class="hamburger hamburger--arrowturn-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "14") : ?>
      <div class="hamburger hamburger--boring">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "15") : ?>
      <div class="hamburger hamburger--collapse">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "16") : ?>
      <div class="hamburger hamburger--collapse-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "17") : ?>
      <div class="hamburger hamburger--elastic">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "18") : ?>
      <div class="hamburger hamburger--elastic-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "19") : ?>
      <div class="hamburger hamburger--emphatic">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "20") : ?>
      <div class="hamburger hamburger--emphatic-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "21") : ?>
      <div class="hamburger hamburger--minus">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "22") : ?>
      <div class="hamburger hamburger--slider">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "23") : ?>
      <div class="hamburger hamburger--slider-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "24") : ?>
      <div class="hamburger hamburger--spin">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "25") : ?>
      <div class="hamburger hamburger--spin-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "26") : ?>
      <div class="hamburger hamburger--spring">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "27") : ?>
      <div class="hamburger hamburger--spring-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
     <?php if ($whatHamb == "28") : ?>
      <div class="hamburger hamburger--stand">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "29") : ?>
      <div class="hamburger hamburger--stand-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "30") : ?>
      <div class="hamburger hamburger--squeeze">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "31") : ?>
      <div class="hamburger hamburger--vortex">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    <?php if ($whatHamb == "32") : ?>
      <div class="hamburger hamburger--vortex-r">
			<div class="hamburger-box">
			  <div class="hamburger-inner"></div>
			</div>
		  </div>
    <?php endif; ?>
    