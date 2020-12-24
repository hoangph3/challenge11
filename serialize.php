<?php include('object.php');

if (!empty($_POST)) {
    $s_username = addslashes(isset($_POST['username']) ? $_POST['username'] : '');
    $s_email = addslashes(isset($_POST['email']) ? $_POST['email'] : '');
    $s_year = addslashes(isset($_POST['year']) ? $_POST['year'] : '');
    $s_sex = addslashes(isset($_POST['sex']) ? $_POST['sex'] : '');
    
    //Serialize    
    $user = new User;
    $user->setUsername($s_username);
    $user->setEmail($s_email);
    $user->setYear($s_year);
    $user->setSex($s_sex);
    
    $serialize_user = serialize($user);
    $base64_user = base64_encode($serialize_user);
    file_put_contents('store', $base64_user);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Insecure Deserialization</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<style>
    p.breakline {
        word-break: break-all;
    }
</style>
</head>
<body>
    
<div class="header">
    <h1>Viettel Cyber Security</h1>
    <p>BigData and Machine Learning</p>
</div>

<ul>
    <li><a href="https://github.com/hoangph3/challenge11">Link to github repository &raquo; </a></li>
    <div class="navbar">
        <a href="javascript:void(0)" class="right">Log out</a>
    </div>
</ul>

<div class="row">
    <div class="side">
        <h2>Add User</h2><br/>
        <form class="w3-container" method="post">
            <div class="w3-container">
                <label for="username">Username</label>
                <input required="true" class="w3-input" type="text" style="width:100%" id="username" name="username"><br/> 
            </div>
            <div class="w3-container">
                <label for="email">Email</label>
                <input class="w3-input" type="email" style="width:100%" id="email" name="email"><br/>
            </div>
            <div class="w3-container">
                <label for="phone">Year</label>
                <input class="w3-input" type="text" style="width:100%" id="year" name="year"><br/>
            </div>
            <div class="w3-container">
                <label for="phone">Sex</label>
                <input class="w3-input" type="text" style="width:100%" id="sex" name="sex"><br/>
            </div>
            <div class="w3-container">
                <button class="w3-button w3-right w3-teal">Submit &raquo;</button>
            </div>
        </form>
    </div>
    <div class="main">     
        <h2>Information</h2><br/>
        <?php 
        if (!empty($_POST)) {
            $user->getUsername();
            $user->getEmail();
            $user->getYear();
            $user->getSex();
            //echo 'Serializing object: <br/>' . $serialize_user;
            echo '<p class="breakline"> Encoding base64 object: <br/>' . $base64_user . '</p>';
        }
        ?>
    </div>
</div>

<div class="footer">
    <h2>Contact me</h2>
    <p>Viettel Cyber Security, 41st Floor, Keangnam 72 Landmark Building, Pham Hung Str., Nam Tu Liem Dist., Hanoi</p>
</div>

</body>
</html>
