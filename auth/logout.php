<?php
session_start();
session_destroy();
header("Location: /parking/index.php");
exit;
