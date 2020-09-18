<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Net Margin</title>
</head>
<body>
<?php include '../layout/header.php'; ?>
<div class="container mt-4">

<div class="card">
  <h5 class="card-header bg-success text-white">Buat Net Margin</h5>
  <div class="card-body">
    <form action="../controller/CreateNetMarginController.php" method="post">
        <label for="kw1">Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
        <label for="kw1">KW 4</label>
            <input type="text" class="form-control" name="kw4" id="kw4">
        <label for="kw1">KW 1</label>
            <input type="text" class="form-control" name="kw1" id="kw1">
        <label for="kw2">KW 2</label>
            <input type="text" class="form-control" name="kw2" id="kw2">
        <label for="kw3">KW 3</label>
            <input type="text" readonly class="form-control" name="kw3" id="kw3">
        <button type="submit" class="btn btn-success btn-xs mt-4">Simpan</button>
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

        $('#kw3').val(hasilHitung);
    });
</script>

</html>