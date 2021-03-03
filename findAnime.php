<?php

echo getcwd() . PHP_EOL;
$path = 'E:/Downloads/Compressed/';
chdir($path);
echo getcwd() . PHP_EOL;
// foreach (glob("*.zip", GLOB_NOCHECK) as $filename) {
//     echo "$filename" . PHP_EOL;
// }
$files = array();
$files = glob("*.zip");
// sort files by last modified date
usort($files, function ($x, $y) {
    return filemtime($x) < filemtime($y);
});
echo $files[0] . PHP_EOL;
$file = $files[0];

$zip = new ZipArchive;
if ($zip->open($file) === TRUE) {
    $zip->extractTo("E:/Downloads/Video/");
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
// foreach ($files as $item) {
//     echo basename($item) . " => Last Modified On " . @date('F d, Y, H:i:s', filemtime($item)) . PHP_EOL;
// }
