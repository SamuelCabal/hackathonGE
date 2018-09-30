<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/fondo.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
         <ul class="navbar-nav">
          
          <li class="nav-item active">
            <a class="nav-link" href="inicio.php">Inicio <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ruta.php">Rutas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="preguntas.php">Preguntas Frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ayuda.php">Ayuda</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <br>
        <center>
          <h2> Paseos del Pedregal</h2>
        </center>
        <br>

    	<div class="row">
        
        <div class="col-sm-6">
          <br>
          <form action="ruta.php">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Volver a ver las Rutas</button>  
          </form>
        </div>

        <div class="col-sm-6">
          <br>
          <form action="mapa.php">
            <button class="btn btn-success btn-lg btn-block" type="submit">Localizar Ruta</button>  
          </form>
        </div>

        <div class="col-sm-6"> <br></div>

    		<table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Longitud </th>
              <th scope="col">Latitud</th>
              <th scope="col">Lugar</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>20.664786</td>
              <td>100.400155</td>
              <td>Pie de la cuesta</td>
            </tr>
            
            <tr>
              <th scope="row">2</th>
              <td>20.666318</td>
              <td>100.399848</td>
              <td>Anillo vial fray junipero serra</td>
            </tr>
            
            <tr>
              <th scope="row">3</th>
              <td>20.661564</td>
              <td>100.387427</td>
              <td>Anillo vial fray junipero serra</td>
            </tr>
            
            <tr>
              <th scope="row">4</th>
              <td>20.662431</td>
              <td>100.352586</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">5</th>
              <td>20.659757</td>
              <td>100.352586</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">6</th>
              <td>20.660278</td>
              <td>100.347638</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">7</th>
              <td>20.657249, </td>
              <td>100.349287</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>20.656295, </td>
              <td>100.349487</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">9</th>
              <td>20.656541</td>
              <td>100.348979</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">10</th>
              <td>20.660809</td>
              <td>100.346416</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">11</th>
              <td>20.657258</td>
              <td>100.343225</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">12</th>
              <td>20.656862</td>
              <td>100.343060</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">13</th>
              <td>20.660420</td>
              <td>100.343984</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">14</th>
              <td>20.662814</td>
              <td>100.377411</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">15</th>
              <td>20.663190</td>
              <td>100.391411</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">16</th>
              <td>20.666890</td>
              <td>100.403681</td>
              <td>@100.403681</td>
            </tr>
            
            <tr>
              <th scope="row">17</th>
              <td>20.667733</td>
              <td>100.404591</td>
              <td>@fat</td>
            </tr>

            <tr>
              <th scope="row">18</th>
              <td>20.667634</td>
              <td>100.405032</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">19</th>
              <td>20.666347</td>
              <td>100.401733</td>
              <td>@fat</td>
            </tr>
            
            <tr>
              <th scope="row">20</th>
              <td>20.664799</td>
              <td>100.400450</td>
              <td>@fat</td>
            </tr>
          </tbody>
        </table>
    	</div>
    </div>

</body>
</html>