<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="default">
        <tr>
            <th>Nomrbre</th>
            <th>Altura</th>
            <th>Email</th>
        </tr>
        <tr>
            <?php
                $personas = [["nombre" => "Karlos", "altura" => 1.82, "email" => "ejemplo@gmail.com"], 
                ["nombre" => "Alejandro", "altura" => 1.80, "email" => "ejemplo2@gmail.com"],
                ["nombre" => "Andreu", "altura" => 1.71, "email" => "ejemplo3@gmail.com"],
                ["nombre" => "Ruben", "altura" => 2.03, "email" => "ejemplo4@gmail.com"],
                ["nombre" => "Koke", "altura" => 1.76, "email" => "ejemplo5@gmail.com"]
            ];
            foreach ($personas as $persona) {
                echo "personas";
                foreach ($variable as $key => $value) {
                    echo 
                }
            }
            ?>
        </tr>
    </table>
</body>
</html>