<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoLaravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <p class="navbar-brand">Aplicacion Sencilla Laravel Ruben Fernandez</p>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Aplicacion Sencilla Laravel</h1>
            <p class="lead">Calculadora</p>
        </div>
    </div>

    <div class="row">
                <div class="col-6">
                    <div class="p-3 m-2 bg-info text-white">
                        <h4>Calculadora Formulario</h4> <br>
                        <form class="form-inline" method="post" action="#">
                            <div class="form-group mx-sm-1 mb-2">
                                <input type="number" class="form-control" id="num1" name="num1">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="number" class="form-control" id="num2" name="num2">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Calcular</button>
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <div class="p-3 m-2 bg-success text-white">
                        <h4>Calculadora Resultado</h4> <br>
                        <?php
                        class Calculadora {
                            public static function sumar($num1, $num2){
                                return $num1 + $num2;
                            }

                            public static function restar($num1, $num2){
                                return $num1 - $num2;
                            }

                            public static function multi($num1,$num2){
                                return $num1 * $num2;
                            }

                            public static function divi($num1,$num2){
                                return $num1 / $num2;
                            }
                        }
                            if(isset($_POST['num1']) && isset($_POST['num2'])){
                                echo "El resultado de la suma es " . Calculadora::sumar($_POST["num1"],$_POST["num2"]). "<br>";
                                echo "El resultado de la resta es " . Calculadora::restar($_POST["num1"],$_POST["num2"]). "<br>";
                                echo "El resultado de la multiplicacion es " . Calculadora::multi($_POST["num1"],$_POST["num2"]). "<br>";
                                echo "El resultado de la division es " . Calculadora::divi($_POST["num1"],$_POST["num2"]). "<br>";
                            } else {
                                echo "Esperando calculo...";
                            }
                        ?>
                    </div>
                </div>
        </div>
</body>
</html>