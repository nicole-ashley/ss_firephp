SS_FirePHP
==========

A module to allow easy installation of FirePHP in Silverstripe.

## Requirements
* SilverStripe 3.0 (probably also works with previous versions, but this has not been tested)
* FirePHP PEAR module (optional, otherwise an included fallback will be used)

## Installation
* Download the source code from here [https://github.com/nikrolls/SS_FirePHP/](https://github.com/nikrolls/SS_FirePHP/).
* Extract the downloaded archive into your site root, or a subfolder that has its own `_config.php`.
* Run `/dev/build?flush=all` to regenerate the manifest and detect the module.

For automatic Dev/Test/Live detection, please ensure that the root folder sorts alphanumerically *after* mysite; if not, you will have to enable FirePHP yourself using:

	FB::setEnabled(true);

## Usage
You can use SS_FirePHP the same way you would use standalone FirePHP, as documented at [FirePHP HQ](http://www.firephp.org/HQ/Use.htm).

You can use the [Firefox FireBug extension](https://addons.mozilla.org/en-US/firefox/addon/firephp/ "FirePHP for Firebug and Firefox") or the [Webug extension for Google Chrome](https://chrome.google.com/webstore/detail/cjbeipenlpoeifpkjhgakejmikdhlhcj "Webug for Google Chrome") to view the output.
