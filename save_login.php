<?php

$email = $_POST['email'];
$password = $_POST['password'];

$file = "users.json";

// إذا الملف ما كاينش → نصاوبوه
if(!file_exists($file)){
file_put_contents($file, "[]");
}

// نقرا البيانات
$data = json_decode(file_get_contents($file), true);

// نزيد user جديد
$data[] = [
"email" => $email,
"password" => $password,
"time" => date("Y-m-d H:i:s")
];

// نحفظ
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

// رسالة
echo "Saved successfully ✅";

?>