<?php
/**
 * CSV Source plugin for Craft CMS 3.x
 *
 * Use CSV data in templates as a Twig variable
 *
 * @link      https://www.github.com/extensibleseth
 * @copyright Copyright (c) 2021 Seth Hendrick
 */

namespace extensibleseth\csvsourcetests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use extensibleseth\csvsource\CsvSource;

/**
 * ExampleUnitTest
 *
 *
 * @author    Seth Hendrick
 * @package   CsvSource
 * @since     0.1.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            CsvSource::class,
            CsvSource::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
