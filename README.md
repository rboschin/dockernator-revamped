# dockernator-revamped

PHP fork of the Docker Desktop name generator when provisioning containers.
Forked from srmklive/dockernator by Raza Mehdi

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

- [Installation](#installation)
- [Usage](#usage)

<a name="installation"></a>

## Installation

The package can be installed through Composer:

# Add a personal package in github

Edit application's composer.json:

    "repositories": [
      {
          "type": "vcs",
          "url":  "https://github.com/rboschin/dockernator-revamped.git"
      }
    ],

# Add a local personal package

Edit application's composer.json:

    "repositories": [
        {
            "type": "path",
            "url": "../packages/rboschin/dockernator-revamped",
            "options": {
                "symlink": true
            }
        }
    ],

```
composer require rboschin/dockernator-revamped:dev-main --no-update --prefer-source
composer update rboschin/dockernator-revamped --prefer-source
```

<a name="usage"></a>

## Usage

```php
// Import the class namespaces first, before using it directly
use Rboschin\DockernatorRevamped\Generator;

$provider = new Generator;

// Generate a random beautiful name
$name = $provider->generate();
    => intelligent-feistel

// Generate a less common random name
$name = $provider->generate('day');
    => loving-allen-saturday
$name = $provider->generate('shortday');
    => loving-allen-sat
$name = $provider->generate('daynumber');
    => zen-faraday-13
$name = $provider->generate('date');
    => exciting-mestorf-2025-12-13
$name = $provider->generate('unique');
    => hungry-goldberg-693d9b8c9004f
$name = $provider->generate('random');
    => pedantic-haibt-2497
$name = $provider->generate('customStringOrNumber');
    => beautiful-faraday-customStringOrNumber
    => kind-snyder-customStringOrNumber

// Generate a shorter name
$name = $provider->generatePrefix();
    => eloquent
$name = $provider->generatePrefix('day');
    => funny-saturday
$name = $provider->generatePrefix('month');
    => busy-december
```

## Tinker

```php
php artisan tinker
use Rboschin\DockernatorRevamped\Generator;
$provider = new Generator;
$name = $provider->generate();
$name = $provider->generatePrefix();
```
