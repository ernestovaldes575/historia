<!doctype html>
<html lang="en">
<head>
    <?php
        $Title = "Inicio";
        include("includes/ligas.php");
    ?>
</head>

<body>
    <?php
        include 'includes/nav.php';
    ?>
    <div class="container-xl">  
        <h1>
            Inicio
        </h1>
    </div>
    
    <div class="container-xl">
        <table class="table table-striped-columns table-bordered">
            <thead>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </thead>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>