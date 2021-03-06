<?php
/**
 * This file is part of even-engine/php-messaging.
 * (c) 2018-2019 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngine\Messaging;

interface MessageFactoryAware
{
    public function setMessageFactory(MessageFactory $messageFactory): void;
}
