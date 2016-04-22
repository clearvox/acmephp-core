<?php

/*
 * This file is part of the ACME PHP library.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AcmePhp\Core\Exception\Protocol;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class HttpChallengeTimedOutException extends ProtocolException
{
    public function __construct(\Exception $previous = null)
    {
        parent::__construct('Check challenge timed out.', $previous);
    }
}
