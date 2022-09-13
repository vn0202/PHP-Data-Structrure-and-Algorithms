<?php
//================== QUiCK SORT ================

// =================  y tuong ==================
/*
 * Thuat toan nay cung su dung phuong phap chia de tri  giong pp merge sort. Thuat toan thuc hien chia mang thanh cac mang con
 * dua tren pivot da chon. Mau chot chinh cua thuat toan sap xep nhanh la phan doan. Cong viec chinh cua phan doan la
 * Cho 1 mang va pivot x. Dat x vao dung vi tri cua no trong mang sap xep, di chuyen tat ca cac phan tu mang nho hon pivot sang ben trai cua x va
 * va di chuyen tat ca phan tu lon hon x sang ben phai cua x.Tiep tuc cv voi cac mang con cho den khi mang
 * duoc sap xep */

function swap(&$a,&$b)
{
    $c = $a;
    $a  = $b;
    $b = $c;
}
function print_array($array)
{
    foreach ($array as $val)
    {
        echo $val . " ";
    }
}
function partition(&$array, $low, $hight)
{
    $pivot = $array[$hight];
    $left = $low;
    $right = $hight - 1;
    while(true) {
        while ($left <= $right && $array[$left] < $pivot) $left++;//Tim phan tu ben trai ma lon hon pivot
        while ($right >= $left && $array[$right] > $pivot) $right--;//tim phan tu ben phai ma nho hon pivot
        if ($left >= $right) break;// ket thuc lap
        swap($array[$left], $array[$right]);//doi cho phan tu cho nhau
        $left++;
        $right--;

    }
    swap($array[$left],$array[$hight]);
    return $left; //tra ve vi tri cua pivot da o dung vi tri cua no
}
function quick_sort(&$array, $low,$hight)// low, hight la chi so cua phan tu dau va phan tu cuoi
{
    if($low < $hight)
    {
        $pi = partition($array,$low,$hight);
        quick_sort($array,$low,$pi - 1);
        quick_sort($array,$pi + 1, $hight);
    }
}
$array = [100, 1046, 50, 40, 20, 10];
quick_sort($array,0,5);
print_array($array);
?>