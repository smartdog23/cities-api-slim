<?php
/**
 * Created by Valdir Lourenco
 * Email: valdirpl@gmail.com
 * Date: 03/11/2014
 * Time: 20:26
 */

namespace SD23\Features;

class State {

    public function __construct() {

    }


    public static function state() {
        return json_encode(array('status' => 'error'));
    }

    public static function stateInfo($id) {
        $app = \Slim\Slim::getInstance();
        $state = $app->db->state[$id]->fetch();
        return json_encode($state);
    }

    public static function cityList($id) {
        $app = \Slim\Slim::getInstance();
        $countryList = $app->db->city(array("state_id" => $id))->fetchAll();
        return json_encode($countryList);
    }

}