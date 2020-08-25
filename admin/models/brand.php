<?php
class Brand {
    public $brandID;
    public $name;
    public $description;

    public function __construct($brandID, $name, $description)
    {
        $this->brandID = $brandID;
        $this->name = $name;
        $this->description = $description;
    }


    public static function getAll(){
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM brand');
        foreach($req->fetchAll() as $rc) {
            $list[] = $rc;
            //$list[] = new Brand($rc['brandID'], $rc['name'],  $rc['description']);
        }
        return $list;
    }
}