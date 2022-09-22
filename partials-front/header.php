<?php 
    session_start();
    //session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ad2db55012.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-warning">
        <div class="container-fluid p-3">
          <a class="navbar-brand text-dark" href="index.php">Write Quotes</a>    
          
          <div class="quotations">
            <a href="quotes.php">             
              <button class="btn btn-success" type="submit">
                <?php
                    $count = 0;
                    if(isset($_SESSION['quote']))
                    {
                      $count = count($_SESSION['quote']) ;
                    }
                ?>  
              Quotaions [<?php echo $count; ?>]
              </button>
            </a>
          </div>
        </div>
      </nav>
