<?php
$g_config['isLoadInMainTpl'] = false;
$timeout = Get("timeout", 15);
$ingredients=Get('ingredients', array());
$dishModel = new DishModel();
$ingredientModel = new IngredientsModel();
if (count($ingredients)>0){
    $real_ingredients = $ingredientModel->getList($ingredients);
    $items = $dishModel->getList($ingredients, $timeout);
} else {
    $real_ingredients = array();
    $items = $dishModel->getList(array(), $timeout);
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

