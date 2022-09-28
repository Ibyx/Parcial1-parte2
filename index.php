<?php
require_once("controllers/imagen_controller.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>imagenes</title>
</head>

<body>
    <div class="inicio">
        <table class="table table-white table-striped">
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">Nombre de imagen</th>
                <th style="text-align: center;">Modal</th>
            </tr>
            <?php foreach (imagen_controllers::Mostrar() as $Imagen) { ?>
                <tr>
                    <th style="text-align: center;"><?php echo $Imagen->getId() ?></th>
                    <th style="text-align: center;"><?php echo $Imagen->getNom() ?></th>
                    <td style="text-align: center;">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $Imagen->getId() ?>">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $Imagen->getId() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo $Imagen->getRuta() ?>" width="600" height="333">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>