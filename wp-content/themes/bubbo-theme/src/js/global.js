//------------------------------------------
// 	 Sticky Header
//------------------------------------------

$(window).scroll(function () {
    if ($(this).scrollTop() >= 1) {
        $('.site-header').addClass('active');
    } else {
        $('.site-header').removeClass('active');
    }
});


//------------------------------------------
// 	 Scroll Jump To
//------------------------------------------

$(document).ready(function() {
    // changes how jump to works depending if you're on the homepage or not
    if ($("body").hasClass("home")) {
        $('a[href^="/#"]').click(function(e) {
        // Prevent the jump and the #hash from appearing on the address bar
        e.preventDefault();
        $(window).stop(true).scrollTo(this.hash, {duration:700, interrupt:true});
    });
    }
    else {
        $('a[href^="#"]').click(function(e) {
            // Prevent the jump and the #hash from appearing on the address bar
            e.preventDefault();
            $(window).stop(true).scrollTo(this.hash, {duration:1000, interrupt:true});
        });
    }
  });