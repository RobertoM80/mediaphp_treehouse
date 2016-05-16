<?php 
	include('inc/data.php');
	include('inc/functions.php');

	$pageTitle = 'Full Catalog';
	$section = null;

	if ($_GET['cat'] === 'books') {
		$pageTitle = 'Books';
		$section = 'books';
	} else if ($_GET['cat'] === 'movies') {
		$pageTitle = 'Movies';
		$section = 'movies';
	} else if ($_GET['cat'] === 'music') {
		$pageTitle = 'Music';
		$section = 'music';
	}
	include('inc/header.php');
?>

<div class='section catalog page'>
	<div class= 'wraper'>
		<h1><?php 
		if ($section != null) {
			echo "<a href='catalog.php'>Full Catalog </a> &gt; ";
		}

		echo $pageTitle; 
		?></h1>

		<ul class='items'>  
			<?php 
			$categ_arr = array_category($catalog, $section);
		
			foreach ($categ_arr as $id => $value) {
				echo get_item_html($id, $categ_arr[$id]);
			}
			?>
		</ul>

	</div>
	
</div>

<?php include('inc/footer.php'); ?>