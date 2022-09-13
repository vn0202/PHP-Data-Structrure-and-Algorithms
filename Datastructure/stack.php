<?php
//====================== STACK ==================

class Stack {
    public  $top = -1;
    private $stack =[];
    public  function  __construct()
    {
        $this->top = -1;

    }
    public  function  isEmpty()
    {
        if($this->top == -1)
        {
            return true;
        }
        return false;
    }
    public  function push($val)
    {
        $this->stack[++$this->top] = $val;
    }
    public  function  pop()
    {
        if($this->isEmpty())
        {
            echo "Stack is empty";
        }
        $val =$this->stack[$this->top];
        --$this->top;
        return $val;
    }
    public function top()
    {
        if($this->isEmpty())
        {
            echo "Stack is empty";
        }
        $val = $this->stack[$this->top];
        return $val;
    }
public  function size()
{
    return $this->top + 1;
}
public function  print_stack()
{
    while($this->top >=0)
    {
        echo $this->stack[$this->top--] . "\n";
    }

}
}
$stack = new Stack();
$stack->push('Vu Van Nghia');
$stack->push('Nguyen Khanh Huyen');
$stack->push("Vu Van A");
$stack ->push("Nguyen Van C");
$stack ->pop();
$stack->print_stack();