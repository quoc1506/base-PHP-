Given the positions of a white bishop and a black pawn on the standard chess board, determine whether the bishop can capture the pawn in one move.

The bishop has no restrictions in distance for each move, but is limited to diagonal movement. Check out the example below to see how it can move:


Example

For bishop = "a1" and pawn = "c3", the output should be
bishopAndPawn(bishop, pawn) = true.



For bishop = "h1" and pawn = "h3", the output should be
bishopAndPawn(bishop, pawn) = false.



Input/Output

[time limit] 4000ms (php)
[input] string bishop

Coordinates of the white bishop in the chess notation.

[input] string pawn

Coordinates of the black pawn in the same notation.

[output] boolean

true if the bishop can capture the pawn, false otherwise.