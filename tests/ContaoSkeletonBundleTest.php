<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\SkeletonBundle\Tests;

use Contao\SkeletonBundle\ContaoTabsBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoTabsBundle();

        $this->assertInstanceOf('Contao\SkeletonBundle\ContaoTabsBundle', $bundle);
    }
}
