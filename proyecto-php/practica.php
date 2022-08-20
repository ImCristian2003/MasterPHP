<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .container{
            background: #fff;
            height: 100vh;
            position: relative;
            width: 100%;
        }

        .div1 {
            background: red;
            height: 25vh;
            position: absolute;
            top: 0vh;
            width: 10%;
        }

        .div2 {
            background: orange;
            height: 25vh;
            position: absolute;
            top: 25vh;
            width: 10%;
        }

        .div3 {
            background: lime;
            height: 25vh;   
            position: absolute;
            top: 50vh;
            width: 10%;
        }

        .div4 {
            background: purple;
            height: 25vh;
            position: absolute;
            top: 75vh;
            width: 10%;
        }

        .div1:hover .div4x {
            background: rosybrown;
        }

        /* @keyframes anim {
            0% {
                background: linear-gradient(to left,#434343,#000);
            }
            50% {
                background: linear-gradient(to bottom,#434343,#000);
            }
            100% {
                background: linear-gradient(to right,#434343,#000);
            }
        } */

    </style>
</head>
<body>
    <div class="container">
        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
        <div class="div4"></div>
    </div>
</body>
</html>