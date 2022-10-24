<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng hai chiều thông tin sinh viên</title>
</head>

<body>
    <!-- ==================================================== -->
    <?php
    // Câu:1 Tạo mảng hai chiều lưu thông tin sinh viên

    $SinhVien = [
        [
            'Mã sinh viên' => 6112341,
            'Tên sinh viên' => "Nguyễn Minh Anh",
            'Giới tính' => "Nữ",
            'Ngày sinh' => "2001-12-03",
            'Mã lớp' => "61.CNTT-1"
        ],
        [
            'Mã sinh viên' => 6110123,
            'Tên sinh viên' => "Trần Anh Tú",
            'Giới tính' => "Nam",
            'Ngày sinh' => "2001-05-16",
            'Mã lớp' => "61.CNTT-1"
        ],
        [
            'Mã sinh viên' => 6111012,
            'Tên sinh viên' => "Nguyễn Ngọc Thanh",
            'Giới tính' => "Nam",
            'Ngày sinh' => "2001-10-20",
            'Mã lớp' => "61.CNTT-2"

        ],
        [
            'Mã sinh viên' => 6234121,
            'Tên sinh viên' => "Trần Lê Thu",
            'Giới tính' => "Nữ",
            'Ngày sinh' => "2002-05-16",
            'Mã lớp' => "62.TTQL"
        ]
    ];



   
    

    if (isset($_POST['masv'])) $masv = trim($_POST['masv']);
    if (isset($_POST['tensv'])) $tensv = trim($_POST['tensv']);
    if (isset($_POST['gioitinh'])) $gt = ($_POST['gioitinh']);
    if (isset($_POST['ngsinh'])) $ngsinh = trim($_POST['ngsinh']);
    if (isset($_POST['malop'])) $ml = trim($_POST['malop']);
    if (isset($_POST['ds'])) $ds = trim($_POST['ds']);else $ds = "";



    
    if (isset($_POST['themsv'])) {

        foreach ($SinhVien as $key => $x) {
            $ds.= "\n" . $x['Mã sinh viên'] . "   " . $x['Tên sinh viên'] . "   " . $x['Giới tính'] . "   " . $x['Ngày sinh'] . "   " . $x['Mã lớp'] . "\n";
        }


        $fp = @fopen("sinhvien.txt", "a+");
        if (!$fp) {
            echo "Mo file khong thanh cong";
        }
        else{
           
            fwrite($fp,"$masv"." "."$tensv"." ".$gt. " ".$ngsinh."  ".$masv."  ".$ml ."\n");
            $arr = array();
            fclose($fp);
        }
    }

    ?>
    <!-- ==================================================== -->

    <form action="" method="post">
        <table border="1" cellpadding="0" cellspacing="0" style="font-size:14px;margin:0 auto;" class="content">
            <tr>
                <td>
                    <table cellpadding="2" cellspacing="10">
                        <caption>
                            <h3 style="color:blue;text-transform :uppercase">Thông tin sinh viên</h3>
                        </caption>
                        <tr>
                            <td>Mã số sinh viên:</td>
                            <td><input type="text" name="masv" id="" required = "true"></td>
                        </tr>
                        <tr>
                            <td>Họ tên sinh viên:</td>
                            <td><input type="text" name="tensv" id="" required="true"></td>
                        </tr>
                        <tr>
                            <td>Ngày sinh:</td>
                            <td><input type="date" name="ngsinh" required="true" id=""></td>
                        </tr>
                        <tr>
                            <td>Giới tính:</td>
                            <td><input type="radio" name="gioitinh" value="Nam" required="true"/>Nam

                                <input type="radio" name="gioitinh" value="Nữ" />Nữ
                        </tr>
                        <tr>
                            <td>
                                Mã lớp
                            </td>
                            <td>
                                <select name="malop">
                                    <option value="">--Chọn--</option>
                                    <option value="61.CNTT-1" selected="selected">61.CNTT-1</option>
                                    <option value="61.CNTT-2">61.CNTT-2</option>
                                    <option value="61.TTQL">62.TTQL</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="themsv" size="20" value="   Thêm SV  " /></td>
                        </tr>
                    </table>
                </td>
            <tr>
                <td> <textarea name="" id="" cols="60" rows="10" name="ds">
            <?php
                echo $ds;
                
            ?>
    </textarea></td>
            </tr>
            </tr>
    </form>

    <!-- ==================================================== -->



</body>

</html>