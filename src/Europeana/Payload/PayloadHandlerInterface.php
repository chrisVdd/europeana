<?php

/*
 * This file is part of the Europeana API package.
 *
 * (c) Matthias Vandermaesen <matthias@colada.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Europeana\Payload;

/**
 * @author Matthias Vandermaesen <matthias@colada.be>
 */
interface PayloadHandlerInterface
{
    /**
     * [create description]
     * @param  PayloadInterface $payload [description]
     * @return [type]                    [description]
     */
    public static function create(PayloadInterface $payload);

    /**
     * @return array
     */
    public function get();
}
