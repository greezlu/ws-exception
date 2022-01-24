<?php
/** Copyright github.com/greezlu */

declare(strict_types = 1);

namespace WebServer\Exceptions;

use Exception;
use Throwable;
use WebServer\Core\Logger;

/**
 * @package greezlu/ws-exception
 */
class LocalizedException extends Exception
{
    /**
     * @param string|null $message
     * @param Throwable|null $previous
     * @param int|null $code
     */
    public function __construct(
        string $message = null,
        Throwable $previous = null,
        int $code = 3
    ) {
        if ($message) {
            $logger = new Logger();
            $logger->log($message, $code);
        }

        parent::__construct($message, $code, $previous);
    }
}
