require('./bootstrap');

const saveComic = document.getElementById("saveComic");
saveComic.addEventListener('click', function(){
	confirm('Are you sure to save this comic?')
});
