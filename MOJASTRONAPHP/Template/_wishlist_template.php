<!--  Shooping Cart/Koszyk  -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>


<!--WYŁĄCZONA CAŁA SEKCJA DO WISHLISTY BO WYWALA ERROR 500 ZAPYTAĆ PANA O CO CHODZI!!!-->


<!--<section id="cart" class="py-3">-->
<!--    <div class="container-fluid w-75">-->
<!--        <h5 class="font-roboto font-size-20">Lista Życzeń</h5>-->
<!---->
<!--         Shooping Cart items/ Produkty w koszyku    -->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-sm-9">-->
<!---->
<!--                --><?php
//
//                foreach ($product->getData('wishlist') as $item):
//                    $cart=$product->getProduct($item['item_id']);
//                    $subTotal[]=array_map(function ($item){
//                        ?>
<!---->
<!--                                 CART ITEM               -->
<!---->
<!--                        <div class="row border-top py-3 mt-3">-->
<!--                            <div class="col-sm-2">-->
<!--                                <img src="--><?php //echo $item['item_image']?? "./assets/produkty/1.png" ?><!--" style="height: 120px;" alt="cart1" class="img-fluid">-->
<!--                            </div>-->
<!--                            <div class="col-sm-8">-->
<!--                                <h5 class="font-roboto font-size-20">--><?php //echo$item['item_name'] ?? "Coś poszło nie tak :("; ?><!--</h5>-->
<!--                                <small>--><?php //echo$item['item_brand'] ?? "Coś poszło nie tak :("; ?><!--</small>-->
<!--                                         Opinia produktu                      -->
<!---->
<!--                                <div class="d-flex">-->
<!--                                    <div class="rating text-warning font-size-12">-->
<!--                                        <span><i class="fas fa-star"></i></span>-->
<!--                                        <span><i class="fas fa-star"></i></span>-->
<!--                                        <span><i class="fas fa-star"></i></span>-->
<!--                                        <span><i class="fas fa-star"></i></span>-->
<!--                                        <span><i class="far fa-star"></i></span>-->
<!--                                    </div>-->
<!--                                    <a href="#" class="px-2 font-rale font-size-14">3000 Opini</a>-->
<!--                                </div>-->
<!---->
<!--                                       !Opinia Produktu                    -->
<!---->
<!--                                    Ilość w Koszyku                         -->
<!---->
<!--                                <div class="qty d-flex pt-2">-->
<!---->
<!--                                    <form method="post">-->
<!--                                        <input type="hidden" value="--><?php //echo $item['item_id'] ?? 0; ?><!--" name="item_id">-->
<!--                                        <button type="submit" name="cart-submit" class="btn font-roboto text-danger ">Dodaj do Koszyka</button>-->
<!--                                    </form>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!---->
<!--                                       !Ilość w Koszyku                         -->
<!--                                                  </div>-->
<!--                                                   <div class="col-sm-2 text-right">-->
<!--                                                       <div class="font-size-20 text-danger font-roboto">-->
<!--                                                          zł<span class="product_price"data-id="--><?php ////echo $item['item_id'] ?? '0'; ?><!--">--><?php ////echo$item['item_price'] ?? 0; ?><!--</span>-->
<!--                                                       </div>-->
<!--                                                 </div>-->
<!--                                                </div>-->
<!---->
<!--                            </div>-->
<!---->
<!--                            <div class="col-sm-2 text-right">-->
<!--                                <div class="font-size-20 text-danger font-baloo">-->
<!--                                    $<span class="product_price" data-id="--><?php //echo $item['item_id'] ?? '0'; ?><!--">--><?php //echo $item['item_price'] ?? 0; ?><!--</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                               !CART ITEM               -->
<!---->
<!--                        --><?php
//                        return $item['item_price'];
//                    },$cart);
//
//                endforeach;
//
//                ?>
<!--            </div>-->
<!---->
<!---->
<!--        </div>-->
<!---->
<!--         !Shooping Cart items/ Produkty w koszyku    -->
<!---->
<!--    </div>-->
<!--</section>-->

<!--  Shooping Cart/Koszyk  -->