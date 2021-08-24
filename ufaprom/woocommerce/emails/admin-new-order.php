<?php
/**
 * Admin new order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-new-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails\HTML
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php /* translators: %s: Customer billing full name */ ?>
<p><?php printf( esc_html__( 'You’ve received the following order from %s:', 'woocommerce' ), $order->get_formatted_billing_full_name() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<?php

/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );

$product = esc_html_e( 'Product', 'woocommerce' );
//esc_html_e( 'Quantity', 'woocommerce' );
//esc_html_e( 'Price', 'woocommerce' );

  $strArr =  explode("\n", $product[0][0]);
$phoneNumber = preg_replace("/[^,.0-9]/", '', $strArr[0]);

 $pattern = '/\n[\s]+/i';
  $replacement = "\n";
  $bot_txt = preg_replace($pattern, $replacement, strip_tags($plain_text));
  $bot_txt = trim($bot_txt);

  $botToken="1654903742:AAHsvYP_V1McyeUW8t3lb8KdQ_pLh6As89I";

  $website="https://api.telegram.org/bot".$botToken;
  $chatId=-493884254;  //** ===>>>NOTE: this chatId MUST be the chat_id of a person, NOT another bot chatId !!!**
  $params=[
      'chat_id'=>$chatId, 
      'text'=> $product,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  
  
  
//   $params_flamix = array(
//       "DOMAIN" => "stroyoborudovanie.bitrix24.ru",
//       "api_token" => "d2b4180715b7d1cf9fdd897fbf9cf52c31bc93899aa4f3274f864b986ea40d21",
//       "FIELDS" => array(
//         "your-name" => "",
//         "your-phone-example" => $phoneNumber,
//         "your-email" => ""
//       )
//     );
    
//       $ch_flamix = curl_init('https://leadwoocommerce.app.flamix.solutions/api/v1/lead/add');
//       curl_setopt($ch_flamix, CURLOPT_HEADER, false);
//       curl_setopt($ch_flamix, CURLOPT_RETURNTRANSFER, 1);
//       curl_setopt($ch_flamix, CURLOPT_POST, 1);
//       curl_setopt($ch_flamix, CURLOPT_POSTFIELDS, http_build_query($params_flamix));
//       curl_setopt($ch_flamix, CURLOPT_SSL_VERIFYPEER, false);
//       $result = curl_exec($ch_flamix);
//       curl_close($ch_flamix);
