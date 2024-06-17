<?php
$fileContentVar = file_get_contents("file.html");

if($fileContentVar === false){
    die('error');
}

$lessSymbolFound = false;
$cleanSymbolsResult = '';
$identionLayer = 0;
$identionLeerspalte = '    ';


for($i = 0; $i < strlen($fileContentVar); $i++){
    $currentChar = $fileContentVar[$i];
    if($currentChar === "<"){
        $lessSymbolFound = true;
        $cleanSymbolsResult = $cleanSymbolsResult . "\n" . str_repeat($identionLeerspalte, $identionLayer);
        $cleanSymbolsResult = $cleanSymbolsResult . $currentChar;

        if(isset($fileContentVar[$i + 1]) && $fileContentVar[$i + 1] === '/'){
            $identionLayer--;
        }else{
            $identionLayer++;
        }
    }
    elseif($currentChar === ">"){
        $lessSymbolFound = false;
        $cleanSymbolsResult = $cleanSymbolsResult . $currentChar;
    }elseif($lessSymbolFound){
        $cleanSymbolsResult = $cleanSymbolsResult . $currentChar;
    }else{
        if($currentChar !== ' ' && $currentChar !== "\n" && $currentChar !== "\t"){
            $cleanSymbolsResult = $cleanSymbolsResult . $currentChar;
        }
    }
}
$cleanSymbolsResult = trim($cleanSymbolsResult);

echo  $cleanSymbolsResult;

?>