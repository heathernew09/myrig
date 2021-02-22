<?php if( have_rows('team_bios') ): ?>
	<?php while( have_rows('team_bios') ): the_row(); 
            // vars
            $photo = get_sub_field('photo');
            $name = get_sub_field('name');
            $bio = get_sub_field('bio');
            $title = get_sub_field('title');
            ?>
            <div class="peopleBox">
                <div class="card card-reveal-wrapper">
                    <img src="<?php echo $photo;?>" alt="<?php echo $name;?>" class="w100">
                    <div class="card-section">
                        <i class="fa fa-angle-up open-button"><span class="show-for-sr">More</span></i>
                        <h2 class="no-bot-mar"><?php echo $name;?></h2>
                        <h3 class="peopleTitle"><?php echo $title;?></h3>
                        <div class="card-reveal">
                            <span class="card-reveal-title">
                            <h4><?php echo $name;?></h4>
							              <h6><?php echo $title;?></h6>
                            <i class="fa fa-angle-down close-button"><span class="show-for-sr">Close</span></i>
                            </span>
                            <p class="peopleBio"><?php echo $bio;?></p>
                        </div>
                	</div>
                 </div>
             </div>
	<?php endwhile; ?>
<?php endif; ?>
<script>
// Open Card Reveal Click
$('.open-button').click(function(){
  $(this).siblings('.card-reveal').toggleClass('open');
});

// Close Card Reveal Click
$('.close-button').click(function(){
  $(this).parent().parent('.card-reveal').toggleClass('open');
});
</script>