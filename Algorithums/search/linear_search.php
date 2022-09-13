<?php
//================== Tim  kiem tuyen tinh ==============



/* Thuat toan tim kiem tuyen tinh: duyet qua tung phan tu cua mang cho den khi tim thay gia tri can tim hoac den khi het mang


*/
function linear_search($array, $search )
{
    $len = count($array);
    for($i = 0; $i < $len; $i++)
    {
        if($array[$i] == $search)
        {
            return $i;
        }
    }
    return -1;

}
$array = [12,23,43,12,24,343,545];
$result = linear_search($array,12);
echo $result;