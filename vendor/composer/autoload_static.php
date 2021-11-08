<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf20314084a08de0c1d7c3270a07ab21
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'da9e4d270bda7bc043a2dc02956abf17' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Environment.php',
        '8b0d8182a4f871f272ee1638041f3f36' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Operation.php',
        'c6ed115e31ec6baa8e2f630fef228819' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Constants.php',
        '93dd2c99548a49fc9b37162353bead4d' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Configuration.php',
        '83b1318ee885147e8d4991edf1491472' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Service.php',
        '230015a06f1b89c05ceea08f4725ce45' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Client.php',
        'feace289e44633d367d07d323d187694' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/ErrorType.php',
        '0b418c7afa00b60d5a388c6a020ccd17' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Response.php',
        'c4b0cb40ca5cdaa065225f8f44ccf438' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Exception/AuthenticationException.php',
        'ba1eebdc8f0c2befa8749ff319a629ea' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Exception/InvalidHostException.php',
        'a2b4f5b316023281b2be4c63c8a7dce0' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Exception/InvalidReceiverException.php',
        '909b5f55be94ac404f81f063e07fef3f' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Exception/TimeoutException.php',
        '499080c63efd4fc06b6ff64435b5ce8c' => __DIR__ . '/..' . '/paymentsds/mpesa/src/Paymentsds/MPesa/Exception/ValidationException.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Paysuite\\MPesa\\' => 15,
        ),
        'K' => 
        array (
            'Karson\\MpesaPhpSdk\\' => 19,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Paysuite\\MPesa\\' => 
        array (
            0 => __DIR__ . '/..' . '/paymentsds/mpesa/src',
        ),
        'Karson\\MpesaPhpSdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/karson/mpesa-php-sdk/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf20314084a08de0c1d7c3270a07ab21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf20314084a08de0c1d7c3270a07ab21::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf20314084a08de0c1d7c3270a07ab21::$classMap;

        }, null, ClassLoader::class);
    }
}