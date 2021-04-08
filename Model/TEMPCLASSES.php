<?php
public function listfeed(){

	// 		$config = array (
	// 				'ServiceURL' => $serviceUrl,
	// 				'ProxyHost' => null,
	// 				'ProxyPort' => -1,
	// 				'MaxErrorRetry' => 3,
	// 		);

	/************************************************************************
	 * Instantiate Implementation of MarketplaceWebService
	*
	* AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants
	* are defined in the .config.inc.php located in the same
	* directory as this sample
	***********************************************************************/
	// 		$service = new MarketplaceWebService_Client(
	// 				AWS_ACCESS_KEY_ID,
	// 				AWS_SECRET_ACCESS_KEY,
	// 				$config,
	// 				APPLICATION_NAME,
	// 				APPLICATION_VERSION);

	/************************************************************************
	 * Uncomment to try out Mock Service that simulates MarketplaceWebService
	* responses without calling MarketplaceWebService service.
	*
	* Responses are loaded from local XML files. You can tweak XML files to
	* experiment with various outputs during development
	*
	* XML files available under MarketplaceWebService/Mock tree
	*
	***********************************************************************/
	// $service = new MarketplaceWebService_Mock();

	/************************************************************************
	 * Setup request parameters and uncomment invoke to try out
	* sample for Get Feed Submission List Action
	***********************************************************************/
	// @TODO: set request. Action can be passed as MarketplaceWebService_Model_GetFeedSubmissionListRequest
	// object or array of parameters

	$parameters = array (
		 'Merchant' => Configure::read('PETER.MWS.SELLER_ID'),
		 'FeedProcessingStatusList' => array ('Status' => array ('_SUBMITTED_')),
		 // 				 'MWSAuthToken' => '<MWS Auth Token>', // Optional
	);

	$this->request = new MarketplaceWebService_Model_GetFeedSubmissionListRequest($parameters);

	$this->request = new MarketplaceWebService_Model_GetFeedSubmissionListRequest();
	$this->request->setMerchant(Configure::read('PETER.MWS.SELLER_ID'));
	// 		$this->request->setMWSAuthToken('<MWS Auth Token>'); // Optional

	$statusList = new MarketplaceWebService_Model_StatusList();
	$this->request->setFeedProcessingStatusList($statusList->withStatus('_DONE_'));

	$this->invokeGetFeedSubmissionList($this->service, $this->request);
}

public function result(){

	$marketplaceIdArray = array("Id" => array(Configure::read('PETER.MWS.MARKETPLACE_ID')));

	// @TODO: set request. Action can be passed as MarketplaceWebService_Model_ReportRequest
	// object or array of parameters

	$parameters = array (
			'Merchant' => Configure::read('PETER.MWS.SELLER_ID'),
			'MarketplaceIdList' => $marketplaceIdArray,
			'ReportType' => '_GET_MERCHANT_LISTINGS_DATA_',
			'ReportOptions' => 'ShowSalesChannel=true',
			// 		  'MWSAuthToken' => '<MWS Auth Token>', // Optional
	);

	// 		$this->request = new MarketplaceWebService_Model_RequestReportRequest($parameters);

	$this->request = new MarketplaceWebService_Model_RequestReportRequest();
	$this->request->setMarketplaceIdList($marketplaceIdArray);
	$this->request->setMerchant(Configure::read('PETER.MWS.SELLER_ID'));
	$this->request->setReportType('_GET_MERCHANT_LISTINGS_DATA_');
	// 		$this->request->setMWSAuthToken('<MWS Auth Token>'); // Optional

	// 		Using ReportOptions
	$this->request->setReportOptions('ShowSalesChannel=true');

	$this->invokeRequestReport($this->service, $this->request);
}
/**
 * Get Feed Submission List Action Sample
 * returns a list of feed submission identifiers and their associated metadata
 *
 * @param MarketplaceWebService_Interface $service instance of MarketplaceWebService_Interface
 * @param mixed $request MarketplaceWebService_Model_GetFeedSubmissionList or array of parameters
 */
