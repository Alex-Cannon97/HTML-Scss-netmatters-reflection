

	let checkCookie = function(){
		if(localStorage.getItem('Netmatters')){
		cookieContainer.classList.remove('show-big-container')
	}
	else{
		cookieContainer.classList.add('show-big-container')
	}
 }
 window.onload = checkCookie;

const button1 = document.getElementsByClassName('burger-icon')[0];
const button2 = document.getElementsByClassName('other-menu-btn')[0];
const menu = document.getElementsByClassName('menu-container')[0];
const scroll = document.getElementsByClassName('scroll-div')[0];
const overlay = document.getElementsByClassName('greybox-div')[0];
const orginalHeader = document.querySelector("#main-header");
const cloneHeader = orginalHeader.cloneNode(true);
cloneHeader.id = "cloned-header";
scroll.append(cloneHeader)
cloneHeader.classList.add('hide-header')
let prevScroll = scroll.scrollTop;
topofpage = true;
const clonebutton1 = document.getElementsByClassName('burger-icon')[1];
const clonebutton2 = document.getElementsByClassName('other-menu-btn')[1];
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
	clonebutton2.classList.remove('menu-btn-show')
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
	clonebutton2.classList.add('menu-btn-show')
	cloneHeader.classList.add('move-right')
};



cookieButton.onclick = function(){
 	localStorage.setItem('Netmatters', 'visited')
	if(localStorage.getItem('Netmatters')){
		cookieContainer.classList.remove('show-big-container')
	}
	else{
		alert("cookie can't be set!");
	}
}


$(document).ready(function(){
  $('.carousel').slick({
  	autoplay: true,
  	autoplaySpeed: 4000,
  	arrows: false,
  	dots: true,
  });
});
