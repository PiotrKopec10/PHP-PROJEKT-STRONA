<!--  Shooping Cart/Koszyk  -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

//    ZAPISZ NA POZNIEJ

//    Jezeli klikne to mi sie przeniesie

//    if (isset($_POST['wishlist-submit'])){
//
//        $Cart->saveForLater($_POST['item_id']);
//
//    }

}

?>



<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-roboto font-size-20">Koszyk</h5>

        <!-- Shooping Cart items/ Produkty w koszyku    -->

        <div class="row">
            <div class="col-sm-9">

                <?php

                foreach ($product->getData('cart') as $item):
                    $cart=$product->getProduct($item['item_id']);
                   $subTotal[]=array_map(function ($item){
                ?>

                <!--         CART ITEM               -->

                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image']?? "./assets/produkty/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-roboto font-size-20"><?php echo$item['item_name'] ?? "Coś poszło nie tak :("; ?></h5>
                        <small><?php echo$item['item_brand'] ?? "Coś poszło nie tak :("; ?></small>
                        <!--          Opinia produktu                      -->

                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">3000 Opini</a>
                        </div>

                        <!--       !Opinia Produktu                    -->

                        <!--       Ilość w Koszyku                         -->

                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-roboto text-danger px-3 border-right">Usuń</button>
                            </form>


                    <!--  SPYYTAĆ O ERROR 500!!!!                          -->


<!--                            <form method="post">-->
<!--                                <input type="hidden" value="--><?php //echo $item['item_id'] ?? 0; ?><!--" name="item_id">-->
<!--                                <button type="submit" name="wishlist-submit" class="btn font-roboto text-danger ">Zapisz na Później</button>-->
<!--                            </form>-->


                            <!--  SPYYTAĆ O ERROR 500!!!!                          -->



                        </div>



                        <!--       !Ilość w Koszyku                         -->
<!--                    </div>-->
<!--                    <div class="col-sm-2 text-right">-->
<!--                        <div class="font-size-20 text-danger font-roboto">-->
<!--                            zł<span class="product_price"data-id="--><?php //echo $item['item_id'] ?? '0'; ?><!--">--><?php //echo$item['item_price'] ?? 0; ?><!--</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?>zł</span>
                        </div>
                    </div>
                </div>

                <!--         !CART ITEM               -->

                <?php
                       return $item['item_price'];
                    },$cart);

                    endforeach;

                ?>


            <!--  SUBTOTAL/ZA CAŁOŚĆ                  -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"> </i>DARMOWA DOSTAWA Dla Twojego Zamówienia</h6>
                    <div class="border-top py-4">
                        <h5 class="font-rale font-size-20">Razem: ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> Produkty): <span class="text-danger">zł <span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
<!--                        <button type="submit" class="btn btn-warning mt-3">Kup Teraz</button>-->
                        <a class="btn btn-warning mt-3" href="kupteraz.php">Kup Teraz</a>
                    </div>
                </div>
            </div>
            <!--  SUBTOTAL/ZA CAŁOŚĆ                  -->
        </div>

        <!-- !Shooping Cart items/ Produkty w koszyku    -->

    </div>
</section>

<div class="col-sm-12 border text-center mt-2">

    <form action="" method="post">
        <h3>Formularz dostawy</h3>
        <br>
        <input type="email" name="email" required placeholder="Podaj email" class="box">
        <input type="text" name="miasto" required placeholder="Podaj miasto" class="box">
        <input type="text" name="adres" required placeholder="Podaj adres zamieszkania" class="box">
        <input type="text" name="imienazwisko" required placeholder="Podaj swoje imie i nazwisko" class="box">
        <br><br><br>

        <p>Metoda Płatności</p>

        <input type="radio"  name="metoda" value="Kurier">
        <label>Płatność u kuriera</label><br>
        <input type="radio"  name="metoda" value="Karta">
        <label>Karta</label><br>
        <input type="radio"  name="metoda" value="Blik">
        <label>Blik</label>

        <br><br><br>
        <p>Metoda Dostawy</p>

        <input type="radio"  name="metoda1" value="Paczkomat">
        <label>Najblizszy Paczkomat</label><br>
        <input type="radio"  name="metoda1" value="Kurier">
        <label>Kurier</label><br>
        <input type="radio"  name="metoda1" value="Osobisty">
        <label>Osobisty Odbiór</label>

        <h5 class="font-rale font-size-20">Razem:  <span class="text-danger"> <span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> zł</span> </h5>

        <br><br><br>
        <input type="submit" name="submit" class="btn" value="Kupuje!">
        <p>Wróc do Strony Głównej <a href="index.php">Tutaj</a></p>
    </form>

</div>

<!--  Shooping Cart/Koszyk  -->