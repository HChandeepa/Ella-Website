<?php

include 'config.php';

if (isset($_POST['post_comment'])) {

    $name = $_POST['name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <<<<<<< HEAD <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="web.css">
        <title>Comment System PHP | National Coding</title>
        =======
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="web" rel="stylesheet" type="text/css">

        <title>Ella</title>
        >>>>>>> 8d90f5d7ea9bc59dda74fa15e1cea0c3afff5abf
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" class="form">
            <input type="text" class="name" name="name" placeholder="Name">
            <br>
            <textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
            <br>
            <button type="submit" class="btn" name="post_comment">Post Comment</button>
        </form>
    </div>

    <div class="content">
        <?php

        $sql = "SELECT * FROM demo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                ?>
                <h3>
                    <?php echo $row['name']; ?>
                </h3>
                <p>
                    <?php echo $row['message']; ?>
                </p>

            <?php }
        } ?>
    </div>
</body>

</html>