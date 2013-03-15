<?php

// Try to load from PEAR first
if (@include_once('FirePHPCore/fb.php')) {
	$status = "via PEAR.";
// If not installed in PEAR, load the version included in this module
} else if (@include_once (__DIR__ . '/code/core/lib/fb.php')) {
	$status = "via SS_FirePHP.";
} else {
	user_error('FirePHP PEAR module was not found, and the included FirePHP Core is corrupt.');
}

// Only enable FirePHP in Dev and Test mode, never in Live.
// Note that if you give the SS_FirePHP folder (or its top-level
// parent folder) a name that sorts alphanumerically *before*
// mysite, then it won't be able to detect this and you'll have to
// enable it manually from mysite/_config.php
if (isset($status) && (Director::isDev() || Director::isTest())) {
	FB::setEnabled(true);
	FB::log('FirePHP loaded ' . $status);
}
