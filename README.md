# minimin-package-example

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

An example package for the [Minimin](https://github.com/pxgamer/minimin) server management tool.

## Structure

```
bin/
config/
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/minimin-package-example
```

## Usage

When installed, if you browse to `/example` it will return a `var_dump()` of the `$route`, such as the following.

```text
object(ArrayObject)[7]
  public 'app' =>
    object(System\App)[2]
  private 'storage' =>
    array (size=1)
      'plugin' => string 'example' (length=7)
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/minimin-package-example.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/minimin-package-example/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/85757077/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/minimin-package-example.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/minimin-package-example.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/minimin-package-example
[link-travis]: https://travis-ci.org/pxgamer/minimin-package-example
[link-styleci]: https://styleci.io/repos/85757077
[link-code-quality]: https://codecov.io/gh/pxgamer/minimin-package-example
[link-downloads]: https://packagist.org/packages/pxgamer/minimin-package-example
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
