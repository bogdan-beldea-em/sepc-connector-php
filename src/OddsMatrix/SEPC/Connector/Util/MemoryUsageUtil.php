<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


class MemoryUsageUtil
{
    /**
     * @var string
     */
    private static $_filenameOverride = "mem_profile.csv";

    /**
     * @param string $counter An optional counter that may help with mapping
     */
    public static function dumpMemoryUsage(string $counter = ""): void
    {
        $_filenameOverride = self::$_filenameOverride;
        $memFile = fopen("../resources_extra/{$_filenameOverride}", "a");

        $memUsage = memory_get_usage();
        $realMemUsage = memory_get_usage(true);
        $timestamp = time();
        fwrite($memFile, "$timestamp;$memUsage;$realMemUsage;$counter\n");
        fflush($memFile);
        fclose($memFile);
    }

    /**
     * @param string $filenameOverride
     */
    public static function setFilenameOverride(string $filenameOverride): void
    {
        self::$_filenameOverride = $filenameOverride;
    }
}