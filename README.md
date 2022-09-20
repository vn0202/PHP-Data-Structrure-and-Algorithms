# Data structers and algorithm

Đề bài

- Lý thuyết về cấu trúc dữ liệu và thuật toán .
- Thực hành: Triển khai tối thiểu hai Data structers và 3 algorithums
- Hackrank

## Cấu trúc dữ liệu:

**Khái niệm**: Cấu trúc dữ liệu là các lưu trữ, tổ chức dữ liệu có thứ tự, có hệ thống để dữ liệu đưọc sử dụng một cách
hiệu quả

Hai khái niệm nền tảng tạo thành cấu trúc dữ liệu:

- **interface**: Mỗi giao diện có 1 **interface**. Interface biểu thị một tập hợp các phép tính mà cấu trúc dữ liệu hỗ
  trợ. Interface chỉ cung cấp các **danh sách** các phép tinh được hỗ trọ, các loại tham số và kiểu trả về của các phép
  tính này.
- **implements**: Cung cấp sự biểu diễn nội bộ của mỗi cấu trúc dữ liệu. Implement cung cấp các định nghĩa các giải
  thuật được định nghĩa trong các phép tính của cấu trúc dữ liệu.

**Đặc điểm**:

- Chính xác: sự khai triển của cấu trúc dữ liệu nên triển khai interface của nó một cách chính xác.
- Độ phức tạp về thời gian: Thời gian chạy hoặc thời gian thực thi của các phép tính phải nhỏ nhất có thể .
- Độ phức tạp về bộ nhớ: Sự dụng bộ nhớ của mỗi phép tính của cấu trúc dữ liệu phải là nhỏ nhất có thể.

**Một vài cấu trúc dữ liệu**

1. Mảng:
   Mảng là một cấu trúc dữ liệu cũ và quan trọng nhất. Hầu hết các cấu trúc dữ liệu đều sử dụng mảng để triển khai giải
   thuât.

- Phần tử: Mỗi mục được lưu trữ trong một mảng được gọi là phần tử của mảng.
- Chỉ mục: Mỗi phần tử trong mảng có 1 chỉ mục để nhận diện phần tử.
- Các phép toán được sử dụng:
    - Duyêt
    - Chèn
    - xóa
    - Tìm kiếm
    - Cập nhật

2. Danh sách liên kết:
   Là một dãy các câu trúc dữ liệu đươc liên kết với nhau qua thông qua các link liên kết. Hiểu đơn giản, danh sách liên
   kêt là một cấu trúc dữ liệu bao gồm các **nút** (node) tạo thành một chuỗi. Mỗi node bao gồm dữ liệu và và tham chiếu
   đến nút kế tiếp .  
   Danh sách liên kết được sử dụng phổ biến sau mảng  
   Các loại danh sách liên kết

    - Danh sách liên kết đơn: Chỉ duyệt các phần tử theo chiều về trước.
    - Danh sách liên kết đôi: Duyệt phần tử theo hai chiều.
    - Danh sách liên kết vòng: Là dạng liên kết đôi đặc biệt, khi mà con trỏ prev của head trỏ đến tail và con trỏ next
      của tail trỏ đến head.

Các phép toán:

- Tìm kiếm :
- Thêm:
- Xóa

3. Ngăn xếp: Là một dạng cấu trúc dữ liệu trừu tượng (Abstract Data Type - ADT ), đặt tên theo ngăn xếp
   vì nó hoạt động như 1 ngăn xếp: Chỉ cho phép hoạt động tại vị trí đỉnh của ngăn xếp.  
   Cấu trúc dữ liệu này hoạt động theo quy tắt: LIFO ( Last - in First - out : Vào sau ra trước. )  
   Một ngăn xếp có thể được triển khai bằng con trỏ, mảng, danh sách liên kết,

**Các phép toán trên ngăn xếp**

- Push: Thêm phần tử vào đỉnh của ngăn xếp.
- pop: Xóa phần tử ở đỉnh của ngăn xếp.
- top: Trả về phần tử ở đỉnh của ngăn xếp (không xóa ).
- isEmpty: Kiểm tra mảng rỗng.

4. Queue: là một dạng cấu trúc dữ liệu trừu tượng giông ngăn xếp,chỉ khác là hoạt động theo nguyên tắc: FILO ( First in
   Last Out ).
   Chỉ có thể thêm phần tử ở một đầu và lấy phần tử ở đầu còn lại

**Các hoạt động trên queue**:

- enqueue( Thêm phần tử)
- dequeue: Xóa phần tử.
- isEmpty: Kiểm tra hàng đợi rỗng.
- peek: trả về phần tử ở đầu hàng đợi mà không xóa.

5. Hash table
5. Tree
6. Heaps
7. Graphs

## Thuật toán:

**Khái niệm** Thuật toán là một tập hợp hữu hạn các chỉ thị để thực thi theo một thứ tự
nào đó để thu được kết quả mong muốn. Giải thuật độc lập với các ngôn ngữ lập trình.   
**Đặc điểm của 1 giải thuật**

- Tính xác định: Một giải thuật nên rõ ràng. Mỗi bước nên rõ ràng và chỉ mang 1 mục đích nhất định
- Dữ liệu đầu vào xác định: Giải thuật nên có 0 hay nhiều hơn 1 đầu vào xác định
- Dữ liệu đầu ra: Một giải thuật nên có 1 hoặc nhiều dữ liệu đầu ra đã xác định, nên kết nối với kiểu dữ liệu đầu ra
  mong muốn.
