<?php 
class Belajar{
  public function b1(){
    return "b1";
  }
  protected function b2(){
    return "b2";
  }
  private function b3(){
    return "b3";
  }
}

class TurunanBelajar extends Belajar{
  public function t1(){
    return "turunan 1 ".$this->b1();
  }
}

$c = new Belajar;
$c_turunan = new TurunanBelajar;

echo $c_turunan->t1();
// echo $c->b1();

?>