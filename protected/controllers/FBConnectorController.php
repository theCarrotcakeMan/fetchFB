<?php
    /*
     * Custom connector for Facebook Marketing API
     * @Author John Falcon for OVRMIND
     * Aug 2018
     * */
    require_once 'vendor/autoload.php';
    use FacebookAds\Object\AdAccount;
    use FacebookAds\Object\AdsInsights;
    use FacebookAds\Api;
//    use FacebookAds\Logger\CurlLogger;
    
    class FBConnectorController extends Controller
    {
        private $access_token;
        private $ad_account_id;
        private $app_secret;
        private $app_id;
        
        /**
         * Connect to Facebook Marketing API
         *
         * @param array $account_id
         * @return bool $connection_status
         */
        public function connect( $params = [] )
        {
            extract($params);
        
            $this->app_id        = $app_id;
            $this->app_secret    = $app_secret;
            $this->access_token  = $access_token;
            $this->ad_account_id = $account_id;
            
            $api = Api::init( $this->app_id, $this->app_secret, $this->access_token );
//            $api->setLogger( new CurlLogger() );
            return $api;
        }
        
        /**
         * Fire report creation
         *
         * @param array $params
         * @return bool $success
         */
        public function actionFireReport( $params = [] )
        {
            $params = !empty($params) ? $params : $_POST;
            $responseJson = NULL;
            extract( $params );
            $fields = $this->formatFields($params);
            
            // Connect to the API and try to fetch the report
            $this->connect($params);
            
            $params = array(
                        'level' => 'account',
                        'filtering' => array(),
                        'breakdowns' => array(constant('BREAKDOWNS')[0]),
                        'time_range' => array('since' => $date_start,'until' => $date_end),
                    );
            
            $responseJson = json_encode((new AdAccount($this->ad_account_id))->getInsights(
                                $fields,
                                $params
                            )->getResponse()->getContent(), JSON_OBJECT_AS_ARRAY);
            echo $responseJson;
            return !empty($responseJson);
        }
        
        /**
         * Generate access token
         *
         * @param array $params
         * @return bool $success
         * @see Facebook Marketing API docs
         */
        public function createAccessToken( $params = [] )
        {
            $responseJson = NULL;
            extract( $params );
           
            return !empty($responseJson);
        }
        
        /**
         * Format fields
         *
         * @see Facebook Marketing API docs
         * @return array
         */
        public function formatFields()
        {
            return array(
                'impressions',
                'actions'
            );
        }
        
        // Getters and setters
        
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