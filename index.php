<?php
// 引用呢？
include_once "test.php"; // 或required，這個找不到檔案不會拋錯，另外once表不重複引用
$test = new Test(); // 從test.php建立物件
$test->test(); // 呼叫物件方法
// 重名又會如何？

// 用命名空間避免
// require_once 'a.php';
// require_once 'b.php';

// use MyNamespaceA\Test as TestA;
// use MyNamespaceB\Test as TestB;

// $testA = new TestA();
// $testB = new TestB();

$name = "小明";
echo $name."的會員資訊<br>";

$normalArr = array(1,2,3);
echo var_dump($normalArr)."<br>"; // will print: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }

// forloop
for ($i = 0; $i < count($normalArr); $i++) {
  echo $normalArr[$i]."<br>";
}

// foreach
foreach ($normalArr as $node) {
    echo $node."<br>";
}
unset($node); //需要手動取消引用

// if, switch這些跟Java一樣

//物件呢？
class LongCat{ // php的命名風格？
    public $len = 200; // 畢竟不是全域變數，如果寫f...n(){echo $len;}就會報錯的
    // 不需要setter就能改變成員
    function cry(){
      echo "我要罐罐<br>";
    }

    function getLen(){
      return $this->len; // this就是這個物件
    }
}
$LongCat = new LongCat;
$LongCat->cry();
echo $LongCat->getLen()."<br>";
$LongCat->len = 180;
echo $LongCat->len."<br>";

// try catch同Java
?>