<?php
/**
 * Created by PhpStorm.
 * User: dreg
 * Date: 08.06.15
 * Time: 16:39
 */

$dish = new DishModel(Get('id'));
$ihave = Get('ingredients');

$ingredientsRelations = new Dishes_IngredietnsModel();
$ingredientsModel = new IngredientsModel();

$allIngridients = $ingredientsModel->getList();
$ingredientsIds = $ingredientsRelations->getList($dish->id);

$ids = array();
foreach($ingredientsIds as $relation){
    $ids[$relation['id_ingredients']] = $relation;
}

$ingredients = array();
$hasIngredients = array();
foreach($allIngridients as $itm){
    if( array_key_exists($itm['id'],$ids) ){
        array_push($ingredients,$itm);
    }
    if( $ihave and in_array($itm['id'], $ihave) ){
        array_push($hasIngredients,$itm);
    }
}
$preparationModel=new PreparationModel();
$steps=$preparationModel->getList($dish->id);