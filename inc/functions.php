<?php

function download_file($site_url, $host_file_name) {
  $options = array(
    CURLOPT_RETURNTRANSFER => true,     // return web page
    CURLOPT_HEADER         => false,    // don't return headers
    CURLOPT_FOLLOWLOCATION => true,     // follow redirects
    CURLOPT_ENCODING       => "",       // handle all encodings
    CURLOPT_USERAGENT      => "spider", // who am i
    CURLOPT_AUTOREFERER    => true,     // set referer on redirect
    CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
    CURLOPT_TIMEOUT        => 120,      // timeout on response
    CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
  );
  $ch      = curl_init( $site_url . $host_file_name );
  curl_setopt_array( $ch, $options );
  $content = curl_exec( $ch );
  $err     = curl_errno( $ch );
  $errmsg  = curl_error( $ch );
  $header  = curl_getinfo( $ch );
  curl_close( $ch );

  $header['errno']   = $err;
  $header['errmsg']  = $errmsg;
  $header['content'] = $content;

  $file_name = uniqid();
  file_put_contents("files/$file_name.txt", $header);
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
