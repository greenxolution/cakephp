<?php 


App::uses('AppController', 'Controller');
/**
 * MwsInventories Controller
 *
 * @property MwsInventory $MwsInventory
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MarketplacesController extends AppController {
	
	public $uses = false;
	
	
	public function index() {
		
		$marketplace = Configure::read('PETER.MWS.MARKETPLACE_ID');
		
		$this->set('marketplace', $marketplace);
		
		App::import('Model','Entrenue');
		
		$entrenue = new Entrenue();
		
// 		$list = $entrenue->find('all');
		/*
		 *    "email": "user@email.com",
   "apikey": "12345",
   "po_number": "67890",
   "name": "Marcia West",
   "address_line1": "64586 Macy Keys",
   "address_line2": "Suite 062",
   "city": "West Willisbury",
   "state": "Massachusetts",
   "postcode": "58292-7059",
   "country": "United States",
   "shipping_method": "Ground",
   "instructions": "Please email me the invoice",
   "products": [
      {
         "model": "1234",
         "quantity": 1
      },
      {
         "model": "5678",
         "quantity": 2
      }
   ]

		 */
		$data = array('name' => 'TEST ORDER',
						'address_line1' => '64586 Macy Keys',
						'address_line2' => 'Suite 062',
						'city'			=> 'West Willisbury',
						'state'			=> 'Massachusetts',
						'products'		=> array('model' => '10023', 'quantity' => 1, 'model' => '10024', 'quantity' => 1)
				);
		
		$entrenue->save($data);
		
// 		debug(count($list['Entrenue']['data']));
		
	
		
	}
	
}