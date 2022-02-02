<?php

	$Titulo = $_POST['TituloPelicula'];
	$Sinopsis = $_POST['Sinopsis'];
	
	
    $contenido=
"Titulo: $Titulo
Sinopsis: $Sinopsis";

	$archivo = fopen("peliculas.txt", "w");
	fwrite($archivo,$contenido);
	// Instrucciones para guardar los datos en el archivo libros.txt
     
?>

<?php

				$lecturaArchivo = fopen("peliculas.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);

			?>
</heady>
<body> 
	<div>
	<h1>Se ha agregado correctamente

    </h1>
</div>
</body>
</html>