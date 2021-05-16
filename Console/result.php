

Welcome to CakePHP v2.10.24 Console
---------------------------------------------------------------
App : app
Path: C:\Users\pgunt\php\cakephp\app\
---------------------------------------------------------------
\app\Model\MwsInventory.php (line 197)
########## DEBUG ##########
object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResult) {
	[protected] swaggerModelName => 'GetOffersResult'
	[protected] swaggerTypes => array(
		'marketplace_id' => 'string',
		'asin' => 'string',
		'sku' => 'string',
		'item_condition' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ConditionType',
		'status' => 'string',
		'identifier' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ItemIdentifier',
		'summary' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Summary',
		'offers' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetailList'
	)
	[protected] swaggerFormats => array(
		'marketplace_id' => null,
		'asin' => null,
		'sku' => null,
		'item_condition' => null,
		'status' => null,
		'identifier' => null,
		'summary' => null,
		'offers' => null
	)
	[protected] attributeMap => array(
		'marketplace_id' => 'MarketplaceID',
		'asin' => 'ASIN',
		'sku' => 'SKU',
		'item_condition' => 'ItemCondition',
		'status' => 'status',
		'identifier' => 'Identifier',
		'summary' => 'Summary',
		'offers' => 'Offers'
	)
	[protected] setters => array(
		'marketplace_id' => 'setMarketplaceId',
		'asin' => 'setAsin',
		'sku' => 'setSku',
		'item_condition' => 'setItemCondition',
		'status' => 'setStatus',
		'identifier' => 'setIdentifier',
		'summary' => 'setSummary',
		'offers' => 'setOffers'
	)
	[protected] getters => array(
		'marketplace_id' => 'getMarketplaceId',
		'asin' => 'getAsin',
		'sku' => 'getSku',
		'item_condition' => 'getItemCondition',
		'status' => 'getStatus',
		'identifier' => 'getIdentifier',
		'summary' => 'getSummary',
		'offers' => 'getOffers'
	)
	[protected] container => array(
		'marketplace_id' => null,
		'asin' => '1592334253',
		'sku' => null,
		'item_condition' => 'New',
		'status' => 'Success',
		'identifier' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ItemIdentifier) {
			[protected] swaggerModelName => 'ItemIdentifier'
			[protected] swaggerTypes => array(
				'marketplace_id' => 'string',
				'asin' => 'string',
				'seller_sku' => 'string',
				'item_condition' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ConditionType'
			)
			[protected] swaggerFormats => array(
				'marketplace_id' => null,
				'asin' => null,
				'seller_sku' => null,
				'item_condition' => null
			)
			[protected] attributeMap => array(
				'marketplace_id' => 'MarketplaceId',
				'asin' => 'ASIN',
				'seller_sku' => 'SellerSKU',
				'item_condition' => 'ItemCondition'
			)
			[protected] setters => array(
				'marketplace_id' => 'setMarketplaceId',
				'asin' => 'setAsin',
				'seller_sku' => 'setSellerSku',
				'item_condition' => 'setItemCondition'
			)
			[protected] getters => array(
				'marketplace_id' => 'getMarketplaceId',
				'asin' => 'getAsin',
				'seller_sku' => 'getSellerSku',
				'item_condition' => 'getItemCondition'
			)
			[protected] container => array(
				'marketplace_id' => 'ATVPDKIKX0DER',
				'asin' => '1592334253',
				'seller_sku' => null,
				'item_condition' => 'New'
			)
		},
		'summary' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Summary) {
			[protected] swaggerModelName => 'Summary'
			[protected] swaggerTypes => array(
				'total_offer_count' => 'int',
				'number_of_offers' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\NumberOfOffers',
				'lowest_prices' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\LowestPrices',
				'buy_box_prices' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\BuyBoxPrices',
				'list_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
				'suggested_lower_price_plus_shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
				'buy_box_eligible_offers' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\BuyBoxEligibleOffers',
				'offers_available_time' => '\DateTime'
			)
			[protected] swaggerFormats => array(
				'total_offer_count' => 'int32',
				'number_of_offers' => null,
				'lowest_prices' => null,
				'buy_box_prices' => null,
				'list_price' => null,
				'suggested_lower_price_plus_shipping' => null,
				'buy_box_eligible_offers' => null,
				'offers_available_time' => 'date-time'
			)
			[protected] attributeMap => array(
				'total_offer_count' => 'TotalOfferCount',
				'number_of_offers' => 'NumberOfOffers',
				'lowest_prices' => 'LowestPrices',
				'buy_box_prices' => 'BuyBoxPrices',
				'list_price' => 'ListPrice',
				'suggested_lower_price_plus_shipping' => 'SuggestedLowerPricePlusShipping',
				'buy_box_eligible_offers' => 'BuyBoxEligibleOffers',
				'offers_available_time' => 'OffersAvailableTime'
			)
			[protected] setters => array(
				'total_offer_count' => 'setTotalOfferCount',
				'number_of_offers' => 'setNumberOfOffers',
				'lowest_prices' => 'setLowestPrices',
				'buy_box_prices' => 'setBuyBoxPrices',
				'list_price' => 'setListPrice',
				'suggested_lower_price_plus_shipping' => 'setSuggestedLowerPricePlusShipping',
				'buy_box_eligible_offers' => 'setBuyBoxEligibleOffers',
				'offers_available_time' => 'setOffersAvailableTime'
			)
			[protected] getters => array(
				'total_offer_count' => 'getTotalOfferCount',
				'number_of_offers' => 'getNumberOfOffers',
				'lowest_prices' => 'getLowestPrices',
				'buy_box_prices' => 'getBuyBoxPrices',
				'list_price' => 'getListPrice',
				'suggested_lower_price_plus_shipping' => 'getSuggestedLowerPricePlusShipping',
				'buy_box_eligible_offers' => 'getBuyBoxEligibleOffers',
				'offers_available_time' => 'getOffersAvailableTime'
			)
			[protected] container => array(
				'total_offer_count' => (int) 16,
				'number_of_offers' => array(
					(int) 0 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Merchant'
						OfferCount => (int) 16
					}
				),
				'lowest_prices' => array(
					(int) 0 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Merchant'
						LandedPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 7.2
						}
						ListingPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 7.2
						}
						Shipping => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 0
						}
					}
				),
				'buy_box_prices' => array(
					(int) 0 => object(stdClass) {
						condition => 'used'
						LandedPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 7.2
						}
						ListingPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 7.2
						}
						Shipping => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 0
						}
					}
				),
				'list_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
					[protected] swaggerModelName => 'MoneyType'
					[protected] swaggerTypes => array(
						'currency_code' => 'string',
						'amount' => 'float'
					)
					[protected] swaggerFormats => array(
						'currency_code' => null,
						'amount' => null
					)
					[protected] attributeMap => array(
						'currency_code' => 'CurrencyCode',
						'amount' => 'Amount'
					)
					[protected] setters => array(
						'currency_code' => 'setCurrencyCode',
						'amount' => 'setAmount'
					)
					[protected] getters => array(
						'currency_code' => 'getCurrencyCode',
						'amount' => 'getAmount'
					)
					[protected] container => array(
						'currency_code' => 'USD',
						'amount' => (float) 19.99
					)
				},
				'suggested_lower_price_plus_shipping' => null,
				'buy_box_eligible_offers' => array(
					(int) 0 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Merchant'
						OfferCount => (int) 8
					}
				),
				'offers_available_time' => null
			)
		},
		'offers' => array()
	)
}
###########################
\app\Model\MwsInventory.php (line 199)
########## DEBUG ##########
array(
	(int) 0 => object(stdClass) {
		condition => 'used'
		fulfillmentChannel => 'Merchant'
		LandedPrice => object(stdClass) {
			CurrencyCode => 'USD'
			Amount => (float) 7.2
		}
		ListingPrice => object(stdClass) {
			CurrencyCode => 'USD'
			Amount => (float) 7.2
		}
		Shipping => object(stdClass) {
			CurrencyCode => 'USD'
			Amount => (float) 0
		}
	}
)
###########################
\app\Console\Command\ExecuteShell.php (line 72)
########## DEBUG ##########
null
###########################

