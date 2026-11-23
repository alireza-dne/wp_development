<?php

function calcReadingTime($content)
{
    $count = substr_count($content, ' ');
    return ceil($count / 200);
}
