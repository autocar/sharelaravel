# share-laravel
Pugin for Laravel 4 just to share content in Facebook and Twitter

[![Build Status](https://travis-ci.org/simkimsia/UtilityBehaviors.png)](https://coveralls.io/r/carlosrgzm/sharelaravel)
[![Coverage Status](https://coveralls.io/repos/carlosrgzm/sharelaravel/badge.svg)](https://coveralls.io/r/carlosrgzm/sharelaravel)
[![Latest Stable Version](https://poser.pugx.org/carloscsrm/sharelaravel/v/stable.svg)](https://packagist.org/packages/carloscsrm/sharelaravel) 
[![Total Downloads](https://poser.pugx.org/carloscsrm/sharelaravel/downloads.svg)](https://packagist.org/packages/carloscsrm/sharelaravel) 
[![Latest Unstable Version](https://poser.pugx.org/carloscsrm/sharelaravel/v/unstable.svg)](https://packagist.org/packages/carloscsrm/sharelaravel) 
[![License](https://poser.pugx.org/carloscsrm/sharelaravel/license.svg)](https://packagist.org/packages/carloscsrm/sharelaravel)


## Installation

1. Add `carloscsrm/sharelaravel` to `composer.json`.

 > "carloscsrm/sharelaravel": "dev-master"

2. Run composer update to pull down the latest version of Share-Laravel.

3. Now open up app/config/app.php and add the service provider to your providers array.

 >  'providers' => array(
        'Carloscsrm\Sharelaravel\SharelaravelServiceProvider',
    ),

The Alias is automatically added by the system, you don't need add it manually. The alias is **Sharelaravel**

## Configuration

Run `php artisan config:publish carloscsrm/sharelaravel` and modify the config file with your own information.

## Usage

For using this package you can add this code in your templates

`{{Sharelaravel::render($your_url, array('twitterVia'=>'your_twitter_account', 'textToShare'=>'Your text for twitter' }}`

