<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm năm nhuận</title>
</head>

<body>

    <style type="text/css">
        table {
            color: black;
            font-weight: 800;
            background-color: gray;
        }

        table th {
            background-color: blue;
            font-style: vni-times;
            color: cyan;

        }
    </style>


    <?php

    function ktNamNhuan($nam)
    {
        if ($nam % 400 == 0 || ($nam % 4 == 0 && $nam % 100 != 0))
            return 1;
        return 0;
    }
    if (isset($_POST['nam'])) $nam = $_POST['nam'];
    else $nam = 0;
    if (isset($_POST['ketqua'])) $namnhuan = $_POST['ketqua'];
    else $namnhuan = "";

    if (isset($_POST['hthi']) && (is_numeric($_POST['nam']))) {
        $arr = array();
        if ($_POST['nam'] < 2000) {
            for ($i = $nam; $i < 2000; $i++) {
                if (ktNamNhuan($i)) {
                    $arr[$i] = $i;
                }
            }
            if (count($arr) != 0)
                $namnhuan = implode(" ", $arr) . "&#13;&#10;" . "là năm nhuận";
            else 
                $namnhuan = "Không có năm nhuận nào";
        } else 
            $namnhuan = "Nhập số năm nhỏ hơn 2000";
    }

    ?>

    <form action="B2_Timnamnhuan.php" method="post">
        <table>
            <caption>Năm nhập vào nhỏ hơn 2000</caption>
            <th colspan="2"> Tìm năm nhuận</th>
            <tr>
                <td>Năm: </td>
                <td><input type="text" name="nam" id="" value="<?php echo $nam ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="hthi" value="Tìm năm nhuận"></td>
                <td><textarea cols="21" rows="5" name="ketqua" readonly="true" style="resize: none;"><?php echo $namnhuan ?> </textarea></td>
            </tr>
        </table>
        <!-- <table>
            <caption>Năm nhập vào lớn hơn 2000</caption>
            <th colspan="2"> Tìm năm nhuận</th>
            <tr>
                <td>Năm: </td>
                <td><input type="text" name="nam" id="" value="<?php echo $nam ?>"></td>
            </tr>
            <tr></tr>
            <td><input type="submit" name="hthi" value="Tìm năm nhuận"></td>
            <td><textarea cols="21" rows="5" name="ketqua" readonly="true" style="resize: none;"> <?php echo $namnhuan ?></textarea></td>
            </tr>
        </table> -->
    </form>
</body>

</html>