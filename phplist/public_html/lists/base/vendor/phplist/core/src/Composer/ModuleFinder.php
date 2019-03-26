<?php
declare(strict_types=1);

namespace PhpList\Core\Composer;

use Symfony\Component\Yaml\Yaml;

/**
 * This class finds things related to phpList modules, e.g., bundles and routes.
 *
 * @author Oliver Klee <oliver@phplist.com>
 */
class ModuleFinder
{
    /**
     * @var string
     */
    const YAML_COMMENT = '# This file is autogenerated. Please do not edit.';

    /**
     * @var PackageRepository
     */
    private $packageRepository = null;

    /**
     * @param PackageRepository $repository
     *
     * @return void
     */
    public function injectPackageRepository(PackageRepository $repository)
    {
        $this->packageRepository = $repository;
    }

    /**
     * Finds the bundles class in all installed modules.
     *
     * @return string[][] class names of the bundles of all installed phpList modules:
     * ['module package name' => ['bundle class name 1', 'bundle class name 2']]
     *
     * @throws \InvalidArgumentException
     */
    public function findBundleClasses(): array
    {
        /** @var string[][] $bundleSets */
        $bundleSets = [];

        $modules = $this->packageRepository->findModules();
        foreach ($modules as $module) {
            $extra = $module->getExtra();
            $this->validateBundlesSectionInExtra($extra);
            if (empty($extra['phplist/core']['bundles'])) {
                continue;
            }

            $bundleSets[$module->getName()] = $extra['phplist/core']['bundles'];
        }

        return $bundleSets;
    }

    /**
     * Validates the bundles section in the "extra" section of the composer.json of a module.
     *
     * @param array $extra
     *
     * @return void
     *
     * @throws \InvalidArgumentException if $extra has an invalid bundles configuration
     */
    private function validateBundlesSectionInExtra(array $extra)
    {
        if (!isset($extra['phplist/core'])) {
            return;
        }
        $this->validatePhpListSectionInExtra($extra);

        if (!isset($extra['phplist/core']['bundles'])) {
            return;
        }
        if (!is_array($extra['phplist/core']['bundles'])) {
            throw new \InvalidArgumentException(
                'The extras.phplist/core.bundles section in the composer.json must be an array.',
                1505411665
            );
        }

        /** @var array $bundleExtras */
        $bundleExtras = $extra['phplist/core']['bundles'];
        foreach ($bundleExtras as $key => $bundleName) {
            if (!is_string($bundleName)) {
                throw new \InvalidArgumentException(
                    'The extras.phplist/core.bundles. ' . $key . '" section in the composer.json must be a string.',
                    1505412184
                );
            }
        }
    }

    /**
     * Validates the phpList modules section in the "extra" section of the composer.json of a module.
     *
     * @param array $extra
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    private function validatePhpListSectionInExtra(array $extra)
    {
        if (!is_array($extra['phplist/core'])) {
            throw new \InvalidArgumentException(
                'The extras.phplist/core" section in the composer.json must be an array.',
                1505411436
            );
        }
    }

    /**
     * Builds the YAML configuration file contents for the registered bundles in all modules.
     *
     * The returned string is intended to be written to config/bundles.yml.
     *
     * @return string
     */
    public function createBundleConfigurationYaml(): string
    {
        return static::YAML_COMMENT . "\n" . Yaml::dump($this->findBundleClasses());
    }

    /**
     * Finds the routes in all installed modules.
     *
     * @return array[] class names of the routes of all installed phpList modules:
     * ['route name' => [route configuration]
     *
     * @throws \InvalidArgumentException
     */
    public function findRoutes(): array
    {
        /** @var array[] $routes */
        $routes = [];

        $modules = $this->packageRepository->findModules();
        foreach ($modules as $module) {
            $extra = $module->getExtra();
            $this->validateRoutesSectionInExtra($extra);
            if (empty($extra['phplist/core']['routes'])) {
                continue;
            }

            /** @var array $moduleRoutes */
            $moduleRoutes = $extra['phplist/core']['routes'];
            foreach ($moduleRoutes as $name => $route) {
                $prefixedRouteName = $module->getName() . '.' . $name;
                $routes[$prefixedRouteName] = $route;
            }
        }

        return $routes;
    }

    /**
     * Validates the routes section in the "extra" section of the composer.json of a module.
     *
     * @param array $extra
     *
     * @return void
     *
     * @throws \InvalidArgumentException if $extra has an invalid routes configuration
     */
    private function validateRoutesSectionInExtra(array $extra)
    {
        if (!isset($extra['phplist/core'])) {
            return;
        }
        $this->validatePhpListSectionInExtra($extra);

        if (!isset($extra['phplist/core']['routes'])) {
            return;
        }
        if (!is_array($extra['phplist/core']['routes'])) {
            throw new \InvalidArgumentException(
                'The extras.phplist/core.routes section in the composer.json must be an array.',
                1506429004
            );
        }

        /** @var array $bundleExtras */
        $bundleExtras = $extra['phplist/core']['routes'];
        foreach ($bundleExtras as $routeName => $routeConfiguration) {
            if (!is_array($routeConfiguration)) {
                throw new \InvalidArgumentException(
                    'The extras.phplist/core.routes. ' . $routeName .
                    '" section in the composer.json must be an array.',
                    1506429860
                );
            }
        }
    }

    /**
     * Builds the YAML configuration file contents for the registered routes in all modules.
     *
     * The returned string is intended to be written to config/routing_modules.yml.
     *
     * @return string
     */
    public function createRouteConfigurationYaml(): string
    {
        return static::YAML_COMMENT . "\n" . Yaml::dump($this->findRoutes());
    }

    /**
     * Finds and merges the configuration in all installed modules.
     *
     * @return array configuration which can be dumped in a config_modules.yml file
     *
     * @throws \InvalidArgumentException
     */
    public function findGeneralConfiguration(): array
    {
        /** @var array[] $configurationSets */
        $configurationSets = [[]];

        $modules = $this->packageRepository->findModules();
        foreach ($modules as $module) {
            $extra = $module->getExtra();
            $this->validateGeneralConfigurationSectionInExtra($extra);
            if (!isset($extra['phplist/core']['configuration'])) {
                continue;
            }

            $configurationSets[] = $extra['phplist/core']['configuration'];
        }

        return /** @scrutinizer ignore-call */ array_replace_recursive(...$configurationSets);
    }

    /**
     * Validates the configuration in the "extra" section of the composer.json of a module.
     *
     * @param array $extra
     *
     * @return void
     *
     * @throws \InvalidArgumentException if $extra has an invalid routes configuration
     */
    private function validateGeneralConfigurationSectionInExtra(array $extra)
    {
        if (!isset($extra['phplist/core'])) {
            return;
        }
        $this->validatePhpListSectionInExtra($extra);

        if (!isset($extra['phplist/core']['configuration'])) {
            return;
        }
        if (!is_array($extra['phplist/core']['configuration'])) {
            throw new \InvalidArgumentException(
                'The extras.phplist/core.configuration section in the composer.json must be an array.',
                1508165934
            );
        }
    }

    /**
     * Builds the YAML configuration file contents all modules.
     *
     * The returned string is intended to be written to config/config_modules.yml.
     *
     * @return string
     */
    public function createGeneralConfigurationYaml(): string
    {
        return static::YAML_COMMENT . "\n" . Yaml::dump($this->findGeneralConfiguration());
    }
}
