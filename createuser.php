





<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Lord of Houses</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="d-flex" role="search">
              
                <a href="loginpage.php" class="btn btn-outline-success" type="button">Log in</a>
            </li>
          </div>
        </div>
      </nav>

      
      <div class="container mt-5 col-2 text-center">
        <h5>Welcome!</h5>
        <h9>Join our community</h9>
        </br>
        <h9>Create an account</h9>

      </div>
      <div class="container mt-5 col-4 text-right">
        <form action="unos.php" method="POST">

            <table class="table table-dark table-striped">
                <tr class="row col-10 text-center">
                    <td>
                        <label>Input name</label>
                    </td>
                    
                </tr>
                <tr class="row col-10">
                    <td>
                        <input id="ime" name="ime" placeholder="your name" type="text" required="required" class="form-control">
                    <td>
                </tr>
                <tr class="row col-10 text-center">
                    <td>
                        <label>Input password</label>
                    </td>
                    
                </tr>
                <tr class="row col-10">
                    <td>
                        <input id="password" name="pass" placeholder="your password" type="password" required="required" class="form-control">
                    <td>
                </tr>
                <tr class="row col-10 text-center">
                    <td>
                        <center><button class="btn btn-primary" name="insert">Create account</button></center>
                    </td>
                </tr>

            </table>
        </form>

    </div>

    <div class="container mt-5 col-2 text-center">
        <p>Already have an account?</p>
        <h9><a href="loginpage.php">Log in</a></h9>


    </div>

</body>


</hmtl>