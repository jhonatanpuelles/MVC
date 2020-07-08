<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\City as ActorModel;

class City
{
    private $model;

    public function __construct() {

        $this->model = new CityModel();
    }

    public function index() {

        $cityList = $this->model->getAll(['city_id', 'city', 'country_id', 'last_update']);

        require(BASE_PATH . '/App/Views/City/index.php');
    }