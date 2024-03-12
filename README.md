
## BarCode And QrCode

this application is just a training to generate barcode or qrcode using laravel framework


## Instructions

install milon barcade

```bash
composer require milon/barcode
```
open your config/app.php file and add 

```bash

'providers' => [
    // ...
    Milon\Barcode\BarcodeServiceProvider::class,
]

'aliases' => [
    // ...
    'DNS1D' => Milon\Barcode\Facades\DNS1DFacade::class,
    'DNS2D' => Milon\Barcode\Facades\DNS2DFacade::class,
]
```

next

```bash
php artisan vendor:publish

```

and chose 8 


```bash
php artisan serve

```

got to /qr and /bar
