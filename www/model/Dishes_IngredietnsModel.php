<?php

class Dishes_IngredietnsModel extends Model
{
    public function __construct($id = NULL, $onlyShow = false)
    {
        global $g_databases;
        parent::__construct($g_databases->db, 'dishes-ingredients', 'id', $id, $onlyShow);
    }

    public function CreateTable()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS ?#
            (
                `id_dishes` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `id_ingredietns` int(10) unsigned NOT NULL AUTO_INCREMENT,
              PRIMARY KEY (`id_dishes`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8",
            $this->table);
    }

    public function getList( $dishId = NULL)
    {
        if($dishId){
            return $this->db->select("SELECT * FROM ?# WHERE id_dishes=?", $this->table, $dishId);
        } else {
            return $this->db->select("SELECT * FROM ?#", $this->table);
        }
    }

    public function Total()
    {
        return $this->db->selectCell("SELECT COUNT(*) FROM ?#", $this->table);
    }

    public function Find($name)
    {
        return $this->db->selectCell("SELECT `id` FROM ?# WHERE `name` = ?", $this->table, $name);
    }


}
;
?>

