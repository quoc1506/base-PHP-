You are playing a number guessing game with your friend. Your friend thought of some integer x from 1 to n. In order to guess the number, you can ask two types of questions:

"is x smaller or equal to a?" for some integer a;
"is x greater or equal to a?" for some integer a.
If the answer to your question is "yes", you should pay your friend $2, otherwise you should pay him $1.

How much will you have to pay to your friend, assuming that you apply the strategy that minimizes the amount of money you have to pay in order to guess the number in the worst case scenario?

Example

For n = 3, the output should be
numberGuessingNaive(n) = 3.

Input/Output

[time limit] 4000ms (php)
[input] integer n

A positive integer.

Guaranteed constraints:
1 ≤ n ≤ 1000.

[output] integer