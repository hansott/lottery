# Lottery

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Are you feeling lucky? Play the lottery!

## Install

Via Composer

``` bash
$ composer require hansott/lottery
```

## Usage

``` php
$lotteryFactory = new \HansOtt\Lottery\LotteryFactoryDefault();
$lottery = $lotteryFactory->getLottery();
$ticket = new \HansOtt\Lottery\Ticket(1, 100); // 1% chance to win
$won = $lottery->isLucky($ticket);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email **hansott at hotmail be** instead of using the issue tracker.

## Credits

- [Hans Ott][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/hansott/lottery.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/hansott/lottery/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/hansott/lottery.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/hansott/lottery.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/hansott/lottery.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/hansott/lottery
[link-travis]: https://travis-ci.org/hansott/lottery
[link-scrutinizer]: https://scrutinizer-ci.com/g/hansott/lottery/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/hansott/lottery
[link-downloads]: https://packagist.org/packages/hansott/lottery
[link-author]: https://github.com/hansott
[link-contributors]: ../../contributors
