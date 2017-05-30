A string is said to be beautiful if b occurs in it no more times than a; c occurs in it no more times than b; etc.

Given a string, check whether it is beautiful.

Example

For inputString = "bbbaacdafe", the output should be
isBeautifulString(inputString) = true;
For inputString = "aabbb", the output should be
isBeautifulString(inputString) = false;
For inputString = "bbc", the output should be
isBeautifulString(inputString) = false.
Input/Output

[time limit] 4000ms (php)
[input] string inputString

A string of lowercase letters.

Guaranteed constraints:
3 ≤ inputString.length ≤ 50.

[output] boolean