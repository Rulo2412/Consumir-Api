<?php
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1);{
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $type = $row['type'];
    }
}

if (isset($_POST['update'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];

    $query = "UPDATE task set name = '$name', type = '$type' WHERE id = $id";
    mysqli_query($conn,$query);
    header("Location: index.php");
}

?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" value="<?php echo $name; ?>" 
                        class="form-control" placeholder="Actualiza el titulo">

                    </div>
                    <div class="form-group">
                        <textarea name="type" rows="2" class="from-control" placeholder="Actualiza el tipo">
                            <?php echo $type?></textarea>
                    </div>

                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>