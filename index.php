<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Libs/css/estilos.css">
    <link rel="stylesheet" href="Libs/css/footer.css">
    <link rel="stylesheet" href="Libs/css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Agencia de Viaje</title>
</head>

<body>
    <header>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="Views/Agencia/agencia.php">Agencias</a>
            <a href="Views/Clientes/clientes.php">Clientes</a>
            <a href="Views/Hoteles/hoteles.php">Hoteles</a>
            <a href="Views/Vuelos/vuelos.php">Vuelos</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>
    <div id="app">
        <h1>{{name}}</h1>
    </div>
    <footer>
        <div class="footer">
            <div>
                <p class="copy">Universidad de Oriente &copy; 2018</p>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="Libs/js/menu.js"></script>

</body>

</html>