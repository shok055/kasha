<?php

class PreparationModel extends Model
{
    public function __construct($id = NULL, $onlyShow = false)
    {
        global $g_databases;
        parent::__construct($g_databases->db, 'preparation', 'id', $id, $onlyShow);
    }

    public function CreateTable()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS ?#
            (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                  `img_url` varchar(255) DEFAULT NULL,
                  `description` text,
                  `number` int(11) DEFAULT NULL,
                  `dish_id` int(10) unsigned DEFAULT NULL,
                  PRIMARY KEY (`id`),
                  KEY `dish_id` (`dish_id`),
                  CONSTRAINT `preparation_ibfk_1` FOREIGN KEY (`dish_id`) REFERENCES `dishes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
                ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8",
            $this->table);
    }

    public function getList($dish_id=false)
    {
        if ($dish_id) {
            return $this->db->select("SELECT * FROM ?# WHERE dish_id = ?", $this->table, $dish_id);
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

