<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <title>Edit</title>
</head>
<body>
<?php include '../layout/header.php'; ?>

<?php
require_once("../config.php");

try {
    
    $sql = "SELECT * FROM top_up where id_top= ?";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(1, $_REQUEST['id']);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $id = $row['id_top'];
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
  <h5 class="card-header bg-success text-white">Edit Top Up</h5>
  <div class="card-body">
    <form action="../controller/UpdateTopUpController.php" method="post">
    <?php 
            require_once("../config.php");

            $net_margin = $db->prepare('SELECT * FROM net_margin');
            $net_margin->execute();
            $data_net_margin = $net_margin->fetchAll();

            $new_account = $db->prepare('SELECT * FROM new_account');
            $new_account->execute();
            $data_new_account = $new_account->fetchAll();
        ?>
    <input type="hidden" value="<?php echo $id;?>" name="id_top">
            <label>Tanggal</label>
                <input type="date" class="form-control" value="<?php echo $tanggal; ?>" name="tanggal">
            <div class="card mt-4">
                <div class="card-header">
                    KW 4
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <label>Top Up KW 4</label>
                        <input type="text" class="form-control" value="<?php echo $kw4; ?>" name="kw4" id="input_kw4">

                        <label>Net Margin KW 3</label>
                        <select id="select-kw3-net-margin" class="form-control">
                                <option value="">-- Input Data --</option>
                        <?php foreach($data_net_margin as $row => $item){ ?>
                                <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                        <?php } ?>
                        </select>

                        <label>Net Margin KW 4</label>
                        <select id="select-kw4-net-margin" class="form-control">
                                <option value="">-- Input Data --</option>
                        <?php foreach($data_net_margin as $row => $item){ ?>
                                <option value="<?php echo $item['kw4']; ?>"><?php echo $item['kw4']; ?></option> 
                        <?php } ?>
                        </select>

                        <label>Hasil KW 4</label>
                        <input type="text" readonly class="form-control" id="kw4">
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    KW 1
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <label>Top Up KW 1</label>
                        <input type="text" class="form-control" value="<?php echo $kw1; ?>" name="kw1" id="input_kw1">

                        <label>Net Margin KW 3</label>
                        <select id="select-kw3_1-net-margin" class="form-control">
                                <option value="">-- Input Data --</option>
                        <?php foreach($data_net_margin as $row => $item){ ?>
                                <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                        <?php } ?>
                        </select>

                        <label>Net Margin KW 1</label>
                        <select id="select-kw1-net-margin" class="form-control">
                                <option value="">-- Input Data --</option>
                        <?php foreach($data_net_margin as $row => $item){ ?>
                                <option value="<?php echo $item['kw1']; ?>"><?php echo $item['kw1']; ?></option> 
                        <?php } ?>
                        </select>

                        <label>Hasil KW 1</label>
                        <input type="text" readonly class="form-control" id="kw1">
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    KW 2
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <label>Top Up KW 2</label>
                        <input type="text" class="form-control" value="<?php echo $kw2; ?>" name="kw2" id="input_kw2">

                        <label>Net Margin KW 3</label>
                        <select id="select-kw3_2-net-margin" class="form-control">
                                <option value="">-- Input Data --</option>
                        <?php foreach($data_net_margin as $row => $item){ ?>
                                <option value="<?php echo $item['kw3']; ?>"><?php echo $item['kw3']; ?></option> 
                        <?php } ?>
                        </select>

                        <label>Net Margin KW 2</label>
                        <select id="select-kw2-net-margin" class="form-control">
                                <option value="">-- Input Data --</option>
                        <?php foreach($data_net_margin as $row => $item){ ?>
                                <option value="<?php echo $item['kw2']; ?>"><?php echo $item['kw2']; ?></option> 
                        <?php } ?>
                        </select>

                        <label>Hasil KW 2</label>
                        <input type="text" readonly class="form-control" id="kw2">
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    KW 3
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <label for="kw3">Hasil KW 3</label>
                            <input type="text" readonly class="form-control" value="<?php echo $kw3; ?>" name="kw3" id="kw3">
                    </div>
                </div>
            </div>

            <div class="card-text">
                <button type="submit" class="btn btn-success btn-xs mt-4">Update</button>
                <a href="../top_up" class="btn btn-secondary btn-xs mt-4">Batal</a>
            </div>
        </div>
    </div>

    </form>
  </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#select-kw1-net-margin').select2();
        $('#select-kw2-net-margin').select2();
        $('#select-kw3-net-margin').select2();
        $('#select-kw3_1-net-margin').select2();
        $('#select-kw3_2-net-margin').select2();
        $('#select-kw4-net-margin').select2();
    });

    $(document).change(function(){
        var kw4 = $('#kw4').val();
        var kw1 = $('#kw1').val();
        var kw2 = $('#kw2').val();

        var input_kw4 = $('#input_kw4').val();
        var input_kw1 = $('#input_kw1').val();
        var input_kw2 = $('#input_kw2').val();

        var select_kw3_net = $('#select-kw3-net-margin').val();
        var select_kw4_net = $('#select-kw4-net-margin').val();

        var select_kw3_1_net = $('#select-kw3_1-net-margin').val();
        var select_kw1_net = $('#select-kw1-net-margin').val();

        var select_kw3_2_net = $('#select-kw3_2-net-margin').val();
        var select_kw2_net = $('#select-kw2-net-margin').val();

        var hitungTopUpKW4 = ( parseFloat(input_kw4) * parseFloat(select_kw3_net) / parseFloat(select_kw4_net) );
        var hitungTopUpKW1 = ( parseFloat(input_kw1) * parseFloat(select_kw3_1_net) / parseFloat(select_kw1_net) );
        var hitungTopUpKW2 = ( parseFloat(input_kw2) * parseFloat(select_kw3_2_net) / parseFloat(select_kw2_net) );

        $('#kw4').val(hitungTopUpKW4.toFixed(3));
        $('#kw1').val(hitungTopUpKW1.toFixed(3));
        $('#kw2').val(hitungTopUpKW2.toFixed(3));

        var TotalTopUpKW3 = (( parseFloat(hitungTopUpKW4) + parseFloat(hitungTopUpKW1) + parseFloat(hitungTopUpKW2))) / 3;
        var hasilTotalKW3 = Math.round(TotalTopUpKW3/1000)*1000+1000;
        $('#kw3').val(hasilTotalKW3);

    });
</script>
</html>