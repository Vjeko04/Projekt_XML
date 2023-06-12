<?php

$name="";
$pass="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$ans=$_POST;

	if (empty($ans["name"]))  {
        	echo "No user name!";
    		}
	else if (empty($ans["pass"]))  {
        	echo "No password!";
    		}
	else {
		$name= $ans["name"];
		$pass= $ans["pass"];
	
		provjera($name,$pass);
	}
}

function provjera($name, $pass) {
	
	$xml=simplexml_load_file("lozinke.xml");
	
	foreach ($xml->lozinka as $lozinka) {
  	 	$lozinkaime = $lozinka->ime;
		$lozinkapass = $lozinka->pass;
		if($lozinkaime==$name){
			if($lozinkapass == $pass){
				echo "Welcome $lozinkaime";
				return;
				}
			else{
				echo "Wrong password, please try again";
				return;
				}
			}
		}
	echo "There is no user with that name";
	return;
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Lord of Houses</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontakt.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="houses.php">Houses</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-5 col-4 text-right">
        <form action="" method="post">

            <table class="table table-dark table-striped">
                <tr class="row col-10 text-center">
                    <td>
                        <label>Name</label>
                    </td>
                    
                </tr>
                <tr class="row col-10">
                    <td>
                        <input id="name" name="name" placeholder="your name" type="text">
                    <td>
                </tr>
                <tr class="row col-10 text-center">
                    <td>
                        <label>Password</label>
                    </td>
                    
                </tr>
                <tr class="row col-10">
                    <td>
                        <input id="password" name="pass" placeholder="your password" type="password">
                    <td>
                </tr>
                <tr class="row col-10 text-center">
                    <td>
                        <input name="submit" type="submit" value=" Login ">
                    </td>
                </tr>

            </table>
        </form>

    </div>

    <div class="container mt-5 col-2 text-center">
        <p>Don't have an account?</p>
        <h9><a href="createuser.php">Create account</a></h9>


    </div>


</body>


</hmtl>