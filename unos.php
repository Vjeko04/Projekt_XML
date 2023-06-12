<?php
	if(ISSET($_POST['insert'])){
		
		if(file_exists("lozinke.xml")){
			$lozinke = simplexml_load_file('lozinke.xml');
			$lozinka = $lozinke->addChild('lozinka');
			$lozinka->addChild('ime', $_POST['ime']);
			$lozinka->addChild('pass', $_POST['pass']);
			file_put_contents('lozinke.xml', $lozinke->asXML());
			
			header('location:index.php');
			 
		}
	}
	
?>