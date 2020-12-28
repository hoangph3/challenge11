<!DOCTYPE html>
<html>
<head>
    <title>Deserialization</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Deserializing</h2>
    <form method="post">
        <div class="form-group">
            <label for="string">String:</label>
            <input type="text" class="form-control" id="string" name="string" required="true">
        </div>
    </form>
</div>
<div class="container">
    <?php include('object.php');
    if (!empty($_POST)) {
        $str = $_POST['string'];
        $serialize_user = base64_decode($str);
        echo '<h3>Extracted information</h3><p style="font-size:16px;">';
        $deserialize_user = unserialize($serialize_user);
        echo '</p>';
    }
    ?>
</div>
</body>
</html>
