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
- Configuration Page: phpinfo() creates an HTML page full of information on how PHP was installed and is currently configured.
*/
?>