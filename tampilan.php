<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		include "substitusi.php";
		$chiper = $_POST["chiper"];
		if($chiper == "1"){
			$plaintext = $_POST["plaintext"];
			$text = new substitusi($plaintext);//definisi sebuah objek
			$strEncrypt = "";
			for($a = 0; $a < count($text->encrypt()); $a++){
				$strEncrypt .= $text->encrypt()[$a];
			}
		}else{
			$plaintext = $_POST["plaintext"];
			$text = new substitusi($plaintext);//definisi sebuah objek
			$strEncrypt = "";
			for($a = 0; $a < count($text->decrypt($plaintext)); $a++){
				$strEncrypt .= $text->decrypt($plaintext)[$a];
			}
		}		
	}	
?>
<html>
<head>
<style>
body {
	background-image: url("good.jpg");
	background-repeat: no-repeat;
	background-size: cover
	}
form {color:black;}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    width:200px;
	margin-top:100px;
	margin-right:150px;
	margin-left:500px;
	padding: 20px;
}
</style>
</head>
<body>
<div>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<label for="Ptext">Plaintext</label>
		<input type="text" id="Ptext" name="plaintext" placeholder="Plaintext..">
	<label for="Ctext">Chipertext</label>
		<select name="chiper">
			<option>Choose Chiper</option>
			<option value="1">Encrypt</option>
			<option value="2">Decrypt</option>
		</select><br>
	Result <br>
		<input type="text" name="hasil" value="<?php (isset($strEncrypt) ? $strEncrypt : ""); echo $strEncrypt;?>"><br>
		<input type="submit" value="submit">
	</form>
</div>	
</body>
</html>