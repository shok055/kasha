<?php

class DishModel extends Model
{
    public function __construct($id = NULL, $onlyShow = false)
    {
        global $g_databases;
        parent::__construct($g_databases->db, 'dishes', 'id', $id, $onlyShow);
    }

    public function CreateTable()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS ?#
            (
                `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(255) DEFAULT NULL,
              `description` text,
              `timeout` float DEFAULT NULL,
              `img_url` varchar(255) DEFAULT NULL,
              `rate` float DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8",
            $this->table);
    }

    /**
     * @param null $ingredients
     * @return mixed
     */
    public function getList($ingredients=NULL)
    {
        if (count($ingredients)>0) {
            $a="SELECT DISTINCT `id`,`name`,`description`,`timeout`,`img_url`,`rate`
 FROM ?# AS dish INNER JOIN `dishes-ingredients` AS di ON di.`id_dishes`=dish.id AND di.`id_ingredients` IN(?a)";
            return $this->db->select($a, $this->table, $ingredients);
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

