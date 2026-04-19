<?php

declare(strict_types=1);

// ZipStream (from php-maennchen-zipstream-php)
require_once '/usr/share/php/ZipStream/autoload.php';

// Complex numbers (from php-markbaker-complex)
require_once '/usr/share/php/Complex/autoload.php';

// Matrix operations (from php-markbaker-matrix)
require_once '/usr/share/php/Matrix/autoload.php';

// PSR-16 simple cache (from php-psr-simple-cache)
require_once '/usr/share/php/Psr/SimpleCache/autoload.php';

// Composer PCRE wrapper (from php-composer-pcre)
require_once '/usr/share/php/Composer/Pcre/autoload.php';

spl_autoload_register(function (string $class): void {
    $prefix = 'PhpOffice\\PhpSpreadsheet\\';
    $len = strlen($prefix);
    if (strncmp($class, $prefix, $len) !== 0) {
        return;
    }
    $file = __DIR__ . '/' . str_replace('\\', '/', substr($class, $len)) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
