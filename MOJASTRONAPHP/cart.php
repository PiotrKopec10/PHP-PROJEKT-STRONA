<?php
ob_start();
include('header.php');
?>

<?php

/*Include CART/KOSZYK*/
include('Template/__cart-template.php');
/*!Include !CART/KOSZYK*/

        /*Include WISHLIST*/
        include('Template/_wishlist_template.php');
        /*!Include !WISHLIST*/


///*Include CART/WYPRZEDAŻ*/
//include('Template/__new-buty.php');
///*!Include !TOPSALE/WYPRZEDAŹ*/
//
//
//?>


<?php
include('footer.php')

?>