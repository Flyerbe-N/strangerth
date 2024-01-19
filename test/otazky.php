<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$totalQuestions = 8;
$correctAnswers = 0;

for ($i = 1; $i <= $totalQuestions; $i++) {
    $questionName = "otazka$i";
    $selectedAnswer = $_POST[$questionName];

    if ($selectedAnswer === "ano") {
        echo "<p style='color: green;'>Správna odpoveď na otázku $i.</p>";
        $correctAnswers++;
    } else {
        echo "<p style='color: red;'>Nesprávna odpoveď na otázku $i.</p>";
    }
}

echo "<p>Celkový počet správnych odpovedí: $correctAnswers / $totalQuestions</p>";
?>
