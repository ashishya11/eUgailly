<?php
$slider_data=array();
$category_data=array();
$subcategory_Data=array();
$product_Data=array();
$brand_data=array();
include "./model/home-model.php";
$category_data = category();
$subcategory_Data = subcategory();
$product_Data = product();
$brand = brand();
$slider_data = slider();

?>