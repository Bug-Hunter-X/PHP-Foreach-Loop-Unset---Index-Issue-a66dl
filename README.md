# PHP Foreach Loop with Unset() - Unexpected Index Behavior

This repository demonstrates a subtle bug in PHP related to using the `unset()` function within a `foreach` loop iterating over an array.  The issue arises because the array's internal index might not be updated correctly after removing an element using `unset()`, resulting in unexpected behavior.

The `bug.php` file contains code exhibiting this bug.  The `bugSolution.php` file provides a corrected version.

This demonstrates an uncommon but important gotcha for PHP developers working with array manipulation.