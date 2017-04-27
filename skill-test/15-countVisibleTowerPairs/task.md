Define a tower as a straight vertical segment with a bottom end on the X axis.

Consider some towers in pairwise distinct positions. A pair of towers is called visible if the segment that connects the top points of those towers doesn't cross any other tower (but may touch the tops of some towers).

Given positions on which the towers stand and heights of the towers, find the number of visible pairs of towers.

Example

For position = [3, 0, 6, 10] and height = [2, 1, 4, 6], the output should be
countVisibleTowerPairs(position, height) = 5.

Let's number towers from left to right, starting with 1, then these 5 tower pairs will be visible: (0, 1), (0, 2), (0, 3), (1, 2), (2, 3).

Check out the image below to see for yourself:



Input/Output

[time limit] 4000ms (php)
[input] array.integer position

Guaranteed constraints:
3 ≤ position.length ≤ 10,
-1000 ≤ position[i] ≤ 1000.

[input] array.integer height

Array of positive integers. ith elements of both arrays correspond to the same tower.

Guaranteed constraints:
height.length = position.length,
1 ≤ height[i] ≤ 250.

[output] integer