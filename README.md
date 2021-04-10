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

## Repricing

We're using tiers for this purpose; the tiers have the logic for repricing.
There are two kinds of tiers Manua or Automatic.
The Manual set a fixed amount under the competitor price. E.g. $10
The Automatic is a % based on the Tiers class. The Tier class is a Model which supports the logic-based in other parameters. 
E.g. 
1. I want my price 2% less than the competitor when the amount of item in the store is less than 10.
2. I want my price $10 less than the competitor if I've already sold this product 3 times this week.
The complexity and flexibility of the Automatic tiers make us write a Model class for this purpose.
