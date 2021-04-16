# My Friday Love System

## Features
### Submitted feed files: 
**Description:**
That store the submitted feed 

**DB Table:** submit_feed

**Files are store:** app\webroot\files\FEED_LOG\

### MwsInventories
**Description:**
That store the real time inventory in MWS

**DB Table**: mws_inventory

### ViewMatchInvs
**Description:**
This contains the relation between the 
*MWS Price*

*Entrenue Price* It's the supplier price

*Low Price* Minimal sales price, below this price the profit is negative. It's calculated Low Price = supplier price + supplier fee + Amazon fee. Note: The price never can be lower than **Low Price**

*Profit* It's the Gross profit. Profit = MWS Price - Entrenue Price

*Earnings* It's the Net profit. Earnings = MWS Price - Entrenue Price - Entrenue fee - Amazon fee.

**Tiers** 
The repricing is the way to have our product price lower than the competitor.

### Marketplaces
This is a conection with the MWS. It pulls the data from

### ListOrders
List the order and their stages. It pulls the orders from MWS.

### Inv-Match
Compare the inventory (prices and stock) between suppliers. E.g. Entrenue and El Dorado

## Repricing

We're using tiers for this purpose; the tiers have the logic for repricing.
There are two kinds of tiers Manua or Automatic.
The Manual set a fixed amount under the competitor price. E.g. $10

The Automatic is a % or fixed amount below the competitor price based on the Tiers class. The Tier class is a Model which supports the logic-based in other parameters. 
E.g. 
1. I want my price 2% less than the competitor when the amount of item in the store is less than 10.
2. I want my price $10 less than the competitor if I've already sold this product 3 times this week.
The complexity and flexibility of the Automatic tiers make us write a Model class for this purpose.

**Note: The repricing is executed every seconds**

## MWS Inventory

The MWS inventory must be updated in real-time. The item inventory must be 0 when the supplier inventory is <= 3.

**Note: The update MWS inventory is executed every seconds**

#### Project Name: SP-API plugin in CakePHP 2.10

**Description:**
We already have a system programmed in CakePHP 2.x which manages our Amazon Seller store. This includes upload/update/repricing products, retrieve/update orders, etc.
Amazon has updated its API in 2020.
We want to manage our products and orders through the new SP-API

**Definition Of Done**
Upload/Update products from our database to Amazon seller.
Retrieve/update orders from Amazon to our database and our database to Amazon.


