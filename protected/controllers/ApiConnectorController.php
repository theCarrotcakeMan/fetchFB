<?php

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdsInsights;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

/*
 * Custom connector for FB Business sdk
 * */
class ApiConnectorController extends Controller
{
    private $access_token;
    private $ad_account_id;
    private $app_secret;
    private $app_id;
    
	public function connect( $account_id = 'act_290942025017254')
	{
        $this->access_token = 'EAAD77bHR8g0BABVPmU9jnPF1cT8BGWv8SXowKcdVtqae8wbk4lZAENDUsf0XL5FryPSTBYNJvCOTNe2hKaBPbZBfb0hTPCktvRfhLrsLkPkuXWwvIM46NpAEZCflAlCagUcnSOitoxUerp5iDA5yEHrLObJFE4ZAGIolAk3TOtRXHMNPBNj7Tv3P32zd3yl3xa1LsqbKVKZBK9GkSepe3obspDDJA6WoZD';
        $this->ad_account_id = $account_id;
        $this->app_secret = 'b046d3924bbcbf520a6cdc17dfea40ca';
        $this->app_id = '276998309147149';
        
        $api = Api::init( $this->app_id, $this->app_secret, $this->access_token );
        $api->setLogger( new CurlLogger() );
	}

	public function fireReport( $type = NULL, $date_start = NULL, $date_end = NULL )
    {
        
       
        $responseJson = NULL;
        $fields = array(
            'impressions',
            'actions:page_engagement',
            'actions:like',
        );
        $params = array(
            'level' => 'account',
            'filtering' => array(),
            'breakdowns' => array('ad_id'),
            'time_range' => array('since' => $date_start,'until' => $date_end),
        );
        
        $responseJson = json_encode((new AdAccount($this->ad_account_id))->getInsights(
                            $fields,
                            $params
                        )->getResponse()->getContent(), JSON_OBJECT_AS_ARRAY);
    
        return !empty($responseJson);
    }
    
    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->app_id;
    }
    
    /**
     * @param mixed $app_id
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
    }
    
    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
    
    /**
     * @param mixed $access_token
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
    }
    
    /**
     * @return mixed
     */
    public function getAdAccountId()
    {
        return $this->ad_account_id;
    }
    
    /**
     * @param mixed $ad_account_id
     */
    public function setAdAccountId($ad_account_id)
    {
        $this->ad_account_id = $ad_account_id;
    }
    
    /**
     * @return mixed
     */
    public function getAppSecret()
    {
        return $this->app_secret;
    }
    
    /**
     * @param mixed $app_secret
     */
    public function setAppSecret($app_secret)
    {
        $this->app_secret = $app_secret;
    }
    
    
}