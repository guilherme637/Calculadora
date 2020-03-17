<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Calculadora</title>
    <style type="text/css">
      body{
        position: absolute;
      }
      .container{
        text-align:center;
        height: 90px;
        margin:30px;
        width: 600px;
        position: absolute;
        
      }

      .formatacao{
          padding:2px;
          
          display:;
          top: 110%;
          left:3%;
          transform:translate(3%, 110%);
      }
      .resultado{
         border:1px solid black;
         background:#BCF5A9;
      }

      .link{
          border:1px solid black;
          height:40px;
          padding:5px;
          background:#BCF5A9;
      }
    }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="resultado">   
             <h3>Resultado</h3>
          </div>
         <?php
            $valor1 = $_GET["valor"] ?? "Digete um valor.";
            $valor2 = $_GET["valor2"] ?? "Difite um segundo valor";
            $calculo = $_GET["op"] ?? " Digite uma operação.";
        
            switch($calculo){
                case 1:
                    $r = $valor1 + $valor2;
                   echo "<div class='formatacao'>";
                   echo "$valor1 + $valor2 = ". number_format($r,2,",",".");
                   echo "</div> <br>";
                    break;

                case 2:
                    $r = $valor1 - $valor2;
                    echo "<div class='formatacao'>";
                   echo "$valor1 - $valor2 = ". number_format($r,2,",",".");
                   echo "</div> <br>";
                    break;

                case 3;
                    $r = $valor1 / $valor2;
                    echo "<div class='formatacao'>";
                   echo "$valor1 / $valor2 = ". number_format($r,2,",",".");
                   echo "</div> <br>";
                    break;
                
                case 4;
                    $r = $valor1 * $valor2;
                    echo "<div class='formatacao'>";
                    echo "$valor1 x $valor2 = ". number_format($r,2,",",".");
                    echo "</div> <br>";
                    break;
                
            }
        
        ?>
        <br>
        <div class="link">
        <a href="index.html">Voltar</a>
        <div>
      </div>  
  </body>
</html>





