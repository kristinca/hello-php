<?php
/*My notes and work from the book 'Programming PHP: Creating Dynamic Web Pages' by by Kevin Tatroe and Peter MacIntyre


1. Introduction to PHP

- PHP was made by Rasmus Lerdorf in 1994
- PHP is a simple yet powerful language designed for creating HTML content.
- PHP can be used in 
    -- Server-side scripting: To generate HTML, you need the PHP parser and a web server
    through which to send the coded document files; PHP also is used for generating dynamic content
    via database connections, XML documents, graphics, PDF files, etc;
    In this book, we concentrate on this: using PHP to develop dynamic web content.
    -- Command-line scripting: For system administration tasks, such as backup and log parsing;
    also some CRON job-type scripts;
- Can be used with all leading web servers : Apache, Nginx, and OpenBSD servers; also cloud environments like Azure and Amazon;
- PHP has built-in support for generating PDF files and GIF, JPEG, and PNG images.
- DBs: supports MySQL, PostgreSQL, Oracle, Sybase, MS-SQL, DB2, and ODBC-compliant databases;
       also NoSQL-style databases like CouchDB and MongoDB;
- Change PHP's environment ===> restart the web (Apache) server in order for those changes to take effect.
- The settings in php.ini control the behavior of PHP features, such as session handling and form processing.

1.1. A Walk Through PHP
- PHP pages are generally HTML pages with PHP commands embedded in them;
- -> Configuration Page: phpinfo() creates an HTML page full of information on how PHP was installed and is currently configured.
- -> Forms: just an example form for now, more in chapter 8
- -> DBs: supports MySQL, PostgreSQL, Oracle, Sybase, SQLite, and ODBC-compliant databases.
- -> Graphics: create and manipulate images w/ the GD extension.

2. Language Basics

- PHP is influenced by Perl and C;

2.1. Lexical Structure
- lowest-level syntax of the language and specifies such things as what variable names look like,
what characters are used for comments + how program statements are separated from each other.
- add new line with nl2br() -> in it a string with \n

- Case sensitivity
    -- case-insensitive:
        -> names of user-defined classes and functions, builtin constructs and keywords (echo, while, class, etc.)
    -- case-sensitive:
        -> variables
- Statements and semicolons
    -- statement -> a collection of PHP code that does something, like a var assignment or a loop with multiple exit points.
    -- semicolons -> separate simple statements.
    -- compound statement -> like conditional test or loop -> no semicolon after a closing brace.
- Whitespace and line breaks
    -- !!! WHITESPACE DOES NOT MATTER IN PHP !!!
    -- write readable code, w/ whitespaces, n all, like scala python js etc.
- Comments
*/
# php supports shell style comments
# yay ^^
// php supports C++ style comments too
/* for longer comments -> use C style comments

- Literals
    -- literal === data value that appears directly in a program
- Identifiers
    -- identifier === name
    -- first character of an identifier MUST BE:
        -> an ASCII letter (uppercase or lowercase)
        -> underscore (_)
        -> any of the characters between ASCII 0x7F and ASCII 0xFF
- Variable names
    -- start with $
    -- are case-sensitive
- Function names
    -- not case-sensitive
- Class names
    -- not case-sensitive
- Constants
    -- can be: scalar values - Boolean, integer, double, and string + arrays
    -- referred to by their identifiers and are set using the define() function
- Keywords
    -- some php keywords: __CLASS__, echo, insteadof, print, public, try, yield

2.2. Data Types
  - scalar : integers, floating-point numbers, strings and booleans;
  - collection (compound): arrays, objects;
  - special types: resource, NULL;
  
2.2.1. Integers
- the range === the range of the long data type of your C compiler
- decimal: 102, -78536, 3
- octal- start with 0 and continue with nums from 0-7: 0755, -010
- hexadecimal - start with 0x, followed by a sequence of digits (0–9) or letters (A–F)
- binary - start with 0b, followed by a sequence of 1 and 0
- use func is_int() or is_integer() to test if a val is an int

2.2.2 Floats
- the range === from 1.7E−308 to 1.7E+308 with 15 digits of accuracy
- php recognizes normal written floats and sci written floats, like 3.14, 0.314E1
- compare 2 floats with == , to several decimal places
- use is_float() or is_real()to test if a val is a float

2.2.3. Strings
- same as python, can be defined with single or double quotes
- double quotes strings in php == f-string in python, regarding vars
- with \ -> special chars, like some chars in LaTeX
- \\ => \, and \' => ', seems like regex or something ^^
- compare two strings with ==
- use is_string() to test if a val is a string

2.2.4 Booleans
- keywords: true / false
- if ($alive) { }
- in php this is false:
    -- false
    -- 0
    -- 0.0
    -- ""
    -- "0"
    -- array with zero elements
    -- NULL
- use is_bool() to test if a val is a boolean

2.2.5 Arrays
- group of vals
- indexing like in python, starts at 0
- array w/ an associative index == dict
- constructor array()
- to create a dict use constructor array(key => val)
- iterate w/ foreach - array and dict.items too
- use is_array() to test if a val is an array

2.2.6 Objects
- php supports OOP
- classes
- in php classes the . are -> 
- php has this
- def === function ... <= the methods
- use is_object() to test if a val is an object
- serialize(someobj)


2.2.7 Resources
- a resource is a special variable, holding a reference to an external resource
- resources are created and used by special functions
- each active resource has a unique identifier
- identifier === numerical index into an internal PHP lookup table that holds info about all the active resources
- when there are no more references to the resource, it’s automatically shut down
- use the is_resource() function to test whether a val is a resource

2.2.8 Callbacks
- functions or object methods used by some functions, such as call_user_func()

2.2.9 NULL
- case-insensitive keyword NULL
- NULL is like None in python
- use is_null() to test if a val is NULL 

2.3 Variables
- start with $
- php is interpreted; no compile-time or runtime type checking on variables
- a var whose value has not been set behaves like the NULL value (like None in python, undefined in js, and so on)

2.3.1. Variable Variables
- $$some_var is the same as $some_var; 
- we can reference the value of a var whose name is stored in other var by prefacing the var reference with $

2.3.2 Pointers
- pointers (or references): $this_var_is_alias = & $for_this_var 
- the ref is just another var name for the val in the original var
- unset a var that is set as a ref with unset(var_ref)
- funcs can return vals by ref: $some_val = & some_func_name();

2.3.3. Variable Scope
- local 
    --- in PHP there is no var whose scope is a loop, conditional branch, or other type of block; local is only in a func
- global -> !!! DO NOT USE !!!
- static 
    --- retains its value between calls to a function but is visible only within that function
    --- declare static vars with the keyword static before the var's name: static $var1 = 1;
- function params
    --- named params
- garbage collection
    --- PHP uses reference counting and copy-on-write to manage memory
    --- copy-on-write ensures that memory isn’t wasted when you copy values between vars
    --- reference counting ensures that memory is returned to the operating system when it is no longer needed
    --- symbol table in php === dict in python, but for php all vars names are keys and vals vals, as a dict
    --- when copying a val to other, php just updates the symbol table with:
        ----> both of these variables are names for the same chunk of memory
    --- each val pointed to by a symbol table has a reference count:
        ----> a number that represents the number of ways there are to get to that piece of memory
        ---- a var goes out of scope at the end of a func (function params, local vars)
            => the reference count of its val is decreased by one
        ---- a var is assigned a val in a different area of memory => the reference count of the old val is decreased by one
        ---- the reference count of a value reaches 0 => its memory is released
    --- better memory management with ref count 
    --- use isset() to check if a var has a val
    --- use unset() to remove var's val.

    */
?>