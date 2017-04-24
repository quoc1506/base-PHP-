Given the number of points on the circle and the number of colors you have, find the number of the ways to color each point into one of the given colors in such manner that each two adjacent points will be different color. It is guaranteed that the answer fits in 32-bit integer type.

Example

For points = 3 and colors = 2, the output should be
countCircleColorings(points, colors) = 0;
For points = 3 and colors = 4, the output should be
countCircleColorings(points, colors) = 24.
Input/Output

[time limit] 4000ms (php)
[input] integer points

A positive integer.

Guaranteed constraints:
3 ≤ points ≤ 100.

[input] integer colors

A positive integer.

Guaranteed constraints:
2 ≤ colors ≤ 5.

[output] integer