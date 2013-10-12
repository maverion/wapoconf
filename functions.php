<?php

class WPONA {

	private static $instance;

	public static function init() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new WPONA;
		}
		return self::$instance;
	}

	public static function get_directory() {
		if ( $_SERVER[ 'SERVER_NAME' ] == '127.0.0.1' ) {
			$directory = 'http://127.0.0.1/wp-ona';
		} else {
			$directory = 'http://wpona.com';
		}

		echo $directory;
	}

}

WPONA::init();