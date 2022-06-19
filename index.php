<?php
ob_start();
session_start();
include('header.php');



if(empty($_SESSION['admin']))
{
    $_SESSION['admin']=0;

}

?>


<?php

/*Include banner area*/
include('Template/__banner-area.php');
/*!Include banner area*/

/*Include TOPSALE/WYPRZEDAŻ*/
include('Template/__top-sale.php');
/*!Include !TOPSALE/WYPRZEDAŹ*/

/*Include SPECIAL PRICE*/
include('Template/__special-price.php');
/*!Include !SPECIAL PRICE*/

/*Include BANNER ADS*/
include('Template/__banner-ads.php');
/*!Include !BANNER ADS*/

/*Include NEW BUTY*/
include('Template/__new-buty.php');
/*!Include NEW BUTY*/

/*Include BLOG AKA O NAS*/
include('Template/__blogs.php');
/*!Include BLOG AKA O NAS*/

?>


    <?php
        include('footer.php');

    ?>

