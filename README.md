# User Manual 
The program is designed to read in XML or HTML and output it in formatted form, it removes extra characters if they are. 

## Usage
There should be two files in one folder. this main file, where the program code itself is located, another file, there is what needs to be formatted. 

PHP must be installed and configured correctly.

To view the result, you can run through the terminal by writing "php xmpParser.php"

## Documentation
$fileContentVar - a variable in which the initial data is written.

$cleanSymbolsResult - a variable into which the result will be written later.

$lessSymbolFound - variable is used to keep track of whether you are inside an XML/HTML tag or not.
