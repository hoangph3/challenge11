<?php
class User {
    // Autoload when calling object
    function __construct() 
    {
        // Create object from POST data
        $this->name = isset($_POST['username']) ? $_POST['username'] : '';
        $this->email = isset($_POST['email']) ? $_POST['email'] : '';
        $this->year = isset($_POST['year']) ? $_POST['year'] : '';
        $this->sex = isset($_POST['sex']) ? $_POST['sex'] : '';
    }
}
