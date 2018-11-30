# show-urls
Plugin for YOURLS that retrieves all existing URLs from DB using 'action' parameter

## Description
This plugin accepts 'action' parameter with 'show_url' value and returns list of all URLs in database with additional information. Data returns in JSON or XML formats (default - XML).

## Installation
1. Copy `plugin.php` into `/user/plugins/api-action` folder
1. Go to the Plugins administration page `( eg http://sho.rt/admin/plugins.php )` and activate the plugin.

## Usage
* You can get all URLs in JSON format by addressing `http://<your.domain>/yourls-api.php?username=<username>&password=<password>&action=show_url&format=json` link where you provide your own domain, YOURLS username and password
* You can create CURL session as shown [in official documentation](https://yourls.org/#API)

## License
YOURLS' license, aka "Do whatever the hell you want with it".
