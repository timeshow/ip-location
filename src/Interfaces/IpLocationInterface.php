<?php
namespace TimeShow\IpLocation\Interfaces;

interface IpLocationInterface {

    /**
     *
     * @access Public
     * @param string $ip
     * @return mixed
     */
    public function getLocation($ip = '');

    /**
     *
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getArea($ip = '');

    /**
     *
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getAddress($ip = '');

    /**
     *
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCountry($ip = '');

    /**
     *
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getProvince($ip = '');

    /**
     *
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCity($ip = '');

    /**
     *
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getCounty($ip = '');

    /**
     *
     * @access Public
     * @param string $ip
     * @return string
     */
    public function getISP($ip = '');

}
