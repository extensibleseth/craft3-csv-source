<?php
/**
 * CSV Source plugin for Craft CMS 3.x
 *
 * Use CSV data in templates as a Twig variable
 *
 * @link      https://www.github.com/extensibleseth
 * @copyright Copyright (c) 2021 Seth Hendrick
 */

namespace extensibleseth\csvsource\services;

use extensibleseth\csvsource\CsvSource;

use Craft;
use craft\base\Component;

/**
 * CsvSourceService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Seth Hendrick
 * @package   CsvSource
 * @since     0.1.0
 */
class CsvSourceService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     CsvSource::$plugin->csvSourceService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
