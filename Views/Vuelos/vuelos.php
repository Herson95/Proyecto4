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
            <a href="clientes.php">Clientes</a>
            <a href="hoteles.php">Hoteles</a>
            <a href="vuelos.php" class="active">Vuelos</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    </header>
<h1 >REGISTRO DE VUELOS</h1>
<div>
<div class="wrapper">
  <form class="form" method="post" action="">
 <h3>Datos de Vuelo</h3><br>
            <input type="text" name="numero" require placeholder="Numero de Vuelo"/><br />
            <label>Fecha: </label>
            <input type="date" name="fecha" require /><br />
            <label>Hora:</label>
            <input type="time" name="hora" require/><br /><br>
            <select name="origen" id="ovuelos" require>
                <option value="value1">Boston/ BOS/ Aeropuerto Internacional de Logan</option> 
                <option value="value2" selected>Buenos Aires/ EZE/ Aeropuerto Internacional Ministro Pistarini</option>
                <option value="value3">Chicago/	ORD/ Aeropuerto Internacional de O'Hare</option>
            </select>
            <select name="destino" id="dvuelos" require>
                <option value="value1">Boston/ BOS/ Aeropuerto Internacional de Logan</option> 
                <option value="value2" selected>Buenos Aires/ EZE/ Aeropuerto Internacional Ministro Pistarini</option>
                <option value="value3">Chicago/	ORD/ Aeropuerto Internacional de O'Hare</option>
            </select>
            <input type="number" name="p_total" require placeholder="Plazas Totales"/><br />
            <input type="number" name="p_turista" require placeholder="Plazas turista"/><br /><br />
            <input type="submit" name="guardar" value="Guardar" class="boton" />
  </form>
</div>        
        <div class="dv">
        <h1><span class="blue">&lt;</span>Datos Guardados<span class="blue">&gt;</span> </h1>

<table class="container">
	<thead>
		<tr class="some">
            <th><h3>Acciones</h3></th>
            <th><h3># Vuelo</h3></th>
			<th><h3>Fecha</h3></th>
			<th><h3>Hora</h3></th>
            <th><h3>Origen</h3></th>
            <th><h3>Destino</h3></th>
            <th><h3>Plazas <br>Totales</h3></th>
            <th><h3>Plazas <br> Turista</h3></th>
		</tr>
	</thead>
	<tbody>
		<tr>
            <td><i class="fas fa-save"></i>
            <i class="fas fa-exchange-alt"></i>
            <i class="fas fa-trash-alt"></i>
        </td>
			<td>95</td>
			<td>63</td>
            <td>01:32</td>
            <td>Japon</td>
			<td>Rusia</td>
			<td>200</td>
			<td>150</td>
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