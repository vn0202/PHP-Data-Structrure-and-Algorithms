<?php

//===================== MERGE SORT ===============
// ==================== Ý tưởng ==================


/*
 * Là thuật toán chia để tri. Thuật toán này chia mảng cần săp xếp thành hai mảng con. Thực hiện chia mảng tiếp ở các mảng cpn
 * cho đến khi các mảng con chỉ có 1 phần tử. Sau đó tiến hành gộp các mảng con. Trong quá trình gộp sẽ tiến hành sắp xếp các mảng con. sao cho bảo đảm
 * đúng tính chất.
 *
 * */

function print_array($array)
{
    foreach ($array as $val)
    {
        echo $val . " ";
    }
}
function merge(&$array, $l_index,$mid,$r_index)
    {
        //Khoi tao cac mang con
        $l_arr= [];
        $r_arr = [];
        //xac dinh kich thuoc cac mang con
        $n1 = $mid - $l_index + 1;
        $n2 = $r_index - $mid;
        //gan gia tri cho cac mang con
        for($i = 0 ; $i < $n1; $i++)
        {
            $l_arr[$i] = $array[$l_index + $i];
        }
        for($j = 0; $j < $n2; $j++)
        {
            $r_arr[$j] = $array[$mid + $j + 1];
        }
        //Tiesm hanh gop hai mang con thanh mang cha da sap xep
        // -- Khoi tao cac gia tri cho index dau cua cac mang
        $i = 0; //gia tri index dau mang con ben trai
        $j = 0; //gia tri index dau mang con ben phai
        $k = $l_index; //gia tri index dau cua mang gop

        while($i < $n1 && $j < $n2)
        {
         if($l_arr[$i] <= $r_arr[$j])
         {
             $array[$k] = $l_arr[$i];
             $i++;
         }
         else{
             $array[$k] =$r_arr[$j];
             $j++;
         }
         $k++;
        }
        //Luu cac phan tu con lai cua mang con vao mang gop ( neu con )
        while($i < $n1)
        {
            $array[$k] = $l_arr[$i];
            $i++;
            $k++;
        }
        //luu cac phan tu con lai cua mang con ben phai (neu con)
        while($j < $n2)
        {
            $array[$k] = $r_arr[$j];
            $j++;
            $k++;
        }
    }
    function merge_sort(&$array, $l, $r)//$l,$r la cac chi so dau va cuoi mang
    {
        if($l < $r)
        {
            $mid = (int)($l + ($r - $l)/2);
            merge_sort($array,$l,$mid);
            merge_sort($array,$mid + 1, $r);
            merge($array,$l,$mid,$r);
        }
    }
$array = [12,23,1,5,32,78,6];
merge_sort($array,0,count($array) - 1);
print_array($array);