<?php
// kiểm tra số chẳn
function isEvenNumer($n){
    if($n%2!=0){
        return false;
    }
    return true;
}
// kiểm tra nguyên tố
function isPrimeNumber($n)
{
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $y = sqrt($n);
    for ($i = 2; $i <= $y; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = rand(1, 50);


echo ("Các số nguyên tố nhỏ hơn $number là: <br>");
for ($i = 0; $i < $number; $i++) {
    if (isPrimeNumber($i)) {
        echo ($i." ");
    }
}

$fp = @fopen("a.txt", "w+");
if (!$fp) {
    echo "Mo file khong thanh cong";
} else {
    if (isPrimeNumber($number)) {
        fwrite($fp,"{$number} là số nguyên tố \n");
    }
    else{
        fwrite($fp,"{$number} không là số nguyên tố \n");
    }
    fwrite($fp,"Các số nguyên tố nhỏ hơn $number là: \n");
    for ($i = 0; $i < $number; $i++) {
        if (isPrimeNumber($i)) {
            $data = $i."\t";
            fwrite($fp, $data);
        }
    }
    fwrite($fp,"\nCác số chẵn nhỏ hơn $number là: \n");
    for ($i = 0; $i < $number; $i++) {
        if (isEvenNumer($i)) {
            $data = $i."\t";
            fwrite($fp, $data);
        }
    }
    fclose($fp);
}
