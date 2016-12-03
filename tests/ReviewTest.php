<?php

/*
 * This file is part of Laravel Reviewable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Tests\Reviewable;

use BrianFaust\Reviewable\Review;

class ReviewTest extends AbstractTestCase
{
    public function testConstructor()
    {
        $review = new Review();
        $this->assertNotNull($review);

        $this->assertEquals($review->getPresenterClass(), \BrianFaust\Reviewable\Presenters\ReviewPresenter::class);
    }
}
