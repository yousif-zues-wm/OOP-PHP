<?php
class m{
    public $n;
    public $c;
    
        public function e(){
            return $this->n . 'is'. $this->$c;
        }
    abstract public function mS();
        public function e(){
        return $this->n . 'is'. $c;
   
}

class mammoth extends m{
        public function e(){
        return parent::e();
    }  
    
    public function mS(){
        return '<marquee>N U T</marquee>';
    }
}

$bo = new mammoth();
$bo->n = 'Hut';
$bo->c = 'Cream White';

echo $bo->e();

?>
