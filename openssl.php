 <?php  

/*  UDEMY - PHP7 - SEGURANÇA
 *
 *	OPENSSL
 *	|	
 *	|	
 * 	|	
 *	|	
 *  |   
 *  |   
 *  |   
 *  |   
 *
 *	~GABRIEL MARTINS
 */	

 define('SECRET_IV', pack('a16','senha'));
 define('SECRET', pack('a16','senha'));

 $data = [
 	'nome'=>'gabriel'
 ];


 $openssl = openssl_encrypt(
 	json_encode($data),
 	'AES-128-CBC',
 	SECRET,
 	0,
 	SECRET_IV
 );

 //echo $openssl;

 ####

 $string = openssl_decrypt(
 	$openssl, 
 	'AES-128-CBC', 
 	SECRET, 
 	0, 
 	SECRET_IV
 );

echo "<br>";

echo "<pre>";
var_dump(json_decode($string, true));
echo "</pre>";

for ($i = 0; $i <= 17; $i++) { 
	
	echo $string[$i];
	
}