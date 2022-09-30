<html>
    <body>     
        <?php
        $n = $_POST["number"];
       if(isset($_POST['xuli'])){
        $array = array();
        for($i = 0;$i<$n;$i++){
            $x = rand(-100,100);
            $array[$i] = $x;
            
        }
       }
        ?>
    <form align='center' action="" method="post">
        <table>
            <thead>
                <th colspan="2" align="center">
                    <h3>Mảng số nguyên </h3>
                </th>
            </thead>
            <tr>
                <td>Nhập số nguyên n:</td>
                <td><input type="text" name="number"></td>
            </tr>
            
            <tr>
                <td>Kết quả:</td>
                <td><input type="textarea" name="result" ><?php  echo $array; ?> </td>
            </tr>
                <td colspan="2" align="center"><input type="submit" value="Xử lí" name="xuli" /></td>
            </tr>
        </table>
    </form>

    </body>
</html>