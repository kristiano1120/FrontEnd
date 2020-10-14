<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RS</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: 'Lato', sans-serif;
            }
        
            .jumbotron {
                padding: 0;
                margin-bottom: 2rem;
                background-color: #e9ecef;
            }
            .header-jumbotron {
                background-image:
                url('https://images.unsplash.com/photo-1601134917279-ef70a0a90f18?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');
                background-attachment: scroll;
                color: #fff;
                text-align: center;
                border-radius: 0;
            }
            .header-jumbotron .perfil-nombre {
                padding: 20px;
                background-color: #343a40;
                margin-top: 20px;
            }
            .navbar {
                background: #212529;
                color: #fff;
                border-radius: 0;
            }

            .navbar-nav>li>a {
                color: #fff;
            }

            .navbar-nav>li>a:hover {
                color: #000;
            }
        </style>
    </head>