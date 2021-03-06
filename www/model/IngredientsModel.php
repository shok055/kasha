<?php

class IngredientsModel extends Model
{
    public function __construct($id = NULL, $onlyShow = false)
    {
        global $g_databases;
        parent::__construct($g_databases->db, 'ingredients', 'id', $id, $onlyShow);
    }

    public function CreateTable()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS ?#
            (
                `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(255) DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8",
            $this->table);
    }

    public function getList($ids=NULL)
    {
        if (count($ids)>0)
        {
            return $this->db->select("SELECT * FROM ?# WHERE id IN (?a)", $this->table, $ids);
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