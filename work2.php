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
        table,th,td{
            border: 1px solid grey;
        }
    </style>
</head>
<body>
<header>
    <div class="container" >
        <a href="index.php" class="logo">PHP </a>

        <nav>
            <ul>
                <li><a href="work1.php" class="decorate">Work 1</a> </li>
                <li><a href="work2.php" class="decorate">Work 2</a> </li>
                <li><a href="work3.php" class="decorate">Work 3</a> </li>
                <li><a href="https://github.com/Jonny007/PHP" class="decorate" >Git </a> </li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <table>
        <tr>
            <th style="font-size:small ; color: #393838;"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a style='color: red'>".$y."</a>=<a style='color: red'>".($x*$y)."</a><br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a style='color: red'>".$y."</a>=<a style='color: green'>".($x*$y)."</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a style='color: red'>".$y."</a>=<a style='color: yellow'>".($x*$y)."</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a style='color: red'>".$y."</a>=<a style='color: blue'>".($x*$y)."</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=1;$y<=1;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a style='color: red'>".$y."</a>=<a style='color: red'>1</a><a>0</a><br>";
                    }

                }
                ?></th>
            <th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a style='color: green'>".$y."</a>=<a style='color: green'>".($x*$y)."</a><br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a style='color: green'>".$y."</a>=<a style='color: blue'>".($x*$y)."</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a style='color: green'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a style='color: green'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: green'>".$y."</a>=<a style='color: red'>1</a><a>0</a><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: green'>".$y."</a>=<a style='color: red'>1</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: green'>".$y."</a>=<a style='color: red'>1</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: green'>".$y."</a>=<a style='color: red'>1</a><a>6</a><br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: green'>".$y."</a>=<a style='color: red'>1</a><a>8</a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=2;$y<=2;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a style='color: green'>".$y."</a>=<a style='color: green'>2</a><a>0</a><br>";
                    }

                }
                ?></th>
            <th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a style='color: yellow'>".($x*$y)."</a><br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a style='color: red'>1</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a style='color: red'>1</a><a>5</a><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a style='color: red'>1</a><a>8</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a style='color: green'>2</a><a style='color: red'>1</a><br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a style='color: green'>2</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: yellow'>".$y."</a>=<a style='color: green'>2</a><a>7</a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=3;$y<=3;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a style='color: yellow'>".$y."</a>=<a style='color: yellow'>3</a><a>0</a><br>";
                    }

                }
                ?></th>
            <<th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a style='color: blue'>".$y."</a>=<a style='color: blue'>".($x*$y)."</a><br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a style='color: blue'>".$y."</a>=<a>".($x*$y)."</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a style='color: blue'>".$y."</a>=<a style='color: red'>1</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a style='color: blue'>".$y."</a>=<a style='color: red'>1</a><a>6</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: blue'>".$y."</a>=<a style='color: green'>2</a><a>0</a><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: blue'>".$y."</a>=<a style='color: green'>2</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: blue'>".$y."</a>=<a style='color: green'>2</a><a>8</a><br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: blue'>".$y."</a>=<a style='color: yellow'>3</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: blue'>".$y."</a>=<a style='color: yellow'>3</a><a>6</a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=4;$y<=4;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a style='color: blue'>".$y."</a>=<a style='color: blue'>4</a><a>0</a><br>";
                    }

                }
                ?></th>
            <th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a>".$y."</a>=<a style='color: red'>1</a><a>0</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a>".$y."</a>=<a style='color: red'>1</a><a>5</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a>".$y."</a>=<a style='color: green'>2</a><a>0</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: green'>2</a><a>5</a><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: yellow'>3</a><a>0</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: yellow'>3</a><a>5</a><br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a>0</a><br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a>5</a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=5;$y<=5;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }

                ?></th>
        </tr>
        <tr>
            <th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a>".$y."</a>=<a style='color: red'>1</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a>".$y."</a>=<a style='color: red'>1</a><a>8</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a>".$y."</a>=<a style='color: green'>2</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: yellow'>3</a><a>0</a><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: yellow'>3</a><a>6</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a>8</a><br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a>5</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=6;$y<=6;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                ?></th>
            <th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a>".$y."</a>=<a style='color: red'>1</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a>".$y."</a>=<a style='color: green'>2</a><a style='color: red'>1</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a>".$y."</a>=<a style='color: green'>2</a><a>8</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: yellow'>3</a><a>5</a><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a>9</a><br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a>6</a><a style='color: yellow'>3</a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=7;$y<=7;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }

                ?></th>
            <th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a>".$y."</a>=<a style='color: red'>1</a><a>8</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a>".$y."</a>=<a style='color: green'>2</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a>".$y."</a>=<a style='color: yellow'>3</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a>0</a></s><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a>8</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a>6</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a>7</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=8;$y<=8;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                ?></th>
            <th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                for($x=2;$x<=2;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a>".$y."</a>=<a style='color: red'>1</a><a>8</a><br>";
                    }

                }
                for($x=3;$x<=3;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a>".$y."</a>=<a style='color: green'>2</a><a>7</a><br>";
                    }

                }
                for($x=4;$x<=4;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a>".$y."</a>=<a style='color: yellow'>3</a><a>6</a><br>";
                    }

                }
                for($x=5;$x<=5;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a style='color: blue'>4</a><a>5</a><br>";
                    }

                }
                for($x=6;$x<=6;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a>5</a><a style='color: blue'>4</a><br>";
                    }

                }
                for($x=7;$x<=7;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a>6</a><a style='color: yellow'>3</a><br>";
                    }

                }
                for($x=8;$x<=8;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a>7</a><a style='color: green'>2</a><br>";
                    }

                }
                for($x=9;$x<=9;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a>".$x."</a>*<a>".$y."</a>=<a>8</a><a style='color: red'>1<a><br>";
                    }

                }
                for($x=10;$x<=10;$x++)
                {

                    for ($y=9;$y<=9;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a>".$y."</a>=".($x*$y)."<br>";
                    }

                }
                ?>
            </th>
            <th style="font-size:small ; color: #393838"><?php

                for($x=1;$x<=1;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a style='color: red'>".$x."</a>*<a style='color: red'>1</a><a>0</a>=<a style='color: red'>1</a><a>0</a><br>";

                    }

                }
                for($x=2;$x<=2;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a style='color: green'>".$x."</a>*<a style='color: red'>1</a><a>0</a>=<a style='color: green'>2</a><a>0</a><br>";

                    }

                }
                for($x=3;$x<=3;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a style='color: yellow'>".$x."</a>*<a style='color: red'>1</a><a>0</a>=<a style='color: yellow'>3</a><a>0</a><br>";

                    }

                }
                for($x=4;$x<=4;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a style='color: blue'>".$x."</a>*<a style='color: blue'>4</a><a>0</a>=<a style='color: blue'>4</a><a>0</a><br>";

                    }

                }
                for($x=5;$x<=5;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>1</a><a>0</a>=".($x*$y)."<br>";

                    }

                }
                for($x=6;$x<=6;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>1</a><a>0</a>=".($x*$y)."<br>";

                    }

                }
                for($x=7;$x<=7;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>1</a><a>0</a>=".($x*$y)."<br>";

                    }

                }
                for($x=8;$x<=8;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a>".$x."</a>*<a style='color: red'>1</a><a>0</a>=".($x*$y)."<br>";

                    }

                }
                for($x=9;$x<=9;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a >".$x."</a>*<a style='color: red'>1</a><a>0</a>=".($x*$y)."<br>";

                    }

                }
                for($x=10;$x<=10;$x++)

                {

                    for ($y=10;$y<=10;$y++)
                    {
                        print "<a style='color: red'>1</a><a>0</a>*<a style='color: red'>1</a><a>0</a>=<a style='color: red'>1</a><a>0</a><a>0</a><br>";

                    }

                }

                ?></th>
        </tr>
    </table>
</main>
<footer>
    <div class="container" style=" text-align: center;" >
        @PHP Learn 2021
    </div>
</footer>
</body>




