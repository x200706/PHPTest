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

// 拒絕注入攻擊從你我做起ㄛ


?>