function invokeGetFeedSubmissionList(MarketplaceWebService_Interface $service, $request)
{
	try {
		$response = $service->getFeedSubmissionList($request);

		echo ("Service Response\n");
		echo ("=============================================================================\n");

		echo("        GetFeedSubmissionListResponse\n");
		if ($response->isSetGetFeedSubmissionListResult()) {
			echo("            GetFeedSubmissionListResult\n");
			$getFeedSubmissionListResult = $response->getGetFeedSubmissionListResult();
			if ($getFeedSubmissionListResult->isSetNextToken())
			{
				echo("                NextToken\n");
				echo("                    " . $getFeedSubmissionListResult->getNextToken() . "\n");
			}
			if ($getFeedSubmissionListResult->isSetHasNext())
			{
				echo("                HasNext\n");
				echo("                    " . $getFeedSubmissionListResult->getHasNext() . "\n");
			}
			$feedSubmissionInfoList = $getFeedSubmissionListResult->getFeedSubmissionInfoList();
			foreach ($feedSubmissionInfoList as $feedSubmissionInfo) {
				echo("                FeedSubmissionInfo\n");
				if ($feedSubmissionInfo->isSetFeedSubmissionId())
				{
					echo("                    FeedSubmissionId\n");
					echo("                        " . $feedSubmissionInfo->getFeedSubmissionId() . "\n");
				}
				if ($feedSubmissionInfo->isSetFeedType())
				{
					echo("                    FeedType\n");
					echo("                        " . $feedSubmissionInfo->getFeedType() . "\n");
				}
				if ($feedSubmissionInfo->isSetSubmittedDate())
				{
					echo("                    SubmittedDate\n");
					echo("                        " . $feedSubmissionInfo->getSubmittedDate()->format('Y-m-d\TH:i:s\Z') . "\n");
				}
				if ($feedSubmissionInfo->isSetFeedProcessingStatus())
				{
					echo("                    FeedProcessingStatus\n");
					echo("                        " . $feedSubmissionInfo->getFeedProcessingStatus() . "\n");
				}
				if ($feedSubmissionInfo->isSetStartedProcessingDate())
				{
					echo("                    StartedProcessingDate\n");
					echo("                        " . $feedSubmissionInfo->getStartedProcessingDate()->format('Y-m-d\TH:i:s\Z') . "\n");
				}
				if ($feedSubmissionInfo->isSetCompletedProcessingDate())
				{
					echo("                    CompletedProcessingDate\n");
					echo("                        " . $feedSubmissionInfo->getCompletedProcessingDate()->format('Y-m-d\TH:i:s\Z') . "\n");
				}
			}
		}
		if ($response->isSetResponseMetadata()) {
			echo("            ResponseMetadata\n");
			$responseMetadata = $response->getResponseMetadata();
			if ($responseMetadata->isSetRequestId())
			{
				echo("                RequestId\n");
				echo("                    " . $responseMetadata->getRequestId() . "\n");
			}
		}

		echo("            ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
	} catch (MarketplaceWebService_Exception $ex) {
		echo("Caught Exception: " . $ex->getMessage() . "\n");
		echo("Response Status Code: " . $ex->getStatusCode() . "\n");
		echo("Error Code: " . $ex->getErrorCode() . "\n");
		echo("Error Type: " . $ex->getErrorType() . "\n");
		echo("Request ID: " . $ex->getRequestId() . "\n");
		echo("XML: " . $ex->getXML() . "\n");
		echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
	}
}

/**
 * Get Report List Action Sample
 * returns a list of reports; by default the most recent ten reports,
 * regardless of their acknowledgement status
 *
 * @param MarketplaceWebService_Interface $service instance of MarketplaceWebService_Interface
 * @param mixed $request MarketplaceWebService_Model_GetReportList or array of parameters
 */
function invokeRequestReport(MarketplaceWebService_Interface $service, $request)
{
	try {
		$response = $service->requestReport($request);

		echo ("Service Response\n");
		echo ("=============================================================================\n");

		echo("        RequestReportResponse\n");
		if ($response->isSetRequestReportResult()) {
			echo("            RequestReportResult\n");
			$requestReportResult = $response->getRequestReportResult();

			if ($requestReportResult->isSetReportRequestInfo()) {

				$reportRequestInfo = $requestReportResult->getReportRequestInfo();
				echo("                ReportRequestInfo\n");
				if ($reportRequestInfo->isSetReportRequestId())
				{
					echo("                    ReportRequestId\n");
					echo("                        " . $reportRequestInfo->getReportRequestId() . "\n");
				}
				if ($reportRequestInfo->isSetReportType())
				{
					echo("                    ReportType\n");
					echo("                        " . $reportRequestInfo->getReportType() . "\n");
				}
				if ($reportRequestInfo->isSetStartDate())
				{
					echo("                    StartDate\n");
					echo("                        " . $reportRequestInfo->getStartDate()->format('Y-m-d\TH:i:s\Z') . "\n");
				}
				if ($reportRequestInfo->isSetEndDate())
				{
					echo("                    EndDate\n");
					echo("                        " . $reportRequestInfo->getEndDate()->format('Y-m-d\TH:i:s\Z') . "\n");
				}
				if ($reportRequestInfo->isSetSubmittedDate())
				{
					echo("                    SubmittedDate\n");
					echo("                        " . $reportRequestInfo->getSubmittedDate()->format('Y-m-d\TH:i:s\Z') . "\n");
				}
				if ($reportRequestInfo->isSetReportProcessingStatus())
				{
					echo("                    ReportProcessingStatus\n");
					echo("                        " . $reportRequestInfo->getReportProcessingStatus() . "\n");
				}
			}
		}
		if ($response->isSetResponseMetadata()) {
			echo("            ResponseMetadata\n");
			$responseMetadata = $response->getResponseMetadata();
			if ($responseMetadata->isSetRequestId())
			{
				echo("                RequestId\n");
				echo("                    " . $responseMetadata->getRequestId() . "\n");
			}
		}

		echo("            ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
	} catch (MarketplaceWebService_Exception $ex) {
		echo("Caught Exception: " . $ex->getMessage() . "\n");
		echo("Response Status Code: " . $ex->getStatusCode() . "\n");
		echo("Error Code: " . $ex->getErrorCode() . "\n");
		echo("Error Type: " . $ex->getErrorType() . "\n");
		echo("Request ID: " . $ex->getRequestId() . "\n");
		echo("XML: " . $ex->getXML() . "\n");
		echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
	}
}
