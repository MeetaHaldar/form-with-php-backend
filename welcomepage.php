<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welocome </title>
    <style>
        .responsive {
          width: 100%;
          height: auto;
        }
        </style>
    
</head>
<body>
    <legend> <marquee><h1><?php echo $_GET["email"]; ?><br><?php echo $_GET["name"]; ?></h1></marquee>
    <img class="responsive" width="600" height="400" src="https://www.newsfolo.com/wp-content/uploads/2017/11/hello.jpg"  alt="error,plz check your connection">
</legend>


</body>
</html>