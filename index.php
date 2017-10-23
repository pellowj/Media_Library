<?php 
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Personal Media Library";
$section = null;

include("inc/header.php"); ?>
    <div class="section catalog random">

        <div class="wrapper">

            <h2>May we suggest something? test and another test here</h2>

            <ul class="items">
            <?php
            $random = array_rand($catalog,4);
            foreach ($random as $id) {
                echo get_item_html($id,$catalog[$id]);
            }
            ?>							
            </ul>

        </div>

    </div>

    // testing commit with github

<?php include("inc/footer.php"); ?>


