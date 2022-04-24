<?php
/*Create a function which returns whether your character survives their unsupervised diving experience, given an array of integers.

Your character starts with a breath meter of 10, which is the maximum. When diving underwater, your breath meter decreases by 2 per item in the array. Watch out! If your breath diminishes to 0, your character dies!
To prevent this, you can replenish your breath by 4 (up to the maximum of 10) for each item in the array where you are at or above sea level.
Your function should return true if your character survives, and false if not. */

function divingMinigame($arr) {
	$meter = 10;
	for ($x = 0; $x < count($arr); $x++) {
		$item = $arr[$x];
		if ($item < 0) $meter -= 2;
		else $meter = min($meter + 4, 10);
		if ($meter <= 0) return false;
	}
	return true;
}

/*divingMinigame([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]) ➞ true

divingMinigame([-3, -6, -2, -6, -2]) ➞ false

divingMinigame([2, 1, 2, 1, -3, -4, -5, -3, -4]) ➞ false*/


?>