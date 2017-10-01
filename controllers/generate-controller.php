<?php

//START Inicializar una session
session_start();

//START Variables

//Imagen princial del template
$main_image_new_id = uniqid();
$assigned_name = save_image('main-image', $main_image_new_id, '../images/uploads/');
$_SESSION['inputs']['main-image-server-name'] = $assigned_name;

//Titulo principal del template
$main_title = $_POST['main-title'];
$_SESSION['inputs']['main-title'] = $main_title;

//Detalles de autor y fecha
$author_name = $_POST['editor-name'];
$_SESSION['inputs']['editor-name'] = $author_name;

$author_twitter = $_POST['editor-twitter'];
$_SESSION['inputs']['editor-twitter'] = $author_twitter;

$publish_date = $_POST['publish-date'];
$_SESSION['inputs']['publish-date'] = $publish_date;

//START Functiones
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

//Redireccionar luego de haber guardado las variable en la session
header('Location:../layout1.php');
exit;
