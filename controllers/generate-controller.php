<?php

//START Inicializar una session
session_start();

require_once('../inc/functions.php');

//START Variables

//Accion deseada
if ($_POST['preview']) {
  $_SESSION['inputs']['action'] = "preview";
} elseif ($_POST['generate']) {
  $_SESSION['inputs']['action'] = "generate";
} else {
  echo "Ocurrió un error interno.";
}

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

$description = $_POST['description'];
$_SESSION['inputs']['description'] = $description;

$continue_reading = $_POST['continue-reading'];
$_SESSION['inputs']['continue-reading'] = $continue_reading;

//Destacado
$dest_title = $_POST['dest-title'];
$_SESSION['inputs']['dest-title'] = $dest_title;

$dest_desc = $_POST['dest-desc'];
$_SESSION['inputs']['dest-desc'] = $dest_desc;

$dest_link = $_POST['dest-link'];
$_SESSION['inputs']['dest-link'] = $dest_link;

// Top 3 - Noticias de la semana

//Noticia 1
$t3_n1_title = $_POST['t3-n1-title'];
$_SESSION['inputs']['t3-n1-title'] = $t3_n1_title;

$t3_n1_link = $_POST['t3-n1-link'];
$_SESSION['inputs']['t3-n1-link'] = $t3_n1_link;

$t3_n1_desc = $_POST['t3-n1-desc'];
$_SESSION['inputs']['t3-n1-desc'] = $t3_n1_desc;

//Noticia 2
$t3_n2_title = $_POST['t3-n2-title'];
$_SESSION['inputs']['t3-n2-title'] = $t3_n2_title;

$t3_n2_link = $_POST['t3-n2-link'];
$_SESSION['inputs']['t3-n2-link'] = $t3_n2_link;

$t3_n2_desc = $_POST['t3-n2-desc'];
$_SESSION['inputs']['t3-n2-desc'] = $t3_n2_desc;

//Noticia 3
$t3_n3_title = $_POST['t3-n3-title'];
$_SESSION['inputs']['t3-n3-title'] = $t3_n3_title;

$t3_n3_link = $_POST['t3-n3-link'];
$_SESSION['inputs']['t3-n3-link'] = $t3_n3_link;

$t3_n3_desc = $_POST['t3-n3-desc'];
$_SESSION['inputs']['t3-n3-desc'] = $t3_n3_desc;

// Top 3 - Eventos de la semana

//Evento 1
$e1_title = $_POST['e1-title'];
$_SESSION['inputs']['e1-title'] = $e1_title;

$e1_link = $_POST['e1-link'];
$_SESSION['inputs']['e1-link'] = $e1_link;

$e1_desc = $_POST['e1-desc'];
$_SESSION['inputs']['e1-desc'] = $e1_desc;

$e1_date = $_POST['e1-date'];
$_SESSION['inputs']['e1-date'] = $e1_date;

$e1_type = $_POST['e1-type'];
$_SESSION['inputs']['e1-type'] = $e1_type;

$e1_fee = $_POST['e1-fee'];
$_SESSION['inputs']['e1-fee'] = $e1_fee;

$e1_location = $_POST['e1-location'];
$_SESSION['inputs']['e1-location'] = $e1_location;

//Evento 2
$e2_title = $_POST['e2-title'];
$_SESSION['inputs']['e2-title'] = $e2_title;

$e2_link = $_POST['e2-link'];
$_SESSION['inputs']['e2-link'] = $e2_link;

$e2_desc = $_POST['e2-desc'];
$_SESSION['inputs']['e2-desc'] = $e2_desc;

$e2_date = $_POST['e2-date'];
$_SESSION['inputs']['e2-date'] = $e2_date;

$e2_type = $_POST['e2-type'];
$_SESSION['inputs']['e2-type'] = $e2_type;

$e2_fee = $_POST['e2-fee'];
$_SESSION['inputs']['e2-fee'] = $e2_fee;

$e2_location = $_POST['e2-location'];
$_SESSION['inputs']['e2-location'] = $e2_location;

//Evento 3
$e3_title = $_POST['e3-title'];
$_SESSION['inputs']['e3-title'] = $e3_title;

$e3_link = $_POST['e3-link'];
$_SESSION['inputs']['e3-link'] = $e3_link;

$e3_desc = $_POST['e3-desc'];
$_SESSION['inputs']['e3-desc'] = $e3_desc;

$e3_date = $_POST['e3-date'];
$_SESSION['inputs']['e3-date'] = $e3_date;

$e3_type = $_POST['e3-type'];
$_SESSION['inputs']['e3-type'] = $e3_type;

$e3_fee = $_POST['e3-fee'];
$_SESSION['inputs']['e3-fee'] = $e3_fee;

$e3_location = $_POST['e3-location'];
$_SESSION['inputs']['e3-location'] = $e3_location;

//Redireccionar luego de haber guardado las variable en la session
header('Location:../layouts/layout1.php');
exit;
