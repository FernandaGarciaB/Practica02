<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluir bulma.min.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
<body>
<section class="hero is-primary">
  <div class="hero-body">
    <p class="title">
    <p> Agregue en los siguientes cuadros los datos de la pelicula: </p> 
    <p class="subtitle">
    <div >
			
</div>
  </div>
</section>
          
  		</div>
	</section>
    <section class="section">
		
		<form action="procesador02.php" method="post">
			<div>
            <label>Titulo: </label>
				<input type="text" class="input" name="TituloPelicula" placeholder="Escribe el título de la pelicula"  >
			</div>
			<div>
            <label>Sinopsis:</label>
				<textarea name="Sinopsis" class="input" placeholder="Escriba la sinopsis de la pelicula">
					
				</textarea>
			</div>
			<input style="background-color: #FF9900" type="submit" class="button is-link" value="Agregar">
		</form>
	</section>
    
</body>
</html>