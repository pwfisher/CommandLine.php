CommandLine.php
===============

PHP Command Line interface class. Provides friendly and flexible CLI argument parsing.

@usage               $args = CommandLine::parseArgs($_SERVER['argv']);

This command line option parser supports any combination of three types
of options (switches, flags and arguments) and returns a simple array.

[pfisher ~]$ php test.php --foo --bar=baz
  ["foo"]   => true
  ["bar"]   => "baz"

[pfisher ~]$ php test.php -abc
  ["a"]     => true
  ["b"]     => true
  ["c"]     => true

[pfisher ~]$ php test.php arg1 arg2 arg3
  [0]       => "arg1"
  [1]       => "arg2"
  [2]       => "arg3"

[pfisher ~]$ php test.php plain-arg --foo --bar=baz --funny="spam=eggs" --also-funny=spam=eggs \
> 'plain arg 2' -abc -k=value "plain arg 3" --s="original" --s='overwrite' --s
  [0]       => "plain-arg"
  ["foo"]   => true
  ["bar"]   => "baz"
  ["funny"] => "spam=eggs"
  ["also-funny"]=> "spam=eggs"
  [1]       => "plain arg 2"
  ["a"]     => true
  ["b"]     => true
  ["c"]     => true
  ["k"]     => "value"
  [2]       => "plain arg 3"
  ["s"]     => "overwrite"

@author              Patrick Fisher <patrick@pwfisher.com>
@since               August 21, 2009
@see                 http://www.php.net/manual/en/features.commandline.php
                     #81042 function arguments($argv) by technorati at gmail dot com, 12-Feb-2008
                     #78651 function getArgs($args) by B Crawford, 22-Oct-2007
