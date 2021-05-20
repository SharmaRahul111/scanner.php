Scanner.php is a library that helps you to scan a 
whole directory/folder completely php's scandir() function
can only scan a folder's 1 layer/depth files or folders

-- Developed by Rahul Sharma (https://github.com/SharmaRahul111)

How to use:-
Requirements to test: A php web server or a terminal(php installed)
• put scanner.php file in your project directory
• Include the scanner.php file in your required file
  by pasting this below line to your main file and setting
  the required path.
include 'path/scanner.php';
• Now you have a function named scanner()
scanner($url, $type)
$url - the path of the root directory you want to start with
$type - the result you want
         possible values are :-
         'file' - returns an array of all files in it
         'dir' - returns an array of all directories/folders in it
         'both' - rwturns an array of both filez and directories
return value - array
• Run the demo.php file using a php web server or using terminal
to see how it works.
