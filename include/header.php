<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tolaram</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/tympanus/default.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/tympanus/component.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fullpage/jquery.fullPage.css">

    <script src="assets/js/jquery.min.js"></script>

     <script>
        function adjustColor(someelement)
        {
           var rgbstring = someelement.style.backgroundColor;
           var triplet = rgbstringToTriplet(rgbstring);
           var newtriplet = [];
           // white or black:
           var total = 0; for (var i=0; i (3*256/2)) {
                 // Background color is white:
             newtriplet = [0,0,0];
           } else {
                 // Background color is dark:
             newtriplet = [255,255,255];
           }

           var newstring = "rgb("+newtriplet.join(",")+")";
           someelement.style.color = newstring;
           return true;
        }
    </script>
    
    <style type="text/css">
        .menu-trigger span.before_active_white {
          background:#000 !important;
        }

        .menu-trigger span.after_active_white{
          background:#000 !important;
        }
        .menu-trigger span.before_active_white, 
        .menu-trigger span.before_active_black {
            -webkit-transform:rotate(45deg);
            transform:rotate(45deg);
        }

        .menu-trigger span.after_active_white, 
        .menu-trigger span.after_active_black{
            -webkit-transform:rotate(-45deg);
            transform:rotate(-45deg);
        }
    </style>

</head>
<body>