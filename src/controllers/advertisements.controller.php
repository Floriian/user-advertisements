<?php
require_once("src/models/advertisements.model.php");

class AdvertisementsController {
    /**
     * It renders all advertisements.
     */
    public static function findAll() {
        $advertisementsModel = new AdvertisementsModel();
        $advertisements = $advertisementsModel->getAdvertisements();
        //Pass $advertisements variable to view.
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