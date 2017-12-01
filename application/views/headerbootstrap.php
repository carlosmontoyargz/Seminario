<!DOCTYPE html>
<html>
<head>
    <title>Seminario 2017</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#pais").change(function () {
                $('#estado').html('');
                $('#municipio').html('');
                $("#pais option:selected").each(function () {
                    pais = $('#pais').val();
                    $.post("http://localhost:8080/seminario/index.php/welcome/llenaEstados", {
                        pais: pais
                    }, function (data) {
                        $("#estado").html(data);
                    });
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#estado").change(function () {
                $('#municipio').html('');
                $("#estado option:selected").each(function () {
                    estado = $('#estado1').val();
                    $.post("http://localhost:8080/seminario/index.php/welcome/llenaMunicipios", {
                        estado: estado
                    }, function (data) {
                        $("#municipio").html(data);
                    });
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sede").change(function () {
                $('#salon').html('');
                $('#inscrito').html('');
                $("#sede option:selected").each(function () {
                    sede = $('#sede').val();
                    $.post("http://localhost:8080/seminario/index.php/welcome/llenaSalones", {
                        sede: sede
                    }, function (data) {
                        $("#salon").html(data);
                    });
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#salon").change(function () {
                $('#inscrito').html('');
                $("#salon option:selected").each(function () {
                    salon = $('#salon1').val();
                    $.post("http://localhost:8080/seminario/index.php/welcome/muestraInscritos", {
                        salon: salon
                    }, function (data) {
                        $("#inscrito").html(data);
                    });
                });
            });
        });
    </script>
</head>