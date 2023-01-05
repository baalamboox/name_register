<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-sm-4">
                <form>
                    <div class="form-group">
                        <label for="usuario_nombres">Nombre(s):</label>
                        <input type="text" class="form-control form-control-sm" id="usuario_nombres" placeholder="Ingresar nombre(s)">
                    </div>
                    <div>
                        <span class="btn btn-warning btn-block" id="boton_guardar">Guardar</span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-sm-4">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Nombre(s)</th>
                        </tr>
                    </thead>
                    <tbody id="mostrar_datos">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="lib/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="lib/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(() => {
            $('#boton_guardar').click(() => {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oye!',
                    html: '<div class="form-group"><label for="base_datos">Selecciona la base de datos:</label><select class="form-control" id="dbs"><option value="0">Seleccionar DB</option><option value="1">DB 1</option><option value="2">DB 2</option><option value="3">DB 3</option></select></div>'
                }).then(resultado => {
                    $.ajax({
                        type: 'POST',
                        url: 'control/control-registro-nombre.php',
                        data: {
                            'db': $('#dbs').val(),
                            'nombres': $('#usuario_nombres').val()
                        },
                        success: resultado => {
                            // console.log(resultado);
                            if(resultado == 1) {
                                Swal.fire('Genial!', 'Se registro correctamente tu nombre en la base de datos DB ' + $('#dbs').val(), 'success');
                                $('#mostrar_datos').load('view/tabla.php');
                            }
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>