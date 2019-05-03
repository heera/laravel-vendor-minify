<?php
$docs = 'README* CHANGELOG* ChangeLog* CHANGES* FAQ* CONTRIBUTING* HISTORY* UPGRADING* UPGRADE* package* demo example examples doc docs readme* LICENSE* changelog* CONDUCT* .gitignore .gitattributes Doxyfile CODE_OF_CONDUCT* RELICENSED* upgrading.md ISSUE_TEMPLATE*';
$tests = '.travis.yml .scrutinizer.yml phpunit.xml* phpunit.php test tests Tests';
$standard = "{$docs} {$tests}";

return array(

    /*
    |--------------------------------------------------------------------------
    | Rules
    |--------------------------------------------------------------------------
    |
    | Additional rules, to do your own cleanups
    |
    */
    'rules' => array(

        // Popular packages
        'laravelcollective/html' => "{$standard}",
        'maximebf/debugbar'  => "{$standard}",
        'barryvdh/laravel-debugbar' => "{$standard}",
        'maatwebsite/excel' => "{$standard}",
        'markbaker/matrix' => "{$standard}",
        'markbaker/complex' => "{$standard}",
        'phpoffice/phpspreadsheet' => "{$standard}",
        'nunomaduro/collision' => "{$standard}",
        'barryvdh/laravel-cors' => "{$standard}",
        'asm89/stack-cors' => "{$standard}",
        'tymon/jwt-auth' => "{$standard}",
        'symfony/polyfill-util' => "{$standard}",
        'symfony/polyfill-php56' => "{$standard}",
        'namshi/jose' => "{$standard}",
        'jenssegers/agent' => "{$standard}",
        'jaybizzle/crawler-detect' => "{$standard}",
        'mobiledetect/mobiledetectlib' => "{$standard}",
        'barryvdh/laravel-dompdf' => "{$standard}",
            'sabberworm/php-css-parser' => "{$standard}",
            'phenx/php-svg-lib' => "{$standard}",
            'phenx/php-font-lib' => "{$standard}",
            'dompdf/dompdf' => "{$standard}",
        'bugsnag/bugsnag-laravel' => "{$standard}",
            'composer/ca-bundle' => "{$standard}",
            'bugsnag/bugsnag' => "{$standard}",
            'bugsnag/bugsnag-psr-logger' => "{$standard}",
        'yajra/laravel-datatables-oracle' => "{$standard}",
            'league/fractal' => "{$standard}",
        'maknz/slack' => "{$standard}",
        'webpatser/laravel-uuid' => "{$standard}",
        'graham-campbell/manager' => "{$standard}",
        'anahkiasen/underscore-php' => "{$standard}",
            'patchwork/utf8' => "{$standard}",
        'jenssegers/date' => "{$standard}",
        'dingo/blueprint' => "{$standard}",
            'doctrine/annotations' => "{$standard}",
        'barryvdh/laravel-snappy' => "{$standard}",
            'knplabs/knp-snappy' => "{$standard}",
        'jenssegers/mongodb' => "{$standard}",
            'mongodb/mongodb' => "{$standard}",
        'pragmarx/google2fa' => "{$standard}",
        'paragonie/constant_time_encoding' => "{$standard}",
        'itsgoingd/clockwork' => "{$standard}",
        'laracasts/utilities' => "{$standard}",
        'rap2hpoutre/laravel-log-viewer' => "{$standard}",
        'propaganistas/laravel-phone' => "{$standard} ISSUE_TEMPLATE*",
            'league/iso3166' => "{$standard}",
            'giggsey/locale' => "{$standard}",
            'giggsey/libphonenumber-for-php' => "{$standard}",
        'simplesoftwareio/simple-qrcode' => "{$standard}",
            'bacon/bacon-qr-code' => "{$standard}",
        'lucadegasperi/oauth2-server-laravel' => "{$standard}",
        'chumper/zipper' => "{$standard}",
        'prettus/l5-repository' => "{$standard} migration-to-*.md",
            'prettus/laravel-validation' => "{$standard}",
        'lorisleiva/laravel-search-string' => "{$standard}",
        'abhimanyusharma003/conversion' => "{$standard}",
        'albertcht/invisible-recaptcha' => "{$standard}",
        'appstract/laravel-blade-directives' => "{$standard}",
        'barryvdh/laravel-elfinder' => "{$standard}",
        'beyondcode/laravel-favicon' => "{$standard}",
        'caouecs/laravel-lang' => "{$standard}",
        'devfactory/minify' => "{$standard}",
        'doctrine/dbal' => "{$standard}",
        'fadion/maneuver' => "{$standard}",
        'fx3costa/laravelchartjs' => "{$standard}",
        'goszowski/temp' => "{$standard}",
        'greggilbert/recaptcha' => "{$standard}",
        'intervention/image' => "{$standard}",
        'ircop/antiflood' => "{$standard}",
        'larapack/config-writer' => "{$standard}",
        'larsjanssen6/underconstruction' => "{$standard}",
        'mcamara/laravel-localization' => "{$standard}",
        'renatomarinho/laravel-page-speed' => "{$standard}",
        'roumen/feed' => "{$standard}",
        'sentry/sentry-laravel' => "{$standard}",
        'spatie/laravel-image-optimizer' => "{$standard}",
        'spatie/laravel-paginateroute' => "{$standard}",
        'spatie/laravel-responsecache' => "{$standard}",
        'spatie/laravel-sitemap' => "{$standard}",
        'sunra/php-simple-html-dom-parser' => "{$standard}",
        'that0n3guy/transliteration' => "{$standard}",
        'thepinecode/blade-filters' => "{$standard}",
        'appzcoder/crud-generator' => "{$standard}",
        'tecnick.com/tcpdf' => "{$standard}",
        'snowfire/beautymail' => "{$standard}",
        'atehnix/laravel-stubs' => "{$standard}",

        // Default Laravel installation packages
        'beyondcode/laravel-dump-server' => "{$standard}",
        'dnoegel/php-xdg-base-dir' => "{$standard}",
        'doctrine/inflector' => "{$standard}",
        'doctrine/instantiator' => "{$standard}",
        'doctrine/lexer' => "{$standard}",
        'dragonmantank/cron-expression' => "{$standard}",
        'egulias/email-validator' => "{$standard}",
        'erusev/parsedown' => "{$standard}",
        'fideloper/proxy' => "{$standard}",
        'filp/whoops' => "{$standard}",
        'fzaninotto/faker' => "{$standard}",
        'guzzlehttp/guzzle' => "{$standard}",
        'guzzlehttp/promises' => "{$standard}",
        'guzzlehttp/psr7' => "{$standard}",
        'hamcrest/hamcrest-php' => "{$standard}",
        'jakub-onderka/php-console-color' => "{$standard}",
        'jakub-onderka/php-console-highlighter' => "{$standard}",
        'laravel/framework' => "{$standard}",
        'laravel/nexmo-notification-channel' => "{$standard}",
        'laravel/slack-notification-channel' => "{$standard}",
        'laravel/tinker' => "{$standard}",
        'lcobucci/jwt' => "{$standard}",
        'league/flysystem' => "{$standard}",
        'mockery/mockery' => "{$standard}",
        'monolog/monolog' => "{$standard}",
        'myclabs/deep-copy' => "{$standard}",
        'nesbot/carbon' => "{$standard}",
        'nexmo/client' => "{$standard}",
        'nikic/php-parser' => "{$standard}",
        'nunomaduro/collision' => "{$standard}",
        'opis/closure' => "{$standard}",
        'paragonie/random_compat' => "{$standard}",
        'phar-io/manifest' => "{$standard}",
        'phar-io/version' => "{$standard}",
        'php-http/guzzle6-adapter' => "{$standard}",
        'php-http/httplug' => "{$standard}",
        'php-http/promise' => "{$standard}",
        'phpdocumentor/reflection-common' => "{$standard}",
        'phpdocumentor/reflection-docblock' => "{$standard}",
        'phpdocumentor/type-resolver' => "{$standard}",
        'phpspec/prophecy' => "{$standard}",
        'phpunit/php-code-coverage' => "{$standard}",
        'phpunit/php-file-iterator' => "{$standard}",
        'phpunit/php-text-template' => "{$standard}",
        'phpunit/php-timer' => "{$standard}",
        'phpunit/php-token-stream' => "{$standard}",
        'phpunit/phpunit' => "{$standard}",
        'psr/container' => "{$standard}",
        'psr/http-message' => "{$standard}",
        'psr/log' => "{$standard}",
        'psr/simple-cache' => "{$standard}",
        'psy/psysh' => "{$standard}",
        'ralouphie/getallheaders' => "{$standard}",
        'ramsey/uuid' => "{$standard}",
        'sebastian/code-unit-reverse-lookup' => "{$standard}",
        'sebastian/comparator' => "{$standard}",
        'sebastian/diff' => "{$standard}",
        'sebastian/environment' => "{$standard}",
        'sebastian/exporter' => "{$standard}",
        'sebastian/global-state' => "{$standard}",
        'sebastian/object-enumerator' => "{$standard}",
        'sebastian/object-reflector' => "{$standard}",
        'sebastian/recursion-context' => "{$standard}",
        'sebastian/resource-operations' => "{$standard}",
        'sebastian/version' => "{$standard}",
        'swiftmailer/swiftmailer' => "{$standard}",
        'symfony/console' => "{$standard}",
        'symfony/contracts' => "{$standard}",
        'symfony/css-selector' => "{$standard}",
        'symfony/debug' => "{$standard}",
        'symfony/event-dispatcher' => "{$standard}",
        'symfony/finder' => "{$standard}",
        'symfony/http-foundation' => "{$standard}",
        'symfony/http-kernel' => "{$standard}",
        'symfony/polyfill-ctype' => "{$standard}",
        'symfony/polyfill-iconv' => "{$standard}",
        'symfony/polyfill-intl-idn' => "{$standard}",
        'symfony/polyfill-mbstring' => "{$standard}",
        'symfony/polyfill-php72' => "{$standard}",
        'symfony/process' => "{$standard}",
        'symfony/routing' => "{$standard}",
        'symfony/translation' => "{$standard}",
        'symfony/var-dumper' => "{$standard}",
        'theseer/tokenizer' => "{$standard} build.xml phive.xml",
        'tijsverkoyen/css-to-inline-styles' => "{$standard}",
        'vlucas/phpdotenv' => "{$standard}",
        'webmozart/assert' => "{$standard}",
        'zendframework/zend-diactoros' => "{$standard}",



    )
);
