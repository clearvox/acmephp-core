<?php

/*
 * This file is part of the ACME PHP library.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AcmePhp\Core\Exception;

/**
 * The ACME server does not support HTTP challenge.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class AcmeHttpChallengeNotSupportedException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('This ACME server does not support HTTP challenge.');
    }
}
