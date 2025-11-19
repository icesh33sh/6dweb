<?php
$title = "Count on Me";
$artist = "Bruno Mars";
$genre = "Reggae";

$verseCount = 3;
$repeatChorus = "2";

$totalChorusLines = $repeatChorus * 4;

$nouns = ["friend", "world", "sea", "soul", "heart"];
$verbs = ["count", "need", "find", "help", "sail"];

$verse1 = [
    "If you ever {$verbs[1]} a {$nouns[0]}",
    "You can {$verbs[0]} on me like 1, 2, 3",
    "I'll be there"
];

$verse2 = [
    "If you ever {$verbs[1]} someone to lean on",
    "I will {$verbs[3]} you carry on",
    "For it wont be long"
];

$verse3 = [
    "You'll always have my {$nouns[4]}",
    "You'll never be alone",
    "We can make it through together"
];

$chorus = [
    "You can {$verbs[0]} on me",
    "Like 4, 3, 2",
    "I'll be there",
    "And I can {$verbs[0]} on you"
];

$textNumber = "5";
$textNumber += 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Lyric Remix</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f5f5f5; }
        h1, h2 { color: #333; }
        .section { margin-bottom: 20px; }
        .line { margin-left: 20px; }
    </style>
</head>
<body>

<h1><?php echo $title; ?></h1>
<h2>By <?php echo $artist; ?> - Genre: <?php echo $genre; ?></h2>

<p><strong>Fun Fact:</strong> The number after type juggling is: <?php echo $textNumber; ?>.</p>
<hr>

<!-- Verse 1 -->
<div class="section">
    <h2>Verse 1</h2>
    <?php foreach($verse1 as $line){ echo "<div class='line'>$line</div>"; } ?>
</div>

<!-- Verse 2 -->
<div class="section">
    <h2>Verse 2</h2>
    <?php foreach($verse2 as $line){ echo "<div class='line'>$line</div>"; } ?>
</div>

<!-- Chorus -->
<div class="section">
    <h2>Chorus (Repeated <?php echo $repeatChorus; ?> times)</h2>
    <?php
        for($i = 0; $i < $repeatChorus; $i++){
            echo "<div><em>Chorus Part " . ($i+1) . "</em></div>";
            foreach($chorus as $line){
                echo "<div class='line'>$line</div>";
            }
            echo "<br>";
        }
    ?>
</div>

<!-- Verse 3 -->
<div class="section">
    <h2>Verse 3</h2>
    <?php foreach($verse3 as $line){ echo "<div class='line'>$line</div>"; } ?>
</div>

<p><strong>Total Chorus Lines Displayed:</strong> <?php echo $totalChorusLines; ?></p>
<p><strong>Total Verses:</strong> <?php echo $verseCount; ?></p>

</body>
</html>
