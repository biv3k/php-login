<?php 
	class Hash{
		//To SHA256 our password before storing it
		public static function make($string, $salt = '') {
			return hash('sha256', $string . $salt);
		}

		//We add salt(random) to the original password before encoding it with Hash (which adds extra layer of security)
		public static function salt($length) {
			return mcrypt_create_iv($length);
		}

		public static function unique() {
			return self::make(uniqid());
		}
	}
 ?> 
