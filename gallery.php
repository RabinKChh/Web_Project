<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to Gurus of Fitness</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Gurus of Fitness|Zumba| Yoga | Sauna ">
    <meta name="description" content="Gurus of Fitness|Zumba classes| Yoga classes | Sauna classes">
    <meta name="author" content="Rabin Kumar Chhatkuli">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="asset/images/favicon1.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
  <body>
    <!--header start-->
    <?php
    include 'header.php';
    ?>
    <!--header end-->
    <!--heading start-->
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container text-center">
            <h2 class="display-4">Gallery</h2>
        </div>
    </div>
    <!--heading end-->
    <!--Mainbody start-->
    <div class="container-fluid bg-white" style="padding: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    //create variable
                    $dir=glob('asset/images/{*.jpg, *.png, *.jpeg, *.webp}',GLOB_BRACE);
                    //loop start
                    foreach($dir as $value)
                    {
                        ?>
                        <!-- photo insert-->
                        <a href="<?php echo $value; ?>">
                            <img src="<?php echo $value; ?>" alt="fitness" width="300px" 
                            align="left" hspace="5px" vspace="5px">
                        </a>
                        <!--loop end-->
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-3">
                <?php
                  include 'rightbar.php';
                 ?>
                </div>
            </div>
        </div>
    </div>
    <!--Mainbody start-->
    <!--Footer end-->
    <?php
    include 'footer.php';
    ?>
    <!--Footer end-->
  </body>
</html>