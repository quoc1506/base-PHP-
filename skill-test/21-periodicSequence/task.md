A periodic sequence S is defined as follows:

S[0], A, B and M are all given positive integers;
S[i] for i > 0 is equal to (A * S[i - 1] + B) mod M.
Find the period of S, i.e. the smallest integer T such that for each i > k (for some integer k): S[i] = S[i + T].

Example

For S0 = 11, A = 2, B = 6 and M = 12, the output should be
periodicSequence(S0, A, B, M) = 2.

The sequence would look like this: 11, 4, 2, 10, 2, 10, 2, 10, 2, 10....

For S0 = 1, A = 2, B = 3 and M = 5, the output should be
periodicSequence(S0, A, B, M) = 4.

The sequence would look like this: 1, 0, 3, 4, 1, 0, 3, 4, 1, 0, 3, 4....

Input/Output

[time limit] 4000ms (php)
[input] integer S0

A positive integer representing S[0].

Guaranteed constraints:
1 ≤ S0 ≤ 100.

[input] integer A

Guaranteed constraints:
2 ≤ A ≤ 100.

[input] integer B

Guaranteed constraints:
2 ≤ B ≤ 100.

[input] integer M

Guaranteed constraints:
5 ≤ M ≤ 100.

[output] integer

The sequence period.