# Data structers and algorithm 

Đề bài 
- Lý thuyết về cấu trúc dữ liệu và thuật toán .
- Thực hành: Triển khai tối thiểu hai Data structers và 3 algorithums
- Hackrank 

## Cấu trúc dữ liệu: 

**Khái niệm**: Cấu trúc dữ liệu  là các lưu trữ, tổ chức dữ liệu có thứ tự, có hệ thống để dữ liệu đưọc sử dụng một cách hiệu quả 

Hai khái niệm nền tảng tạo thành cấu trúc dữ liệu: 
- **interface**: Mỗi giao diện có 1 **interface**. Interface biểu thị một tập hợp các phép tính mà cấu trúc dữ liệu hỗ trợ. Interface chỉ cung cấp các **danh sách** các phép tinh được hỗ trọ, các loại tham số và kiểu trả về của các phép tính này. 
- **implements**: Cung cấp sự biểu diễn nội bộ của mỗi cấu trúc dữ liệu. Implement cung cấp các định nghĩa các giải thuật được định nghĩa trong các phép tính của cấu trúc dữ liệu. 

**Đặc điểm**: 
- Chính  xác: sự khai triển của cấu trúc dữ liệu nên triển khai interface của nó một cách chính xác. 
- Độ phức tạp về thời gian: Thời gian chạy hoặc thời gian thực thi của các phép tính phải nhỏ nhất có thể . 
- Độ phức tạp về bộ nhớ: Sự dụng bộ nhớ của mỗi phép tính của cấu trúc dữ liệu phải là nhỏ nhất có thể.

**Một vài cấu trúc dữ liệu**

1. Mảng: 
Mảng là một cấu trúc dữ liệu cũ và quan trọng nhất. Hầu hết các cấu trúc dữ liệu đều sử dụng mảng để triển khai giải thuât. 
- Phần tử: Mỗi mục được lưu trữ trong một mảng được gọi là phần tử của mảng. 
- Chỉ mục: Mỗi phần tử trong mảng có 1 chỉ mục để nhận diện phần tử.
- Các phép toán được sử dụng: 
   - Duyêt
   - Chèn 
   - xóa 
   - Tìm kiếm 
   - Cập nhật 
2. Danh sách liên kết:
Là một dãy các câu trúc dữ liệu đươc liên kết với nhau qua thông qua các link liên kết. Hiểu đơn giản, danh sách liên kêt là một cấu trúc dữ liệu bao gồm các **nút** (node) tạo thành một chuỗi. Mỗi node bao gồm dữ liệu và và tham chiếu đến nút kế tiếp .  
Danh sách liên kết được sử dụng phổ biến sau mảng  
Các loại danh sách liên kết  

   - Danh sách liên kết đơn: Chỉ duyệt các phần tử theo chiều về trước.
   - Danh sách liên kết đôi: Duyệt phần tử theo hai chiều.
   - Danh sách liên kết vòng: Là dạng liên kết đôi đặc biệt, khi mà con trỏ prev của head trỏ đến tail và con trỏ next của tail trỏ đến head.  

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
4. Queue: là một dạng cấu  trúc dữ liệu trừu tượng giông ngăn xếp,chỉ khác là hoạt động theo nguyên tắc: FILO ( First in Last Out ). 
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
- Dữ liệu đầu ra: Một giải thuật nên có 1 hoặc nhiều dữ liệu đầu ra đã xác định, nên kết nối với kiểu dữ liệu đầu ra mong muốn. 
- Tính dừng: Giải thuật nên kết thúc sau một số bước hữu hạn. 
- Tính hiệu quả: Một giải thuật nên là có thể thi hành được với các nguồn có sẵn, tức là có khả năng giải quyết hiệu quả vấn đề trong điều kiện thời gian và tài nguyên cho phép.
- Tính phổ biến: Một giải thuật có tính phổ biến nếu giải thuật này có thể giải quyết được một lớp các vấn đề tương tự.
- Độc lập: Một giải thuật nên có các chỉ thị độc lập với bất kỳ phần code lập trình nào.

### Các thuật toán 

#### 1.1 Search 

1. Linear search: 
   - là một giải thuật tìm kiếm cơ bản. Thuật toán này duyệt qua từng phần tử của mảng cho đến khi tìm được giá trị cần tìm hoặc đến khi hết mảng.
   - Thuật toán này phù hợp cho tìm kiểm trong một danh sách vừa và chưa được sắp xếp . 
2. Binary search:

   - Là một thuật toán phổ biến trong tìm kiếm sắp xếp. 
   - ý tưởng của thuật toán: Thuật toán thực hiện tìm kiếm bằng cách chia liên tục các mảng thành hai nửa. Thực hiện so sánh giá trị tìm kiếm với giá trị ở giữa mảng. 
     
       - Nếu bằng: Trả về và kết thúc thuật toán 
       - Giá trị search > : Tiếp tục tìm kiêm ở mảng bên con bên phải 
       - Giá trị search <: tiếp tục tìm kiếm ở mảng bên trái .  
   
#### 1.2 Sort 

1. selectsort: 
- Ý tưởng thuật toán: Duyệt qua từng phần tử mảng và tìm kiếm phần tử lớn nhất ( nhỏ nhất ) trong mảng chưa sắp xếp và đổi chỗ cho phần tử ở đầu mảng chưa sắp xếp.
- Thuật toán chia mảng thành hai mảng :

  - Mảng đã sắp xếp 
  - Mảng chưa sắp xếp 
- Sau mỗi bước lặp, số phần tử cuả mảng đã sắp xếp tăng lên 1  

2. Insertsort: Thuật toán duyệt qua từng phần tử mảng và chèn nó vào đúng vị trí trong mảng con(từ phần tử đầu tien đến phần tử trước mảng con ) sao cho vẫn bảo đảm đúng tính chất.
- Tạo mảng con đã xắp xếp có 1 phần tử.
- Duyệt từ phần tử thứ 2 của mảng và sắp xếp vào mảng con đã săp xếp ( từ vị trí đâu tiên tới vị trí trước phần tử đang xét)
- Sau mỗi lần duyệt, số phần  tử trong mảng con đã sắp xếp sẽ tăng lên. 
3. Buble sort: 
- Ý tưởng: Thuật toán này thực hiện sắp xếp liên tục các phần tử ở cạnh nhau 
nếu phần tử đứng sau nhỏ hơn phần tử đứng truóc cho đến khi cuối mảng ( Phần tử lớn nhất sẽ nổi lên cuối mảng ). 

4. merge sort: Thuật toán này sử dụng phương pháp chia để tri. Trong đó chia liên tiếp mảng thành các mảng con cho đến khi mảng con chỉ có một phần tử. 
Sau đó sẽ tiến hành gộp các mảng con lại. Khi gộp sẽ tiến hành sắp xếp luon 
5. Quick sort: Thuật tóan này sử dụng phương pháp chia để trị giống merge sort, nhưng chia theo phương pháp
pivot. 
Thuật toán sẽ chọn 1 phần tử trong mảng là làm pivot ( điểm đánh dấu). Mấu chốt chính của thuật toán là phân đoạn (hàm partition ): Chọn pivot và sắp xếp vào đúng vị trí trong mảng, 
chuyển tất cả các phần tử nhỏ hơn pivot sang bên trái pivot và chuyển tất cả các phần tử lớn hơn pivot sang bên phải pivot. Khi đó ta có hai mảng con bên trái pivot và bên phải pivot. Tiếp tục phân đoạn cho hai mảng con đó.   


![hackrank](./hackrank.png)