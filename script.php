<?php
// تعريف الإجابات الصحيحة
$correct_answers = [
    'q1' => 'a', // باريس
    'q2' => 'c', // عطارد
    'q3' => 'b'  // JavaScript
];

// تهيئة عدد الإجابات الصحيحة
$score = 0;

// التحقق من الإجابات المرسلة
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($correct_answers as $question => $correct_answer) {
        if (isset($_POST[$question]) {
            if ($_POST[$question] === $correct_answer) {
                $score++;
            }
        }
    }
}

// عرض النتيجة
echo "<!DOCTYPE html>
<html lang='ar'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>النتيجة</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <div class='container'>
        <h1>النتيجة</h1>
        <p>لقد أجبت بشكل صحيح على $score من أصل " . count($correct_answers) . " أسئلة.</p>
        <a href='index.html'>العودة إلى الأسئلة</a>
    </div>
</body>
</html>";
?>