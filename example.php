<?php 

$content ="<p>This is a sample text where {123456} and {7894560} ['These {are} samples']{145789}</p>";
preg_match_all('/{(.*?)}/', $content, $matches);

/* To get string and interger value   */
$stringValue = array_map(null,$matches[1]);
echo 'Get String and Integer Value';
echo '<br>';
echo '<pre>'; print_r($stringValue); echo '</pre>';

/* To get only interger value   */
$intValue = array_map('intval',$matches[1]);
echo 'Get Integer Value Only';
echo '<br>';
echo '<pre>'; print_r($intValue); echo '</pre>'; 

?>
