<?php

// Island Queries
$personalityQuery = "SELECT * FROM islandsofpersonality";
$personalityResult = executeQuery($personalityQuery);

// Content Queries
$contentQuery1 = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = 1";
$contentResult1 = executeQuery($contentQuery1);

$contentQuery2 = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = 2";
$contentResult2 = executeQuery($contentQuery2);

$contentQuery3 = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = 3";
$contentResult3 = executeQuery($contentQuery3);

$contentQuery4 = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = 4";
$contentResult4 = executeQuery($contentQuery4);

if ($personalityResult->num_rows > 0) {
    while ($row = $personalityResult->fetch_assoc()) {
        $islands[] = $row;
    }
} else {
    echo "No data found.";
}

?>