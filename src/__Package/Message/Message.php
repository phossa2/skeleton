<?php
/**
 * Phossa Project
 *
 * PHP version 5.4
 *
 * @category  Library
 * @package   Phossa2\__Package
 * @copyright Copyright (c) 2016 phossa.com
 * @license   http://mit-license.org/ MIT License
 * @link      http://www.phossa.com/
 */
/*# declare(strict_types=1); */

namespace Phossa2\__Package\Message;

use Phossa2\Shared\Message\Message as BaseMessage;

/**
 * Message class for Phossa2\__Package
 *
 * @package Phossa2\__Package
 * @author  Hong Zhang <phossa@126.com>
 * @see     \Phossa2\Shared\Message\Message
 * @version 2.1.0
 * @since   2.1.0 added
 */
class Message extends BaseMessage
{
    /*
     * Package const "%s"
     */
    const PACKAGE_CONST = 1607191058;

    /**
     * {@inheritDoc}
     */
    protected static $messages = [
        self::PACKAGE_CONST => 'Package const "%s"',
    ];
}
