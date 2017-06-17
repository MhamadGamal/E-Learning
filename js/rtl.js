//function dropOptionMenu(elem){
//	console.log(elem.id);
//	var test = "#" + elem.id;
//	$(test).slideToggle(600);
$(document).ready(function () {
  // links active
    $('.collapse navbar-collapse .nav li').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    //home department active
    $('.departments .subject').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    //smoth scroll to div
    $('.links li a').click(function () {
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('value')).offset().top

        }, 1000);

    });
	 // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
	/*Comments loaded*/
    $('.loadd').click(function() {
        $('.loaded').slideDown(1000,function(){
            $('.loadd').hide();
        })
    });

    $('.loaddd').click(function() {
        $('.loadded').slideDown(1000,function(){
            $('.loaddd').hide();
        })
    });
	/********************************** */
	$('.comments .toggle-nav').click(function() {
        $('.menu').slideToggle(600);

    });
	$('.comments .menu .cancel').click(function() {
        $('.menu').slideUp(600);

    });
	/*************************************** */
	//trigger mixitup
    $('#Container').mixItUp();

    $(function () {
        $('html').niceScroll();
      }
    );
  /*==========================Home js ===============================*/
	$(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        interval: 3000
      });
});
