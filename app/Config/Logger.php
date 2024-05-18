<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Log\Handlers\FileHandler;

class Logger extends BaseConfig
{
    /**
     * Error Logging Threshold
     * Set the log threshold over zero. The
     * threshold determines what gets logged.
     *
     * Threshold options are:
     * - 0 = Disables logging, Error logging TURNED OFF
     * - 1 = Emergency Messages - System is unusable
     * - 2 = Alert Messages - Action Must Be Taken Immediately
     * - 3 = Critical Messages - Application component unavailable, unexpected exception.
     * - 4 = Runtime Errors - Don't need immediate action, but should be monitored.
     * - 5 = Warnings - Exceptional occurrences that are not errors.
     * - 6 = Notices - Normal but significant events.
     * - 7 = Info - Interesting events, like user logging in, etc.
     * - 8 = Debug - Detailed debug information.
     * - 9 = All Messages
     *
     * @var integer
     */
    public $threshold = 4;

    /**
     * Date Format for Logs
     *
     * Each item that is logged has an associated date. You can use PHP date
     * codes to set your own date formatting
     *
     * @var string
     */
    public string $dateFormat = 'Y-m-d H:i:s';

    /**
     * Log Handlers
     *
     * @var array<class-string, array<string, int|list<string>|string>>
     */
    public array $handlers = [
        FileHandler::class => [
            'handles'          => ['error', 'critical'],
            'fileExtension'    => '',
            'filePermissions'  => 0644,
            'path'             => WRITEPATH . 'logs/',
        ],
    ];
}