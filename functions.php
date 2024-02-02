<?php
function rubico_add_security_headers() {
	header( "strict-transport-security: max-age=31536000; preload" );
	header( "x-content-type-options: nosniff" );
	header( "x-xss-protection: 1; mode=block" );
	header( "Permissions-Policy: geolocation=(), microphone=(), camera=()" );
	header( "Referrer-Policy: no-referrer-when-downgrade" );
	header ( "Content-Security-Policy: block-all-mixed-content; frame-ancestors 'self'" );
  }
add_action( 'send_headers', 'rubico_add_security_headers' );
