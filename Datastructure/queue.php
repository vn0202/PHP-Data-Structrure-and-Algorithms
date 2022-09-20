<?php
// ====================== HANG DOI =====================
 include './interfaces/QueueInteface.php';
class Queue implements QueueInteface {
    public $front;
    public $rear;
    private $queue=[];
   public function __construct()
   {
       $this->front = -1;
       $this->rear = -1;

   }
   public function isEmpty()
   {
       if($this->front == -1 || $this->front > $this->rear)
       {
           return true;
       }
       return false;
   }
   public function enqueue($val)

   {
       if($this->front == -1)
       {
           $this->front=0;
       }

       ++$this->rear;
       $this->queue[$this->rear] = $val;
   }
   // xoa phan tu o dau queue va tra ve phan tu xoa do
   public function dequeue ()
   {
       if($this->isEmpty())
       {
           throw new Exception(' Queue is empty. You can delete');
       }
       $val =$this->queue[ $this->front];
       ++$this ->front;
       return $val;
   }
   // lay phan tu dau cua queue nhung khong xoa
   public  function peek()
   {
       if($this-> isEmpty())
       {
           throw  new ErrorException("Queue is empty.");

       }
       return $this->queue[$this->front];
   }
   public  function print_queue(){
       if($this->isEmpty())
       {
           echo " Queue is empty";
       }
       else{
           for($i =$this->front; $i <= $this->rear; $i++)
           {
               echo $this->queue[$i] . "\n";
           }
       }
   }

}
$queue = new Queue();
$queue->enqueue("Nghia");
$queue ->enqueue("Huyen");
$queue ->enqueue("Vu Van Nghia");
//$queue->print_queue();
$queue->dequeue();


