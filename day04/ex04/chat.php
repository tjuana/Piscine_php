<?php
if (file_exists("../private/chat")) {
    $tab = unserialize(file_get_contents("../private/chat"));
} else {
    exit();
}
foreach ($tab as $key => $content) {
    echo "[" . $content['time'] . "] <b>" . $content['login'] . "</b>: " . $content['msg'] . "<br />\n";
}
?>
