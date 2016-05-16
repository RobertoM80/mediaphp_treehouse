var category;

function show_just(category) {
	if (category === 'Books') {
		$('#optMusic').css('display', 'none');
		$('#optMovies').css('display', 'none');
		$('#optBooks').css('display', 'inline');
		$('#genMusic').css('display', 'none');
		$('#genMovies').css('display', 'none');
		$('#genBooks').css('display', 'inline');
	} else if (category === 'Music') {
		$('#optBooks').css('display', 'none');
		$('#optMovies').css('display', 'none');
		$('#optMusic').css('display', 'inline');
		$('#genBooks').css('display', 'none');
		$('#genMovies').css('display', 'none');
		$('#genMusic').css('display', 'inline');
	} else if (category === 'Movies') {
		$('#optMusic').css('display', 'none');
		$('#optBooks').css('display', 'none');
		$('#optMovies').css('display', 'inline');
		$('#genMusic').css('display', 'none');
		$('#genBooks').css('display', 'none');
		$('#genMovies').css('display', 'inline');
    };
}

$('#category').on('change', function(){
	category = document.getElementById("category").value;
	show_just(category);
});
