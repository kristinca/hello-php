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

    */
?>