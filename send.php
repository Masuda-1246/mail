<?php

$to = "yaojiezengtian38@gmail.com";
$subject = "TEST";
$message = "This is TEST.\r\nHow are you?";
$headers = "From: from@example.com";

if(mb_send_mail($to, $subject, $message, $headers))
{
  echo "メール送信成功です";
}
else
{
  echo "メール送信失敗です";
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
  <script>
    console.log()
  </script>
</body>
</html>