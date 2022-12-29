<?php 

function websiteCard($title, $url){
    $card = "<div class='website-card'>";
    $card .= "<h2>$title</h2>";
    $card .= "<a target='_BLANK' href='$url'><h5>$url</h5></a>";
    $card .= "</div>";

    echo $card;
}