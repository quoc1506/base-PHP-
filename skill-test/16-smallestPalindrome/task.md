Given a string s0 find the lexicographically smallest palindrome of the same length that is lexicographically greater than or equal to s0.

Strings may contain only lowercase English letters.

Example

For s0 = "cbaba", the output should be
smallestPalindrome(s0) = "cbabc";
For s0 = "abcbc", the output should be
smallestPalindrome(s0) = "abdba".
Input/Output

[time limit] 4000ms (php)
[input] string s0

A string containing only lowercase English letters.

Guaranteed constraints:
4 ≤ s0.length ≤ 5 · 105.

[output] string

The required palindrome.