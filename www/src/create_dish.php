<?php
$ingredientsModel=new IngredientsModel();
$ingredients=$ingredientsModel->getList();

$id=Get("id");

if (Post("is_send")){
    if ($id){
        $u = new DishModel($id);
    } else {
        $u = new DishModel();
    }
    $u->name = Post("name");
    $u->description = Post("description");
    $u->img_url = Post("img_url");
    $u->rate = Post("rate");
    $u->timeout = Post("timeout");
    $id=$u->Flush();
    $linked_ingredietns = Post("ingredients", array());
    foreach($linked_ingredietns as $ingredient){
        $a = new Dishes_IngredietnsModel();
        $a->id_dishes=$id;
        $a->id_ingredients=$ingredient;
        $a->Flush();
    }
}
if (Post("is_preparation")){
    $preparation=new PreparationModel();
    $preparation->dish_id = Post("dish_id");
    $preparation->img_url = Post("img_url");
    $preparation->number = Post("number");
    $preparation->description = Post("description");
    $preparation->Flush();
}
if ($id) {
    $dish=new DishModel($id);
} else {
    $dish=false;
}