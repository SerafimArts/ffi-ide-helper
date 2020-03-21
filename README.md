# FFI Ide Helper

This package provides an extended autocomplete for PHP FFI in a PhpStorm IDE.

## Features

### Autocomplete by built-in C/C++ types

![](https://habrastorage.org/webt/4i/9g/h2/4i9gh25nnoj_l5u8dpnyt3vdvco.png)

## Automatic type inference

![](https://habrastorage.org/webt/vy/rm/g_/vyrmg_3udkrqsp4sl_xfcxdgmby.png)

## Type inference from pointers

![](https://habrastorage.org/webt/bl/bs/mr/blbsmrxybpvt-dpz2mfo6xvs3ba.png)

## Distinguishes pointers from values

![](https://habrastorage.org/webt/6n/lz/2y/6nlz2yz74jpwr5w1gtpehnsgnri.png)

## Custom auto-complete by structures

![](https://habrastorage.org/webt/7v/92/jo/7v92jojfqtbrjkqpbcv5j97bfhi.png)

-----

And maybe something else... Offer as PR =))

## Pointers Generator

1) Create Configuration (like `ffi-gen-config.php`)

```php
// Example C/C++ header declaration:
//
// typedef struct MyExampleStruct { ... } MyExampleStruct;
// extern void foo(MyExampleStruct* a);
// extern void foo(MyExampleStruct** b);
// 

return [
    'out'   => __DIR__ . '/resources/stubs',
    'types' => [
        'MyExampleStruct' => ['pointers' => 2],
    //  ^^^^^^^^^^^^^^^^                   ^ - Number of pointers.
    //  Your Class Name                        Number 2 means that will be created
    //                                         "MyExampleStructPtr" and "MyExampleStructPtrPtr" pointers
    ],
];
```

2) Generate 

```sh
$ vendor/bin/ffi-generator.php ffi-gen-config.php
```
