<?php
    class User {
        public $id;
        public $fName;
        public $lName;
        public $email;
        public $uName;
        public $location;
        public $bio;
        public $password;
        public $qual;
        public $lat;
        public $lng;
        
        public static function create(){
            $instance = new self();
            return $instance;
        }
        
        public function setId( $id) {
            $this->id = $id;
            return $this;
        }
        
        public function setFirstName( $firstName) {
            $this->fName = $firstName;
            return $this;
        }
        
        public function setLastName( $lastName) {
            $this->lName = $lastName;
            return $this;
        }
        
        public function setUserName( $userName) {
            $this->uName = $userName;
            return $this;
        }
        
        public function setEmail( $email) {
            $this->email = $email;
            return $this;
        }
        
        public function setBio( $bio) {
            $this->bio = $bio;
            return $this;
        }
        
        public function setLocation( $location) {
            $this->location = $location;
            return $this;
        }
        
        public function setQual( $qual) {
            $this->qual = $qual;
            return $this;
        }
        
        public function setLat( $lat) {
            $this->lat = $lat;
            return $this;
        }
        
        public function setLng( $lng) {
            $this->lng = $lng;
            return $this;
        }
        
    }
 ?>
