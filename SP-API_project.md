

# SP-API & CakePHP Project

MyCake System: It's a system developed in CakePHP 2.x. It managed the MWS with previous MWS API.
The developer must create all CakePHP elements (tables, controllers, model, view) to accomplish the requirements.


## MWS Product
Description: The MWS products must be reflected in the MyCake System. The MWS products and MyCake products must be in sync every x time. E.g. Every 5 secs

### Actions:
Synchronization between the MWS Products and MyCake Products. This includes:
Upload single and bulk new products from MyCake system to MWS
Update MWS existing products (E.g. price and inventory) when the price or inventory is updated in the MyCake system.
Remove MWS product when the MySystem product is marked as Delete.
E.g When the price or inventory is modified in the MyCake system tables it must be updated in the MWS.
Note: The repricing will be catch in history table. We'd like to know how the price is changed for products.

## MWS Orders
Description: The MWS orders must be reflected in the MyCake system.
###Action:
Retrieve the orders from the MWS to MyCake system.
Update the MWS order from MyCake system. This include the Shipping Tracking ID.
E.g When the Shipping Tracking ID is modified in the MyCake system tables it must be updated in the MWS.

## User Interface:
If follow the CakePHP standard way to show the tables in the View.

## Authorization:
This application will use self-authoriztion
https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#self-authorization

All parameters must be read from a hardcode file with the constant for this purpose:
Example
`$config->setHost($options['endpoint']);

`$config->setAccessToken($accessToken);
`$config->setAccessKey($assumedRole->getAccessKeyId());
`$config->setSecretKey($assumedRole->getSecretAccessKey());
`$config->setRegion($options['region']);
`$config->setSecurityToken($assumedRole->getSessionToken());

### Refresh Token:
Create the procedure to refresh the token without any manual intervention.

## Exception Handler:
The DML exception and HTTP exception will be catch in a table.

## Design and development:
The design and development would be commented. We accept any suggestion from the developer that is not included in this requirements.





