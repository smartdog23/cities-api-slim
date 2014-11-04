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

//    public static function countryList() {
//        $app = \Slim\Slim::getInstance();
//        $query = "select * from country";
//        return json_encode($result = $app->db->query($query)->fetchAll(\PDO::FETCH_ASSOC));
//    }

    public static function countryList() {
        $app = \Slim\Slim::getInstance();
        $countryList = $app->db->country->fetchAll();
        return json_encode($countryList);
    }

    public static function countryInfo($id) {
        $app = \Slim\Slim::getInstance();
        $country = $app->db->country[$id]->fetch();
        return json_encode($country);
    }

    public static function stateList($id) {
        $app = \Slim\Slim::getInstance();
        $stateList = $app->db->state(array("country_id" => $id))->fetchAll();
        return json_encode($stateList);
    }

}