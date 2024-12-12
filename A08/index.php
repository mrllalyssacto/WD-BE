<?php
include("connect.php");
include "assets/php/query.php";
?>

<!DOCTYPE html>
<html>

<?php include "assets/shared/head.php"; ?>

<body>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#islands" class="w3-bar-item w3-left">
                <img src="assets/images/navbar.png" alt="Logo" style="height:50px; width:120px; margin-right:10px;">
            </a>
            <div class="w3-right w3-hide-small">
                <a href="#islands" class="w3-bar-item w3-button">Islands of Personality</a>
            </div>
        </div>
    </div>

    <header class="w3-display-container w3-content w3-wide header-text" style="max-width:1500px;" id="home">
        <?php
        $headerImage = "assets/images/island header.jpg";
        $headerTitle = "ISLANDS OF MEMORIES"; 
        $headerText = "Discover Alyssa's core memories, where each moment tells a story of joy, growth, and resilience."; // Dynamic text
        ?>
        <img class="w3-image" src="<?php echo $headerImage; ?>" alt="Header Images" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1><b><?php echo $headerTitle; ?></b></h1>
            <p><b><?php echo $headerText; ?></b></p>
        </div>
    </header>


    <!-- Island of Personality -->
    <div class="w3-content w3-padding" style="max-width:1564px">

        <div class="w3-container w3-padding-32" id="islands">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Island of Personality</h3>
            <?php

            $islandPaths = [
                'Family Island' => '#family',
                'Friendship Island' => '#friendship',
                'Performance Island' => '#performance',
                'Music Island' => '#music'
            ];

            foreach ($islands as $island) {
                $islandPath = isset($islandPaths[$island['name']]) ? $islandPaths[$island['name']] : '#';
                echo '
            <div class="w3-col l3 m6 w3-margin-bottom islandCard">
                <a href="' . $islandPath . '" style="text-decoration: none;">
                    <div class="islandCard">
                        <div class="islandHeader" style="background-color: ' . ($island['color']) . ';">' . ($island['name']) . '</div>
                        <img src="assets/images/' . ($island['image']) . '" alt="' . ($island['name']) . '" class="islandImage">
                    </div>
                </a>
            </div>';
            }
            ?>
        </div>
    </div>


    <!-- Family Island -->
    <div class="w3-container w3-padding-32" id="family">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Family Island</h3>
    </div>

    <div class="w3-row-padding">
        <?php

        while ($contentRow1 = mysqli_fetch_assoc($contentResult1)) { ?>
            <div class="w3-col l3 m6">
                <div class="rounded-card family-card" style="background-color: <?php echo $contentRow1['color'] ?>">
                    <img src="assets/images/<?php echo $contentRow1['image'] ?>" alt="Family Island">
                    <p><?php echo $contentRow1['content'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>


    <!-- Friendship Island -->
    <div class="w3-container w3-padding-32" id="friendship">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Friendship Island</h3>
    </div>

    <div class="w3-row-padding">
        <?php

        while ($contentRow2 = mysqli_fetch_assoc($contentResult2)) { ?>
            <div class="w3-col l3 m6">
                <div class="rounded-card family-card" style="background-color: <?php echo $contentRow2['color'] ?>">
                    <img src="assets/images/<?php echo $contentRow2['image'] ?>" alt="Friendship Island">
                    <p><?php echo $contentRow2['content'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>


    <!-- Performance Island -->
    <div class="w3-container w3-padding-32" id="performance">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Performance Island</h3>
    </div>

    <div class="w3-row-padding">
        <?php

        while ($contentRow3 = mysqli_fetch_assoc($contentResult3)) { ?>
            <div class="w3-col l3 m6">
                <div class="rounded-card family-card" style="background-color: <?php echo $contentRow3['color'] ?>">
                    <img src="assets/images/<?php echo $contentRow3['image'] ?>" alt="Performance Island">
                    <p><?php echo $contentRow3['content'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Music Island -->
    <div class="w3-container w3-padding-32" id="music">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Music Island</h3>
    </div>

    <div class="w3-row-padding">
        <?php

        while ($contentRow4 = mysqli_fetch_assoc($contentResult4)) { ?>
            <div class="w3-col l3 m6">
                <div class="rounded-card family-card" style="background-color: <?php echo $contentRow4['color'] ?>">
                    <img src="assets/images/<?php echo $contentRow4['image'] ?>" alt="Music Island">
                    <p><?php echo $contentRow4['content'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16">
        <p class="copyright">
            &copy; 2024 Island of Memories. All Rights Reserved.
        </p>
    </footer>

</body>

</html>