<?php
require_once("src/models/advertisements.model.php");

class AdvertisementsController {

    private $model;

    public function __constructor() {
        $this->model = new AdvertisementsModel();
    }

    /**
     * It renders all advertisements.
     */
    public static function findAll() {
        $advertisements = $this->$model->getAdvertisements();
        require_once(__DIR__ . '/../views/advertisements/index.php');
    }

    /**
     * It rendes one advertisement.
     */
    public static function findOne() {
        $advertisement = $this->$model->findOne();
        require_once(__DIR__ . '/../views/advertisements/one.php');
    }
}
?>