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
function save_file() {
  $file_name = uniqid();
  file_put_contents("../files/$file_name.txt", ob_get_contents());
}

//Guardar images
function save_image($input_name, $image_name, $path) {
  if ($_FILES[$input_name]['error'] == UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
		move_uploaded_file(
			$_FILES[$input_name]['tmp_name'],
			$path.$image_name.'.'.$ext
		);
		return $image_name.'.'.$ext;
  }
}
