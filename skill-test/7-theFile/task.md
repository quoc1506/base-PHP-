Once upon a time there was a File. It was perfect and there was no need to change it. But one day a group of programmers came across it and decided to make a couple of changes by adding new symbols here and there. They ended up with two versions of the File. You think that the programmers didn't have enough time to ruin it completely, so you want to restore it.

Your approach is as follows: if a string result can be obtained from both versions by removing some symbols in them, then it can be the File. You need to find the longest result possible.

Example

For version1 = "CodeFigh#ts" and version2 = "Co$deFig?hts", the output should be
theFile(version1, version2) = "CodeFights".

Input/Output

[time limit] 4000ms (php)
[input] string version1

Guaranteed constraints:
0 ≤ version1.length ≤ 20.

[input] string version2

Guaranteed constraints:
5 ≤ version2.length ≤ 20.

[output] string