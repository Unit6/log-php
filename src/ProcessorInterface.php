<?php
/*
 * This file is part of the Log package.
 *
 * (c) Unit6 <team@unit6websites.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unit6\Log;

/**
 * Describes a processor instance
 */
interface ProcessorInterface
{
    /**
     * Process the event record.
     *
     * @param array $event Log event record.
     */
    public function __invoke(array &$event);
}
