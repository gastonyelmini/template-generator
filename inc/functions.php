<?php

//Iniciar buffer
function startBuffering() {
  ob_start();
}

//Detener buffer
function stopBuffering() {
  ob_end_flush();
}

//Guardar contenido del buffer
function save_file($files_path) {
  $ext = ".txt";
  //Assing unique id
  $file_name = uniqid();
  //save stream
  file_put_contents("../files/$file_name$ext", ob_get_contents());
  //Descargar el archivo generado
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=$file_name$ext");
}

//Guardar images
function save_image($input_name, $image_name, $path) {
  if ($_FILES[$input_name]['error'] == UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
		move_uploaded_file(
			$_FILES[$input_name]['tmp_name'],
			$path.$image_name.'.'.$ext
		);
  }
  return $image_name.'.'.$ext;
}
