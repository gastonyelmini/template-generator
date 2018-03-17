<?php

//Guardo los inputs de sesion en Variables

//Accion deseada
$action = $_SESSION['inputs']['action'];

//Main image and title
$main_title = $_SESSION['inputs']['main-title'];
$main_image_path = $_SESSION['inputs']['main-image-server-name'];

//Author and publish date
$author_name = $_SESSION['inputs']['editor-name'];
$author_twitter = $_SESSION['inputs']['editor-twitter'];
$publish_date = $_SESSION['inputs']['publish-date'];
$description = $_SESSION['inputs']['description'];
$continue_reading = $_SESSION['inputs']['continue-reading'];

//Destacado
$dest_title = $_SESSION['inputs']['dest-title'];
$dest_desc = $_SESSION['inputs']['dest-desc'];
$dest_link = $_SESSION['inputs']['dest-link'];

//TOP 3 - NOTICIAS DE LA SEMANA

// Noticia 1
$t3_n1_title = $_SESSION['inputs']['t3-n1-title'];
$t3_n1_link = $_SESSION['inputs']['t3-n1-link'];
$t3_n1_desc = $_SESSION['inputs']['t3-n1-desc'];

// Noticia 2
$t3_n2_title = $_SESSION['inputs']['t3-n2-title'];
$t3_n2_link = $_SESSION['inputs']['t3-n2-link'];
$t3_n2_desc = $_SESSION['inputs']['t3-n2-desc'];

// Noticia 3
$t3_n3_title = $_SESSION['inputs']['t3-n3-title'];
$t3_n3_link = $_SESSION['inputs']['t3-n3-link'];
$t3_n3_desc = $_SESSION['inputs']['t3-n3-desc'];

//TOP 3 - EVENTOS DE LA SEMANA

//Evento 1
$e1_title = $_SESSION['inputs']['e1-title'];
$e1_link = $_SESSION['inputs']['e1-link'];
$e1_desc = $_SESSION['inputs']['e1-desc'];
$e1_date = $_SESSION['inputs']['e1-date'];
$e1_type = $_SESSION['inputs']['e1-type'];
$e1_fee = $_SESSION['inputs']['e1-fee'];
$e1_location = $_SESSION['inputs']['e1-location'] ;

//Evento 2
$e2_title = $_SESSION['inputs']['e2-title'];
$e2_link = $_SESSION['inputs']['e2-link'];
$e2_desc = $_SESSION['inputs']['e2-desc'];
$e2_date = $_SESSION['inputs']['e2-date'];
$e2_type = $_SESSION['inputs']['e2-type'];
$e2_fee = $_SESSION['inputs']['e2-fee'];
$e2_location = $_SESSION['inputs']['e2-location'] ;

//Evento 3
$e3_title = $_SESSION['inputs']['e3-title'];
$e3_link = $_SESSION['inputs']['e3-link'];
$e3_desc = $_SESSION['inputs']['e3-desc'];
$e3_date = $_SESSION['inputs']['e3-date'];
$e3_type = $_SESSION['inputs']['e3-type'];
$e3_fee = $_SESSION['inputs']['e3-fee'];
$e3_location = $_SESSION['inputs']['e3-location'] ;
