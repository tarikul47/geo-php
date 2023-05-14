<?php

/**
 * Working with file system
 * - scandir();
 * - mkdir | rmdir 
 * - file_exists()
 * - filesize()
 * - file_put_contents()
 * - clearstatcache()
 * - fopen() | @fopne() 
 * - file_get_contents()
 * - copy();
 * - rename()
 * - pathinfo()
 */

/**
 * file_put_contents() 
 * parameter = 3 (pathname, content, mode)
 * - FILE_USE_INCLUDE_PATH 
 * - FILE_APPEND = can added append 
 * - LOCK_EX 
 */

/**
 * scandir()
 * parameter = __DIR__
 * we get all file name in the directory 
 * 
$dir = scandir(__FILE__);
echo "<pre>";
print_r($dir);
 */

 echo "hellop index";
