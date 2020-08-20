<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Incubator\MongoDB\Mvc\Test\Integration\Collection\Manager;

use IntegrationTester;

/**
 * Class IsInitializedCest
 */
class IsInitializedCest
{
    /**
     * Tests Phalcon\Mvc\Collection\Manager :: isInitialized()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcCollectionManagerIsInitialized(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Collection\Manager - isInitialized()');
    }
}
