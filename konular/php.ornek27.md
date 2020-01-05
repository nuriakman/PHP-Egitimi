# PHP İle ePosta Gönderme

PHPMailer: https://github.com/PHPMailer/PHPMailer

Sorun Olursa: https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting


## Yandex Üzerinden ePosta Gönderme
```PHP
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->SMTPOptions = array (
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true)
);
$mail->Host = 'smtp.yandex.com';
$mail->Port = 465;

$mail->Username = 'ADRESINIZ@yandex.com.tr';
$mail->Password = 'PAROLA';
$mail->setFrom('GONDEREN@yandex.com.tr', 'GÖNDERİCİ ADI');
$mail->addAddress("ALICI@xxx.com");
$mail->CharSet = "UTF-8";
$mail->isHTML(true);
$mail->Subject = "KONU";
$mail->Body = nl2br("MESAJ BURADA");
$mail->AltBody = $message;
if (!$mail->send()) {
    echo $mail->ErrorInfo;
} else {
    echo "mail gönderildi";
}

```


## gMail Üzerinden ePosta Gönderme

```PHP
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465; // 587;
$mail->SMTPSecure = 'tls';
$mail->Username = 'ADRESINIZ@gmail.com';
$mail->Password = 'PAROLANIZ';
$mail->SetFrom($mail->Username, 'GÖNDERİCİ ADI');
$mail->AddAddress('ALICIADRESI@xxxx.com');
$mail->CharSet = 'UTF-8';
$mail->Subject = 'E-POSTA KONUSU';
$content = '<div style="background: #eee; padding: 10px; font-size: 14px">Bu bir test e-posta\'dır..</div>';
$mail->MsgHTML($content);
if($mail->Send()) {
    // e-posta başarılı ile gönderildi
    echo "Gönderildi !";
} else {
    // bir sorun var, sorunu ekrana bastıralım
    echo $mail->ErrorInfo;
}
?>

```


