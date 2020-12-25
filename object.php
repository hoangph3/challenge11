<?php
class User {
    function __construct() {
        // Create object from POST data
        $this->name = isset($_POST['username']) ? $_POST['username'] : '';
        $this->email = isset($_POST['email']) ? $_POST['email'] : '';
        $this->year = isset($_POST['year']) ? $_POST['year'] : '';
        $this->sex = isset($_POST['sex']) ? $_POST['sex'] : '';
    }
    
    public function get_info() {
        echo 'Username: ' . $this->name . '<br/>';
        echo 'Email: ' . $this->email . '<br/>';
        echo 'Year: ' . $this->year . '<br/>';
        echo 'Sex: ' . eval($this->sex) . '<br/>';
    }

    // This method is executed for each object at the end of the PHP execution
    function __destruct() {

    }

}

/*
class User {
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

*/
