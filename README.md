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
    "repositories": [
      {
          "type": "vcs",
          "url":  "https://github.com/rboschin/dockernator-revamped.git"
      }
    ],
# Add a local personal package
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

$provider = new NameGenerator;

// Generate a random beautiful name
$name = $provider->generate();