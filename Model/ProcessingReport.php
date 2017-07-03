<?php
App::uses('Submit', 'Model');

// App::import('Vendor', 'MarketplaceWebService_Model', array('file' => 'MarketplaceWebService/Model.php'));

// App::import('Vendor', 'MarketplaceWebService_Model_GetFeedSubmissionResultRequest', array('file' => 'MarketplaceWebService/Model/GetFeedSubmissionResultRequest.php'));

// App::import('Vendor', 'MarketplaceWebService_Model_GetFeedSubmissionListRequest', array('file' => 'MarketplaceWebService/Model/GetFeedSubmissionListRequest.php'));



// App::import('Vendor', 'MarketplaceWebService_Model_RequestReportRequest', array('file' => 'MarketplaceWebService/Model/RequestReportRequest.php'));

// App::import('Vendor', 'Client', array('file' => 'MarketplaceWebService/Client.php'));

// App::import('Vendor', 'MarketplaceWebService/Exception.php');

// App::import('Vendor', 'MarketplaceWebService_Exception', array('file' => 'MarketplaceWebService/Exception.php'));

/**
 * ProcessingReport Model
 * 
 * @todo MAKE LOG FILES
 *
 */
class ProcessingReport extends Submit {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'processing_report';
	
	public $config;
	
	public $serviceUrl = "https://mws.amazonservices.com";
	
	public $service;
	
	public $request;
	

	/**
	 * Set all MWS Objects relative to ListMatchingProducts
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
	
		$this->config = array (
				'ServiceURL' => $this->serviceUrl,
				'ProxyHost' => null,
				'ProxyPort' => -1,
				'MaxErrorRetry' => 3,
		);
	
		$this->service = new MarketplaceWebService_Client(
				Configure::read('PETER.MWS.AWS_ACCESS_KEY_ID'),
				Configure::read('PETER.MWS.AWS_SECRET_ACCESS_KEY'),
				$this->config,
				Configure::read('PETER.MWS.APPLICATION_NAME'),
				Configure::read('PETER.MWS.APPLICATION_VERSION'));
	}	
	

	
	/**
	 * Save the response in the processing_report table
	 * Update the status in submit_feed table
	 * 
	 */
	public function saveProcessingReportResult(){
		
		App::import('Model','SubmitFeed');
		
		$submitFeed = new SubmitFeed();
		
		$feedSubmissionId = $submitFeed->findSubmittedFeedId();
		
		foreach ($feedSubmissionId as $value) {
			
			$xml = $this->getSubmitionResult($value);
			
			if($xml != null){
			
				$resultArray = Xml::toArray(Xml::build($xml));
				
				$a = $this->findByDocument($value);
				
				$this->data = array(
						
						'id'					=> $a['ProcessingReport']['id'],
						'Document'	=> Set::classicExtract($resultArray, 'AmazonEnvelope.Message.ProcessingReport.DocumentTransactionID'),
						'StatusCode'			=> Set::classicExtract($resultArray, 'AmazonEnvelope.Message.ProcessingReport.StatusCode'),
						'MessagesProcessed'		=> Set::classicExtract($resultArray, 'AmazonEnvelope.Message.ProcessingReport.ProcessingSummary.MessagesProcessed'),
						'MessagesSuccessful'	=> Set::classicExtract($resultArray, 'AmazonEnvelope.Message.ProcessingReport.ProcessingSummary.MessagesSuccessful'),
						'MessagesWithError'		=> Set::classicExtract($resultArray, 'AmazonEnvelope.Message.ProcessingReport.ProcessingSummary.MessagesWithError'),
						'MessagesWithWarning'	=> Set::classicExtract($resultArray, 'AmazonEnvelope.Message.ProcessingReport.ProcessingSummary.MessagesWithWarning'),
						'Result'				=> $xml
						
						);
				
				
				$id = $this->save($this->data);
				
				if ($id && Set::classicExtract($resultArray, 'AmazonEnvelope.Message.ProcessingReport.StatusCode') == 'Complete'){
					
					$submitFeed->updateStatus(Set::classicExtract($resultArray, 'AmazonEnvelope.Message.ProcessingReport.StatusCode'), $value);
				}
			}
		}
		
	}
	
	/**
	 * Set the parametes 
	 * 
	 * @return xml Result
	 */
	public function getSubmitionResult($feedSubmissionId = '50148016767'){
	
		if($feedSubmissionId == null) return null;
		
		$file = @fopen('php://memory', 'rw+');
		
		$this->request = new MarketplaceWebService_Model_GetFeedSubmissionResultRequest();
		$this->request->setMerchant(Configure::read('PETER.MWS.SELLER_ID'));
		$this->request->setFeedSubmissionId($feedSubmissionId);
		$this->request->setFeedSubmissionResult($file);
// 		$request->setMWSAuthToken('<MWS Auth Token>'); // Optional
			
		
		if($this->invokeGetFeedSubmissionResult($this->service, $this->request)){
			
			App::uses('Xml', 'Utility');
			
			$xml = stream_get_contents($file);
			
// 			debug($xml);
			
			fclose($file);
			
			
			return $xml;			
			
		}
		
		fclose($file);
		
		return null;
		
	}
	
	/**
	 * Get Feed Submission Result Action Sample
	 * retrieves the feed processing report
	 *
	 * @param MarketplaceWebService_Interface $service instance of MarketplaceWebService_Interface
	 * @param mixed $request MarketplaceWebService_Model_GetFeedSubmissionResult or array of parameters
	 */
	function invokeGetFeedSubmissionResult(MarketplaceWebService_Interface $service, $request)
	{
		try {
			$response = $service->getFeedSubmissionResult($request);
				
// 			echo ("Service Response\n");
// 			echo ("=============================================================================\n");
	
// 			echo("        GetFeedSubmissionResultResponse\n");
// 			if ($response->isSetGetFeedSubmissionResultResult()) {
// 				$getFeedSubmissionResultResult = $response->getGetFeedSubmissionResultResult();
				
// 				echo ("            GetFeedSubmissionResult");
	
// 				if ($getFeedSubmissionResultResult->isSetContentMd5()) {
// 					echo ("                ContentMd5");
// 					echo ("                " . $getFeedSubmissionResultResult->getContentMd5() . "\n");
// 				}
// 			}
// 			if ($response->isSetResponseMetadata()) {
// 				echo("            ResponseMetadata\n");
// 				$responseMetadata = $response->getResponseMetadata();
// 				if ($responseMetadata->isSetRequestId())
// 				{
// 					echo("                RequestId\n");
// 					echo("                    " . $responseMetadata->getRequestId() . "\n");
// 				}
// 			}
	
// 			echo("            ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
				
			return true;
				
		} catch (MarketplaceWebService_Exception $ex) {
			
// 			echo("Caught Exception: " . $ex->getMessage() . "\n");
// 			echo("Response Status Code: " . $ex->getStatusCode() . "\n");
// 			echo("Error Code: " . $ex->getErrorCode() . "\n");
// 			echo("Error Type: " . $ex->getErrorType() . "\n");
// 			echo("Request ID: " . $ex->getRequestId() . "\n");
// 			echo("XML: " . $ex->getXML() . "\n");
// 			echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
			
			return false;
		}
	}
	
	
}
