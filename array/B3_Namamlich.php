<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm năm âm lịch</title>
</head>
<body>
<style type="text/css">
        table {
            text-transform: uppercase;
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
<!-- ======================================================== -->

<?php 
    if (isset($_POST['dl'])) $dl = $_POST['dl'];
	else $dl = 0;
    if (isset($_POST['al'])) $al = $_POST['al'];
	else $al = 0;
   $hinhanh = "";

    $mang_can = array("Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
    $mang_chi = array("Hợi","Tý","Sửu","Dần","Mão", "Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
    $mang_hinhanh = array("hoi.jpg","chuot.jpg","suu.jpg","dan.jpg","meo.jpg","thin.jpg","ty.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");


    if (isset($_POST['hthi']) &&is_numeric($_POST['dl'])) {	
        $dl = $dl-3;
        $can = $dl%10;
        $chi = $dl%12;
        $al=$mang_can[$can];
        $al = $al. " ". $mang_chi[$chi];
        $hinh = $mang_hinhanh[$chi];
        $hinhanh = "<img src = 'images/$hinh' alt='' width='100px', height='100px'>";
        $dl = $dl+3;
    }

?>


<!-- ======================================================== -->
    <form action="" method="post" >
        <table>
            <th colspan="4">Tìm năm âm lịch</th>
            <tr>
                <td>Năm dương lịch</td>
                <td></td>
                <td>Năm âm lịch</td>
                
            </tr>
            <tr>
                <td><input type="text" name="dl" id="" value="<?php echo $dl?>"></td>
                <td ><input style="margin-left:35px ;" type="submit" value="=>" name="hthi"></td>
                <td><input type="text" name="al" id="" readonly="true" value="<?php echo $al ?>"></td>
            </tr>
            <tr>
                <td></td>
                <!-- <td><img  alt="" width="100px", height="100px" <?php echo $hinhanh ?>></td> -->
                <td><?php echo $hinhanh ?> </td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>