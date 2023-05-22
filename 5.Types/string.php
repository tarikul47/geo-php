<?php

/**
 * Heredoc and Nowdoc string 
 * 
 * 1. heredoc supports variable but Nowdoc don't support 
 * 
 * heredoc = <<<"EOT" | <<<EOT
 * Nowdoc = <<<'EOT'
 * 
 * browser can't read new line = can use nl2br()
 */

$variable1 = "  Raju  ";

$variable = <<<"EOT"
This is a multiline string.
It can include variables like $variable1.
EOT;

$variable2 = <<<'EOT'
This is a nowdoc string.
Variables like $variable1 are treated as plain text.
EOT;




echo nl2br($variable2);
