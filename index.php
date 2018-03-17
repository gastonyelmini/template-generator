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

          <form target="_blank" enctype="multipart/form-data" action="controllers/generate-controller.php" method="post">
            <!-- Imagen pricipal del template -->
            <label for="main-image" class="uppercase">Indique la <span class="mark-color">imágen principal</span></label>
            <input class="select-file" type="file" name="main-image" value="" required="true">

            <!-- Titulo pricipal del template -->
            <label for="main-title" class="uppercase">Indique el <span class="mark-color">título principal</span></label>
            <input class="text-input" type="text" name="main-title" value="" placeholder="Ej: La era del entrepreneurship" required="true">

            <!-- Datos del autor -->
            <label class="uppercase">Ingrese los <span class="mark-color">datos del autor</span></label>
            <input class="text-input" type="text" name="editor-name" value="" placeholder="Nombre de autor" required="true">
            <input class="text-input" type="text" name="editor-twitter" value="" placeholder="Twitter de autor" required="true">
            <input class="text-input" type="text" name="publish-date" value="" placeholder="Fecha de publicacion" required="true">
            <textarea name="description" class="text-input" rows="8" placeholder="Descripción"></textarea>
            <input class="text-input" type="text" name="continue-reading" value="" placeholder="Link seguir leyendo" required="true">

            <!-- Destacado semanal -->
            <label class="uppercase">Ingrese el <span class="mark-color">el destacado</span></label>
            <input class="text-input" type="text" name="dest-title" value="" placeholder="Ingrese el título" required="true">
            <input class="text-input" type="text" name="dest-desc" value="" placeholder="Ingrese la descripción" required="true">
            <input class="text-input" type="text" name="dest-link" value="" placeholder="Ingrese el link" required="true">

            <!-- Top 3 - Noticas de la semana -->
            <label class="uppercase">Top 3 - <span class="mark-color">Noticias de la semana</span></label>
            <label>Noticia 1</label>
            <input class="text-input" type="text" name="t3-n1-title" value="" placeholder="Titulo">
            <input class="text-input" type="text" name="t3-n1-link" value="" placeholder="Link de la noticia">
            <input class="text-input" type="text" name="t3-n1-desc" value="" placeholder="Descripción">
            <label>Noticia 2</label>
            <input class="text-input" type="text" name="t3-n2-title" value="" placeholder="Titulo">
            <input class="text-input" type="text" name="t3-n2-link" value="" placeholder="Link de la noticia">
            <input class="text-input" type="text" name="t3-n2-desc" value="" placeholder="Descripción">
            <label>Noticia 3</label>
            <input class="text-input" type="text" name="t3-n3-title" value="" placeholder="Titulo">
            <input class="text-input" type="text" name="t3-n3-link" value="" placeholder="Link de la noticia">
            <input class="text-input" type="text" name="t3-n3-desc" value="" placeholder="Descripción">

            <!-- TOP 3 - Proximos eventos -->
            <label class="uppercase">Top 3 - <span class="mark-color">Próximos eventos</span></label>
            <div class="event-container">
              <div class="event">
                <label>Evento 1</label>
                <input class="text-input" type="text" name="e1-title" value="" placeholder="Titulo del evento">
                <input class="text-input" type="text" name="e1-link" value="" placeholder="Link del evento">
                <input class="text-input" type="text" name="e1-desc" value="" placeholder="Descripción del evento">
                <input class="text-input half half-margin" type="text" name="e1-date" value="" placeholder="Fecha del evento">
                <input class="text-input half" type="text" name="e1-type" value="" placeholder="Tipo de evento">
                <input class="text-input half half-margin" type="text" name="e1-fee" value="" placeholder="Tipo de abono">
                <input class="text-input half" type="text" name="e1-location" value="" placeholder="Ubicación">
              </div>
              <div class="event">
                <label>Evento 2</label>
                <input class="text-input" type="text" name="e2-title" value="" placeholder="Titulo del evento">
                <input class="text-input" type="text" name="e2-link" value="" placeholder="Link del evento">
                <input class="text-input" type="text" name="e2-desc" value="" placeholder="Descripción del evento">
                <input class="text-input half half-margin" type="text" name="e2-date" value="" placeholder="Fecha del evento">
                <input class="text-input half" type="text" name="e2-type" value="" placeholder="Tipo de evento">
                <input class="text-input half half-margin" type="text" name="e2-fee" value="" placeholder="Tipo de abono">
                <input class="text-input half" type="text" name="e2-location" value="" placeholder="Ubicación">
              </div>
              <div class="event">
                <label>Evento 3</label>
                <input class="text-input" type="text" name="e3-title" value="" placeholder="Titulo del evento">
                <input class="text-input" type="text" name="e3-link" value="" placeholder="Link del evento">
                <input class="text-input" type="text" name="e3-desc" value="" placeholder="Descripción del evento">
                <input class="text-input half half-margin" type="text" name="e3-date" value="" placeholder="Fecha del evento">
                <input class="text-input half" type="text" name="e3-type" value="" placeholder="Tipo de evento">
                <input class="text-input half half-margin" type="text" name="e3-fee" value="" placeholder="Tipo de abono">
                <input class="text-input half" type="text" name="e3-location" value="" placeholder="Ubicación">
              </div>
            </div>

            <!-- Generar template -->
            <input type="submit" name="preview" value="Previsualizar" class="submit prev">
            <input type="submit" name="generate" value="Generar" class="submit">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
