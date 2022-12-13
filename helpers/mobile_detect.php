<?php
/**
 * Project mobile-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 06/12/2022
 * Time: 22:55
 */

use Detection\MobileDetect;

if (!function_exists('Mobile_Detect')) {
    /**
     * Function Mobile_Detect
     *
     * @return \Detection\MobileDetect
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 13/12/2022 07:08
     */
    function Mobile_Detect($userAgent = null, $httpHeaders = null)
    {
        return new MobileDetect($httpHeaders, $userAgent);
    }
}
if (!function_exists('is_mobile')) {
    function is_mobile($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->isMobile();
    }
}
if (!function_exists('is_tablet')) {
    function is_tablet($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->isTablet();
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
if (!function_exists('is_iOS')) {
    function is_iOS($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->is('iOS');
    }
}
if (!function_exists('is_iPadOS')) {
    function is_iPadOS($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->is('iPadOS');
    }
}
if (!function_exists('is_AndroidOS')) {
    function is_AndroidOS($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->is('AndroidOS');
    }
}
if (!function_exists('is_iPhone')) {
    function is_iPhone($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->is('iPhone');
    }
}
if (!function_exists('is_iPad')) {
    function is_iPad($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->is('iPad');
    }
}
if (!function_exists('is_Samsung')) {
    function is_Samsung($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->is('Samsung');
    }
}

if (!function_exists('is_SamsungTablet')) {
    function is_SamsungTablet($userAgent = null, $httpHeaders = null)
    {
        return Mobile_Detect($userAgent, $httpHeaders)->is('SamsungTablet');
    }
}