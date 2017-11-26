<?php


add_action( 'wp_enqueue_scripts', 'jquery_method' );
function jquery_method(){
	wp_enqueue_script( 'jquery' );
	//wp_enqueue_script( 'newscript', get_stylesheet_directory_uri(). '/mscript.js');
}

function copyright_data( $data_start ){
	$data_end= date("Y");
	$strRet=' ';
	if($data_start!=$data_end){$strRet=$data_start.' - '.$data_end;}
			else{$strRet=$data_start;}
return $strRet;			
}
