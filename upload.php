<?php
echo '<html><body>';

echo '<form method="post" enctype="multipart/form-data" action="upload.php">';
echo '<input type="file" name="user_file">';
echo '<input type="submit" value="Upload">';
echo '</form>';

//留意PHP的運行順序跟頁面關係
if(!(isset($_FILES['user_file']))){
  echo '等你上傳欸<br>';  
}else{
  if($_FILES['user_file']['error'] !== UPLOAD_ERR_OK){
    return '你的檔案上傳失敗耶<br>';
  }else{
    echo '暫存成功，幫你放到服務器，檢查檔案中...<br>';
  }

  if (file_exists('upload/' . $_FILES['user_file']['name'])){
    return '娃，目錄已存在此檔案<br/>';
  } 

  $file = $_FILES['user_file']['tmp_name'];
  $dest = 'upload/' . $_FILES['user_file']['name'];

  # 將檔案移至指定位置
  move_uploaded_file($file, $dest);
  echo '放到服務器！<br>';
}

echo '</body></html>';
//此段代碼因為Replit安全性政策無法作用
?>