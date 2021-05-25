
const body = document.querySelector('body')
const checkCookieStored = function(){
	let checkCookie = document.cookie.indexOf("Netmatters=visited");
	if(checkCookie !== -1){
		cookieContainer.classList.add('hide-big-container')
	}
	else{
		cookieContainer.classList.remove('hide-big-container')
	}
}

 window.onload = checkCookieStored;

const button1 = document.getElementsByClassName('burger-icon')[0];
const button2 = document.getElementsByClassName('other-menu-btn')[0];
const menu = document.getElementsByClassName('menu-container')[0];
const scroll = document.getElementsByClassName('scroll-div')[0];
const overlay = document.getElementsByClassName('greybox-div')[0];
const orginalHeader = document.querySelector("#main-header");
const cloneHeader = orginalHeader.cloneNode(true);
cloneHeader.id = "cloned-header";
scroll.append(cloneHeader)
let prevScroll = scroll.scrollTop;
topofpage = true;
const clonebutton1 = document.getElementsByClassName('burger-icon')[1];
const cookieContainer = document.getElementsByClassName('big-container')[0];
const cookieButton = document.getElementsByClassName('cookie-button')[0];


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
	cloneHeader.classList.remove('move-right')
};

scroll.onscroll = function(){
	if(prevScroll < scroll.scrollTop) {
		cloneHeader.classList.add('hide-header')
	}
	else{
		cloneHeader.classList.remove('hide-header')
	}
	prevScroll = scroll.scrollTop
	if(scroll.scrollTop === 0){
		cloneHeader.classList.add('hide-header')
	}
};

clonebutton1.onclick = function(){
	menu.classList.add('show-menu')
	scroll.classList.add('show-scroll-div')
	overlay.classList.add('grey-overlay')
	button1.classList.add('hide-main-btn')
	button2.classList.add('menu-btn-show')
	cloneHeader.classList.add('move-right')
};



cookieButton.onclick = function(){
	document.cookie = "Netmatters=visited;SameSite=Lax; expires=" + new Date(9999, 0, 1).toUTCString()
	if(document.cookie){
		cookieContainer.classList.add('hide-big-container')
	}
	else{
		alert("cookie can't be set!");
	}
}


/*const checkCookieStored = function(){
	let checkCookie = document.cookie.indexOf("Netmatters=visited");
	if(checkCookie !== -1){
		cookieContainer.classList.add('hide-big-container')
	}
	else{
		cookieContainer.classList.remove('hide-big-container')
	}
}

 body.onload = checkCookieStored;*/


$(document).ready(function(){
  $('.carousel').slick({
  	autoplay: true,
  	autoplaySpeed: 4000,
  	arrows: false,
  	dots: true,
  });
});
