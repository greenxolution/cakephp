
<?php
Welcome to CakePHP v2.10.24 Console
---------------------------------------------------------------
App : app
Path: C:\Users\pgunt\php\cakephp\app\
---------------------------------------------------------------
\app\Model\SubmitFeed.php (line 423)
########## DEBUG ##########
array(
	'MerchantIdentifier' => 'A1KM3PTNGBLP5J',
	'Messages' => array(
		(int) 0 => array(
			'OperationType' => 'Update',
			'ViewMatchInv' => array(
				'SKU' => '45-87DE-NQ23',
				'Quantity' => '9',
				'FulfillmentLatency' => '1'
			)
		)
	)
)
###########################
\app\Model\SubmitFeed.php (line 425)
########## DEBUG ##########
'<?xml version="1.0" encoding="utf-8"?>
<AmazonEnvelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="amzn-envelope.xsd">
		<Header>
		<DocumentVersion>1.01</DocumentVersion>
		<MerchantIdentifier>A1KM3PTNGBLP5J</MerchantIdentifier>
		</Header>
		<MessageType>Inventory</MessageType>
		<Message><MessageID>1</MessageID><OperationType>Update</OperationType><Inventory><SKU>45-87DE-NQ23</SKU><Quantity>9</Quantity><FulfillmentLatency>1</FulfillmentLatency></Inventory></Message></AmazonEnvelope>
