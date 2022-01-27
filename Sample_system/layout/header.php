<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample System</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a href="http://localhost/PHP_teorija/sample_system/" class="navbar-brand">Sample System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems"
                aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarItems">
                <!-- Menu items -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="http://localhost/PHP_teorija/sample_system/views/file_upload.php" class="nav-link">File
                            Upload Form</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/PHP_teorija/sample_system/views/gallery_upload.php"
                            class="nav-link">Gallery Upload</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/PHP_teorija/sample_system/views/gallery.php"
                            class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Calculators
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="http://localhost/PHP_teorija/sample_system/views/kmi.php">KMI</a>
                            <a class="dropdown-item" href="http://localhost/PHP_teorija/sample_system/views/units.php">Units</a>
                            
                        </div>
                    </li>
                </ul>


                <!-- Authentication links -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/PHP_teorija/sample_system/views/register.php" class="nav-link">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
