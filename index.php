<?php
function generate_password($length) {

$password =''

$letters = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$symbols = '!?&%$<>^+-*/()[]{}@#_=';

$characters = $letters . strtoupper($letters) . $numbers . $symbols;

$total_characters = mb_strlen($characters);

while(mb-strlen($password)< $length) {
    $random_index = rand(0, $total_characters -1);

    $random_character = $characters[$random_index];

    $password .= $random_character;
}

return $password;
}


if(isset($_GET{'length'})){
    $result = generate_password($_GET['length'])
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <div class="wrapper">
            <div class="container mb-3 pt-3">
                <div class="row justify-content-center">
                    <div class="alert alert-info">
                        la tua password è: <strong><?= $result ?></strong>
                    </div>
                    <div class="col-7">
                        <form class="p-3 border border-1 rounded-2 big-light" action="index.php" method="GET">
                            <div clas="row mb-3">
                                <label for="length" class="col-sm-7 col-form-label">Lunghezza password:</label>
                                <div class="col-sm-3">
                                    <input type="number" name="length" class="form-control" min="5" value="5" step="1">
                                </div>
                                

                            </div>

                            <div class="mb-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-3">Invia</button>
                                <button type="reset" class="btn btn-secondary">Annulla</button>

                            </div>
                        
                        </form>

                    </div>

                </div>

            </div>

        </div>
</body>
</html>