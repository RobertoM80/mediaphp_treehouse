<?php 

function get_item_html($id, $item) {
	$output = '<li><a href="details.php?id=' . $id . '"><img src="' 
		. $item['img'] . '" alt="' 
		. $item['title'] . '" />' 
		. "<p>View Details</p>" 
		. '</a></li>';

	return $output;
}

function compare_title($a, $b) {
	return strnatcmp($a['title'], $b['title']);
}

function array_category($catalog, $category) {
	$output = [];

	foreach($catalog as $key => $value) {
		if((strtolower($category) == strtolower($value[category]))||(strtolower($category) == null)) {	
			$value['title'] = ltrim($value['title'], 'The ');
			$value['title'] = ltrim($value['title'], 'A ');
			$value['title'] = ltrim($value['title'], 'An ');
			$output[$key] = $value;
		}
	}
    
    uasort($output, 'compare_title');
	return $output;
}
?>