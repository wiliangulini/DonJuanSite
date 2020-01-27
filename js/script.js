// JavaScript Document
var slideItem = 0;
window.onload = function() {
	setInterval(passarSlide, 5000);
	
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	var objs = document.getElementsByClassName("slide");
	//alert(slidewidth);
	for(i=0; i<objs.length; i++){
	//for(var i in objs) {
		objs[i].style.width = slidewidth + 'px';
	}
}
function passarSlide() {
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	if(slideItem >= 3) {
		slideItem = 0;
	} else {
		slideItem++;
	}

	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
}
function mostrarSenha() {
	var tipo = document.getElementById("senha");
	if(tipo.type=="password") {
		tipo.type = "text";
	}else {
		tipo.type = "password";
	}
}