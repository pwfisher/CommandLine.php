CommandLine.php
===============

PHP Command Line interface class. Provides friendly and flexible CLI argument parsing.

### Usage

    $args = CommandLine::parseArgs($_SERVER['argv']);

This command line option parser supports any combination of three types of options
[single character options (`-a -b` or `-ab` or `-c -d=dog` or `-cd dog`),
long options (`--foo` or `--bar=baz` or `--bar baz`)
and arguments (`arg1 arg2`)] and returns a simple array.

    [pfisher ~]$ php test.php --foo --bar=baz --spam eggs
      ["foo"]   => true
      ["bar"]   => "baz"
      ["spam"]  => "eggs"

    [pfisher ~]$ php test.php -abc foo
      ["a"]     => true
      ["b"]     => true
      ["c"]     => "foo"

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

Not supported: `-cd=dog`.

@author              Patrick Fisher <patrick@pwfisher.com>

@since               August 21, 2009

@see
* http://www.php.net/manual/en/features.commandline.php
* comment #81042 function arguments($argv) by technorati at gmail dot com, 12-Feb-2008
* comment #78651 function getArgs($args) by B Crawford, 22-Oct-2007

Note: parseArgs.php contains a "minified" version of the same code, for your copypasta pleasure.
For little scripts for which you want to have a nice interface.
