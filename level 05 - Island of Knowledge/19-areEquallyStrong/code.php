<?php
function areEquallyStrong($yourLeft, $yourRight, $friendsLeft, $friendsRight) {
    if ($yourLeft === $friendsLeft) {
        if ($yourRight === $friendsRight)
            return true;
        return false;
    } else {
        if ($yourLeft === $friendsRight && $yourRight === $friendsLeft) {
            return true;
        }
        return false;
    }
}
