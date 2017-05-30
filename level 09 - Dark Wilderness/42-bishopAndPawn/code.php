<?php
function bishopAndPawn($bishop, $pawn) {
    return abs(ord($bishop[0]) - ord($pawn[0])) == abs($bishop[1] - $pawn[1]);
}
