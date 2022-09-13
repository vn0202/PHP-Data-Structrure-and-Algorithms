<?php
//======================== SẮP XẾP NỔI BỌT ================

//======================== Ý tưởng ========================
/* Thuật toán sắp xếp nổi bọt; Thực hiện sắp xếp liên tiếp hai phần tử cạnh nhau, nếu đứng sai thứ tự thì sẽ đổi chỗ cho nhau cho
đến khi dãy số được sắp xếp
 * Để kiểm tra xem mảng đã được sắp xếp hay chưa, dùng cờ flag để kiểm tra. Nếu trong vòng lặp mà không xảy r
 * bất kỳ việc đổi chỗ nào, kết thúc việc sắp xêp.
 * */


//======================= Triển khai code =================
function print_array($array)
{
    foreach ($array as $val)
    {
        echo $val . " ";
    }
}
function swap(&$a, &$b)
{
    $c = $a;
    $a = $b;
    $b = $c;
}
function buble_sort(&$array)
{
    //kích thuoc mang
   $len = count($array);
    for( $i = 0; $i < $len -1; $i++ )
    {
     //flag de kiem tra co xay ra doi cho trong  vong lap khong;
        $flag = false;
        for($j = 0; $j < $len - $i - 1; $j++)
        {
            if($array[$j] > $array[$j + 1])// sap xep tang dan
            {
                swap($array[$j] , $array[$j + 1]);
                $flag= true;
            }

        }
        //neu khong xay ra sap xep , mang da sap xep xong.
        if(!$flag)
        {
            break;
        }

    }
}
$array = [12,4,1,32,19,34];
buble_sort($array);
print_array($array);