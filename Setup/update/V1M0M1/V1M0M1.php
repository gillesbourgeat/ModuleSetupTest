<?php
/*
 * Generate by Thelia ModuleSetup
 */

namespace ModuleSetupTest\Setup\update\V1M0M1;

use Propel\Runtime\Connection\ConnectionInterface;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class V1M0M1
 * @package ModuleSetupTest\Setup\update\V1M0M1
 * @author Thelia ModuleSetup
 */
class V1M0M1
{
    /**
     * @param ConnectionInterface $con
     */
    public function test(ConnectionInterface $con)
    {

    }

    /**
     * @param ConnectionInterface $con
     */
    public function execute(ConnectionInterface $con)
    {
        $path = THELIA_MODULE_DIR . DIRECTORY_SEPARATOR . 'test' . DIRECTORY_SEPARATOR . 'log.txt';
        $version = str_replace(array('M', 'V'), '.', __CLASS__);
        file_put_contents($path, $version . "\r\n");
    }

    /**
     * @param ConnectionInterface $con
     */
    public function rollBack(ConnectionInterface $con)
    {

    }
}
