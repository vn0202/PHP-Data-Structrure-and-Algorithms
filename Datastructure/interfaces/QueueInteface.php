<?php
interface  QueueInteface{
    public  function isEmpty();
    public  function  enqueue($val);
    public  function  dequeue();
    public  function  peek();

}