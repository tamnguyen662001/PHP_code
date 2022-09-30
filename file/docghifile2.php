<?php
$fp = @fopen("b.txt", "w+");
if (!$fp) {
    echo "Mo file khong thanh cong";
} else {
    fwrite($fp,"Các cặp số là :\n");
    for ($i = 0; $i < 5; $i++){
        $a = rand(0,66);
        $b = rand(0,66);
        if($b==$a){
            $b = rand(0,66);
        }
        fwrite($fp,"Số a:$a");
        fwrite($fp, "Số b:$b \n");
    }

}

?>