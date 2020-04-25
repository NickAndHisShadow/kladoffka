<?php
namespace app;
use mysql;
class User {
    private $table = '`catalogs`';
    function query($sql)
    {
        return Connection::getInstance()->query($sql);
    }
    public function catalog($category_item, $from, $to,$name_product){

        if (!empty($category_item)) {
            $query = $this->query("SELECT * FROM " . $this->table . " WHERE
            `title` LIKE '%$name_product%' and
             catalog_item = '$category_item' and
             price >= '$from' and
             price <= '$to'");
        }else{
            $query = $this->query("SELECT * FROM " . $this->table . " WHERE 
            `title` LIKE '%$name_product%' and
            price >= '$from' and 
            price <= '$to'");
        }
        return $query;
    }

    public function catalogAll() {
        $query = $this->query("SELECT * FROM " . $this->table);
        return $query;
    }

    public function catalogItem($id) {
        $query = $this->query("SELECT * FROM " . $this->table . " WHERE id='$id'");
        return $query;
    }
}