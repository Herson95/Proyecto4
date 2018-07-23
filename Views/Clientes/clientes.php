<html>
<head>
<link rel="stylesheet" href="css/estilos.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/media.css">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="/static/fontawesome/fontawesome-all.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/menu.js"></script>
    
</head>

<body>
<header>
        <div class="topnav" id="myTopnav">
            <a href="index.html">Home</a>
            <a href="agencia.php" >Agencias</a>
            <a href="clientes.php" class="active">Clientes</a>
            <a href="hoteles.php">Hoteles</a>
            <a href="vuelos.php">Vuelos</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    </header>
<h1 >REGISTRO DE CLIENTES</h1>
<div>
<div class="wrapper">
  <form class="form" method="post" action="">
 <h3>Datos de Cliente</h3><br>
            <input type="text" name="codigo_c" require placeholder="Codigo"/><br />
            <input type="text" name="nombre_c" require placeholder="Nombre"/><br />
            <input type="text" name="apellido_c" require placeholder="Apellido"/><br />
            <input type="text" name="direccion_c" require placeholder="Direccion"/><br /><br />
            <input type="text" name="telefono_c" require placeholder="Telefono"/><br />
            <input type="submit" name="guardar" value="Guardar" class="boton" />
  </form>
</div>        
        <div class="dv">
        <h1><span class="blue">&lt;</span>Datos Guardados<span class="blue">&gt;</span> </h1>

<table class="container">
	<thead>
		<tr class="some">
            <th><h3>Acciones</h3></th>
            <th><h3>Codigo</h3></th>
            <th><h3>Nombre</h3></th>
            <th><h3>Apellido</h3></th>
			<th><h3>Direccion</h3></th>
            <th><h3>Telefono</h3></th>
		</tr>
	</thead>
	<tbody>
		<tr>
            <td><i class="fas fa-save"></i>
            <i class="fas fa-exchange-alt"></i>
            <i class="fas fa-trash-alt"></i>
        </td>
			<td>ch01</td>
			<td>Juan</td>
            <td>Ramos</td>
            <td>San Miguel</td>
			<td>77777777</td>
		</tr>
		
	</tbody>
</table>

        </div>
        </div>
          <div class="footer">
                <div><p class="copy">Universidad de Oriente &copy; 2018</p></div>
            </div>
       
</body>
</html>