// new and events carousel

$(document).ready(function () {
	$(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
	loop: true,
	margin: 20,
	nav: true,
    autoplay:true,   
    smartSpeed: 3000, 
    autoplayTimeout:7000,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 2
		}
	}
})