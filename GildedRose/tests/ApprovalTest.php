<?php

declare(strict_types=1);

namespace Tests;

use ApprovalTests\Approvals;
use PHPUnit\Framework\TestCase;

class ApprovalTest extends TestCase
{
    public function testTestFixture(): void
    {
        $argv[0] = 'export.php';
        $argv[1] = 31;

        ob_start();
        require_once dirname(__DIR__) . '/bin/export.php';
        $output = ob_get_contents();
        ob_end_clean();

        Approvals::verifyString($output);
    }
}
