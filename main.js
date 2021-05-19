const button1 = document.getElementsByClassName('burger-icon')[0];
const button2 = document.getElementsByClassName('other-menu-btn')[0];
const menu = document.getElementsByClassName('menu-container')[0];
const scroll = document.getElementsByClassName('scroll-div')[0];
const overlay = document.getElementsByClassName('greybox-div')[0];

button1.onclick = function(){
	menu.classList.add('show-menu')
	scroll.classList.add('show-scroll-div')
	overlay.classList.add('grey-overlay')
	button1.classList.add('hide-main-btn')
	button2.classList.add('menu-btn-show')
};

overlay.onclick = function(){
	menu.classList.remove('show-menu')
	scroll.classList.remove('show-scroll-div')
	overlay.classList.remove('grey-overlay')
	button2.classList.remove('menu-btn-show')
	button1.classList.remove('hide-main-btn')
};