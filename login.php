<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>
    <?php
        session_start();

        $username = $_POST['username'];
        $password  = $_POST['password'];

        // Read the JSON file 
        $json = file_get_contents('db.json');
        
        // Decode the JSON file
        $json_data = json_decode($json, true);
        
        foreach ($json_data as $k){
            if($username === $k['username'] && $password === $k['password']){
                header('Location: welcome.php');
            } else{
                header('Location: home.php');
            }
        }
    ?>
    
</body>
</html>