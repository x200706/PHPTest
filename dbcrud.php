<?php
echo '來跟PostgreSQL連線ㄅ！！<br>';
$host        = "host=db.xrizljdyaoyvzcavgbol.supabase.co";
$port        = "port=5432";
$dbname      = "dbname=postgres";
$credentials = "user=postgres password=SpringBootDB369";

$db = pg_connect( "$host $port $dbname $credentials"  );
if(!$db){
  return "連接失敗了啦<br>";
} else {
  echo "連接成功<br>";
}

// 拒絕注入攻擊從你我做起
$result = pg_prepare($db, "test", 'SELECT * FROM public.user WHERE username = $1'); // 一定要注意：第二個參數是你幫這個ps取的名稱
// 這時候語句還沒被執行
// 不過檢查型態，光語句有非常基礎的錯誤，像是沒指到schema，var_dump查看，他就會返回一個布林false，成功返回的物件型態是object(PgSql\Result)#2 (0) { } test

$result = pg_execute($db, "test", array("test")); // 第二個參數帶入你想執行的那個查詢名稱，第三個參數就是把東西傳入上方$1佔位符號
// execute才是真的執行，var_dump查看，成功或查無結果返回的物件型態都是object(PgSql\Result)#3 (0) { } test

$row = pg_fetch_assoc($result);
echo $row["username"]."<br>";
//取法挺多元的

// DB用完要關
pg_close($db);
?>