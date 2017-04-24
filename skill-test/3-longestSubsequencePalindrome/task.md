Find the longest subsequence palindrome in a given array a. The longest subsequence palindrome of array a is a subsequence of indices i1 < i2 < ... < ik, where ai1ai2...aik is a palindrome.

Example

For a = [1, 2, 4, 1], the output should be
longestSubsequencePalindrome(a) = 3.

The longest subsequence palindrome here is either 1, 2, 1 or 1, 4, 1, both of which have a length of 3.

For a = [1, 2, 3], the output should be
longestSubsequencePalindrome(a) = 1.

Input/Output

[time limit] 4000ms (php)
[input] array.integer a

Guaranteed constraints:
1 ≤ a.length ≤ 103,
1 ≤ a[i] ≤ 109.

[output] integer

The length of the longest subsequence palindrome in a.