<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xếp hạng bài hát</title>
</head>

<body>


    <?php
    if (isset($_POST['ten'])) $ten = $_POST['ten'];
    else $ten = "";
    $ten = "";
    if (isset($_POST['hang'])) $hang = $_POST['hang'];
    else $hang = "";
    $hang = "";
    if (isset($_POST['ketqua'])) $ketqua = $_POST['ketqua'];
    else $ketqua = "";
    if (isset($_POST['dsbaihat'])) $dsbaihat = $_POST['dsbaihat'];
    else $dsbaihat = "";
    $ketqua = "";
    // $dsbaihat = "";

    // $arr = array();
    // $ds = array();
    // function themBaiHat(&$arr, $ten, $hang)
    // {

    //     $arr[$ten] = $hang;
    //     // return $arr;
    // }

    if (isset($_POST['them'])) {
        $ten = trim($_POST['ten']);
        $hang = trim($_POST['hang']);
        if(!empty($ten) && is_numeric($hang) ){
            $fp = @fopen("dsbh.txt", "a+");
            
            if (!$fp) {
                echo "Mo file khong thanh cong";
            }
            else{
               
                fwrite($fp,"$hang"." "."$ten\n");


                $arr = array();
               
                fclose($fp);

                
            }

        }else{
            echo "Nhập đúng thông tin";
        }

      


       

        // while(!feof($fp)) {
        //     $line = fgets($fp);
        //     echo $line. "";
        // }
        // $tenbaihat = explode(' ', $ten);
        // $tenbaihat = $tenbaihat[count($tenbaihat) - 1];
        // echo $tenbaihat;
        // $read = file('dsbh.txt');
        // foreach ($read as $line) {
        //     echo $line ."<br>";
        // }
     
    // print_r($baihat) ;
        // $txt = "John\n";
        // fwrite($myfile, $txt);
        // $txt = "David\n";
        // fwrite($myfile, $txt);
        
        // fclose($myfile);
        // $ten = $_POST['ten'];
        // $hang = $_POST['hang'];
        // themBaiHat($arr, $ten, $hang);
        // themBaiHat($arr, "ten", "hang");
        // rsort($read);
        // foreach ($read as $x => $x_value) {
        //     $ketqua .=$x_value . "\n";
          
        // }
        // $ketqua = "Danh sách các bài hát : " . print_r($arr);
    }

   
    if (isset($_POST['hthi'])) {
        foreach ($arr as $x => $x_value) {
            $ketqua .= "Bài hát: " . $x . ", Có thứ hạng: " . $x_value;
            // echo "<br>";
        }
        $ketqua = "Danh sách các bài hát : " .print_r($arr);
    }

    ?>

    <form action="" method="post">
        <table>
            <tr>
                <td>Nhập tên bài hát:</td>
                <td><input type="text" name="ten" size="50" value="<?php echo $ten; ?> " /></td>
            </tr>
            <tr>
                <td>Thứ hạng bài hát:</td>
                <td><input type="text" name="hang" size="20" value="<?php echo $hang; ?> " /></td>
            </tr>

            <tr>
                <td><input type="submit" name="them" value="Thêm bài hát"></td>
                <td><input type="submit" name="hthi" size="20" value="   Hiển thị bảng xếp hạng  " /></td>
            </tr>
        </table>
        <textarea cols="70" rows="10" name="dsbaihat" style="resize: none;" readonly="true"> <?php echo $dsbaihat ?></textarea>
        <textarea cols="70" rows="10" name="ketqua" style="resize: none;" readonly="true"> <?php echo $ketqua ?></textarea>
    </form>
</body>

</html>