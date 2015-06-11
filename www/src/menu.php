<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 07.06.2015
 * Time: 21:27
 */
$ingredients=Get('ingredients');
$dishModel = new DishModel();
$ingredientModel = new IngredientsModel();
if (count($ingredients)>0){
    $real_ingredients = $ingredientModel->getList($ingredients);
    $items = $dishModel->getList($ingredients);
} else {
    $items = $dishModel->getList();

}
?>
