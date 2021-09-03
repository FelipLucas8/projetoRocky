	$('nav.mobile h3').click(function(){
		$('nav.mobile').find('ul').slideToggle();
	})	

	$(document).ready(function(){
		
		$('.descricao-danki2').click()
	})

	window.addEventListener('scroll',() => {
		const scrollable = document.documentElement.scrollHeight - window.innerHeight;
		const scrolled = window.scrollY;
		console.log(scrollable);
	});

// 	$(function(){
// 		if($('target').length > 0){
// 			var elemento = "#" + $('target').attr('target');
// 			var divScroll = $(elemento).offset().top;
// ;			$('html,body').animate({'scrollTop':divScroll});
// 		}
// 	});