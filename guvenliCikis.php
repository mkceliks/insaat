<?php
session_start();

ob_start();
session_destroy();
echo "<center>Çıkış Yaptınız. Admin sayfasına yönelndiriliyorsunuz lütfen bekleyin....</center>";

header("Refresh: 3; url=yonetici.html");
ob_end_flush();
?>