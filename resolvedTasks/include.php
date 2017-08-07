<?php
/*# Include

include all the tasks from task 10 to task 20.php into task21.php. In order.

**CATCH**

Your solution must be made with 3 lines of code.

PS: write a comment at the very end of the php tag (just before you close it) with the difference between include, require, include_once, require_once
*/

for ($i=0; $i <= 8; $i++) {
  # code...

include 'task1'.$i.'.php';
include 'task20.php';
//require 'task11.php';
//include_once 'task12.php';
// include 'task13.php';
//require_once 'task14.php';
}


/*
It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.

The include and require statements are identical, except upon failure:

require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue
require_once() statement can be used to include a php file in another one, when you may need to include the called file more than once. If it is found that the file has already been included, calling script is going to ignore further inclusions.

If a.php is a php script calling b.php with require_once() statement, and does not find b.php, a.php stops executes causing a fatal error.

Syntax

require_once('name of the calling file with path');
The include_once() statement can be used to include a php file in another one, when you may need to include the called file more than once. If it is found that the file has already been included, calling script is going to ignore further inclusions.

If a.php is a php script calling b.php with include_once() statement, and does not find b.php, a.php executes with a warning, excluding the part of the code written within b.php.

Syntax

include_once('name of the called file with path');*/


?>
