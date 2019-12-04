<?php
$user = 'zaz';
$pasw = 'Ilovemylittleponey';

if ($_SERVER['PHP_AUTH_USER'] != 'zaz') {
    header('WWW-Authenticate: Basic realm="Member area"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>That area is accessible for members only</body></html>\n";
} elseif ($_SERVER['PHP_AUTH_USER'] == $user && $_SERVER['PHP_AUTH_PW'] == $pasw) {
    echo "<html><body>\n" . "Hello Zaz<br />\n";
    $img_content = base64_encode(file_get_contents("../img/42.png"));
    echo "<img src='data:image/png;base64, $img_content'>\n" . "</body></html>\n";
}
?>