<div>
    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?= Root('create_dish')?><?php if ($id) echo '?id='.$id?>" >
        <input type="hidden" name="is_send" value="1" />
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Название</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name"
                <?php if ($dish) :?> value="<?= $dish->name?>"<?php endif;?>
                       placeholder="Название блюда">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Описание</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" name="description" placeholder="Описание блюда"><?php if ($dish) :?> <?= $dish->description?><?php endif;?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Время приготовления</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="timeout" name="timeout"
                    <?php if ($dish) :?> value="<?= $dish->timeout?>"<?php endif;?> placeholder="Время приготовления блюда">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Изображение</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="img_url" name="img_url"
                    <?php if ($dish) :?> value="<?= $dish->img_url?>"<?php endif;?>
                       placeholder="Изображение блюда">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Рейтинг</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="rate" name="rate"
                    <?php if ($dish) :?> value="<?= $dish->rate?>"<?php endif;?>
                       placeholder="Рейтинг блюда">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Список ингредиантов</label>
            <div class="col-sm-10">
                <select id="ingredients" name="ingredients[]" multiple class="form-control select2-multiple">
                    <?php foreach ($ingredients as $ingredient):?>
                        <option value="<?= $ingredient['id'] ?>"><?= $ingredient['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Сохранить</button>
            </div>
        </div>
    </form>
    <?php if ($id): ?>
        <h1>Шаги</h1>
    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?= Root('create_dish')?>">
        <input name="dish_id" type="hidden" value="<?=$id?>">
        <input name="is_preparation" type="hidden" value="1">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Изображение</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="img_url" name="img_url"
                       placeholder="Изображение блюда">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Описание</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" name="description" placeholder="Описание блюда"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Порядок</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="number" value="0" name="number"
                       placeholder="Рейтинг блюда">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Сохранить</button>
            </div>
        </div>
    </form>
    <?php endif;?>
</div>
