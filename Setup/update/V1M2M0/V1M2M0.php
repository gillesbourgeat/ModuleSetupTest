<?php
/*
 * Generate by Thelia ModuleSetup
 */

namespace ModuleSetupTest\Setup\update\V1M2M0;

use Propel\Runtime\Connection\ConnectionInterface;

/**
 * Class V1M2M0
 * @package ModuleSetupTest\Setup\update\V1M2M0
 * @author Thelia ModuleSetup
 */
class V1M2M0
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
