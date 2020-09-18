<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <title>Create Jumlah Staff</title>
</head>
<body>
<?php include '../layout/header.php'; ?>
<div class="container mt-5">
    <div class="card">
        <h5 class="card-header bg-success text-white">Buat Jumlah Staff</h5>
        <div class="card-body">
            <form action="../controller/CreateJmlStaffController.php" method="post">
                <?php 
                    require_once("../config.php");

                    $new_margin = $db->prepare('SELECT * FROM net_margin');
                    $new_margin->execute();
                    $data_net_margin = $new_margin->fetchAll();
                ?>
            <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
            <div class="card mt-4">
                <div class="card-header">
                    Jumlah Staff KW 4
                </div>

                <div class="card-body">
                    <div class="card-text">
                    <label >Jumlah Staff KW 4</label>
                    <input type="text" class="form-control" name="kw4" id="jumlah_staff_kw4">
                    
                    <label>Net Margin KW 3</label>
                    <select id="select-kw3-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >Net Margin KW 4</label>
                    <select id="select-kw4-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw4']; ?>"><?php echo $item['kw4']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >Hasil Jumlah Staff KW 4</label>
                    <input type="text" class="form-control" readonly id="kw4">
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    Jumlah Staff KW 1
                </div>

                <div class="card-body">
                <div class="card-text">
                    <label >Jumlah Staff KW 1</label>
                    <input type="text" class="form-control" name="kw1" id="jumlah_staff_kw1">
                    
                    <label>Net Margin KW 1</label>
                    <select id="select-kw3_1-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >Net Margin KW 1</label>
                    <select id="select-kw1-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw1']; ?>"><?php echo $item['kw1']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >Hasil Jumlah Staff KW 1</label>
                    <input type="text" class="form-control" readonly id="kw1">
                </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    Jumlah Staff KW 2
                </div>

                <div class="card-body">
                <div class="card-text">
                    <label >Jumlah Staff KW 2</label>
                    <input type="text" class="form-control" name="kw2" id="jumlah_staff_kw2">
                    
                    <label>Net Margin KW 2</label>
                    <select id="select-kw3_2-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                    <?php } ?>
                    </select>

                    <label >Net Margin KW 2</label>
                    <select id="select-kw2-net-margin" class="form-control">
                            <option value="">-- Input Data --</option>
                    <?php foreach($data_net_margin as $row => $item){ ?>
                            <option value="<?php echo $item['kw2']; ?>"><?php echo $item['kw2']; ?></option> 
                    <?php } ?>
                    </select>

                    <label>Hasil Jumlah Staff KW 2</label>
                    <input type="text" class="form-control" readonly id="kw2">
                </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                Jumlah Staff KW 3
                </div>

                <div class="card-body">
                <div class="card-text">
                    <label>Total Hasil Jumlah Staff KW 3</label>
                    <input type="text" readonly class="form-control" name="kw3" id="kw3">
                </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-xs mt-4">Simpan</button>
            <a href="../jml_staff" class="btn btn-secondary btn-xs mt-4">Kembali</a>

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

        var jumlah_staff_kw4 = $('#jumlah_staff_kw4').val();
        var select_kw3_net = $('#select-kw3-net-margin').val();
        var select_kw4_net = $('#select-kw4-net-margin').val();

        var jumlah_staff_kw1 = $('#jumlah_staff_kw1').val();
        var select_kw3_1_net = $('#select-kw3_1-net-margin').val();
        var select_kw1_net = $('#select-kw1-net-margin').val();

        var jumlah_staff_kw2 = $('#jumlah_staff_kw2').val();
        var select_kw3_2_net = $('#select-kw3_2-net-margin').val();
        var select_kw2_net = $('#select-kw2-net-margin').val();

        var hitungKW4 = parseFloat(select_kw3_net)*parseInt(jumlah_staff_kw4) / parseFloat(select_kw4_net);
        var hitungKW1 = parseFloat(select_kw3_1_net)*parseInt(jumlah_staff_kw1) / parseFloat(select_kw1_net);
        var hitungKW2 = parseFloat(select_kw3_2_net)*parseInt(jumlah_staff_kw2) / parseFloat(select_kw2_net);
       
        // var hasilHitungKW4Bulat = Math.round(hitungKW4);
        // var hasilHitungKW1Bulat = Math.round(hitungKW1);
        // var hasilHitungKW2Bulat = Math.round(hitungKW2);
 
        var HasilKw4 = $('#kw4').val(hitungKW4);
        var HasilKw1 = $('#kw1').val(hitungKW1);
        var HasilKw2 = $('#kw2').val(hitungKW2);

        var totalHasilKW3 = ( parseInt(hitungKW4) + parseInt(hitungKW1) + parseInt(hitungKW2)) / 3;
        var hasilTotalKW3 = Math.round(totalHasilKW3);
        $('#kw3').val(totalHasilKW3);
    });
</script>
</html>