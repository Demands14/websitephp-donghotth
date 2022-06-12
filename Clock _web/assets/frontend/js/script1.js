function showOrHideMenuMobile(e) {
	e.stopPropagation();
	var menu = document.getElementById('open-menu');
	menu.classList.add("show-menu");
}
window.addEventListener('click', function(e){
	if (document.getElementById('open-menu').contains(e.target)) {

	}
	else{
		document.getElementById('open-menu').classList.remove("show-menu");
	}
	});
