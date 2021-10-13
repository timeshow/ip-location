<?php

namespace TimeShow\IpLocation;

use TimeShow\IpLocation\Interfaces\IpLocationInterface;

class IpLocation implements IpLocationInterface {

    /**
     * 获取地址信息
     * @access Public
     * @param string $ip
     * @return mixed
     */
    public function getLocation($ip = '')
    {
        $ipLocation = new QQWry();
        return $ipLocation->getLocation();
    }

    /**
     * 获取地区信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getarea($ip = '')
    {
        $ipLocation = new QQWry();
        return $ipLocation->getarea();
    }

    /**
     * 获取国家信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCountry($ip = ''){

    }

    /**
     * 获取省市信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getProvince($ip = ''){

    }

    /**
     * 获取地市信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCity($ip = ''){

    }

    /**
     * 获取县区信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCounty($ip = ''){

    }

    /**
     * 获取地区信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getISP($ip = ''){

    }





}