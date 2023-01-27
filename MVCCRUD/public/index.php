<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links bootstrap start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- links bootstrap end -->
    <!-- links css -->
    <link rel="stylesheet" href="../../assets/style.css">
    <!-- links datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <title>Blagues</title>
</head>
<body>
    <div class="row">
        <div class="intro bg-dark d-flex flex-column text-center mx-auto mt-5 py-3 rounded-3 text-white">
            <p class="fs-3 fw-bold">Rire ça fait du bien et pour rire il faut déjà se sentir bien. </p>
            <p class="fs-4">Créer vos propres blagues  <i class="bi bi-emoji-laughing"></i> !</p>
            <!-- Button trigger modal -->
            <button onclick="addNew();" type="button" class="btn btn-light add mx-auto my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus-lg me-1"></i> Ajouter une blague
            </button>
        </div>
    </div>
    <?php
            require "../JokeForm/View.php";
        ?>
    <div class="mt-5 w-75 mx-auto">
        <?php
            require "../JokeList/View.php";
        ?>  
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTableId').DataTable();
    });
</script>
<script src="../../assets/main.js"></script>
</html>