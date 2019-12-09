# kirstenjnedrud.com

Personal website with contact form and projects

## Requirements
* PHP 7.0+
* PHP cURL:
	* https://www.php.net/manual/en/book.curl.php
	* `sudo apt-get install php7.0-curl`

## Configuration
In the `includes` directory, copy `config-sample.php` to `config.php` and edit to add config info.

### SendGrid
* Contact form uses SendGrid API
* API Key: https://app.sendgrid.com/settings/api_keys

### Google Analytics
* Tracking code will only be output when `ENV` is set to `prod`
* Tracking ID: https://analytics.google.com/analytics/web/
