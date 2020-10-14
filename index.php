<?php include('dbcon.php'); ?>

<?php include('index_header.php'); ?>

<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse  order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">RS</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto w-50 order-0">
            <input type="text" id="buscador" class="form-control" placeholder="Buscar">
        </div>
        <div class="navbar-collapse collapse order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="https://www.shareicon.net/data/32x32/2016/05/24/770136_man_512x512.png" alt=""
                            class="rounded">
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <?php include('login_form.php'); ?>
                    </div>
                    <div id="register" class="animate form">
                        <?php include('sign_up_form.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>