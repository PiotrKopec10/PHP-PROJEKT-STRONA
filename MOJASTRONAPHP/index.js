
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





//         }
//     }});        // Zamykanie ajax zapytania
//     });
//     $qty_down.click(function(e){
//         let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
//         if($input.val() > 1 && $input.val() <= 10){
//             $input.val(function(i, oldval){
//                 return --oldval;
//             });
//         }
//     });




    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    let $input = $(".qty .qty_input");

    // Kilkanie na ilosci w szczegółach produktu
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //zmienia cene produkt jak mam np ilosc 2 w koszyku uzywajac ajax
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    // wzrasta dzieki temu cena
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // ustawia cene koncowa
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // Zamykanie ajax zapytania
    }); // Zamykanie qtyup

    // zmniejszanie ilosci produktow   (RESZTA OPISU ODPOWIEDZIALNA ZA TO SAMO!!!!!)
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);


        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    $price.text(parseInt(item_price * $input.val()).toFixed(2));


                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }});
    });



});