<?php
namespace model;

/**
 * Token class
 *
 * @author Kemal Çağrı
 */
use model\validate\Validate;

final class Token {

	/**
	 * token oluşturmak için kullandığımız karakter set
	 */
	const TOKENCHARACTERSET = 'ABCDEFGHIJKLMNOPRSTUVYZXWQ0123456789';
	/**
	 * token oluşturur
	 * @return void
	 */
	public static function createTokenSession(){
		if(!Validate::_isset('token', $_SESSION)){
			Session::createSession(['token'=>self::createToken(6,6)]);
		}
	}
	/**
	 * token oluşturur
	 *
	 * @param integer $len
	 * @param integer $blockLength
	 * @return string
	 */
	private static function createToken($len = 5, $blockLength = 5) {
		$str = '';
		for($i = 0; $i < ($len - 1); $i ++) {
			$str .= self::getToken ( '', 1, $blockLength ) . '-';
		}
		return $str . self::getToken ( '', 1, $blockLength );
	}

	/**
	 * token parçacıklarını oluşturur
	 *
	 * @param type $tokenprefix
	 * @param type $sections
	 * @param type $sectionlength
	 * @return \strıng
	 */
	private static function getToken($tokenprefix, $sections, $sectionlength) {
		$token = $tokenprefix;
		srand ( ( double ) microtime () * 1000000 );
		for($i = 0; $i < $sections; $i ++) {
			for($n = 0; $n < $sectionlength; $n ++) {
				$token .= substr ( self::TOKENCHARACTERSET, rand () % strlen ( self::TOKENCHARACTERSET ), 1 );
			}
			if ($i < ($sections - 1)) {
				$token .= '-';
			}
		}
		return $token;
	}
}