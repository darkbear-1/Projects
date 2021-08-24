<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
 global $wpdb;
  // Ругаемся, если соединение установить не удалось
  if( ! empty($wpdb->error) ) {
    echo 'Не могу соединиться с БД';
    wp_die( $wpdb->error );
  } 
  $table = 'promocodes';
  if ( $wpdb->get_var("show tables like '".$table."'") != $table ) {
    
   $wpdb->query('CREATE TABLE `promocodes` (
  `id` int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `text` text NOT NULL
)');
}
$text = array('BSNS-FA80-0385-1DFF', 'BSNS-FA80-0385-1DFD');

foreach ($text as $value) {
    $result = $wpdb->query( $wpdb->prepare( 
    	"
    		INSERT INTO promocodes
    		( text )
    		VALUES ( %s )
    	", 
    	$value
    ) );
}
?>