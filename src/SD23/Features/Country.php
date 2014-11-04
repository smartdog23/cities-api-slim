<?php
/**
 * Created by Valdir Lourenco
 * Email: valdirpl@gmail.com
 * Date: 03/11/2014
 * Time: 20:26
 */

namespace SD23\Features;

class Country {

    public function __construct() {

    }

    public static function countryList() {
        $app = \Slim\Slim::getInstance();
        $query = "select * from country";
        return json_encode($result = $app->db->query($query)->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function countryInfo() {

    }

    public function stateList() {

    }

}