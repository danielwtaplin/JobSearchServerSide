<?php
class Listing{
    public $id;
    public $title;
    public $company;
    public $type;
    public $qual;
    public $desc;
    public $location;
    public $closeDate;
    public $dateListed;
    public $userId;
    public $wage;
    public $salMin;
    public $salMax;
    public $lat;
    public $lng;

    public static function ListingSal($id, $title, $company, $type, $desc, $location, $dateListed, $closeDate, $userId,
        $qual, $salMin, $salMax, $type) {
      $obj = new Listing();
      $obj->id = $id;
      $obj->title = $title;
      $obj->company = $company;
      $obj->location = $location;
      $obj->desc = $desc;
      $obj->dateListed = $dateListed;
      $obj->closeDate = $closeDate;
      $obj->userId = $userId;
      $obj->qual = $qual;
      $obj->salMin = $salMin;
      $obj->salMax = $salMax;
      $obj->type = $type;
      return $obj;
    }

    public static function ListingWage($id, $title, $company, $type, $desc, $location, $dateListed, $closeDate, $userId,
       $wage, $qual) {
      $obj = new Listing();
      $obj->id = $id;
      $obj->title = $title;
      $obj->company = $company;
      $obj->location = $location;
      $obj->desc = $desc;
      $obj->dateListed = $dateListed;
      $obj->closeDate = $closeDate;
      $obj->userId = $userId;
      $obj->wage = $wage;
      $obj->qual = $qual;
      $obj->type = $type;
      return $obj;
    }

    public function addLatLng($lat, $lng) {
      $this->lat = $lat;
      $this->lng = $lng;
    }

  }
 ?>
