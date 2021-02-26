
<head>
    <meta charset="UTF-8">
     <title>PHP Learn</title>
    <style>
        .logo{
            float: left;
            color: white;
            border: 3px solid #f17350;
            border-radius: 5px;
            background: coral;
            text-decoration: none;
            margin-top: -3px;
        }
        nav{
            margin-left: 10%;
        }

        nav ul{
            margin: 0;
            padding: 0;
            list-style: none;

        }
         li{
            display: inline-block;
             padding-left: 5px;

        }

         .decorate{
             text-decoration: none;
             color: #5757a0;
             max-height: 25px;
             width: 5%;
         }
         .decorate:hover{

             color: #fff;
             text-align: center;
             -webkit-animation: rgb 1s ease-in-out ;
             -moz-animation: rgb 1s ease-in-out infinite alternate;
             animation: rgb 1s ease-in-out infinite alternate;
         }
        @-webkit-keyframes rgb{
            from {
                text-shadow: 0 0 5px #e2e3ee, 0 0 10px #acb3de, 0 0 15px #8892e2, 0 0 20px #6b6bde, 0 0 25px #e60073;
            }

        }
        .container{
            width: 100%;
            text-decoration: none;
            font-family: sans-serif;
            padding: 10px 20px;
            background-color: lavender;
            border-bottom: 5px solid #5757a0;
            margin-left: -10px;

        }
        footer{
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 43px;
        }

    </style>
</head>
<body>
<header>
<div class="container" >
    <a class="logo">PHP </a>

    <nav>
        <ul>
            <li><a href="work1.php" class="decorate">Work 1</a> </li>
            <li><a href="work2.php" class="decorate">Work 2</a> </li>
            <li><a href="https://github.com/Jonny007/PHP" class="decorate" >Git </a> </li>
        </ul>
    </nav>
</div>
</header>

<main>
    <?php
    echo " ''Hello, <b>NIX Education<b>''";
    ?>
</main>

<footer>
<div class="container" style=" text-align: center;" >
    @PHP Learn 2021
</div>
</footer>
</body>