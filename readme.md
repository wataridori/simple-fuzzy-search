Simple Fuzzy Search for PHP
==========
[![Build Status](https://travis-ci.org/wataridori/simple-fuzzy-search.svg)](https://travis-ci.org/wataridori/simple-fuzzy-search)
[![Latest Stable Version](https://poser.pugx.org/wataridori/simple-fuzzy-search/v/stable.svg)](https://packagist.org/packages/wataridori/simple-fuzzy-search)
[![Total Downloads](https://poser.pugx.org/wataridori/simple-fuzzy-search/downloads.svg)](https://packagist.org/packages/wataridori/simple-fuzzy-search)
[![Latest Unstable Version](https://poser.pugx.org/wataridori/simple-fuzzy-search/v/unstable.svg)](https://packagist.org/packages/wataridori/simple-fuzzy-search)
[![License](https://poser.pugx.org/wataridori/simple-fuzzy-search/license.svg)](https://packagist.org/packages/wataridori/simple-fuzzy-search)

## Requirement
* PHP >= 5.4

## Install

You can install and manage SimpleFuzzySearch by using `Composer`

```
composer require wataridori/simple-fuzzy-search
```

Or add `wataridori/simple-fuzzy-search` into the require section of your `composer.json` file then run `composer update`

## Usage

```php
$arrayData = [
    [
        'nickname' => 'thangtd90',
        'fullname' => 'Tran Duc Thang',
    ],
    [
        'nickname' => 'trongbs',
        'fullname' => 'Tran Ba Trong',
    ],
    [
        'nickname' => 'vigov5',
        'fullname' => 'Nguyen Anh Tien',
    ],
    [
        'nickname' => 'kienBG',
        'fullname' => 'Do Trung Kien',
    ],
    [
        'nickname' => 'vuong',
        'fullname' => 'Nguyen Van Vuong',
    ],
    [
        'nickname' => 'dainghia',
        'fullname' => 'Le Van Nghia',
    ],
    [
        'nickname' => 'tungctf',
        'fullname' => 'Nguyen Duc Tung',
    ],
];

// Find by both nickname and fullname
$sfs = new SimpleFuzzySearch($this->arrayData, ['nickname', 'fullname'], 'tung');

// This will return "Nguyen Duc Tung" and "Do Trung Kien"
$results = $sfs->search();

// This will return "Tran Duc Thang"
$results = $sfs->search('trn dc thsng');
```

## Test
Just run `phpunit` to start test.
