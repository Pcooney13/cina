<?php 

	include(locate_template('templates/header.php'));
		
	echo '<section class="mt-12">';
		if( have_rows('content') ): 
    		$block_count = 1;
    		while ( have_rows('content') ) : the_row();
				if( get_row_layout() == 'text_content' ) {
					include( locate_template( 'templates/blocks/text-content.php', false, false ) ); 
    	    	} elseif ( get_row_layout() == 'parallax_title' ) {
					include( locate_template( 'templates/blocks/parallax-title.php', false, false ) ); 
    	    	} elseif ( get_row_layout() == 'sponsors' ) {
					include( locate_template( 'templates/blocks/sponsors.php', false, false ) ); 
    	    	} elseif ( get_row_layout() == 'accordions' ) {
					include( locate_template( 'templates/blocks/accordions.php', false, false ) ); 
				} elseif ( get_row_layout() == 'speakers' ) {
					include( locate_template( 'templates/blocks/speakers.php', false, false ) ); 
				}
			endwhile;
		endif;
	echo '</section>';

	include(locate_template('templates/footer.php'));

?>