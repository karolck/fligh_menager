<?php

namespace App\Library\Api;

use Cake\Core\Configure;

class AirportApi {

    private $request_url = "https://airport.api.aero/airport/";

    private $method = 'ISO';

    private $user_key = NULL;

    public function setMethod($method = 'ISO') {
        $this->method = $method;
    }

    public function getMethod() {
        return $this->method;
    }

    public function setUserKey($user_key = '') {
        $this->user_key = $user_key;
    }

    public function getUserKey() {
        return $this->user_key;
    }

    public function getByIsoCode($iso = NULL) {

        $this->setUserKey(Configure::read('api.user_key'));
        $this->setMethod('ISO');
        $results = $this->call();
        return $results;
    }

    private function clearCallbackFromResponse($response) {

        $response = str_replace("callback(",'',$response);
        $response = rtrim($response,")");

        return $response;
    }

    private function call() {

        $url = $this->request_url . '' . $this->getMethod() . '?user_key=' . $this->getUserKey();
        return json_decode($this->clearCallbackFromResponse(file_get_contents($url)));
    }
}