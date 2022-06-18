<?php

//Klasa koszyk php
class Cart
{
        public $db=null;

//            DBCONTROLLLER $db tworzymy objekt

        public function __construct(DBController $db){
            if(!isset($db->con)) return null;
            $this->db = $db;
        }

//        Funkcja odpowiada za wkladanie do koszyka wszystkiego
        public function insertIntoCart($params=null,$table="cart"){

            if ($this->db->con!=null  ){
                if ($params!= null){
//                    wrzucanie do koszyka usera!!!!!
//                    SEPAROWANIE DANYCH POPRZEZ PRZECINEK
                    $columns=implode(',',array_keys($params));

                    $values= implode(',',array_values($params));


//                    Zapytanie sql
                    $query_string=sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);
//                    echo $query_string;

//                    WYKONYWANIE ZAPYTANIA SQL
                    $result=$this->db->con->query($query_string);
                    return $result;
                }
            }
        }

//        Get user_id i produkt_id i insertowanie do tabeli(cart)
//    isset ----->czy cos istnieje czy jest tam

        public function addToCart($userid,$itemid){
            if(isset($userid)&&isset($itemid)){
                $params=array(
                    "user_id"=>$userid,
                    "item_id"=>$itemid
                );
//                INSERTUJE dane do koszyka
                $result=$this->insertIntoCart($params);
//                Jeżeli mam rezultat czyli te dane to strona mi sie realoaduje i zostaje index
                if ($result){
                    header("Location:" . $_SERVER['PHP_SELF']);
                }

            }
        }


//        USUWANIE PRODUKTOW Z KOSZYKA UZYWAJAC ITEM_ID





    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){

             header("Location:" . $_SERVER['PHP_SELF']);

            }
            return $result;
        }
    }






//        KALKULATOR CENY ZA WSZYSTKO

        public function getSum($arr){
            if(isset($arr)){
                $sum=0;
                foreach ($arr as $item){
                    $sum+=floatval($item[0]);
                }
//                dwa znaki do liczby bedzie konwertowalo
                return sprintf('%.2f',$sum);
            }
        }


//        get item_id of shopping cart list

        public function getCartId($cartArray=null,$key="item_id"){
            if ($cartArray!=null){
                $cart_id=array_map(function ($value) use($key){
                    return $value[$key];
                },$cartArray);
                return $cart_id;
            }
        }


//    Zapisz na pozniej/dodaj do koszyka z wishlist


    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";


            // kilka pytan na raz
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location :" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

}