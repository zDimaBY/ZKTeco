/*function testWebP(callback) {
    var webP = new Image(); webP.onload = webP.onerror = function () { callback(webP.height == 2); }; webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
    }
    
    testWebP(function (support) {
    if (support == true) { document.querySelector('body').classList.add('webp'); }else{ document.querySelector('body').classList.add('no-webp'); }});
    */
$(document).ready(function(){
    $('.slider').slick({
        arrows:true,
        dots:true,
        slidesToShow:1,
        autoplay:true,
        speed:1000,
        autoplaySpeed:10000,
        responsive:[
			{
				breakpoint: 768,
				settings: {
					arrows:false,
                    dots:false
				}
			}]
    });
    $('.slidercatalog').slick({
        arrows:false,
        dots:true,
        slidesToShow:1,
        autoplay:false,
        speed:500,
    });
});