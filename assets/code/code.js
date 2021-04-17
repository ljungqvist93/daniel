$(document).ready(function () {
	$('#imageToggler').click(function () {
		$('#frameholder').toggle();
	});

	$('#toggleAdmin').click(function() {
		$('#adminTools').toggle();
	});

    $('#trashToggle').click(function() {
        $('#trashWall').toggle();
    });

    $('#caruselle').slick({
        prevArrow: false,
        nextArrow: false,
        dots: false,
        autoplay:true,
        autoplaySpeed:3000,
        mobileFirst: true
    });

    $('#body .xl').parent('p').addClass('xlarge');
    $('#body .large').parent('p').addClass('llarge');

    if ($(window).width() < 960) {
        // Hide Header on on scroll down
        $(window).scroll(function(event){
            didScroll = true;
        });
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = 128;


        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('#topper').removeClass('topperShow').addClass('topperHide');
                $('#share').removeClass('shareShow').addClass('shareHide');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('#topper').removeClass('topperHide').addClass('topperShow');
                    $('#share').removeClass('shareHide').addClass('shareShow');
                }
            }
            
            lastScrollTop = st;
        }
    }

});