 <!DOCTYPE html>
 <html>
  <head>
        <title>calculo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="bootstrap-4.4.1//js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <style type="text/css">
            body{
                position: relative;
            }
            .container{
                width:500px;
                height:250px;
                border:1px solid black;
                position:absolute;
                background:#E3B083;
                left:12%;
                transform:translate(12%);
                margin:150px;
                color:black;
            }
            
            a{
                border:1px solid black;
                color: black;
                background:#E6E6E6;
            }
            div{
                text-align:center;
                color:black;
                border:1px solid black;
                margin:9px;
                background:#A4A4A4;
                
            }
            .span1{
                color:green;
            }
            .span2{
                color:#FA5858;
            }
            .span3{
                color:#FF0000;
            }
        </style>
  </head>

  <body>
        <div class="container">
            
            <?php

                $peso =  $_GET["kg"] ?? "Digite o valor de peso";
                $altura = $_GET["alt"] ??"Digete o valor de altura";
                $cal = $peso / ($altura * $altura);
                echo "<div>Peso(kg): $peso kg</div>";
                echo "<div>Altura : $altura m</div>";
                echo "O seu IMC é : ".  number_format($cal,2,",",".");
                echo "<br>";

            
                
                if ($cal < 10){
                    echo "<span class='span2'>Desnutrição Grau 5</span> <br>";
                }elseif($cal < 10 && $cal <= 12.9){
                    echo "<span class='span2'> Estado: Desnutrição Grau 4</span> <br>";
                }elseif($cal <= 16 && $cal <=15.9){
                    echo "<span class='span2'>Estado: Desnutrição Grau 3</span> <br>";
                }elseif($cal >= 16 && $cal <= 16.9){
                    echo "<span class='span2'>Estado: Desnutrição Grau 2></span> <br>";
                }elseif($cal >= 17 && $cal <= 18.4){
                    echo "<span class='span2'>Estado: Desnutrição Grau 1</span> <br>";
                }elseif($cal >= 18.5 && $cal <= 24.9 ){
                    echo "<span class='span1'>Estado: Normal</span> <br>";
                }elseif($cal >= 25 && $cal <= 29.9){
                    echo "<span class='span3'>Estado: Pré-Obesidade</span> <br>";
                }elseif($cal >= 30 && $cal <= 34.5){
                    echo "<span class='span3'>Estado: Obesidade Grau 1</span> <br>";
                }elseif($cal >= 35 && $cal <= 39.9){
                    echo "<span class='span3'>Estado: Obesidade Grau 2</span> <br>";
                }elseif($cal > 40){
                    echo "<span class='span3'>Estado: Obesidade Grau 3</span> <br>";
                }
                


            ?>
            <br>
            <a href="index.html">Voltar</a>
        </div>
  </body>

</html>

