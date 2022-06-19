
$(document).ready(function() {

    // TLO GLOWNE JAKO LOOP OWL CAROUSEL
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

        //WYPRZEDAZ OWL CAROUSEL
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
    //isotope filtrowanie

    var $grid=$(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

//    Filtracja produktow na klik

        $(".button-group").on("click","button",function (){
            var filterValue= $(this).attr('data-filter');
            $grid.isotope({filter:filterValue})
        })

    //    NOWE BUTY OWL CAROUSEL
    $("#new-buty .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

//        Najnowsze Wiadomosci Carousel OWL

    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })

    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

//    Kilkanie na ilosci w szczegółach produktu

    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });
    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 10){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });

});