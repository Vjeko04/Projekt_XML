
<?php


$xml = simplexml_load_file('maintxt.xml');

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
            <a class="navbar-brand" href="#">Lord of Houses</a>
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


                </ul>
                <li class="d-flex" role="search">

                    <a href="loginpage.php" class="btn btn-outline-success" type="button">Log in</a>
                </li>
            </div>
        </div>
    </nav>

    <div class="container mt-5 col-4">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Region</th>
                    <th scope="col">Allegiance</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($xml->house as $house): ?>
                    <tr>
                        <td><?php echo $house->name; ?></td>
                        <td><?php echo $house->region; ?></td>
                        <td><?php echo $house->allegiance; ?></td>
                    </tr>
                <?php endforeach; ?>
                    
               

            </tbody>
        </table>
    </div>


</body>


</hmtl>