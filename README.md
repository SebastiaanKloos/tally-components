# This is my package tally-components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/key13/tally-components.svg?style=flat-square)](https://packagist.org/packages/key13/tally-components)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/key13/tally-components/run-tests?label=tests)](https://github.com/key13/tally-components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/key13/tally-components/Check%20&%20fix%20styling?label=code%20style)](https://github.com/key13/tally-components/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/key13/tally-components.svg?style=flat-square)](https://packagist.org/packages/key13/tally-components)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require key13/tally-components
```

## Usage

```php
// To load the Tally script
<x-tally-script />

<x-tally-feedback-button
    id="abcdef"
    :info="[
        'user' => auth()->user()?->email,
        'url' => url()->current(),
    ]"
/>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sebastiaan Kloos](https://github.com/SebastiaanKloos)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
