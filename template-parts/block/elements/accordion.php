<?php //accordion
	if( have_rows('panels') ): ?>
	<ul class="member-accordion accordion" data-accordion data-allow-all-closed="true">
	<?php $count = 0; while( have_rows('panels') ): the_row(); 
		// vars
		$title = get_sub_field('title');
		$content = get_sub_field('content');
		?>
		<li class="accordion-item " data-accordion-item>
			<a href="#" class="accordion-title"><h3 class="accordion-label"><?php echo $title;?></h3></a>
            
            <div class="accordion-content" data-tab-content>
		        <?php echo $content; ?>
            </div>
		</li>
	<?php $count ++; endwhile; ?>
	</ul>
<?php endif; ?>