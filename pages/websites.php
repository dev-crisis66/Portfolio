<?php $webPage = "websites";
include_once "../template/header.php";

$websites = [
    [
        "title" => "Dittoask",
        "url" => "http://www.dittobask.ml",
    ],
    [
        "title" => "Yunee-Love",
        "url" => "http://yunee-love.test",
    ],
];
?>

<main>

    <section class="websites">

        <?php

        foreach ($websites as $website) {
            websiteCard($website['title'], $website['url']);
        }

        ?>

    </section>

</main>

<?php include_once "../template/footer.php"; ?>