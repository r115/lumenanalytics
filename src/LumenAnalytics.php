<?php

namespace LumenAnalytics;

use Google_Client;
use Google_Service_Analytics;

class LumenAnalytics{
    /**
     * Google Analytics Service object
     *
     * @var
     */
    public $client;

    /**
     * Application name to be passed to the Google Client
     *
     * @var
     */
    public $applicationName;

    /**
     * Developer key to be used for making client requests
     *
     * @var
     */
    public $developerKey;

    function __construct()
    {

    }

    /**
     * Initialize the Google Analytics Client
     *
     * @throws \Google_Exception
     */
    public function init(){
        $gc = new Google_Client();
        $gc->setApplicationName($this->applicationName);
        $gc->setAuthConfig($this->developerKey);
        $gc->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);

        $analytics = new Google_Service_Analytics($gc);

        return $analytics;
    }
}