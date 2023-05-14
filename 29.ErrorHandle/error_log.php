<?php
// Log an error message to a file
$error_message = "This is an error message.";
$error_file = "error.log";
error_log($error_message . "\n", 3, $error_file);

// Log a debug message to the system log
$debug_message = "This is a debug message.";
openlog("myapp", LOG_PID | LOG_PERROR, LOG_USER);
syslog(LOG_DEBUG, $debug_message);
closelog();
