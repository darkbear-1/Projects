<?php
require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
print_r($_POST);
if( wp_verify_nonce( $_POST['fileup_nonce'], 'file' ) ){

	if ( ! function_exists( 'wp_handle_upload' ) )
		require_once( ABSPATH . 'wp-admin/includes/file.php' );

	$file = & $_FILES['file'];

	$overrides = [ 'test_form' => false ];

	$movefile = wp_handle_upload( $file, $overrides );

	if ( $movefile && empty($movefile['error']) ) {
		echo "Файл был успешно загружен.\n";
		print_r( $movefile );
	} else {
		echo "Возможны атаки при загрузке файла!\n";
	}
}
?>
