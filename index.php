<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <title>Generador de templates</title>
  </head>
  <body>
    <div class="main-container">
      <div class="form-container">
        <h2>Completá el formulario</h2>
        <p>Rellená todos los campos para generar el template.</p>
        <div class="form-content">

          <form class="" enctype="multipart/form-data" action="controllers/generate-controller.php" method="post">
            <!-- Imagen pricipal del template -->
            <label for="main-image">Indique la imágen principal</label>
            <input class="select-file" type="file" name="main-image" value="" required="true">
            <!-- Titulo pricipal del template -->
            <label for="main-title">Indique el título principal</label>
            <input class="text-input" type="text" name="main-title" value="" placeholder="Ej: La era del entrepreneurship" required="true">
            <!-- Datos del autor -->
            <label>Ingrese los datos del autor</label>
            <input class="text-input" type="text" name="editor-name" value="" placeholder="Nombre de autor" required="true">
            <input class="text-input" type="text" name="editor-twitter" value="" placeholder="Twitter de autor" required="true">
            <input class="text-input" type="text" name="publish-date" value="" placeholder="Fecha de publicacion" required="true">

            <!-- Generar template -->
            <input type="submit" name="generate" value="Generar" class="generate">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
