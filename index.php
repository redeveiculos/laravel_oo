<?php

//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

echo "Hello World!";
echo "<br />";
echo "Yes";
echo "<br />";
echo "<br />";

$json = @file_get_contents("https://api.chat-api.com/instance82080/status?token=kaft4m7wce0nlia9");

if ($json) {
    $data = json_decode($json, FALSE);

    if ($data && $data->accountStatus && $data->accountStatus == "authenticated") {
        echo "OK --> $json";
    } else {
        echo "ALARME";
    }
} else {
    echo "ALARME";
}


?>