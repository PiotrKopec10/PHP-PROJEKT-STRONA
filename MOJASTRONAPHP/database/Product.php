<?php

//Uzyte po to aby zalaczac dane do sklepu
class Product
{
    public $db=null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db=$db;
    }

// Dodawania danych produktu uzywajac getData

public function getData($table='product'){
        $result=$this->db->con->query("SELECT * FROM {$table}");

//        Dane pojedynczo wrzuca jako petla while
        $resultArray=array();
        while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
}

//get product uzywajac item_id

public function getProduct($item_id=null,$table='product'){

        if (isset($item_id)){
            $result= $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            //        Dane pojedynczo wrzuca jako petla while
            $resultArray=array();
            while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[]=$item;
            }
            return $resultArray;

        }
}


}