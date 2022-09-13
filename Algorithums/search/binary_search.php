<?php
// =================== TIM KIEM NHI PHAN =====================


/*
 * Thuat toan tim kiem nhi phan:Thuc hien so sanh gia tri can tim voi phan tu o giua mang,
 * --- neu bang -> Tra ve gia tri mid
 * --- Neu gia tri tim kiem lon hon -> Gia tri can tim co the nam trong doan tu mid + 1 - right
 * --- Neu gia tri tim kiem nho hon -> Gia tri tim kiem co the nam trong doan left - mid -1
 * */

function binary_search($array, $search)
{
    sort($array);
    $left = 0;
    $right = count($array) - 1;
    while($left < $right)
    {
        $mid = ceil(($right + $left)/2);
        if($array[$mid] == $search)
        {
            return $mid;
        }
        elseif($array[$mid] < $search)
        {
            $left = $mid + 1;
        }
        else{
            $right = $mid - 1;
        }

    }
    //  neu khong tim thay
    return -1;

}
function binary_search_2($array, $left, $right, $search)
{
    if($right >$left)
    {
        $mid = ceil(($left + $right)/2);
        if($array[$mid] == $search)
        {
            return $mid;
        }
        elseif($array[$mid] < $search)
        {
            return binary_search_2($array, $mid + 1, $right, $search);
        }
        else{
            return binary_search_2($array, $left, $mid - 1, $search);
        }
    }
    return -1;
}
$array = [12,23,34,45,56,100];
$result = binary_search_2($array,0, count($array), 100);
echo $result;