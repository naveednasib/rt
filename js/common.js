$(document).ready(function(){



    $('.parent-nav').hover(
        function () {

        $(this).find('.child-nav').fadeIn().addClass('active');

        },
        function () {
            $(this).find('.child-nav').removeClass('active').fadeOut();
        }
    );


});



slideT(".propertylisting-link  .heading", ".detail-list");

//genric function
function slideT(byslide, whichslide) {


    var byslide, whichslide;
    $(byslide).click(function () {
        $(whichslide).slideToggle();

    });

}
function slideT(byslide, whichslide, speed) {
    var byslide, whichslide;
    $(byslide).click(function () {
        $(whichslide).slideToggle(speed);

    });

}

