<?php
include('./headeruser.php');
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $ret_val = $obj->createUser();
    if ($ret_val == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Record Saved Successfully");';
        echo 'window.location.href = "crudregistros.php";';
        echo '</script>';
    }
}
?>
<div class="container-fluid bg-3 text-center">
    <h3>CRUD Example Using PHP OOPS And PostgreSQL</h3>
    <a href="crudregistros.php" class="btn btn-primary pull-right" style="margin-top: -30px"><span
            class="glyphicon glyphicon-eye-open"></span> Ver Registros</a>
    <br>

    <div class="panel panel-primary">
        <div class="panel-heading">CRUD Example Using PHP OOPS And PostgreSQL</div>
        <form class="form-horizontal" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-sm-2">Cédula Usuario:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="cedulaUsuario" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Nombre de Usuario:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="nombreUser" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Email:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="email" name="emailUser" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Contraseña:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="password" name="contraseñaUser" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2"></label>

                    <div class="col-sm-5">
                        <input type="submit" class="btn btn-primary" name="submit" value="Agregar">

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include('./footeruser.php'); ?>