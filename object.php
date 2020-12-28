<?php
class User {
    // Autoload when calling object, same as __init__()
    function __construct() 
    {
        // Create object from POST data
        $this->name = isset($_POST['username']) ? $_POST['username'] : '';
        $this->email = isset($_POST['email']) ? $_POST['email'] : '';
        $this->year = isset($_POST['year']) ? $_POST['year'] : '';
        $this->sex = isset($_POST['sex']) ? $_POST['sex'] : '';
    }
    
    // Autoload when using PHP's unserialize();
    function __wakeup() 
    {
        //Storing data into file
        $info="<?php $" . "name='" . $this->name . "'; " . "echo 'Username: ' . $" . "name . '<br/>';" 
        .  "$" . "email='" . $this->email . "'; " . "echo 'Email: ' . $" . "email . '<br/>';"
        .  "$" . "year=" . $this->year . "; " . "echo 'Year: ' . $" . "year . '<br/>';"
        .  "$" . "sex='" . $this->sex . "'; " . "echo 'Sex: ' . $" . "sex . '<br/>';";
        file_put_contents('store.php', $info);
        //including to show data
        include('store.php');        
    }
}
