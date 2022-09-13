<?php
function swap(&$a, &$b)
{
    $c= $a;
    $a= $b;
    $b = $c;
}
function print_array($array)
{
    foreach ($array as $val)
    {
        echo $val . " ";
    }
}
function select_sort($array)
{
$len = count($array);
for($i = 0; $i < $len - 1; $i++)
{
    // co kiem tra xem co xya ra thay doi trong lan lap khong
    $flag = false;
    for($j= $i + 1; $j < $len ; $j++)
    {
        if($array[$j] < $array[$i])
        {
            $temp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temp;
            $flag= true;
        }

    }
    // neu khong xay ra thay doo mang da sap xep xong
    if(!$flag)
    {
        break;
    }
}
return $array;
}
function insert_sort($array)
{
    $len = count($array);
    for($i = 1; $i < $len ; $i++)
    {
        $temp = $array[$i];
        $j = $i -1;
        while($j >= 0 && $array[$j] > $temp)
        {
            $array[$j  + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $temp;
    }
    return $array;
}
function buble_sort($array)
{
    $len = count($array);
    for($i = 0; $i < $len - 1; $i++)
    {
        for($j = 0; $j < $len - $i - 1; $j++)
        {
            if($array[$j] > $array[$j+1])
            {
                swap($array[$j+1], $array[$j]);
            }
        }
    }
    return $array;
}
function merge(&$array, $left, $mid, $right)
{
    $L = [];
    $R = [];
    $n1 = $mid - $left + 1;
    $n2 = $right - $mid;
    for($i = 0 ; $i < $n1; $i++)
    {
     $L[$i] = $array[$left + $i];

    }
    for($j= 0; $j < $n2; $j++)
    {
        $R[$j] = $array[$mid + 1 + $j];
    }
    $i = 0;
    $j = 0;
    $k = $left;
    while($i < $n1 && $j < $n2)
    {
        if($L[$i] < $R[$j])
        {
            $array[$k] = $L[$i];
            $i++;
        }
        else{
            $array[$k] = $R[$j];
            $j++;
        }
        $k++;
    }
    while($i < $n1)
    {
        $array[$k] = $L[$i];
        $i++;
        $k++;
    }
    while($j < $n2)
    {
        $array[$k] = $R[$j];
        $j++;
        $k++;
    }

}
function merge_sort(&$array, $l, $r)
{
    if($l < $r)
    {
        $mid = $l + (int)(($r - $l)/2);
        merge_sort($array,$l,$mid);
        merge_sort($array,$mid + 1, $r);
        merge($array,$l,$mid,$r);
    }
}

function partition(&$array, $low, $hight)
{
    $pivot = $array[$hight];
    $left = $low;
    $right = $hight - 1;
    while(true)
    {
        while($left <= $right && $array[$left] < $pivot) $left++; //Tim phan tu ben trai lon hon pivot
        while($right >= $left && $array[$right] > $pivot) $right--;//Tim phan tu ben phai nho hon pivot
        if($left >= $right) break;
        swap($array[$right],$array[$left]);
        $left++;
        $right--;
    }
    swap($array[$left],$array[$hight]);
    return $left;
}
function quickSort(&$array, $low, $hight)
{
    if($low < $hight)
    {
        $pivot = partition($array,$low, $hight);
        quickSort($array,$low,$pivot -1);
        quickSort($array,$pivot + 1, $hight);
    }

}
function quick($array)
{
    $result =[];
    if(count($array)==0)
    {
        return $result;
    }
    $pivot = $array[0];
    $L= [];
    $R =[];
    for($i = 0; $i < count($array); $i++)
    {
        if($array[$i] > $pivot)
        {
            $R[] = $array[$i];
        }
        elseif($array[$i] < $pivot)
        {
            $L[] = $array[$i];
        }
        else{
            $equal[]= $array[$i];
         }
    }
    $result = array_merge(quick($L),$equal,quick($R));
    return $result;
}

$array = [12,43,123,454,23,123];
quickSort($array,0,5);
print_array($array);
