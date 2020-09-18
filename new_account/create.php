<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <title>Create New Account</title>
</head>
<body>
    <?php include '../layout/header.php'; ?>
    <div class="container mt-5 mb-5">
    <div class="card">
        <h5 class="card-header bg-success text-white">Buat New Account</h5>
    <div class="card-body">
        <form action="../controller/CreateNewAccountController.php" method="post">
            <?php 
                require_once("../config.php");

                $new_margin = $db->prepare('SELECT * FROM net_margin');
                $new_margin->execute();
                $data_net_margin = $new_margin->fetchAll();

                $new_account = $db->prepare('SELECT * FROM new_account');
                $new_account->execute();
                $data_new_account = $new_account->fetchAll();
            ?>

                <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
            <div class="card mt-4">
                <div class="card-header">
                    KW 4
                </div>

                <div class="card-body">
                    <div class="card-text">
                    <label for="kw1">Net Margin KW 3</label>
                    <select id="select-kw3-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >New Account KW 4</label>
                    <input type="text" class="form-control" name="kw4" id="new_account_kw4">

                    <label >Net Margin KW 4</label>
                    <select id="select-kw4-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw4']; ?>"><?php echo $item['kw4']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >Hasil New Account KW 4</label>
                    <input type="text" class="form-control" readonly id="kw4">
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    KW 1
                </div>

                <div class="card-body">
                <div class="card-text">
                    <label>Net Margin KW 3</label>
                    <select id="select-kw3_1-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >New Account KW 1</label>
                    <input type="text" class="form-control" name="kw1" id="new_account_kw1">

                    <label >Net Margin KW 1</label>
                    <select id="select-kw1-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw1']; ?>"><?php echo $item['kw1']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >Hasil New Account KW 1</label>
                    <input type="text" class="form-control" readonly id="kw1">
                </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    KW 2
                </div>

                <div class="card-body">
                <div class="card-text">
                    <label>Net Margin KW 3</label>
                    <select id="select-kw3_2-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >New Account KW 2</label>
                    <input type="text" class="form-control" name="kw2" id="new_account_kw2">

                    <label >Net Margin KW 2</label>
                    <select id="select-kw2-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw2']; ?>"><?php echo $item['kw2']; ?></option> 
                    <?php } ?>
                    </select>

                    <label>Hasil New Account KW 2</label>
                    <input type="text" class="form-control" readonly id="kw2">
                </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    KW 3
                </div>

                <div class="card-body">
                <div class="card-text">
                    <label>Total Hasil New Account KW 3</label>
                    <input type="text" readonly class="form-control" name="kw3" id="kw3">
                </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-xs mt-4">Simpan</button>
            <a href="../new_account" class="btn btn-secondary btn-xs mt-4">Kembali</a>
        </form>
    </div>
    </div>
        
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#select-kw3-net-margin').select2();
        $('#select-kw4-net-margin').select2();
        
        $('#select-kw3_1-net-margin').select2();
        $('#select-kw1-net-margin').select2();

        $('#select-kw3_2-net-margin').select2();
        $('#select-kw2-net-margin').select2();
    });
    $(document).change(function() {
        var kw4 = $('#kw4').val();
        var kw1 = $('#kw1').val();
        var kw2 = $('#kw2').val();

        var new_account_kw4 = $('#new_account_kw4').val();
        var select_kw3_net = $('#select-kw3-net-margin').val();
        var select_kw4_net = $('#select-kw4-net-margin').val();

        var new_account_kw1 = $('#new_account_kw1').val();
        var select_kw3_1_net = $('#select-kw3_1-net-margin').val();
        var select_kw1_net = $('#select-kw1-net-margin').val();

        var new_account_kw2 = $('#new_account_kw2').val();
        var select_kw3_2_net = $('#select-kw3_2-net-margin').val();
        var select_kw2_net = $('#select-kw2-net-margin').val();

        var hitungKW4 = ( (parseFloat(select_kw3_net)*parseInt(new_account_kw4)) ) / parseFloat(select_kw4_net);
        var hitungKW1 = ( (parseFloat(select_kw3_1_net)*parseInt(new_account_kw1)) ) / parseFloat(select_kw1_net);
        var hitungKW2 = ( (parseFloat(select_kw3_2_net)*parseInt(new_account_kw2)) ) / parseFloat(select_kw2_net);
       
        var hasilHitungKW4Bulat = Math.round(hitungKW4);
        var hasilHitungKW1Bulat = Math.round(hitungKW1);
        var hasilHitungKW2Bulat = Math.round(hitungKW2);
 
        var HasilKw4 = $('#kw4').val(hasilHitungKW4Bulat);
        var HasilKw1 = $('#kw1').val(hasilHitungKW1Bulat);
        var HasilKw2 = $('#kw2').val(hasilHitungKW2Bulat);

        var totalHasilKW3 = (( parseInt(hasilHitungKW4Bulat) + parseInt(hasilHitungKW1Bulat) + parseInt(hasilHitungKW2Bulat))) / 3;
        var hasilTotalKW3 = Math.round(totalHasilKW3/10)*10;
        $('#kw3').val(hasilTotalKW3);
    });
</script>

</html>