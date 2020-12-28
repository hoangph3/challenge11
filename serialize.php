<!DOCTYPE html>
<html>
<head>
    <title>Serialization</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style> p.breakline {word-break: break-all;}</style>
</head>
<body>
<div class="container">
    <h2>Serializing</h2>
    <form method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required="true">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required="true">
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" class="form-control" id="year" name="year" required="true">
        </div>
        <div class="form-group">
            <label for="sex">Sex:</label>
            <input type="text" class="form-control" id="sex" name="sex" required="true">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>
<div class="container">
    <?php include('object.php');
    if (!empty($_POST)) {
        //Serialize    
        $user = new User; // run __constructor()
        $serialize_user = serialize($user);
        $base64_user = base64_encode($serialize_user);
        echo '<h3>Encoding base64 object:</h3>';
        echo '<p class="breakline" style="font-size:16px;">' . $base64_user . '</p>';
    }
    ?>
</div>
</body>
</html>