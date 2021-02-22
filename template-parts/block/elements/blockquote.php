<?php //blockquote vars
		$quote = get_sub_field('quote');
		$cite = get_sub_field('quote_by');
		$title = get_sub_field('title');
    echo '<blockquote class="quote">';    
    echo '<p><span class="open-quote-symbol">"</span>' . $quote . '</p>';					
    echo '<cite>' . $cite .'<br><span class="title">'. $title . '</span></cite> ';
    echo '</blockquote>';
?>