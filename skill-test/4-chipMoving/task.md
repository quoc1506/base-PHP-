You are given a grid filled with non-negative integer numbers, and a chip is placed on the top left cell. On each turn the chip can be moved either to the right neighboring cell or to the bottom neighboring cell. The cost of the move is equal to the number written on the resulting cell.

There is also an added cost if you change direction between two consecutive moves. In order to change the direction you'll need to pay an additional cost of 10.

What is the minimum amount of points needed to reach the right bottom corner of the grid?

Assume that you don't pay for standing on the upper left cell in the beginning, so the number on that cell is not used.

It is guaranteed that each of all possible paths will cost less than 107 points.

Example

For

grid = [[ 0,  0, 99, 99, 99],
        [99,  0,  0,  0, 99],
        [99, 99, 99,  0, 99],
        [99, 99, 99,  0, 99],
        [99, 99, 99,  0,  0]]
the output should be
chipMoving(grid) = 40.

You could avoid all the 99 spots but you would need to change direction 4 times.

Input/Output

[time limit] 4000ms (php)
[input] array.array.integer grid

A matrix of non-negative integers.

Guaranteed constraints:
1 ≤ grid.length ≤ 10,
1 ≤ grid[0].length ≤ 10,
0 ≤ grid[i][j] ≤ 2000.

[output] integer