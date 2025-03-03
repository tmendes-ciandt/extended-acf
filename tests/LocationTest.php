<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/wordplate/extended-acf
 */

declare(strict_types=1);

namespace WordPlate\Tests\Acf;

use PHPUnit\Framework\TestCase;
use WordPlate\Acf\Location;

class LocationTest extends TestCase
{
    public function testWhere()
    {
        $location = [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ],
        ];

        $this->assertSame($location, Location::where('post_type', 'post')->get());
        $this->assertSame($location, Location::where('post_type', '==', 'post')->get());
    }

    public function testAnd()
    {
        $location = [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ],
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'employee',
            ],
        ];

        $this->assertSame($location, Location::where('post_type', 'post')->and('post_type', 'employee')->get());
    }
}
