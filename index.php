<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="docsupport/prism.css">
    <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="docsupport/style.css">
</head>
<body>
    <form id="register" method="POST" action="action.php">
        <label for="username">Введите ваше ФИО:</label>
        <input type="text" name="username" id="username">
        </br>
        <label for="email">Введите ваш EMAIL:</label>
        <input type="text" name="email" id="email">
        </br>
        <select id="sel_oblast" class="chosen-select" data-placeholder="Выберите область ...">
            <option></option>
        </select>
        </br>
        <select id="sel_city" class="chosen-select" data-placeholder="Выберите город ...">
            <option></option>
        </select>
        </br>
        <select name="territory" id="sel_ter" class="chosen-select" data-placeholder="Выберите район ...">
        </select>
        </br></br>
        <a href="action.php?name='username', email='email', territory='territory'"><button id="submit">Сохранить</button></a>
    </form>
    <script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
    <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
    <script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/validation.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/ajax.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>