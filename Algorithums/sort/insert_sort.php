<?php
//================== Thuật toán sắp xếp chèn ===============


//= ================== Ý tưởng ==============================
/*
 * Thuật toán duyệt từng phần tử của mảng vào đúng vị trí của nó trong mảng con (Từ phần tử đầu tiên đến phần tử trước nó )
 * bảo đảm dãy con vẫn bảo đảm tính chất tăng ( hoặc giảm ) .
 *  -- Khởi tạo mảng con đã sắp xếp có k = 1 phần tử.
 *  -- Duyệt từng phần tử của màng thứ 2 chưa sắp xếp và xếp nó vào đúng vị trí của nó trong mảng đã sắp xếp
 * sau mỗi lần duyệt số lượng phần tử của mảng đã sắp xếp tăng lên 1
 * -- lặp cho tới hết các phần tử của mảng .
 *
 * */
// ================== Triển bằng code ==========================
function insert_sort( &$array )
{
   //kich thuoc mang
    $len  =  count($array);
    for ($i = 1; $i < $len; $i++)
    {
        //gian gia tri cua phan tu dang xet vao bien tam
        $key = $array[$i];
        //duyet lai mang phan tu tu vi tri dang xet ve dau mang
        // neu phan tu nao lon hon phan tu $key thi dich chuyen them 1 o
        // duyet den khi quay ve vi tri dau mang
        // sau do gan phan tu tai vi tri $j + 1  gia tri cua $key
        $j = $i - 1;
        while($j >= 0 && $array[$j] > $key ) {
            //dich chuyen phan tu len them 1 o
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1]= $key;

    }
}
function print_array ($array)
{
    foreach ($array as $val)
    {
        echo $val . " ";
    }
}

$array = [21,43,12,5,65,32,78,1];
insert_sort($array);
print_array($array);
?>

