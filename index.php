<!-- 
  Spell Check Starter
  This start code creates two arrays
  1: dictionary: an array containing all of the words from "dictionary.txt"
  2: aliceWords: an array containing all of the words from "AliceInWonderLand.txt"
 -->

<?php



function fileToArray($file) {
  // Read file as a string
  $fileRef = fopen($file, "r");
  $textData = fread($fileRef, filesize($file));
  fclose($fileRef);

  // Split text by one or more whitespace characters
  return preg_split('/\s+/', $textData);
}

// Load data files into arrays 
$dictionary = fileToArray("data-files/dictionary.txt");
$aliceWords = fileToArray("data-files/AliceInWonderLand.txt");

// Print first 50 values of each array to verify contents
// echo "***DICTIONARY***<br>";
// print_r(array_slice($dictionary, 0, 50));
echo "***ALICEWORDS***<br>";
print_r(array_slice($aliceWords, 0, 50));

function binarySearch($anArray, $item) {
  $li = 0;
  $ui = count($anArray) - 1;

  while ($li <= $ui) {
      $mi = floor(($li + $ui) / 2);
     
      if ($item == $anArray[$mi]) {
          return $mi;
      } else if ($item < $anArray[$mi]) {
          $ui = $mi - 1;
      } else {
          $li = $mi + 1;
      }
  }
  return -1;
}


function linearSearch($anArray, $item) { 
  for ($i = 0; $i < count($anArray); $i++) {
      if ($anArray[$i] == $item) {
          return $i . '<br>';
      } 
  }
  return -1 . '<br>';
}




if(isset($_POST['submit'])) {
  if($_POST['submitBinary']) {
    echo(binarySearch($dictionary, $submitBinary));
  } elseif ($_POST['submitLinear']) {
    echo(linearSearch($dictionary, $submitBinary));
  }

}



?>

<!DOCTYPE html>
<html>

<head>
  <title>Spell Check</title>
</head>

<body>
  <h1>Spell Check</h1>

  <form name='Dictionary Search' method='post'>
    <h3>Dictionary Binary Search: </h3>
      <input type='text' name='binary'>
        <input type='submit' name='submitBinary' value='Binary'>
    <h3>Dictionary Linear Search: </h3>
      <input type='text' name='linear'>
        <input type='submit' name='submitLinear' value='Linear'>
  </form>
 
  <form name='Alice Search' method='post' action='searchAlice'>
    <h3>Alice Binary Search: </h3>
      <input type='text' name='binary'>
        <input type='submit' name='submitBinary' value='Binary'>
    <h3>Alice Linear Search: </h3>
      <input type='text' name='linear'>
        <input type='submit' name='submitLinear' value='Linear'>
  </form>



</body>



</html>


<!-- $nums = [10, 30, 40, 45, 70, 80, 85, 90, 100];
$words = ["at", "ball", "cat", "dog", "eye", "fish", "good"];
$unsorted = [30, 20, 70, 40, 50, 100, 90];
 
 
function linearSearch($anArray, $item) { 
    for ($i = 0; $i < count($anArray); $i++) {
        if ($anArray[$i] == $item) {
            return $i . '<br>';
        } 
    }
    return -1 . '<br>';
}
 
echo(linearSearch($nums, 100) . ‘<br>’);
echo(linearSearch($nums, 75));
echo(linearSearch($words, "fish"));
echo(linearSearch($words, "at"));
echo(linearSearch($unsorted, 70));







$nums = [10, 30, 40, 45, 70, 80, 85, 90, 100];
$words = ["at", "ball", "cat", "dog", "eye", "fish", "good"];
$unsorted = [30, 20, 70, 40, 50, 100, 90];
 
function binarySearch($anArray, $item) {
    $li = 0;
    $ui = count($anArray) - 1;
 
    while ($li <= $ui) {
        $mi = floor(($li + $ui) / 2);
       
        if ($item == $anArray[$mi]) {
            return $mi;
        } else if ($item < $anArray[$mi]) {
            $ui = $mi - 1;
        } else {
            $li = $mi + 1;
        }
    }
    return -1;
}
 
echo(binarySearch($nums, 100));
echo(binarySearch($nums, 75));
echo(binarySearch($words, "fish"));
echo(binarySearch($words, "at"));
echo(binarySearch($unsorted, 70)); -->
