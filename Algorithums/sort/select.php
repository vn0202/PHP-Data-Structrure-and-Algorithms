<?php
//=================== SẮP XẾP CHỌN ==================

//=================== Ý tưởng của thuật toán ========


/* Thuật toán : Chia mảng thành hai mảng : mảng đã sắp xếp và mảng chưa sắp xếp.
* Duyệt từng phần tử của mảng  chưa sắp xếp.
 * tìm phần tử nhỏ nhất của mảng (lớn nhất )
* và đổi chỗ cho phần tử
* đầu tiên của mảng chưa sắp xếp. Tại mỗi vòng lặp, phần tử có giá trị nhỏ nhất (lớn nhất được đưa về đầu mảng chưa săp xếp )

 *  */

//hàm đổi chỗ hai số.

function swap(&$a, &$b)
{
    $c = $a;
    $a = $b;
    $b = $c;
}

//  hàm in ra danh sách mảng.
function print_array($array)
{
    foreach ($array as $val) {
        echo $val . " ";
    }
}

function selection_sort(&$array, $mode = 'ASC')
{
    // xác định kích thước mảng
    $len = count($array);
    for ($i = 0; $i < $len - 1; $i++) {
        // Tìm phần tử nhỏ nhất trong mảng chưa sắp xếp va dua len vi dau cua mang chua sap xep
        for ($j = $i + 1; $j < $len; $j++) {

            if ($mode == "DES") {
                if ($array[$i] < $array[$j]) {
                    swap($array[$i], $array[$j]);
                }
            } else {
                if ($array[$i] > $array[$j]) {
                    swap($array[$i], $array[$j]);
                }
            }
        }
    }
}

$array = [19, 24, 12, 12, 45, 67, 23];
selection_sort($array, "DES");
print_array($array);
