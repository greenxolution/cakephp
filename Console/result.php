

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
		'asin' => '0446698598',
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
				'asin' => '0446698598',
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
				'total_offer_count' => (int) 22,
				'number_of_offers' => array(
					(int) 0 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Merchant'
						OfferCount => (int) 9
					},
					(int) 1 => object(stdClass) {
						condition => 'new'
						fulfillmentChannel => 'Amazon'
						OfferCount => (int) 1
					},
					(int) 2 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Amazon'
						OfferCount => (int) 3
					},
					(int) 3 => object(stdClass) {
						condition => 'new'
						fulfillmentChannel => 'Merchant'
						OfferCount => (int) 9
					}
				),
				'lowest_prices' => array(
					(int) 0 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Merchant'
						LandedPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 14.39
						}
						ListingPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 10.4
						}
						Shipping => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 3.99
						}
					},
					(int) 1 => object(stdClass) {
						condition => 'new'
						fulfillmentChannel => 'Amazon'
						LandedPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 25.99
						}
						ListingPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 25.99
						}
						Shipping => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 0
						}
					},
					(int) 2 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Amazon'
						LandedPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 14.43
						}
						ListingPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 14.43
						}
						Shipping => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 0
						}
					},
					(int) 3 => object(stdClass) {
						condition => 'new'
						fulfillmentChannel => 'Merchant'
						LandedPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 25.7
						}
						ListingPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 21.71
						}
						Shipping => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 3.99
						}
					}
				),
				'buy_box_prices' => array(
					(int) 0 => object(stdClass) {
						condition => 'new'
						LandedPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 25.99
						}
						ListingPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 25.99
						}
						Shipping => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 0
						}
					},
					(int) 1 => object(stdClass) {
						condition => 'used'
						LandedPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 24.96
						}
						ListingPrice => object(stdClass) {
							CurrencyCode => 'USD'
							Amount => (float) 24.96
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
						'amount' => (float) 25.99
					)
				},
				'suggested_lower_price_plus_shipping' => null,
				'buy_box_eligible_offers' => array(
					(int) 0 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Merchant'
						OfferCount => (int) 3
					},
					(int) 1 => object(stdClass) {
						condition => 'new'
						fulfillmentChannel => 'Amazon'
						OfferCount => (int) 1
					},
					(int) 2 => object(stdClass) {
						condition => 'used'
						fulfillmentChannel => 'Amazon'
						OfferCount => (int) 2
					},
					(int) 3 => object(stdClass) {
						condition => 'new'
						fulfillmentChannel => 'Merchant'
						OfferCount => (int) 3
					}
				),
				'offers_available_time' => null
			)
		},
		'offers' => array(
			(int) 0 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 58,
							'feedback_count' => (int) 71760
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 24,
							'maximum_hours' => (int) 48,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 21.71
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 3.99
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'US'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => false
				)
			},
			(int) 1 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 81,
							'feedback_count' => (int) 16909
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 24,
							'maximum_hours' => (int) 48,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 21.72
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 3.99
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'US'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => false
				)
			},
			(int) 2 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 91,
							'feedback_count' => (int) 387
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 22,
							'maximum_hours' => (int) 22,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 25.99
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 0
						)
					},
					'ships_from' => null,
					'is_fulfilled_by_amazon' => true,
					'is_buy_box_winner' => true,
					'is_featured_merchant' => true
				)
			},
			(int) 3 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 77,
							'feedback_count' => (int) 32722
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 144,
							'maximum_hours' => (int) 240,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 28.31
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 0
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'US'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => false
				)
			},
			(int) 4 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 77,
							'feedback_count' => (int) 14248
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 144,
							'maximum_hours' => (int) 240,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 24.32
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 3.99
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'US'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => false
				)
			},
			(int) 5 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 76,
							'feedback_count' => (int) 588
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 144,
							'maximum_hours' => (int) 240,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 28.31
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 0
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'US'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => false
				)
			},
			(int) 6 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 92,
							'feedback_count' => (int) 7231
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 24,
							'maximum_hours' => (int) 24,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 29.45
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 0
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'US'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => true
				)
			},
			(int) 7 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 87,
							'feedback_count' => (int) 901429
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 264,
							'maximum_hours' => (int) 360,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 29.64
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 0
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'GB'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => true
				)
			},
			(int) 8 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 91,
							'feedback_count' => (int) 39705
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 144,
							'maximum_hours' => (int) 240,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 26.21
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 3.99
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'US'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => true
				)
			},
			(int) 9 => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetail) {
				[protected] swaggerModelName => 'OfferDetail'
				[protected] swaggerTypes => array(
					'my_offer' => 'bool',
					'sub_condition' => 'string',
					'seller_feedback_rating' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
					'shipping_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
					'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
					'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
					'ships_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
					'is_fulfilled_by_amazon' => 'bool',
					'is_buy_box_winner' => 'bool',
					'is_featured_merchant' => 'bool'
				)
				[protected] swaggerFormats => array(
					'my_offer' => null,
					'sub_condition' => null,
					'seller_feedback_rating' => null,
					'shipping_time' => null,
					'listing_price' => null,
					'points' => null,
					'shipping' => null,
					'ships_from' => null,
					'is_fulfilled_by_amazon' => null,
					'is_buy_box_winner' => null,
					'is_featured_merchant' => null
				)
				[protected] attributeMap => array(
					'my_offer' => 'MyOffer',
					'sub_condition' => 'SubCondition',
					'seller_feedback_rating' => 'SellerFeedbackRating',
					'shipping_time' => 'ShippingTime',
					'listing_price' => 'ListingPrice',
					'points' => 'Points',
					'shipping' => 'Shipping',
					'ships_from' => 'ShipsFrom',
					'is_fulfilled_by_amazon' => 'IsFulfilledByAmazon',
					'is_buy_box_winner' => 'IsBuyBoxWinner',
					'is_featured_merchant' => 'IsFeaturedMerchant'
				)
				[protected] setters => array(
					'my_offer' => 'setMyOffer',
					'sub_condition' => 'setSubCondition',
					'seller_feedback_rating' => 'setSellerFeedbackRating',
					'shipping_time' => 'setShippingTime',
					'listing_price' => 'setListingPrice',
					'points' => 'setPoints',
					'shipping' => 'setShipping',
					'ships_from' => 'setShipsFrom',
					'is_fulfilled_by_amazon' => 'setIsFulfilledByAmazon',
					'is_buy_box_winner' => 'setIsBuyBoxWinner',
					'is_featured_merchant' => 'setIsFeaturedMerchant'
				)
				[protected] getters => array(
					'my_offer' => 'getMyOffer',
					'sub_condition' => 'getSubCondition',
					'seller_feedback_rating' => 'getSellerFeedbackRating',
					'shipping_time' => 'getShippingTime',
					'listing_price' => 'getListingPrice',
					'points' => 'getPoints',
					'shipping' => 'getShipping',
					'ships_from' => 'getShipsFrom',
					'is_fulfilled_by_amazon' => 'getIsFulfilledByAmazon',
					'is_buy_box_winner' => 'getIsBuyBoxWinner',
					'is_featured_merchant' => 'getIsFeaturedMerchant'
				)
				[protected] container => array(
					'my_offer' => null,
					'sub_condition' => 'new',
					'seller_feedback_rating' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType) {
						[protected] swaggerModelName => 'SellerFeedbackType'
						[protected] swaggerTypes => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int'
						)
						[protected] swaggerFormats => array(
							'seller_positive_feedback_rating' => 'double',
							'feedback_count' => 'int64'
						)
						[protected] attributeMap => array(
							'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
							'feedback_count' => 'FeedbackCount'
						)
						[protected] setters => array(
							'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
							'feedback_count' => 'setFeedbackCount'
						)
						[protected] getters => array(
							'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
							'feedback_count' => 'getFeedbackCount'
						)
						[protected] container => array(
							'seller_positive_feedback_rating' => (float) 90,
							'feedback_count' => (int) 325
						)
					},
					'shipping_time' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType) {
						[protected] swaggerModelName => 'DetailedShippingTimeType'
						[protected] swaggerTypes => array(
							'minimum_hours' => 'int',
							'maximum_hours' => 'int',
							'available_date' => 'float',
							'availability_type' => 'string'
						)
						[protected] swaggerFormats => array(
							'minimum_hours' => 'int64',
							'maximum_hours' => 'int64',
							'available_date' => null,
							'availability_type' => null
						)
						[protected] attributeMap => array(
							'minimum_hours' => 'minimumHours',
							'maximum_hours' => 'maximumHours',
							'available_date' => 'availableDate',
							'availability_type' => 'availabilityType'
						)
						[protected] setters => array(
							'minimum_hours' => 'setMinimumHours',
							'maximum_hours' => 'setMaximumHours',
							'available_date' => 'setAvailableDate',
							'availability_type' => 'setAvailabilityType'
						)
						[protected] getters => array(
							'minimum_hours' => 'getMinimumHours',
							'maximum_hours' => 'getMaximumHours',
							'available_date' => 'getAvailableDate',
							'availability_type' => 'getAvailabilityType'
						)
						[protected] container => array(
							'minimum_hours' => (int) 24,
							'maximum_hours' => (int) 48,
							'available_date' => null,
							'availability_type' => 'NOW'
						)
					},
					'listing_price' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 28.05
						)
					},
					'points' => null,
					'shipping' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType) {
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
							'amount' => (float) 3.99
						)
					},
					'ships_from' => object(ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType) {
						[protected] swaggerModelName => 'ShipsFromType'
						[protected] swaggerTypes => array(
							'state' => 'string',
							'country' => 'string'
						)
						[protected] swaggerFormats => array(
							'state' => null,
							'country' => null
						)
						[protected] attributeMap => array(
							'state' => 'State',
							'country' => 'Country'
						)
						[protected] setters => array(
							'state' => 'setState',
							'country' => 'setCountry'
						)
						[protected] getters => array(
							'state' => 'getState',
							'country' => 'getCountry'
						)
						[protected] container => array(
							'state' => null,
							'country' => 'US'
						)
					},
					'is_fulfilled_by_amazon' => false,
					'is_buy_box_winner' => false,
					'is_featured_merchant' => false
				)
			}
		)
	)
}
###########################
\app\Console\Command\ExecuteShell.php (line 72)
########## DEBUG ##########
(float) 10.4
###########################

