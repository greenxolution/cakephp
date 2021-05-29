select
	'' as author,
    '' as `title`,
    '' as publisher,
    '' as `pub-date`,
    lower(inv.Binding) as binding,
    '' as illustration,
    'New' as `condition`,
    '' as edition,
    '' as comments,
    prod.price +20 as price,
    prod.sku as sku,
    '' as `category1`,
'' as `image-url`,
'' as `main-offer-image`,
'' as `offer-image1 - offer-image4`,
prod.quantity as `quantity`,
'a' as `add-delete`,
'1' as `will-ship-internationally`,
'' as `expedited-shipping`,
'' as `item-is-marketplace`,
inv.asin as `product-id`,
1 as `product-id-type`,
11 as `item-condition`,
'' as `item-note`,
'' as `browse-path`,
'' as `storefront-feature`,
'' as `boldface`,
'' as `fulfillment-center-id`,
'' as `dust-jacket`,
'' as `signed-by`

    
    
from
    mws_inventory inv
    inner join entrenue_products prod on prod.id = inv.entrenue_product_id
where
    prod.category_ids like '%60%' and
    inv.asin not in ('383653214X', '1592337406', '1594743061', '1618372769', '1452154678', '1618371592', '1780978022', '62300318', '62300334', '62300350', '1455591815', '1441332820', '446619299', '446619302', '446619442', '446619345', '446619353', '446619450', '446619361', '044661937X ', '446619388', '446619396', '446583731', '446583650', '044658374X ', '446583677', '446583693', '446583758', '446583707', '446583669', '446583766', '446583715', '044661033X ', '446613452', '044661310X ', '446613088', '446613134', '446612987', '446612839', '446619280', '446619337', '446583723', '446613045', '1612432409', '157344278X', '812991958', '452266637', '1592333915', 'B000FFJRKE ', '3836566877')