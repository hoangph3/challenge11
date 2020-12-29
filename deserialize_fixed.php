<!DOCTYPE html>
<html>
<head>
    <title>Safe Deserialization</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Safe Deserializing</h2>
    <form method="post">
        <div class="form-group">
            <label for="string">String:</label>
            <input type="text" class="form-control" id="string" name="string" required="true">
        </div>
    </form>
</div>
<div class="container">
    <?php include('object_fixed.php');
    if (!empty($_POST)) {
        $str = $_POST['string'];
        $serialize_user = base64_decode($str);
        $deserialize_user = unserialize($serialize_user);
        //Addslashes 
        echo "Username: " . htmlentities($deserialize_user->name) . '<br/>';
        echo "Email: " . htmlentities($deserialize_user->email) . '<br/>';
        echo "Year: " . htmlentities($deserialize_user->year) . '<br/>';
        echo "Sex: " . htmlentities($deserialize_user->sex) . '<br/>';
    }
    ?>
</div>
</body>
</html>
