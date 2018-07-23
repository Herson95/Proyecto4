<html>
<head>
<link rel="stylesheet" href="../../Libs/css/estilos.css" />
<link rel="stylesheet" href="../../Libs/css/style.css" />
<link rel="stylesheet" href="../../Libs/css/footer.css">
<link rel="stylesheet" href="../../Libs/css/media.css">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="/static/fontawesome/fontawesome-all.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../../Libs/js/menu.js"></script>

</head>

<body >
<header>
        <div class="topnav" id="myTopnav">
            <a href="../../index.html">Home</a>
            <a href="../Agencia/agencia.php" class="active">Agencias</a>
            <a href="../Clientes/clientes.php">Clientes</a>
            <a href="../Hoteles/hoteles.php">Hoteles</a>
            <a href="../Vuelos/vuelos.php">Vuelos</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    </header>
<h1 >REGISTRO DE Agencia</h1>
<div id="app">
<div class="wrapper">

		<p class="successMessage" v-if="successMessage">
			{{successMessage}}  <button class="fright close" @click="successMessage = false;">x</button>
		</p>
        <p class="errorMessage" v-if="errorMessage">
			{{errorMessage}}
		</p>

 <h3>Datos de Agencia</h3><br>
 <div v-if="Mostrar_Guardar">
    <?php include_once "agregar.php" ?>
 </div>
 <div v-if="Mostrar_Actualizar">
    <?php include_once "modificar.php" ?>
 </div>
            
            
</div>        
<div class="dv">
 <?php include "eliminar.php" ?>
<h1><span class="blue">&lt;</span>Datos Guardados<span class="blue">&gt;</span> </h1>

<table class="container">
	<thead>
		<tr class="some">
            <th><h3>Acciones</h3></th>
            <th><h3>Codigo</h3></th>
			<th><h3>Direccion</h3></th>
            <th><h3>Telefono</h3></th>
		</tr>
	</thead>
	<tbody>
		<tr v-for="valor in Datos">
            <td>
                <i class="fas fa-exchange-alt" @click="selectAgencia(valor);"></i>
                <i class="fas fa-trash-alt" @click="MostrarModal=true;selectAgencia(valor);Mostrar_Actualizar=false;Mostrar_Guardar=true"></i>
            </td>
			<td>{{valor.Codigo}}</td>
            <td>{{valor.Direccion}}</td>
			<td>{{valor.Telefono}}</td>
		</tr>
		
	</tbody>
</table>

        </div>
</div>
          <div class="footer">
                <div><p class="copy">Universidad de Oriente &copy; 2018</p></div>
            </div>
<script type="text/javascript" src="../../Libs/js/vue.js"></script>
<script type="text/javascript" src="../../Libs/js/axios.js"></script> 
<script type="text/javascript" src="agencia.js"></script> 
</body>
</html>