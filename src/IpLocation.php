<?php

namespace TimeShow\IpLocation;

use TimeShow\IpLocation\Interfaces\IpLocationInterface;

class IpLocation implements IpLocationInterface
{
    /**
     * 获取地址信息
     * @access Public
     * @param string $ip
     * @return mixed
     */
    public function getLocation($ip = '')
    {
        $ipLocation = new QQWry();
        return $ipLocation->getLocation($ip);
    }

    /**
     * 获取地区信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getArea($ip = '')
    {
        return $this->getLocation($ip)['area'];
    }

    /**
     * 获取地址信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getAddress($ip = ''){
        return $this->getLocation($ip)['address'];
    }

    /**
     * 获取国家信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCountry($ip = ''){
        return $this->getLocation($ip)['country'];
    }

    /**
     * 获取省市信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getProvince($ip = ''){
        return $this->getLocation($ip)['province'];
    }

    /**
     * 获取地市信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCity($ip = ''){
        return $this->getLocation($ip)['city'];
    }

    /**
     * 获取县区信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCounty($ip = ''){
        return $this->getLocation($ip)['county'];
    }

    /**
     * 获取地区信息
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getISP($ip = ''){
        return $this->getLocation($ip)['isp'];
    }



}
