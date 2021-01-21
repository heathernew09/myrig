<!--Header 5-->
<style type="text/css">
.special-color {
    background-color: <?php the_field('bgcolor', 'option'); ?>;
}
</style>
<?php // Initialize Variables
  $extra = get_field('extra_element', 'option');
  $whatHamb = get_field('hamburger_style', 'option');
  $headerLogo = get_field('header_logo', 'option');
  $topextra = get_field('top_extra_element', 'option'); 
?>

<!-- Mobile Header -->
<header class="row show-for-small-only special-color">
    <div class="head-mobLt column">
        <div class="head-mobLogo">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo $headerLogo['url']; ?>" alt="<?php echo $headerLogo['alt']; ?>" class="w100">
          </a>
        </div>
    </div>
    <div class="small-4 head-mobRt column">
        <?php get_template_part('inc/headers/parts/menu' , 'option');?>
    </div>
</header>

<!--Mobile Nav-->
  <div class="mobileNav show-for-small-only col3Bk white">
    <?php SKY_mobile_nav(); ?>
  </div>

<!-- Desktop Header -->
<header class="hide-for-small-only clearfix special-color">
<div class="row top-padd align-middle">
	<div class="column shrink align-left">
    	<div class="head-logo">
    	<a href="<?php echo site_url(); ?>">
          <img src="<?php echo $headerLogo['url']; ?>" alt="<?php echo $headerLogo['alt']; ?>" class="deskLogo">
        </a>
        </div>
    </div>
    <div class="column align-right">
    	<?php if ($topextra == "1"){ ?><!--Phone Number-->
            <p class="phoneLink">
               <a href="tel:<?php the_field('phone', 'option'); ?>">
                    <?php the_field('phone', 'option');?>
               </a>
            </p>
    	<?php } elseif ($topextra == "2") { ?><!--Search-->
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
              <input type="text" placeholder="Search">
            </form>
        <?php } elseif ($topextra == "3") { ?><!--Social-->
        	<?php get_template_part('inc/headers/parts/social' , 'profiles');?>
        <?php } elseif ($topextra == "4") { ?><!--Text-->
        	<p class="topText text-right"><?php the_field('text', 'option');?></p>
        <?php } elseif ($topextra == "5") { ?><!--Email-->
            <a href="mailto:<?php the_field('email', 'option') ?>">
              <?php the_field('email', 'option') ?>
            </a>
       	<?php } ;?>
   	</div>
</div>
<div class="row bot-pad">
    <div class="column expand align-left">
    	<div class="head-mainNavHold text-center">
        	<?php SKY_top_barleft(); ?>
      	</div>
    </div>
    <div class="column shrink align-right">
		<?php if ($extra == "1"){ ?><!--Phone Number-->
            <p class="phoneLink">
                <a href="tel:<?php the_field('phone', 'option'); ?>">
                    <?php the_field('phone', 'option');?>
                </a>
            </p>
        <?php } elseif ($extra == "2"){ ?><!--Search-->
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                <input type="text" placeholder="Search">
            </form>
        <?php } elseif ($extra == "3"){ ?><!--Social-->
            <?php get_template_part('inc/headers/parts/social' , 'profiles');?>
        <?php }elseif ($extra == "4"){ ?><!--Text-->
            <p class="topText"><?php the_field('text', 'option');?></p>
        <?php } elseif ($extra == "5"){ ?><!--Email-->
            <a href="mailto:<?php the_field('email', 'option') ?>">
              <?php the_field('email', 'option') ?>
            </a>
        <?php } ;?>
    </div>
</div>
</header>