- Tính dừng: Giải thuật nên kết thúc sau một số bước hữu hạn.
- Tính hiệu quả: Một giải thuật nên là có thể thi hành được với các nguồn có sẵn, tức là có khả năng giải quyết hiệu quả
  vấn đề trong điều kiện thời gian và tài nguyên cho phép.
- Tính phổ biến: Một giải thuật có tính phổ biến nếu giải thuật này có thể giải quyết được một lớp các vấn đề tương tự.
- Độc lập: Một giải thuật nên có các chỉ thị độc lập với bất kỳ phần code lập trình nào.

### Các thuật toán

#### 1.1 Search

1. Linear search:
    - là một giải thuật tìm kiếm cơ bản. Thuật toán này duyệt qua từng phần tử của mảng cho đến khi tìm được giá trị cần
      tìm hoặc đến khi hết mảng.
    - Thuật toán này phù hợp cho tìm kiểm trong một danh sách vừa và chưa được sắp xếp .

<details>
<summary>Demo</summary>

```php
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
echo $result;// output: 0
```


</details>
 
2. Binary search:

    - Là một thuật toán phổ biến trong tìm kiếm sắp xếp.
    - ý tưởng của thuật toán: Thuật toán thực hiện tìm kiếm bằng cách chia liên tục các mảng thành hai nửa. Thực hiện so
      sánh giá trị tìm kiếm với giá trị ở giữa mảng.

        - Nếu bằng: Trả về và kết thúc thuật toán
        - Giá trị search > : Tiếp tục tìm kiêm ở mảng bên con bên phải
        - Giá trị search <: tiếp tục tìm kiếm ở mảng bên trái .

<details>
<summary>Demo</summary>

```php 
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
$array = [1,23,45,67,78,90];
$result = binary_search($array,23)
echo $result;//output: 1
```
</details>


#### 1.2 Sort

1. selectsort:

- Ý tưởng thuật toán: Duyệt qua từng phần tử mảng và tìm kiếm phần tử lớn nhất ( nhỏ nhất ) trong mảng chưa sắp xếp và
  đổi chỗ cho phần tử ở đầu mảng chưa sắp xếp.
- Thuật toán chia mảng thành hai mảng :

    - Mảng đã sắp xếp
    - Mảng chưa sắp xếp
- Sau mỗi bước lặp, số phần tử cuả mảng đã sắp xếp tăng lên 1

  <details>
  <summary>Demo</summary>
  

   ```php 
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
print_array($array);// 67 45 24 23 19 12 12
 ```
  </details>
2. Insertsort: Thuật toán duyệt qua từng phần tử mảng và chèn nó vào đúng vị trí trong mảng con(từ phần tử đầu tien đến
   phần tử trước đang duyệt  ) sao cho vẫn bảo đảm đúng tính chất.

- Tạo mảng con đã xắp xếp có 1 phần tử.
- Duyệt từ phần tử thứ 2 của mảng và sắp xếp vào mảng con đã săp xếp ( từ vị trí đâu tiên tới vị trí trước phần tử đang
  xét)
- Sau mỗi lần duyệt, số phần tử trong mảng con đã sắp xếp sẽ tăng lên.


<details>
<summary>Demo</summary>


```php 
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
print_array($array);//output: 1 5 12 21 32 43 65 78
```

</details>

3. Buble sort:

- Ý tưởng: Thuật toán này thực hiện sắp xếp liên tục các phần tử ở cạnh nhau
  nếu phần tử đứng sau nhỏ hơn phần tử đứng truóc cho đến khi cuối mảng ( Phần tử lớn nhất sẽ nổi lên cuối mảng ).

<details>
<summary>Demo</summary>

```php
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
print_array($array);//output: 1 4 12 19 32 34
```
</details>

4. merge sort: Thuật toán này sử dụng phương pháp chia để tri. Trong đó chia liên tiếp mảng thành các mảng con cho đến
   khi mảng con chỉ có một phần tử.
   Sau đó sẽ tiến hành gộp các mảng con lại. Khi gộp sẽ tiến hành sắp xếp luon

<details>
 <summary>Demo</summary>

```php 
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
print_array($array)//1 5 6 12 23 32 78
```
</details>
 
5. Quick sort: Thuật tóan này sử dụng phương pháp chia để trị giống merge sort, nhưng chia theo phương pháp
   pivot.
   Thuật toán sẽ chọn 1 phần tử trong mảng là làm pivot ( điểm đánh dấu). Mấu chốt chính của thuật toán là phân đoạn (
   hàm partition ): Chọn pivot và sắp xếp vào đúng vị trí trong mảng,
   chuyển tất cả các phần tử nhỏ hơn pivot sang bên trái pivot và chuyển tất cả các phần tử lớn hơn pivot sang bên phải
   pivot. Khi đó ta có hai mảng con bên trái pivot và bên phải pivot. Tiếp tục phân đoạn cho hai mảng con đó.   

<details>
<summary>Demo</summary>

```php 
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
print_array($array);//output: 10 20 40 50 100 1046

```
</details>
   