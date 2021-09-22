<?php
/**
 * Project mobile-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/18/2021
 * Time: 07:35
 */

namespace nguyenanhung\Libraries\Mobile;

use Detection\MobileDetect;

if (!class_exists('nguyenanhung\Libraries\Mobile\DeviceDetectLink')) {
    /**
     * Class DeviceDetectLink
     *
     * @package   nguyenanhung\Libraries\Mobile
     * @author    713uk13m <dev@nguyenanhung.com>
     * @copyright 713uk13m <dev@nguyenanhung.com>
     */
    class DeviceDetectLink implements Environment
    {
        use VersionTrait;

        /** @var array Mảng dữ liệu các link device */
        protected $data;

        /** @var string Link điều hướng dữ liệu */
        protected $link;

        /**
         * Function setData - Cấu hình các link điều hướng
         *
         * @param array $data
         *
         * @return $this
         * @author   : 713uk13m <dev@nguyenanhung.com>
         * @copyright: 713uk13m <dev@nguyenanhung.com>
         * @time     : 08/18/2021 39:24
         */
        public function setData($data = array())
        {
            $this->data = $data;

            return $this;
        }

        /**
         * Function detectDevice - Hàm nhận diện thiết bị người dùng
         *
         * @return $this
         * @author   : 713uk13m <dev@nguyenanhung.com>
         * @copyright: 713uk13m <dev@nguyenanhung.com>
         * @time     : 08/18/2021 39:16
         */
        public function detectDevice()
        {
            $detect      = new MobileDetect();
            $linkDefault = $this->data['default'];
            if ($detect->isMobile()) {
                $this->link = isset($this->data['link_mobile']) ? $this->data['link_mobile'] : $linkDefault;
            } elseif ($detect->isTablet()) {
                $this->link = isset($this->data['link_tablet']) ? $this->data['link_tablet'] : $linkDefault;
            } else {
                $this->link = $linkDefault;
            }

            return $this;
        }

        /**
         * Function detectSystem - Hàm nhận diện hệ điều hành của thiết bị
         *
         * @return $this
         * @author   : 713uk13m <dev@nguyenanhung.com>
         * @copyright: 713uk13m <dev@nguyenanhung.com>
         * @time     : 08/18/2021 38:47
         */
        public function detectSystem()
        {
            $detect      = new MobileDetect();
            $linkDefault = $this->data['default'];
            if ($detect->is('iOS')) {
                $this->link = isset($this->data['ios']) ? $this->data['ios'] : $linkDefault;
            } elseif ($detect->is('AndroidOS')) {
                $this->link = isset($this->data['android']) ? $this->data['android'] : $linkDefault;
            } elseif ($detect->is('BlackBerryOS')) {
                $this->link = isset($this->data['black_berry']) ? $this->data['black_berry'] : $linkDefault;
            } elseif ($detect->is('PalmOS')) {
                $this->link = isset($this->data['palm']) ? $this->data['palm'] : $linkDefault;
            } elseif ($detect->is('WindowsMobileOS') || $detect->is('WindowsPhoneOS')) {
                $this->link = isset($this->data['windows_mobile']) ? $this->data['windows_mobile'] : $linkDefault;
            } elseif ($detect->is('MeeGoOS')) {
                $this->link = isset($this->data['mee_go']) ? $this->data['mee_go'] : $linkDefault;
            } elseif ($detect->is('MaemoOS')) {
                $this->link = isset($this->data['mae_mo']) ? $this->data['mae_mo'] : $linkDefault;
            } elseif ($detect->is('JavaOS')) {
                $this->link = isset($this->data['java']) ? $this->data['java'] : $linkDefault;
            } elseif ($detect->is('webOS')) {
                $this->link = isset($this->data['web_os']) ? $this->data['web_os'] : $linkDefault;
            } elseif ($detect->is('badaOS')) {
                $this->link = isset($this->data['bada_os']) ? $this->data['bada_os'] : $linkDefault;
            } elseif ($detect->is('BREWOS')) {
                $this->link = isset($this->data['brewos']) ? $this->data['brewos'] : $linkDefault;
            } else {
                $this->link = $linkDefault;
            }

            return $this;
        }

        /**
         * Function getLink - Hàm lấy link sau khi detect dữ được thiết bị
         *
         * @return string
         * @author   : 713uk13m <dev@nguyenanhung.com>
         * @copyright: 713uk13m <dev@nguyenanhung.com>
         * @time     : 08/18/2021 38:31
         */
        public function getLink()
        {
            return $this->link;
        }

        /**
         * Function redirect - Chuyển hướng trong trường hợp nhận diện được link
         *
         * @author   : 713uk13m <dev@nguyenanhung.com>
         * @copyright: 713uk13m <dev@nguyenanhung.com>
         * @time     : 08/18/2021 39:36
         */
        public function redirect()
        {
            if (!empty($this->link)) {
                header('Location:  ' . $this->link);
                exit;
            }
        }
    }
}
