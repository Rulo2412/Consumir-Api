<?php

include("db.php");

include("includes/header.php");

?>

<div class="card card-body">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <input type="text" name="usuario" class="from-control" placeholder="Usuario" autofocus>
                </div>

                <div class="form-group">
                <input type="password" name="password" class="from-control" placeholder="Password" autofocus>
                </div>

                <input type="submit" class="btn btn-success btn-block" name="ingresar" value="Ingresar">

            </form>
        </div>

