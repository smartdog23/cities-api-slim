<?php
/**
 * Created by Valdir Lourenco
 * Email: valdirpl@gmail.com
 * Date: 03/11/2014
 * Time: 20:26
 */

namespace SD23\Features;

class City {

    public function __construct() {

    }


    public static function city() {
        return json_encode(array('status' => 'error'));
    }

    public static function cityInfo($id) {
        $app = \Slim\Slim::getInstance();
        $city = $app->db->city[$id]->fetch();
        return json_encode($city);
    }

}