'
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php (line 37)
########## DEBUG ##########
object(ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentSpecification) {
	[protected] swaggerModelName => 'CreateFeedDocumentSpecification'
	[protected] swaggerTypes => array(
		'content_type' => 'string'
	)
	[protected] swaggerFormats => array(
		'content_type' => null
	)
	[protected] attributeMap => array(
		'content_type' => 'contentType'
	)
	[protected] setters => array(
		'content_type' => 'setContentType'
	)
	[protected] getters => array(
		'content_type' => 'getContentType'
	)
	[protected] container => array(
		'content_type' => 'text/xml; charset=UTF-8'
	)
}
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php (line 76)
########## DEBUG ##########
object(ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentSpecification) {
	[protected] swaggerModelName => 'CreateFeedDocumentSpecification'
	[protected] swaggerTypes => array(
		'content_type' => 'string'
	)
	[protected] swaggerFormats => array(
		'content_type' => null
	)
	[protected] attributeMap => array(
		'content_type' => 'contentType'
	)
	[protected] setters => array(
		'content_type' => 'setContentType'
	)
	[protected] getters => array(
		'content_type' => 'getContentType'
	)
	[protected] container => array(
		'content_type' => 'text/xml; charset=UTF-8'
	)
}
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php (line 78)
########## DEBUG ##########
''
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php (line 79)
########## DEBUG ##########
'https://sellingpartnerapi-na.amazon.com'
###########################
\app\Model\SubmitFeed.php (line 436)
########## DEBUG ##########
object(ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentResponse) {
	[protected] swaggerModelName => 'CreateFeedDocumentResponse'
	[protected] swaggerTypes => array(
		'payload' => '\ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentResult',
		'errors' => '\ClouSale\AmazonSellingPartnerAPI\Models\Feeds\ErrorList'
	)
	[protected] swaggerFormats => array(
		'payload' => null,
		'errors' => null
	)
	[protected] attributeMap => array(
		'payload' => 'payload',
		'errors' => 'errors'
	)
	[protected] setters => array(
		'payload' => 'setPayload',
		'errors' => 'setErrors'
	)
	[protected] getters => array(
		'payload' => 'getPayload',
		'errors' => 'getErrors'
	)
	[protected] container => array(
		'payload' => object(ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentResult) {
			[protected] swaggerModelName => 'CreateFeedDocumentResult'
			[protected] swaggerTypes => array(
				'feed_document_id' => 'string',
				'url' => 'string',
				'encryption_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\Feeds\FeedDocumentEncryptionDetails'
			)
			[protected] swaggerFormats => array(
				'feed_document_id' => null,
				'url' => null,
				'encryption_details' => null
			)
			[protected] attributeMap => array(
				'feed_document_id' => 'feedDocumentId',
				'url' => 'url',
				'encryption_details' => 'encryptionDetails'
			)
			[protected] setters => array(
				'feed_document_id' => 'setFeedDocumentId',
				'url' => 'setUrl',
				'encryption_details' => 'setEncryptionDetails'
			)
			[protected] getters => array(
				'feed_document_id' => 'getFeedDocumentId',
				'url' => 'getUrl',
				'encryption_details' => 'getEncryptionDetails'
			)
			[protected] container => array(
				'feed_document_id' => 'amzn1.tortuga.3.1a7339a9-446b-487c-8bf2-e9802cb16494.T1D84DUGPDMQO4',
				'url' => 'https://tortuga-prod-na.s3-external-1.amazonaws.com/%2FNinetyDays/amzn1.tortuga.3.1a7339a9-446b-487c-8bf2-e9802cb16494.T1D84DUGPDMQO4?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210508T145241Z&X-Amz-SignedHeaders=content-type%3Bhost&X-Amz-Expires=300&X-Amz-Credential=AKIA5U6MO6RACK5AVWVS%2F20210508%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=1c7a8b64ed3f45c7d72f9306c0d7db4a91e350a562a30f58e09651fe95e019c1',
				'encryption_details' => object(ClouSale\AmazonSellingPartnerAPI\Models\Feeds\FeedDocumentEncryptionDetails) {
					[protected] swaggerModelName => 'FeedDocumentEncryptionDetails'
					[protected] swaggerTypes => array(
						'standard' => 'string',
						'initialization_vector' => 'string',
						'key' => 'string'
					)
					[protected] swaggerFormats => array(
						'standard' => null,
						'initialization_vector' => null,
						'key' => null
					)
					[protected] attributeMap => array(
						'standard' => 'standard',
						'initialization_vector' => 'initializationVector',
						'key' => 'key'
					)
					[protected] setters => array(
						'standard' => 'setStandard',
						'initialization_vector' => 'setInitializationVector',
						'key' => 'setKey'
					)
					[protected] getters => array(
						'standard' => 'getStandard',
						'initialization_vector' => 'getInitializationVector',
						'key' => 'getKey'
					)
					[protected] container => array(
						'standard' => 'AES',
						'initialization_vector' => 'tmOu2TU5N5fHCCgI2Mod7Q==',
						'key' => 'aVYf81GHwK7Nie8lvFH/K+qLyOePBbZg+Uni4hd8+b8='
					)
				}
			)
		},
		'errors' => null
	)
}
###########################
\app\Model\SubmitFeed.php (line 443)
########## DEBUG ##########
'amzn1.tortuga.3.1a7339a9-446b-487c-8bf2-e9802cb16494.T1D84DUGPDMQO4'
###########################
\app\Model\SubmitFeed.php (line 444)
########## DEBUG ##########
'https://tortuga-prod-na.s3-external-1.amazonaws.com/%2FNinetyDays/amzn1.tortuga.3.1a7339a9-446b-487c-8bf2-e9802cb16494.T1D84DUGPDMQO4?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210508T145241Z&X-Amz-SignedHeaders=content-type%3Bhost&X-Amz-Expires=300&X-Amz-Credential=AKIA5U6MO6RACK5AVWVS%2F20210508%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=1c7a8b64ed3f45c7d72f9306c0d7db4a91e350a562a30f58e09651fe95e019c1'
###########################
\app\Model\SubmitFeed.php (line 445)
########## DEBUG ##########
'iV�Q���͉�%�Q�+����`�I��|��'
###########################
\app\Model\SubmitFeed.php (line 450)
########## DEBUG ##########
'tmOu2TU5N5fHCCgI2Mod7Q=='
###########################
\app\Model\SubmitFeed.php (line 451)
########## DEBUG ##########
'�_�?/d
_�"^m������BUa�4�^m�-Ik����(Kd���՚����x�uz�:�s�f���h g�'�2��!y��'C�{��_"(��n�c>?�_��;e��WK7a�4�o�����ٌ�tǢ���U!+(�fX���ﴬz|#ը�?aI���n0���vg���V�V���)D�&����{�L�d�s��N!��xѷLi]u�jy�}��;����_�
$�E֐�Bk�������c�Ӻ���qx/��>;�|Eզ}SR��<
���l��Z�
��1߳��� �p/,urݽ*����
/'3WP�p�遢Df���_�n'OT�-H^��O��n����5lQa�j� =�`+�&���+����G3+J�C�߭��>�v�Q;`�`�]׃r��DO����P�<�w����w�M��mR4�=o��DV���~�jO��A��җ��/��T������Dnօ�%f-Em0��� H���h�
��[�\��*��.��3EP�h�}}|Ěï��+{Qy���J�z'
###########################
\app\Model\SubmitFeed.php (line 479)
########## DEBUG ##########
''
###########################
\app\Model\SubmitFeed.php (line 480)
########## DEBUG ##########
(int) 200
###########################
\app\Model\SubmitFeed.php (line 484)
########## DEBUG ##########
'SSUECCESSSSSSS'
###########################
\app\Model\SubmitFeed.php (line 495)
########## DEBUG ##########
'{"feedType":"POST_INVENTORY_AVAILABILITY_DATA","marketplaceIds":["A1KM3PTNGBLP5J"],"inputFeedDocumentId":"amzn1.tortuga.3.1a7339a9-446b-487c-8bf2-e9802cb16494.T1D84DUGPDMQO4"}'
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Api\FeedsApi.php (line 269)
########## DEBUG ##########
'{"feedType":"POST_INVENTORY_AVAILABILITY_DATA","marketplaceIds":["A1KM3PTNGBLP5J"],"inputFeedDocumentId":"amzn1.tortuga.3.1a7339a9-446b-487c-8bf2-e9802cb16494.T1D84DUGPDMQO4"}'
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php (line 37)
########## DEBUG ##########
'{"feedType":"POST_INVENTORY_AVAILABILITY_DATA","marketplaceIds":["A1KM3PTNGBLP5J"],"inputFeedDocumentId":"amzn1.tortuga.3.1a7339a9-446b-487c-8bf2-e9802cb16494.T1D84DUGPDMQO4"}'
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php (line 76)
########## DEBUG ##########
'{"feedType":"POST_INVENTORY_AVAILABILITY_DATA","marketplaceIds":["A1KM3PTNGBLP5J"],"inputFeedDocumentId":"amzn1.tortuga.3.1a7339a9-446b-487c-8bf2-e9802cb16494.T1D84DUGPDMQO4"}'
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php (line 78)
########## DEBUG ##########
''
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php (line 79)
########## DEBUG ##########
'https://sellingpartnerapi-na.amazon.com'
###########################
\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Api\FeedsApi.php (line 206)
########## DEBUG ##########
object(GuzzleHttp\Psr7\Request) {
	[private] method => 'POST'
	[private] requestTarget => null
	[private] uri => object(GuzzleHttp\Psr7\Uri) {
		[private] defaultPorts => array(
			'http' => (int) 80,
			'https' => (int) 443,
			'ftp' => (int) 21,
			'gopher' => (int) 70,
			'nntp' => (int) 119,
			'news' => (int) 119,
			'telnet' => (int) 23,
			'tn3270' => (int) 23,
			'imap' => (int) 143,
			'pop' => (int) 110,
			'ldap' => (int) 389
		)
		[private] charUnreserved => 'a-zA-Z0-9_\-\.~'
		[private] charSubDelims => '!\$&'\(\)\*\+,;='
		[private] replaceQuery => array(
			'=' => '%3D',
			'&' => '%26'
		)
		[private] scheme => 'https'
		[private] userInfo => ''
		[private] host => 'sellingpartnerapi-na.amazon.com'
		[private] port => null
		[private] path => '/feeds/2020-09-04/feeds'
		[private] query => ''
		[private] fragment => ''
	}
	[private] headers => array(
		'host' => '*****',
		'Accept' => array(
			(int) 0 => 'application/json'
		),
		'Content-Type' => array(
			(int) 0 => 'application/json'
		),
		'user-agent' => array(
			(int) 0 => 'cs-php-sp-api-client/2.1'
		),
		'x-amz-access-token' => array(
			(int) 0 => 'Atza|IwEBICtB31I8wsN7Vl-3AhWU_oMIYpfrSd6YibJwcDxmcUdWxfleJsh7mINo3pDO2BOltR69K0xr1xyK24MPWM2_JkEOzQLIcdUWtwFzRJRK3EMESfPCweLv4H5lI7T-9uCdtpFrQpCnPcNvmS55Xj1Y122m3Qisc0LilDKIwb5_ZqiA3dMiejLU5yeOtlFtCGOHYJKES-Ocei1w_bnJgI0F7OS8_sqjQvJ7JoB2kN5LW1MySCgInSj26rgl0EAs84wcLfyGthtGAce0onA5FsjTiVYYQ7evUerm7n02rnsNOeQ7JVqKkBHS824gTtCARw_DeuY'
		),
		'x-amz-date' => array(
			(int) 0 => '20210508T145241Z'
		),
		'x-amz-security-token' => array(
			(int) 0 => 'FwoGZXIvYXdzEOj//////////wEaDPoo3b1P5MBa2Cn88SK1AT2wAWy4UGFvrI4a8kMQNLQDYdg6yUwMit+DI/hDaa8jC/Hy8rsl26GqKxONEhNSO/6sy1EOMouzJ0R6g+QffHqoQW+xIVIrVi4fmKst+lf/toyUD8qL53PUvrMcq+GBgx0vuYbXe5I2XP0Px95HH04gNemrv88t7kck3rOs649INko/JF64Bg2MjPXrtp7hbE5uVv0UKxn9D4wJ9XxmNBoN1PLFC43LeIbQmWJqtzH/MCUAGWoouMvahAYyLaEsWZHjydzGfcCFJnrKKs+EU6CodPEgCmdhL+FT87vO+7KsPkA2Pv9jzIpjzg=='
		),
		'Authorization' => array(
			(int) 0 => 'AWS4-HMAC-SHA256 Credential=ASIAQVLCVRXEWJPVMW7J/20210508/us-east-1/execute-api/aws4_request, SignedHeaders=host;user-agent;x-amz-access-token;x-amz-date;x-amz-security-token, Signature=78c85218e92ba30fe4542eeee8d28c1d05bbd8127208d43eaed41d4e344a2d63'
		)
	)
	[private] headerNames => array(
		'host' => '*****',
		'accept' => 'Accept',
		'content-type' => 'Content-Type',
		'user-agent' => 'user-agent',
		'x-amz-access-token' => 'x-amz-access-token',
		'x-amz-date' => 'x-amz-date',
		'x-amz-security-token' => 'x-amz-security-token',
		'authorization' => 'Authorization'
	)
	[private] protocol => '1.1'
	[private] stream => object(GuzzleHttp\Psr7\Stream) {
		[private] stream => resource
		[private] size => null
		[private] seekable => true
		[private] readable => true
		[private] writable => true
		[private] uri => 'php://temp'
		[private] customMetadata => array()
	}
}
###########################
\app\Model\SubmitFeed.php (line 500)
########## DEBUG ##########
object(ClouSale\AmazonSellingPartnerAPI\ApiException) {
	[protected] responseBody => '{
  "errors": [
    {
      "code": "InvalidInput",
      "message": "Invalid request parameters",
      "details": ""
    }
  ]
}'
	[protected] responseHeaders => array(
		'Date' => array(
			(int) 0 => 'Sat, 08 May 2021 14:52:41 GMT'
		),
		'Content-Type' => array(
			(int) 0 => 'application/json'
		),
		'Content-Length' => array(
			(int) 0 => '130'
		),
		'Connection' => array(
			(int) 0 => 'keep-alive'
		),
		'x-amzn-RequestId' => array(
			(int) 0 => 'c39de5da-b6f9-4027-a02e-bff1f41029d8'
		),
		'x-amzn-RateLimit-Limit' => array(
			(int) 0 => '0.0083'
		),
		'x-amz-apigw-id' => array(
			(int) 0 => 'fA7VDEMWoAMF7AQ='
		),
		'X-Amzn-Trace-Id' => array(
			(int) 0 => 'Root=1-6096a5b9-4bf0d82d5276fd2450e7f6ab'
		)
	)
	[protected] responseObject => object(ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedResponse) {
		[protected] swaggerModelName => 'CreateFeedResponse'
		[protected] swaggerTypes => array(
			'payload' => '\ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedResult',
			'errors' => '\ClouSale\AmazonSellingPartnerAPI\Models\Feeds\ErrorList'
		)
		[protected] swaggerFormats => array(
			'payload' => null,
			'errors' => null
		)
		[protected] attributeMap => array(
			'payload' => 'payload',
			'errors' => 'errors'
		)
		[protected] setters => array(
			'payload' => 'setPayload',
			'errors' => 'setErrors'
		)
		[protected] getters => array(
			'payload' => 'getPayload',
			'errors' => 'getErrors'
		)
		[protected] container => array(
			'payload' => null,
			'errors' => null
		)
	}
	[protected] message => '[400] Client error: `POST https://sellingpartnerapi-na.amazon.com/feeds/2020-09-04/feeds` resulted in a `400 Bad Request` response:
{
  "errors": [
    {
      "code": "InvalidInput",
      "message": "Invalid request parameters",
      "details": ""
  (truncated...)
'
	[protected] code => (int) 400
	[protected] file => 'C:\Users\pgunt\php\cakephp\app\Vendor\vendor\clousale\amazon-sp-api-php\lib\Helpers\SellingPartnerApiRequest.php'
	[protected] line => (int) 114
}
###########################
Exception when calling FeedsApi->createFeed: [400] Client error: `POST https://sellingpartnerapi-na.amazon.com/feeds/2020-09-04/feeds` resulted in a `400 Bad Request` response:
{
  "errors": [
    {
      "code": "InvalidInput",
      "message": "Invalid request parameters",
      "details": ""
  (truncated...)


