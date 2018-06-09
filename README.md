# Regex pattern to get string between curly braces

## To extract all occurrences between curly braces 

- There is two example file ( `example1.php, example2.php` ) both are different `Regex` using to extract string between curl brackets.

###### So, how does it work?

```
/
  (              # capturing group
    {            # looks for the char '{'
    (?>          # atomic group, engine will never backtrack his choice
        [^{}]    # looks for a non-'{}' char
      |          # or
        (?0)     # re-run the regex in a subroutine to match a subgroup
    )*?          # and does it as many time as needed
    }            # looks for the char '}'
  )              # ends the capture
/x

```

###### Why did I use "*?"

Adding the '?' to '*' makes it non-greedy. If you use a greedy quantifier there, the engine will start way more subroutine than it would with an ungreedy's one. (If you need more explanation, let me know)
