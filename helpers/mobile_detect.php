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
    function is_mobile($userAgent = null, $httpHeaders = null)
    {
        $detect = new \Detection\MobileDetect();

        return $detect->isMobile($userAgent, $httpHeaders);
    }
}
if (!function_exists('is_tablet')) {
    function is_tablet($userAgent = null, $httpHeaders = null)
    {
        $detect = new \Detection\MobileDetect();

        return $detect->isTablet($userAgent, $httpHeaders);
    }
}
if (!function_exists('is_smartphone')) {
    function is_smartphone($userAgent = null, $httpHeaders = null)
    {
        return (is_mobile($userAgent, $httpHeaders) && !is_tablet($userAgent, $httpHeaders));
    }
}
if (!function_exists('is_desktop')) {
    function is_desktop($userAgent = null, $httpHeaders = null)
    {
        return (!is_mobile($userAgent, $httpHeaders) && !is_tablet($userAgent, $httpHeaders));
    }
}
if (!function_exists('mobile_detect')) {
    /**
     * Function mobile_detect
     *
     * @return \Detection\MobileDetect
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 13/12/2022 44:28
     */
    function mobile_detect()
    {
        return new \Detection\MobileDetect();
    }
}
