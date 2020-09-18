<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<?php include '../layout/header.php'; ?>

<?php
require_once("../config.php");
// $id = $_GET['id'];

// $UpdateNet_margin = $db->prepare("SELECT * FROM net_margin where id_net='$id'");
// $UpdateNet_margin->execute();

// $row = $UpdateNet_margin->fetch(PDO::FETCH_ASSOC);

// $kw1 = $row['kw1'];
// $kw2 = $row['kw2'];
// $kw3 = $row['kw3'];

try {
    
    $sql = "SELECT * FROM net_margin where id_net= ?";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(1, $_REQUEST['id']);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $id = $row['id_net'];
    $tanggal = $row['tanggal'];
    $kw1 = $row['kw1'];
    $kw2 = $row['kw2'];
    $kw3 = $row['kw3'];
    $kw4 = $row['kw4'];

} catch (PDOException $exception) {
    echo "Error: ". $exception->getMessage();
}

?>
        
<div class="container mt-5">
<div class="card">
  <h5 class="card-header bg-success text-white">Edit Nett Margin</h5>
  <div class="card-body">
    <form action="../controller/UpdateNetMarginController.php" method="post">
    <input type="hidden" value="<?php echo $id;?>" name="id_net">
        <label for="kw1">Tanggal</label>
            <input type="date" class="form-control" value="<?php echo $tanggal; ?>" name="tanggal">
        <label for="kw1">KW 4</label>
            <input type="text" class="form-control" value="<?php echo $kw4; ?>" name="kw4" id="kw4">
        <label for="kw1">KW 1</label>
            <input type="text" class="form-control" value="<?php echo $kw1; ?>" name="kw1" id="kw1">
        <label for="kw2">KW 2</label>
            <input type="text" class="form-control" value="<?php echo $kw2; ?>" name="kw2" id="kw2">
        <label for="kw3">KW 3</label>
            <input type="text" class="form-control" readonly value="<?php echo $kw3; ?>" name="kw3" id="kw3">
        <button type="submit" class="btn btn-success btn-xs mt-4">Update</button>
        <a href="../net_margin/" class="btn btn-secondary btn-xs mt-4">Batal</a>
    </form>
  </div>
</div>
</div>

</body>
<script>
    $(document).change(function() {
        var kw4 = $('#kw4').val();
        var kw1 = $('#kw1').val();
        var kw2 = $('#kw2').val();

        var hitung = ((parseFloat(kw4)+parseFloat(kw1)+parseFloat(kw2)) / 3) * 1.2;
        //hasil pembulatan
        var hasilHitung = Math.round(hitung/10000)*10000+10000;

        var kw3 = $('#kw3').val(hasilHitung);
    });
</script>
</html>