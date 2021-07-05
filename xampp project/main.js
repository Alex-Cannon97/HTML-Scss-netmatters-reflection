
	let checkCookie = function(){
		if(localStorage.getItem('Netmatters')){
		cookieContainer.classList.remove('show-big-container')
	}
	else{
		cookieContainer.classList.add('show-big-container')
	}
 }


const button1 = document.getElementsByClassName('burger-icon')[0];
const button2 = document.getElementsByClassName('other-menu-btn')[0];
const menu = document.getElementsByClassName('menu-container')[0];
const scroll = document.getElementsByClassName('scroll-div')[0];
const overlay = document.getElementsByClassName('greybox-div')[0];
const orginalHeader = document.querySelector("#main-header");
const cloneHeader = orginalHeader.cloneNode(true);
cloneHeader.id = "cloned-header";
scroll.appendChild(cloneHeader)
cloneHeader.classList.add('hide-header')
cloneHeader.classList.add('cloned-header')
topofpage = true;
const clonebutton1 = document.getElementsByClassName('burger-icon')[1];
const clonebutton2 = document.getElementsByClassName('other-menu-btn')[1];
const cookieContainer = document.getElementsByClassName('big-container')[0];
const cookieButton = document.getElementsByClassName('cookie-button')[0];
let prevScroll = 0;
let emailValidation = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
const submitEnquiry = document.querySelector('#enquiry');


const checkEmail = function(email){
    if(email.value.match(emailValidation)){
        return true
    }
    else{
        console.log('error with email')
		return false
    }
}

const emptyField = function(){
	const formInputs = [document.querySelector('#name'),document.querySelector('#email'),document.querySelector('#telephone'),document.querySelector('#subject'),document.querySelector('#message-input')];
	for(let x = 0, c = formInputs.length; x < c; x++){
		console.log(formInputs[x].value) 
		
	if(formInputs[x].value === ""){
		formInputs[x].classList.add('form-error')
	}else{
		formInputs[x].classList.remove('form-error')
	}
	}
		if(checkEmail(formInputs[1]) === false){
		formInputs[1].classList.add('form-error')
		console.log('hello world')
	}
}
function checkSubmit(){
	if(submitEnquiry != null){
submitEnquiry.addEventListener('click', emptyField);
	}
}
checkSubmit()

button1.onclick = function(){
	scroll.classList.add('show-scroll-div')
	overlay.classList.add('grey-overlay')
	button1.classList.add('hide-main-btn')
	button2.classList.add('menu-btn-show')
};

overlay.onclick = function(){
	scroll.classList.remove('show-scroll-div')
	overlay.classList.remove('grey-overlay')
	button2.classList.remove('menu-btn-show')
	button1.classList.remove('hide-main-btn')
	cloneHeader.classList.remove('move-right')
	clonebutton2.classList.remove('menu-btn-show')
	clonebutton1.classList.remove('hide-main-btn')
};

document.querySelector('.scroll-div').addEventListener('scroll', function(){
	if(prevScroll < this.scrollTop) {
		cloneHeader.classList.add('hide-header')
	}
	else if(prevScroll > this.scrollTop){
		cloneHeader.classList.remove('hide-header')
	}
	prevScroll = this.scrollTop
	if(this.scrollTop === 0){
		cloneHeader.classList.add('hide-header')
	}
});

clonebutton1.onclick = function(){
	scroll.classList.add('show-scroll-div')
	overlay.classList.add('grey-overlay')
	clonebutton1.classList.add('hide-main-btn')
	clonebutton2.classList.add('menu-btn-show')
	cloneHeader.classList.add('move-right')
};


function check(){
	if(cookieButton != null){
cookieButton.onclick = function(){
 	localStorage.setItem('Netmatters', 'visited')
	if(localStorage.getItem('Netmatters')){
		cookieContainer.classList.remove('show-big-container')
	}
	else{
		alert("cookie can't be set!");
		}
	}
	}	
}
check()

let open = false;

$('.acc-title').on("click", function(){
	let accord = $(".accordion");
	if(!open){
		$(accord).slideDown(400);
		open = true;
	}else{
		$(accord).slideUp(400);
		open = false;
	}
});

function slick(){
$(document).ready(function(){
  $('.carousel').slick({
  	autoplay: true,
  	autoplaySpeed: 4000,
  	arrows: false,
  	dots: true,
	  });
	});
}