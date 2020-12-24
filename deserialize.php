<?php include('object.php');
if (!empty($_POST)) {
    $str = $_POST['string'];
    $serialize_user = base64_decode($str);
    $deserialize_user = unserialize($serialize_user);
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
        <h2>Input Base64</h2><br/>
        <form class="w3-container" method="post">
            <div class="w3-container">
                <label for="username">String</label>
                <input required="true" class="w3-input" type="text" style="width:100%" id="string" name="string"><br/> 
            </div>
        </form>
    </div>
    <div class="main">     
        <h2>Information</h2><br/>
        <?php 
        if (!empty($_POST)) {
            $deserialize_user->getUsername();
            $deserialize_user->getEmail();
            $deserialize_user->getYear();
            $deserialize_user->getSex();
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
