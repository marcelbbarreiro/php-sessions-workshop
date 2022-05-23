<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Method POST: get the inputs data in headers -->
    <form method="POST" action="./modules/getData.php">   
        <input type="text" name="user">
        <input type="text" name="email">
        <input type="password" name="password">
        <select name="selectType" id="selectType">
            <option value="Elige..." >Elige</option>
            <option value="Prueba1">Prueba 1</option>
            <option value="Prueba2">Prueba 2</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>