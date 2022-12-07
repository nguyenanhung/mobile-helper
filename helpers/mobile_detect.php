<?php
/**
 * Project mobile-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 06/12/2022
 * Time: 22:55
 */
if (!function_exists('is_mobile')) {
    function is_mobile($userAgent = null, $httpHeaders = null): bool
    {
        $detect = new \Detection\MobileDetect();

        return $detect->isMobile($userAgent, $httpHeaders);
    }
}
if (!function_exists('is_tablet')) {
    function is_tablet($userAgent = null, $httpHeaders = null): bool
    {
        $detect = new \Detection\MobileDetect();

        return $detect->isTablet($userAgent, $httpHeaders);
    }
}
