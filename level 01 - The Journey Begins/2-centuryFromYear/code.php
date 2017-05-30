<?php
function centuryFromYear($year) {
    return intval($year/100) + ($year % 100 ? 1: 0);
}
