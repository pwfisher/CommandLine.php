<?php

/*

php test.php --foo --bar=baz

php test.php -abc

php test.php arg1 arg2 arg3

php test.php plain-arg --foo --bar=baz --funny="spam=eggs" --also-funny=spam=eggs \
	'plain arg 2' -abc -k=value "plain arg 3" --s="original" --s='overwrite' --s

php test.php --key value -abc c-value

php test.php --key1 value1 -a --key2 -b b-value --c

*/

include('./CommandLine.php');

$args = CommandLine::parseArgs();

print_r($args);
