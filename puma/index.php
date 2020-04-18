<!DOCTYPE html>
<html lang="es">
<head>
    <title>Puma Energy Paraguay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gilda+Display&display=swap" rel="stylesheet"> 

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<body>
    <!-- header / navigation -->
    <?php include("includes/header.php"); ?>
    
    <!-- end header / navigation -->


    <!-- content -->
    <section>
        <!-- <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/352715409?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script> -->

        <!-- <video autoplay="autoplay" muted="muted" loop="loop">
            <source src="media/Puma-Energy-llego-al-Paraguay.mp4" type="video/mp4">
        </video> -->

        <div class="main-carousel">
            <div><img class="img-fluid" src="images/slide-home-01.jpg" alt=""></div>
            <div><img class="img-fluid" src="images/slide-home-02.jpg" alt=""></div>
            <div><img class="img-fluid" src="images/slide-home-03.jpg" alt=""></div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h1>Hola</h1>
            </div>
        </div>
    </section>
    <!-- end content -->


    <!-- footer -->
    <?php include("includes/footer.php"); ?>

    <!-- end footer -->

    <!-- JS -->
    <script async defer src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script async defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script async defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script async defer src="js/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.main-carousel').slick({
                autoplay: true,
                arrows: true,
                dots: true
            });
        });
    </script>
</body>
</html>