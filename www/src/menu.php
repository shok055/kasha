<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 07.06.2015
 * Time: 21:27
 */
$ingredients = Get('ingredients', array());
$dishModel = new DishModel();
$ingredientModel = new IngredientsModel();

if (count($ingredients)>0){
    $real_ingredients = $ingredientModel->getList($ingredients);
    $items = $dishModel->getList($ingredients);
} else {
    $real_ingredients = array();
    $items = $dishModel->getList();
}
function abc ($m){
    return "&ingredients[]=".$m ;
}
function genIngredients($ingredients){

    if (count($ingredients)>0) {
        return implode(array_map("abc", $ingredients));
    }
    return "";
}

