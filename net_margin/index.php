<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Margin</title>
</head>
<body>
    <?php include '../layout/header.php'; ?>
    <div class="container mt-5">
        <div class="card">
            <h4 class="card-header">
                Net Margin
                    <a href="../net_margin/create" class="btn btn-success float-right">Tambah Baru</a>
            </h4>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">KW4</th>
                            <th class="text-center">KW1</th>
                            <th class="text-center">KW2</th>
                            <th class="text-center">KW3</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    require_once("../config.php");

                        $net_margin = $db->prepare('SELECT * FROM net_margin');
                        $net_margin->execute();
                        $data = $net_margin->fetchAll();

                        $num = 1;
                        foreach ($data as $row => $item)
                        {
                            echo "<tr>
                            <td class='text-center'>".$num."</td>
                            <td class='text-center'>".$item['tanggal']."</td>
                            <td class='text-center'>".$item['kw4']."</td>
                            <td class='text-center'>".$item['kw1']."</td>
                            <td class='text-center'>".$item['kw2']."</td>
                            <td class='text-center'>".$item['kw3']."</td>
                            <td class='text-center'>".
                            "<div class='btn-group' role='group' aria-label='Basic example'>".
                                "<a href='../net_margin/edit?id=".$item['id_net']."' type='button' class='btn btn-success text-white'>Edit</a>".
                                "<a href='../net_margin/delete?id=".$item['id_net']."' type='button' class='btn btn-danger text-white'>Delete</a>".
                            "</div>".
                            "</td>
                            </tr>";
                            $num++;
                        };
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>