<!--Produkt-->

<?php

$item_id=$_GET['item_id'] ?? 1;

//tablica z produktami jeden po jeden;.
 foreach ($product->getData() as $item):
//     IF KTORY POROWNUJE ITEM ID Z GORY I JEZELI ID JEST ROWNE TEMU DRUGIEMU ID TO POKAZUJE
//     TO ID  CZYLI POKAZUJE STRONKE ZE SZCZEGOLAMI TEGO DOKLADNIE PRODUKUT Z ID TAKIM SAMYM
     if($item['item_id'] == $item_id):


         if ($_SERVER['REQUEST_METHOD']=="POST"){

             if(isset($_POST['top_sale_submit'])){

                 //    metoda addtocart
                 $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
             }
         }
?>


<section id="product" class="py-3">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/produkty/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-roboto">
                    <div class="col">
                        <a href="index.php"><button type="submit" class="btn btn-danger form-control">Przejdź do zakupu</button></a>

                    </div>
                    <div class="col">
                        <?php
                        //                            DODAWANIE TEGO SAMEGO PRODUKTU DO KOSZYKA

                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-12 form-control">Produkt w Koszyku</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12 form-control">Dodaj do koszyka</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-roboto font-size-20"><?php  echo $item['item_name'] ?? "Coś poszło nie tak :("; ?></h5>
                <small>by <?php  echo $item['item_brand'] ?? "Coś poszło nie tak :("; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-roboto font-size-14">1800 Opini</a>
                </div>
                <hr class="m-0">

                <!--       CENA PRODUKTU                     -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Cena z Dostawą:</td>
                        <td class="font-size-20 text-danger">zł <span><?php  echo $item['item_price'] ?? "Coś poszło nie tak :("; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Cena z podatkami</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Cena bez Dostawy:</td>
                        <td class="font-size-20 text-danger"><span>zł <?php  echo $item['item_price']-30 ?? "Coś poszło nie tak :("; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Cena z podatkami</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Koszt dostawy:</td>
                        <td class="font-size-16 text-danger"><span>30 zł</span></td>
                    </tr>
                </table>

                <!--      !CENA PRODUKTU                      -->

                <!--        Policy                    -->

                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Dni<br> Na Zwrot</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Expressowa<br>Dostawa</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">5 Letnia<br>Gwarancja</a>
                        </div>
                    </div>
                </div>


                <!--              !Policy                  -->
                <hr>

                <!--          Szczegóły dostawy                   -->


                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Dostawa między:3-5 Lipca</small>
                    <small>Sprzedawca: <a href="#"> KOPSHOES</a> 5/5 Ocena</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i> Dostawa do:80-230</small>
                </div>

                <!--          !Szczegóły dostawy                   -->

                <div class="row">
                    <div class="col-6">
                        <!--                                        color-->

                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-roboto">Kolor</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button> </div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button> </div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button> </div>
                            </div>
                        </div>
<!---->
<!--                                                            !color-->
<!--                    </div>-->
<!--                    <div class="col-6">-->
<!---->
<!--                                       Sekcja Ilosc na stronie-->

                        <div class="qty d-flex">
                            <h6 class="font-roboto">Ilość</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>

                        <!--               !Sekcja Ilosc na stronie                     -->
                    </div>
                </div>


                <!--           Size/Rozmiar                 -->

                <div class="size my-3">
                    <h6 class="font-roboto">Rozmiar:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">42 EU</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">44 EU</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">45 EU</button>
                        </div>
                    </div>
                </div>

                <!--          !Size/Rozmiar                  -->

            </div>
        </div>

        <div class="col-12">
            <h6 class="font-rubik">Opis Produktu</h6>
            <hr>
            <p class="font-rale font-size-14">Niesamowite buty! Niezwykle wygodne</p>
            <p class="font-rale font-size-14">Znakomita marka i gwarancja jakości!</p>
        </div>
    </div>
</section>

<!--!Produkt -->

<?php

    endif;
    endforeach;
?>

