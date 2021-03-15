<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
      0 => '4.0.x-dev',
    ),
    'reference' => 'ba1c34eb3963bacfd9e124ddfda58c26311fea90',
    'name' => 'phplist/base-distribution',
  ),
  'versions' => 
  array (
    'composer/ca-bundle' => 
    array (
      'pretty_version' => '1.2.9',
      'version' => '1.2.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '78a0e288fdcebf92aa2318a8d3656168da6ac1a5',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => 'v1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '54cacc9b81758b14e3ce750f205a393d52339e97',
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => 'v1.6.2',
      'version' => '1.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eb152c5100571c7a45470ff2a35095ab3f3b900b',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => 'v1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a4fb7e902202c33cce8c55989b945612943c2ba',
    ),
    'doctrine/common' => 
    array (
      'pretty_version' => 'v2.7.3',
      'version' => '2.7.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4acb8f89626baafede6ee5475bc5844096eba8a9',
    ),
    'doctrine/dbal' => 
    array (
      'pretty_version' => 'v2.5.13',
      'version' => '2.5.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '729340d8d1eec8f01bff708e12e449a3415af873',
    ),
    'doctrine/doctrine-bundle' => 
    array (
      'pretty_version' => '1.10.3',
      'version' => '1.10.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '907dafe1ba73c4c3b0f0ae8cfc1b9958c002e58c',
    ),
    'doctrine/doctrine-cache-bundle' => 
    array (
      'pretty_version' => '1.3.5',
      'version' => '1.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '5514c90d9fb595e1095e6d66ebb98ce9ef049927',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e11d84c6e018beedd929cff5220969a3c6d1d462',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.0.5',
      'version' => '1.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e884e78f9f0eb1329e445619e04456e64d8051d',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1febd6c3ef84253d7c815bed85fc622ad207a9f8',
    ),
    'doctrine/orm' => 
    array (
      'pretty_version' => 'v2.5.14',
      'version' => '2.5.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '810a7baf81462a5ddf10e8baa8cb94b6eec02754',
    ),
    'fig/link-util' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
    ),
    'friendsofsymfony/rest-bundle' => 
    array (
      'pretty_version' => '2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a5fc73b84bdb2f0fdf58a717b322ceb6997f7bf3',
    ),
    'jdorn/sql-formatter' => 
    array (
      'pretty_version' => 'v1.2.17',
      'version' => '1.2.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '64990d96e0959dff8e059dfcdc1af130728d92bc',
    ),
    'jms/metadata' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e5854ab1aa643623dc64adde718a8eec32b957a8',
    ),
    'jms/parser-lib' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c509473bc1b4866415627af0e1c6cc8ac97fa51d',
    ),
    'jms/serializer' => 
    array (
      'pretty_version' => '1.14.1',
      'version' => '1.14.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba908d278fff27ec01fb4349f372634ffcd697c0',
    ),
    'jms/serializer-bundle' => 
    array (
      'pretty_version' => '2.4.4',
      'version' => '2.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '92ee808c64c1c180775a0e57d00e3be0674668fb',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'phpcollection/phpcollection' => 
    array (
      'pretty_version' => '0.5.0',
      'version' => '0.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f2bcff45c0da7c27991bbc1f90f47c4b7fb434a6',
    ),
    'phplist/base-distribution' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '4.0.x-dev',
      ),
      'reference' => 'ba1c34eb3963bacfd9e124ddfda58c26311fea90',
    ),
    'phplist/core' => 
    array (
      'pretty_version' => 'dev-phplist3',
      'version' => 'dev-phplist3',
      'aliases' => 
      array (
      ),
      'reference' => '5399fe9d7194acb933e6883c133caba77327f261',
    ),
    'phplist/rest-api' => 
    array (
      'pretty_version' => 'dev-phplist3',
      'version' => 'dev-phplist3',
      'aliases' => 
      array (
      ),
      'reference' => '4364ded05d66fea3a7adb0a0ea0382c8b05cf45e',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/link' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eea8e8662d5cd3ae4517c9b864493f59fca95562',
    ),
    'psr/link-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
        1 => '1.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'roave/security-advisories' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => '43a315341710475e88006a0e55864b348d3d781c',
    ),
    'sensio/distribution-bundle' => 
    array (
      'pretty_version' => 'v5.0.25',
      'version' => '5.0.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '80a38234bde8321fb92aa0b8c27978a272bb4baf',
    ),
    'sensio/framework-extra-bundle' => 
    array (
      'pretty_version' => 'v5.1.0',
      'version' => '5.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bbf545277bc238334d008e4ff47f3850be00f122',
    ),
    'sensiolabs/security-checker' => 
    array (
      'pretty_version' => 'v5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '46be3f58adac13084497961e10eed9a7fb4d44d1',
    ),
    'symfony/asset' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/browser-kit' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/class-loader' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/css-selector' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/debug' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/debug-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/dependency-injection' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/doctrine-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/dom-crawler' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/dotenv' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/event-dispatcher' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/expression-language' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/finder' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/form' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/framework-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/http-foundation' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/http-kernel' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/inflector' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/intl' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/ldap' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/lock' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/monolog-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/monolog-bundle' => 
    array (
      'pretty_version' => 'v3.6.0',
      'version' => '3.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e495f5c7e4e672ffef4357d4a4d85f010802f940',
    ),
    'symfony/options-resolver' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/polyfill-apcu' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b44b51e7814c23bfbd793a16ead5d7ce43ed23c5',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aed596913b70fae57be53d86faa2e9ef85a2297b',
    ),
    'symfony/polyfill-intl-icu' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f740dd60a5b5f1511229e107f7e59f404b102084',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b5f7b932ee6fa802fc792eabd77c4c88084517ce',
    ),
    'symfony/polyfill-php56' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ea19621731cbd973a6702cfedef3419768bf3372',
    ),
    'symfony/polyfill-php70' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3fe414077251a81a1b15b1c709faf5c2fbae3d4e',
    ),
    'symfony/polyfill-util' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8df0c3e6a4b85df9a5c6f3f2f46fba5c5c47058a',
    ),
    'symfony/process' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/property-access' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/property-info' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/proxy-manager-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/security' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/security-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/security-core' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/security-csrf' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/security-guard' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/security-http' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/serializer' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/stopwatch' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/symfony' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '83093d5448a7b90fd4cbcce38580ae53898f506f',
    ),
    'symfony/templating' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/twig-bridge' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/twig-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/validator' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/web-link' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/web-profiler-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/web-server-bundle' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/workflow' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'symfony/yaml' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.4.47',
      ),
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v2.12.5',
      'version' => '2.12.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '18772e0190734944277ee97a02a9a6c6555fcd94',
    ),
    'willdurand/jsonp-callback-validator' => 
    array (
      'pretty_version' => 'v1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a7d388bb521959e612ef50c5c7b1691b097e909',
    ),
    'willdurand/negotiation' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '03436ededa67c6e83b9b12defac15384cb399dc9',
    ),
  ),
);

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        return array_keys(self::$installed['versions']);
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        return isset(self::$installed['versions'][$packageName]);
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }

        $ranges = array();
        if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
            $ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
        }
        if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
            $ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
        }
        if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
            $ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
        }
        if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
            $ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
        }

        return implode(' || ', $ranges);
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }

        if (!isset(self::$installed['versions'][$packageName]['version'])) {
            return null;
        }

        return self::$installed['versions'][$packageName]['version'];
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }

        if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
            return null;
        }

        return self::$installed['versions'][$packageName]['pretty_version'];
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }

        if (!isset(self::$installed['versions'][$packageName]['reference'])) {
            return null;
        }

        return self::$installed['versions'][$packageName]['reference'];
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        return self::$installed['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
    }
}
