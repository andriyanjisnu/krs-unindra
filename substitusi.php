<?php
class substitusi{//nama class
	public $plaintext;//definisi properti atau variabel
	
	public function __construct($text)//nama konstruktor
	{
		$this->plaintext=$text;//pengambilan nilai variabel
	}
	
	public function get_plaintext()
	{
		return $this->plaintext;
	}
	
	public function encrypt()//definisi method encrypt
	{
		$ascii = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
		$inversi = array('e','d','a','b','c','z','y','x','w','v','u','f','s','r','q','p','o','n','m','l','k','j','i','h','g','9','8','7','6','5','4','3','2','1','0');
		$arr_ascii =[];
		$panjang_plaintext = strlen($this->plaintext);
		for ($a=0; $a < $panjang_plaintext; $a++){
			for ($mulai=0; $mulai < count($ascii);$mulai++){
				if (substr($this->plaintext,$a,1)==$ascii[$mulai]){
					array_push($arr_ascii,$inversi[$mulai]);
				}
			}
		}
		
		return $arr_ascii; 
		
	}
	
	public function decrypt($encrypt)
	{
		$ascii = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
		$inversi = array('e','d','a','b','c','z','y','x','w','v','u','f','s','r','q','p','o','n','m','l','k','j','i','h','g','9','8','7','6','5','4','3','2','1','0');
		$arr_ascii =[];
		$panjang_plaintext = strlen($encrypt);
		for ($a=0; $a<$panjang_plaintext; $a++){
			for ($mulai=0; $mulai<count($inversi);$mulai++){
				if (substr($encrypt,$a,1)==$inversi[$mulai]){
					array_push($arr_ascii,$ascii[$mulai]);
				}
			}
		}
		return $arr_ascii;
	}
	
}

//$kriptografi = new substitusi();

/*==$text = new substitusi("belajar");//definisi sebuah objek
echo "<br>";
$strEncrypt = "";
$strDecrypt = "";
for($a = 0; $a < count($text->encrypt()); $a++){
	$strEncrypt .= $text->encrypt()[$a]." ";
}
echo $strEncrypt;
echo "<br>";
for($a = 0; $a < count($text->encrypt()); $a++){
	$strDecrypt .= $text->decrypt($strEncrypt)[$a]." ";
}
echo $strDecrypt;*/
?>