
<?php 
    echo('<pre>');
    print_r($_GET);
    echo('</pre>');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method='get' action="">
        <div>Como conheceu nosso site</div>

        <label for="carta">
            <input type="checkbox" name="carta" id="carta">
            Por carta
        </label>

        <label for="miojo">
            <input type="checkbox" name="miojo" id="miojo">
            Por propagando do miojo
        </label>

        <label for="amigo">
            <input type="checkbox" name="amigo" id="amigo">
            Por amigo
        </label>

        <label for="outros">
            <input type="text" name="outros" id="outros">
            Outros...
        </label>

    <button type='submit'>Enviar</button>

    </form>
</body>
</html>