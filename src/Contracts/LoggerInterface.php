<?php

namespace Buseet\Wunderland\Contracts;

/**
 * Interface LoggerInterface
 * @package Buseet\Wunderland\Contracts
 */
interface LoggerInterface
{
    /**
     * @param string $logMessage
     * @return void
     */
    public static function info(string $logMessage);

    /**
     * @param string $logMessagePattern
     * @param string[] ...$patternParams
     * @return void
     */
    public static function infoF(string $logMessagePattern, string ...$patternParams);

    /**
     * @param string $logMessage
     * @return void
     */
    public static function error(string $logMessage);

    /**
     * @param string $logMessagePattern
     * @param string[] ...$patternParams
     * @return void
     */
    public static function errorF(string $logMessagePattern, string ...$patternParams);

    /**
     * @param string $logMessage
     * @return void
     */
    public static function warning(string $logMessage);

    /**
     * @param string $logMessagePattern
     * @param string[] ...$patternParams
     * @return void
     */
    public static function warningF(string $logMessagePattern, string ...$patternParams);
}