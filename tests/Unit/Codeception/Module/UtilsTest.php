<?php
declare(strict_types=1);

namespace Unit\Codeception\Module;

use Codeception\Test\Cept;
use PHPUnit\Framework\TestCase;
use Codeception\Module\Utils;

class UtilsTest extends TestCase
{
    public function testGetTestFileName()
    {
        $utils = new Utils();

        $testCept = new Cept('Test test', 'testfilename.php');
        $this->assertEquals('Test.testCept.screenshot.png', $utils->getTestFileName($testCept, 'screenshot'));

    }

}
