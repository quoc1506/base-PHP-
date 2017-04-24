You have N white balls, M blue balls and K black balls placed next to each other in one row. Find the number of unique permutations of all the balls with no two adjacent balls being both blue modulo 109 + 7.

Example

For N = 1, M = 1 and K = 1, the output should be
ballPermutations(N, M, K) = 6.

Since we have only 1 ball of each color, any permutation of the 3 would satisfy the condition, so the answer is 3! = 6.

Input/Output

[time limit] 4000ms (php)
[input] integer N

A positive integer - the number of white balls.

Guaranteed constraints:
1 ≤ N ≤ 50.

[input] integer M

A positive integer - the number of blue balls.

Guaranteed constraints:
1 ≤ M ≤ 50.

[input] integer K

A positive integer - the number of black balls.

Guaranteed constraints:
1 ≤ K ≤ 100.

[output] integer

Number of unique permutations of all the balls with no two adjacent balls being both blue modulo 109 + 7.