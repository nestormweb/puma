<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estaciones - Puma Energy Paraguay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Gilda+Display&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<body>
    <!-- header / navigation -->
    <?php include("includes/header.php"); ?>
    
    <!-- end header / navigation -->


    <!-- content -->
    <section class="title-estaciones bg-main-title padding-row-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="main-titles font-italic text-white">Encontrá tu estación</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="map-estaciones"></div>
    </section>
    <!-- end content -->


    <!-- footer -->
    <?php include("includes/footer.php"); ?>

    <!-- end footer -->

    <script async defer src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script async defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script async defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzdGMfQ5cRwy2v2Vo-PlOIHdHH1AQvfMc&callback=initMap"></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map-estaciones'), {
                zoom: 6,
                center: {lat: -25.2829488, lng: -57.6344304}
            });
            setMarkers(map);
        }
        
        // Data for the markers consisting of a name, a LatLng and a zIndex for the
        // order in which these markers should display on top of each other.
        
        var beaches = [
            ["Estación Puma"-25.3085444444444,-57.6313944444444,1],
            ["Estación Puma",-25.2741972222222,-57.4966833333333,2],
            ["Estación Puma",-25.29595,-57.4299277777777,3],
            ["Estación Puma",-25.2871,-57.5379027777777,4],
            ["Estación Puma",-25.39205,-57.4680972222222,5],
            ["Estación Puma",-23.6563305555555,-58.6969611111111,6],
            ["Estación Puma",-25.32235,-57.6033916666666,7],
            ["Estación Puma",-25.3481277777777,-57.461975,8],
            ["Estación Puma",-25.2663777777777,-57.4959777777777,9],
            ["Estación Puma",-25.3968333333333,-57.5311194444444,10],
            ["Estación Puma",-25.3607194444444,-57.4319194444444,11],
            ["Estación Puma",-25.319175,-57.5991305555555,12],
            ["Estación Puma",-25.2954361111111,-57.6352611111111,13],
            ["Estación Puma",-25.2745694444444,-57.6082166666666,14],
            ["Estación Puma",-25.3082777777777,-57.5846722222222,15],
            ["Estación Puma",-25.1741083333333,-57.4825611111111,16],
            ["Estación Puma",-25.2644722222222,-57.4878055555555,17],
            ["Estación Puma",-25.2809194444444,-57.4722972222222,18],
            ["Estación Puma",-25.1756333333333,-57.4699472222222,19],
            ["Estación Puma",-24.9678916666666,-57.5496555555555,20],
            ["Estación Puma",-25.313475,-57.5553944444444,21],
            ["Estación Puma",-25.3238916666666,-57.5540611111111,22],
            ["Estación Puma",-25.2693611111111,-57.253625,23],
            ["Estación Puma",-25.3991027777777,-57.2815416666666,23],
            ["Estación Puma",-25.4059555555555,-57.4503055555555,24],
            ["Estación Puma",-25.3955222222222,-57.4666527777777,25],
            ["Estación Puma",-25.2113361111111,-57.4650722222222,26],
            ["Estación Puma",-25.1769555555555,-57.2313166666666,27],
            ["Estación Puma",-25.3829611111111,-57.2590666666666,28],
            ["Estación Puma",-25.165,-57.4673611111111,29],
            ["Estación Puma",-25.4467666666666,-57.4388944444444,30],
            ["Estación Puma",-25.2623527777777,-57.4802555555555,31],
            ["Estación Puma",-25.3402916666666,-57.5965611111111,32],
            ["Estación Puma",-25.3326194444444,-57.5915611111111,33],
            ["Estación Puma",-25.2883777777777,-57.5045,34],
            ["Estación Puma",-25.3496972222222,-57.543925,35],
            ["Estación Puma",-25.3570972222222,-57.5522083333333,36],
            ["Estación Puma",-25.3944666666666,-57.5442805555555,37],
            ["Estación Puma",-25.2880666666666,-57.6478305555555,38],
            ["Estación Puma",-25.3567083333333,-57.5700055555555,39],
            ["Estación Puma",-25.2497138888888,-57.552375,40],
            ["Estación Puma",-25.3826694444444,-57.551075,41],
            ["Estación Puma",-25.3386694444444,-57.5850972222222,42],
            ["Estación Puma",-25.3295333333333,-57.5444555555555,43],
            ["Estación Puma",-25.3438611111111,-57.6178694444444,44],
            ["Estación Puma",-25.3436333333333,-57.5476305555555,45],
            ["Estación Puma",-25.3551583333333,-57.5939083333333,46],
            ["Estación Puma",-25.4015166666666,-57.5438916666666,47],
            ["Estación Puma",-25.2868,-57.589,48],
            ["Estación Puma",-25.3835416666666,-57.5841055555555,48],
            ["Estación Puma",-25.4306083333333,-57.5542166666666,49],
            ["Estación Puma",-25.3348277777777,-57.5680472222222,50],
            ["Estación Puma",-25.4982722222222,-57.4795777777777,51],
            ["Estación Puma",-25.3642222222222,-57.4950888888888,52],
            ["Estación Puma",-25.2262499999999,-57.5336055555555,53],
            ["Estación Puma",-25.3564333333333,-57.5998138888888,54],
            ["Estación Puma",-25.4542694444444,-57.5231805555555,55],
            ["Estación Puma",-25.5370055555555,-57.3249722222222,56],
            ["Estación Puma",-25.3113972222222,-57.5694555555555,57],
            ["Estación Puma",-25.3284583333333,-57.5554361111111,58],
            ["Estación Puma",-24.1952138888888,-56.4345583333333,59],
            ["Estación Puma",-23.8037055555555,-56.5033611111111,60],
            ["Estación Puma",-25.0522777777777,-57.0995777777777,61],
            ["Estación Puma",-24.7235166666666,-56.0163861111111,62],
            ["Estación Puma",-24.6642,-56.4294194444444,63],
            ["Estación Puma",-24.6873861111111,-56.4747166666666,64],
            ["Estación Puma",-24.668575,-56.4621166666666,65],
            ["Estación Puma",-24.4487777777777,-56.9071888888888,66],
            ["Estación Puma",-24.0181222222222,-56.9965833333333,67],
            ["Estación Puma",-24.6698138888888,-56.4456305555555,68],
            ["Estación Puma",-23.6755916666666,-56.4776138888888,69],
            ["Estación Puma",-22.6239583333333,-55.6294555555555,70],
            ["Estación Puma",-24.0663194444444,-56.4490222222222,71],
            ["Estación Puma",-24.5504639734678,-56.4029916213106,72],
            ["Estación Puma",-23.5705805555555,-56.7034833333333,73],
            ["Estación Puma",-24.0013472222222,-56.1309666666666,74],
            ["Estación Puma",-24.18475,-56.5810083333333,75],
            ["Estación Puma",-24.5853027777777,-56.4177083333333,76],
            ["Estación Puma",-24.4974222222222,-55.6688388888888,77],
            ["Estación Puma",-24.5025611111111,-55.6947694444444,78],
            ["Estación Puma",-24.4765361111111,-55.6892861111111,79],
            ["Estación Puma",-24.2652888888888,-55.7910111111111,80],
            ["Estación Puma",-24.5323722222222,-55.8910972222222,81],
            ["Estación Puma",-24.269575,-55.8312916666666,82],
            ["Estación Puma",-25.4524277777777,-56.4439944444444,83],
            ["Estación Puma",-25.3793888888888,-55.6921722222222,84],
            ["Estación Puma",-25.4675166666666,-56.4761555555555,85],
            ["Estación Puma",-25.3892555555555,-57.1609666666666,86],
            [".",-25.143025,-55.5633805555555,87],
            ["Estación Puma",-25.3962027777777,-56.95205,88],
            ["Estación Puma",-25.4515916666666,-56.4436666666666,89],
            ["Estación Puma",-25.3834861111111,-55.6449472222222,90],
            ["Estación Puma",-25.4603472222222,-56.0149388888888,91],
            ["Estación Puma",-25.4707555555555,-56.0186888888888,92],
            ["Estación Puma",-25.3794111111111,-55.702075,93],
            ["Estación Puma",-25.4598555555555,-56.0287638888888,94],
            ["Estación Puma",-25.5298055555555,-56.7215527777777,95],
            ["Estación Puma",-25.3847527777777,-55.8226916666666,96],
            ["Estación Puma",-25.3819611111111,-55.8326444444444,97],
            ["Estación Puma",-26.4615527777777,-56.4034055555555,98],
            ["Estación Puma",-25.5320194444444,-56.734425,99],
            ["Estación Puma",-25.774825,-56.4404305555555,100],
            ["Estación Puma",-25.4342361111111,-56.4275472222222,101],
            ["Estación Puma",-25.4624916666666,-56.8717027777777,102],
            ["Estación Puma",-26.1114805555555,-55.9420805555555,103],
            ["Estación Puma",-25.3781305555555,-55.7077472222222,104],
            ["Estación Puma",-24.997147222222,-55.8206416666666,105],
            ["Estación Puma",-24.8133583333333,-55.6207055555555,106],
            ["Estación Puma",-27.3260472222222,-55.8599333333333,107],
            ["Estación Puma",-25.9096638888888,-57.1143694444444,108],
            ["Estación Puma",-26.21785,-56.7617027777777,109],
            ["Estación Puma",-25.8910361111111,-56.8446194444444,110],
            ["Estación Puma",-25.6210222222222,-57.1506944444444,111],
            ["Estación Puma",-25.6126388888888,-57.168875,112],
            ["Estación Puma",-25.7667277777777,-57.2386416666666,113],
            ["Estación Puma",-25.762,-57.2323555555555,114],
            ["Estación Puma",-27.3387527777777,-55.8578416666666,115],
            ["Estación Puma",-27.1001305555555,-56.010475,116],
            ["Estación Puma",-26.6069472222222,-55.3008111111111,117],
            ["Estación Puma",-27.2654083333333,-55.9601555555555,118],
            ["Estación Puma",-26.5377555555555,-55.2568638888888,119],
            ["Estación Puma",-26.8545944444444,-58.2963916666666,120],
            ["Estación Puma",-27.3396305555555,-55.8639916666666,121],
            ["Estación Puma",-27.3114305555555,-55.8433305555555,122],
            ["Estación Puma",-27.1851083333333,-55.7808444444444,123],
            ["Estación Puma",-27.2597888888888,-55.8175416666666,124],
            ["Estación Puma",-27.0602416666666,-55.9076527777777,125],
            ["Estación Puma",-26.574475,-55.5042055555555,126],
            ["Estación Puma",-26.7178972222222,-55.1139194444444,127],
            ["Estación Puma",-26.7843277777777,-56.9424027777777,128],
            ["Estación Puma",-26.885525,-57.0319611111111,129],
            ["Estación Puma",-26.7538722222222,-55.7657611111111,130],
            ["Estación Puma",-26.648925,-55.7754666666666,131],
            ["Estación Puma",-25.5376388888888,-54.6099472222222,132],
            ["Estación Puma",-25.5336138888888,-54.6487666666666,133],
            ["Estación Puma",-25.5264944444444,-54.6374722222222,134],
            ["Estación Puma",-25.3885444444444,-54.6395972222222,135],
            ["Estación Puma",-24.9690472222222,-54.9239972222222,136],
            ["Estación Puma",-25.0255583333333,-54.8166777777777,137],
            ["Estación Puma",-24.9605138888888,-54.7043722222222,138],
            ["Estación Puma",-24.9722777777777,-54.6122694444444,139],
            ["Estación Puma",-24.8192666666666,-54.8985888888888,140],
            ["Estación Puma",-25.4841888888888,-54.8978388888888,141],
            ["Estación Puma",-25.753125,-55.0573555555555,142],
            ["Estación Puma",-24.5149972222222,-54.8515222222222,143],
            ["Estación Puma",-24.5066305555555,-54.8545916666666,144],
            ["Estación Puma",-25.8809694444444,-55.1217805555555,145],
            ["Estación Puma",-25.4811291698487,-54.6573514946288,146],
            ["Estación Puma",-25.7993083333333,-55.0722027777777,147],
            ["Estación Puma",-25.9721916666666,-55.1949555555555,148],
            ["Estación Puma",-26.0704361111111,-54.8984055555555,149],
            ["Estación Puma",-25.6552916666666,-54.7139222222222,150],
            ["Estación Puma",-25.5182611111111,-54.6116638888888,151],
            ["Estación Puma",-25.820175,-54.9065944444444,152],
            ["Estación Puma",-25.4668472222222,-54.996775,153],
            ["Estación Puma",-25.5045166666666,-54.6449499999999,153],
            ["Estación Puma",-25.4387416666666,-55.2513527777777,154],
            ["Estación Puma",-25.4232555555555,-55.3754305555555,155],
            ["Estación Puma",-25.4922722222222,-54.7392833333333,156],
            ["Estación Puma",-24.4366666666666,-55.3610111111111,157],
            ["Estación Puma",-24.0630305555555,-54.3070805555555,158],
            ["Estación Puma",-24.2627388888888,-54.8727777777777,159],
            ["Estación Puma",-25.4902472222222,-54.7592722222222,160],
            ["Estación Puma",-24.241775,-54.7518916666666,161],
            ["Estación Puma",-25.507625,-54.6392833333333,162],
            ["Estación Puma",-24.2539111111111,-54.7702722222222,163],
            ["Estación Puma",-25.4765138888888,-54.6238722222222,164],
            ["Estación Puma",-25.308622, -57.631510,165]
        ];
        
        function setMarkers(map) {
            // Adds markers to the map.
            
            // Marker sizes are expressed as a Size of X,Y where the origin of the image
            // (0,0) is located in the top left of the image.
            
            // Origins, anchor positions and coordinates of the marker increase in the X
            // direction to the right and in the Y direction down.
            
            var image = {
                url: 'images/icono-mapa2.png',
                size: new google.maps.Size(20, 32), // This marker is 20 pixels wide by 32 pixels high.
                origin: new google.maps.Point(0, 0), // The origin for this image is (0, 0).
                anchor: new google.maps.Point(0, 32) // The anchor for this image is the base of the flagpole at (0, 32).
            };
            
            // Shapes define the clickable region of the icon. The type defines an HTML
            // <area> element 'poly' which traces out a polygon as a series of X,Y points.
            // The final coordinate closes the poly by connecting to the first coordinate.
            
            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18, 1],
                type: 'poly'
            };
            
            for (var i = 0; i < beaches.length; i++) {
                var beach = beaches[i];
                var marker = new google.maps.Marker({
                    position: {lat: beach[1], lng: beach[2]},
                    map: map,
                    icon: image,
                    shape: shape,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
        }
    </script>
</body>
</html>