<!--WYPRZEDAŻ-->

<?php


shuffle($product_shuffle);
//shuffle ---> miesza produkty zeby wszedzie nie pokazywaly sie w tej samej kolejnosci



//request method post JEŻELI KLIKNIEMY W TEN PRZYCISK TO WYWOLA SIE METODA DO KOSZYKA

if ($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['top_sale_submit'])){

        //    metoda addtocart
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
}

?>





<section id="top-sale">
    <div class="container py-5">

        



        <h4 class="font-rubik font-size-20">Wyprzedaż</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item) {?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']);?>"><img src="<?php echo $item['item_image']??"./assets.produkty/1.png";?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <?php
                        if ($_SESSION['admin']==1){
                            echo '<a href="usuwanie.php?id='.$item['item_id'].'" class="btn  font-size-12">Usuń</a>';
                        }
                        ?>
                        <h6><?php echo $item['item_name']?? "Nieznany item";?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>zł<?php echo $item['item_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php  echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php  echo 1; ?>">
                            <?php
//                            DODAWANIE TEGO SAMEGO PRODUKTU DO KOSZYKA

                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">Produkt w Koszyku</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Dodaj do koszyka</button>';
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
    <!--  Zamykanie foreach funkcjii               -->
            <?php }?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>

<!--!WYPRZEDAZ -->
