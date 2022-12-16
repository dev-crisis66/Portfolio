<?php

const WEBSITE_TITLE = "PORTFOLIO";
const WEBSITE_LANG = "FR";
const WEBSITE_LANG_RESCUE = "EN";
const WEBSITE_PAGE = "HOME";

/**
 * Set current page
 *
 * @return void
 */
function setCurrentPage(string $page){
    define(WEBSITE_PAGE, $page);
}

/**
 * Get current page
 *
 * @return string
 */
function getCurrentPage(){
   return WEBSITE_PAGE;
}

?>