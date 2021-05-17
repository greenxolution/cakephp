<?php

App::uses('AppModel', 'Model');

App::import('Vendor', 'MarketplaceWebService_Model', array('file' => 'MarketplaceWebService/Model.php'));

App::import('Vendor', 'MarketplaceWebService_Model_GetFeedSubmissionResultRequest', array('file' => 'MarketplaceWebService/Model/GetFeedSubmissionResultRequest.php'));

App::import('Vendor', 'MarketplaceWebService_Model_GetFeedSubmissionListRequest', array('file' => 'MarketplaceWebService/Model/GetFeedSubmissionListRequest.php'));

App::import('Vendor', 'MarketplaceWebService_Model_RequestReportRequest', array('file' => 'MarketplaceWebService/Model/RequestReportRequest.php'));

App::import('Vendor', 'MarketplaceWebService/Exception.php');

App::import('Vendor', 'MarketplaceWebService_Exception', array('file' => 'MarketplaceWebService/Exception.php'));

App::import('Vendor', 'MarketplaceWebService_Model_ContentType', array('file' => 'MarketplaceWebService/Model/ContentType.php'));

App::import('Vendor', 'MarketplaceWebService_Model_SubmitFeedRequest', array('file' => 'MarketplaceWebService/Model/SubmitFeedRequest.php'));

App::import('Vendor', 'MarketplaceWebService_Model_IdList', array('file' => 'MarketplaceWebService/Model/IdList.php'));

App::import('Vendor', 'MarketplaceWebService_Client', array('file' => 'MarketplaceWebService/Client.php'));


/**
 * ProcessingReport Model
 *
 */
class Submit extends AppModel {

    public function configSPAPI(){
		
		$accessToken = \ClouSale\AmazonSellingPartnerAPI\SellingPartnerOAuth::getAccessTokenFromRefreshToken(
			Configure::read('SPAPI.refresh_token'),
			Configure::read('SPAPI.client_id'),
			Configure::read('SPAPI.client_secret')
		);
		$assumedRole = \ClouSale\AmazonSellingPartnerAPI\AssumeRole::assume(
			Configure::read('SPAPI.region'),
			Configure::read('SPAPI.access_key'),
			Configure::read('SPAPI.secret_key'),
			Configure::read('SPAPI.role_arn')
		);
		$config = \ClouSale\AmazonSellingPartnerAPI\Configuration::getDefaultConfiguration();
		$config->setHost(Configure::read('SPAPI.endpoint') );
		$config->setAccessToken($accessToken);
		$config->setAccessKey($assumedRole->getAccessKeyId());
		$config->setSecretKey($assumedRole->getSecretAccessKey());
		$config->setRegion(Configure::read('SPAPI.region'));
		$config->setSecurityToken($assumedRole->getSessionToken());

		return $config;
	}

	
}	