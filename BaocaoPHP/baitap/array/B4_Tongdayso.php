<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng dãy số nguyên</title>
</head>

<body>
    <?php

    function tong($arr){
    $tong = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $tong+=$arr[$i];
    }
    return $tong;
    // echo "Tổng các số âm trong mảng là : $tong";
}


    $str = "";

    $str_kq = "";

    $ketqua = "";

    if (isset($_POST['tinh'])) {

        $str = $_POST['mang'];

        $arr = explode(",", $str);

        $str_kq = implode(",", $arr);
    }
    ?>


    <form action="" method="post">

        <table border="0" cellpadding="0">

            <th colspan="2">
                <h2>TÍNH TỔNG</h2>
            </th>

            <tr>
                <td>Nhập mảng:</td>
                <td><input type="text" name="mang" size="70" value="<?php echo $str; ?> " /></td>
            </tr>

            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="mang_kq" size="70" disabled="disabled" value="<?php echo $str_kq; ?> " /></td>
            </tr>
            <td>Kết quả </td>
            <td><input type="text" name="kq" size="70" disabled="disabled" value="<?php echo tong($arr); ?> " /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><label>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</label></td>
            </tr>
            <tr>

                <td></td>

                <td><input type="submit" name="tinh" size="20" value="Tính" /></td>

            </tr>
        </table>

    </form>

</body>

</html>