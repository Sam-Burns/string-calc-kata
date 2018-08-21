String Calculator Code Kata
========================

You will write a string calculator. It will process strings like "1,1", add the numbers up, and return results like "2".
Use the scaffolding that is already in place. Here are some example calculations your system should perform:

- "" => 0
- "1" => 1
- "1,1" => 2
- "1,2,3" => 6

After this, try adding the following:

- The string can specify another delimiter, after two leading slashes at the start. E.g.: `\\#1#1` => `2`
- When the result is displayed, if it is divisible by 10, you get a smiley face as well, e.g. `5,5` => `10 :-)`.
- Letters are interpreted as numbers, e.g. "A" = 1, "Z" = 26

Useful Commands
---------------

Run your application:

```bash
php ./scripts/run.php calculate 1,1
2
```

Run your tests:
```bash
./vendor/bin/phpspec run
```

Describe a class:
```bash
./vendor/bin/phpspec desc "StringCalcKata\InputString"
```
