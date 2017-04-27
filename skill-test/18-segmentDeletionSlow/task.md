Given an array of line segments on the number line, find the number of segments such that after deleting any of them the length of the union of all segments will decrease.

Example

For left = [4, 1, 1] and right = [7, 3, 6], the output should be
segmentDeletionSlow(left, right) = 2.

Check out the image below for better understanding:



Input/Output

[time limit] 4000ms (php)
[input] array.integer left

A non-empty array of integers representing the left-end coordinates of the segments.

Guaranteed constraints:
1 ≤ left.length ≤ 5,
1 ≤ left[i] ≤ 10.

[input] array.integer right

An array of integers of the same length as left representing the right-end coordinates of the segments. The ith elements of left and right correspond to a single segment.

The segments have positive lengths.

Guaranteed constraints:
right.length = left.length,
left[i] < right[i] ≤ 20.

[output] integer