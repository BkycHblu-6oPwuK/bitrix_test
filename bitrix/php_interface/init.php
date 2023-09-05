<?php
function pre($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
    return null;
}