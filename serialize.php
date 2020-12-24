<?php 
class User {
    public $name;
    public $email;
    public $year;
    public $sex;
    
    //Username
    public function setUsername(string $name) {
        return $this->name = $name;
    }
    public function getUsername() {
        echo 'Username: ' . $this->name . '<br/>';
    }

    //Email
    public function setEmail(string $email) {
        return $this->email = $email;
    }
    public function getEmail() {
        echo 'Email: ' . $this->email . '<br/>';
    }

    //Year
    public function setYear(string $year) {
        return $this->year = $year;
    }
    public function getYear() {
        echo 'Year: ' . $this->year . '<br/>';
    }

    //Sex
    public function setSex(string $sex) {
        return $this->sex = $sex;
    }
    public function getSex() {
        echo 'Sex: ' . $this->sex . '<br/>';
    }
}
