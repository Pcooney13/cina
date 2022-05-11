<?php
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $button = get_sub_field('button');
    $center_title = get_sub_field('center_title');
    $center_button = get_sub_field('center_button');

	if ($center_title) {
		$center_title = 'text-center';
	}
	if ($center_button) {
		$center_button = 'text-center';
	}
	
	// TEXT CONTENT
	echo '<section class="max-w-screen-lg mx-auto text-xl leading-loose mb-16">';
		if (!empty($title)) :
			echo '<h5 class="font-bold text-3xl ' . $center_title . ' mb-8">' . $title . '</h5>';
		endif;
		if (!empty($text)) :
			echo '<div class="cina-text">'. $text . '</div>';
		endif;
		if (!empty($button)) :
			$button_url = $button['url'];
    		$button_title = $button['title'];
    		$button_target = $button['target'] ? $button['target'] : '_self';
			echo '<div class="text-center mb-16">' .
				'<a href="' . $button_url . '" target="' . $button_target . '" class="text-xl bg-red mt-4 text-white py-4 px-16 rounded-full inline-block">' .
					$button_title .
				'</a>' .
			'</div>';
		endif;

	echo '</section>';
?>