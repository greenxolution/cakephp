<?php
App::uses('HttpSocket', 'Network/Http');


class EntrenueProductSource extends DataSource {

	/**
	 * An optional description of your datasource
	 */
	public $description = 'A far away datasource';

	/**
	 * Our default config options. These options will be customized in our
	 * ``app/Config/database.php`` and will be merged in the ``__construct()``.
	 */
	public $config = array(
			'email' 	=> '',
			'apiKey' 	=> '',
			'url'		=> '',
			'pagination'	=> 1000
			
	);



	/**
	 * If we want to create() or update() we need to specify the fields
	 * available. We use the same array keys as we do with CakeSchema, eg.
	 * fixtures and schema migrations.
	 *
	 po_number - Order purchase order number (must be unique).
	 name - Shipping name.
	 address_line1 - Shipping address line 1.
	 city - Shipping city.
	 state - Shipping state/province.
	 postcode - Shipping zipcode/postcode.
	 country - Shipping country.
	 shipping_method - Shipping method.
	 */
	protected $_schema = array(
			'po_number' => array(
					'type' => 'string',
					'null' => false,
					'length' => 20,
					'default' => '000-0000-0000000',
					'key' => 'primary'
			),
			'name' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 80
			),
			'address_line1' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 200
			),
			'address_line2' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 200
			),
			'city' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 100
			),
			'state' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 100
			),
			'postcode' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 100
			),
			'country' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 100
			),		
			'shipping_method' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 100
			),
			'country' => array(
					'type' => 'string',
					'null' => false,
					'default' => null,
					'length' => 100
			),	
			'produtcs'																		
	);

	/**
	 * Create our HttpSocket and handle any config tweaks.
	 */
	public function __construct($config) {
		parent::__construct($config);
		$this->Http = new HttpSocket();
	}

	/**
	 * Since datasources normally connect to a database there are a few things
	 * we must change to get them to work without a database.
	 */

	/**
	 * listSources() is for caching. You'll likely want to implement caching in
	 * your own way with a custom datasource. So just ``return null``.
	 */
	public function listSources($data = null) {
		return null;
	}

	/**
	 * describe() tells the model your schema for ``Model::save()``.
	 *
	 * You may want a different schema for each model but still use a single
	 * datasource. If this is your case then set a ``schema`` property on your
	 * models and simply return ``$model->schema`` here instead.
	 */
	public function describe($model) {
		return $this->_schema;
	}

	/**
	 * calculate() is for determining how we will count the records and is
	 * required to get ``update()`` and ``delete()`` to work.
	 *
	 * We don't count the records here but return a string to be passed to
	 * ``read()`` which will do the actual counting. The easiest way is to just
	 * return the string 'COUNT' and check for it in ``read()`` where
	 * ``$data['fields'] === 'COUNT'``.
	 */
	public function calculate(Model $model, $func, $params = array()) {
		return 'COUNT';
	}

	public function read(Model $model, $queryData = array(), $recursive = null) {
		
		$res = $this->readProduct($model, $queryData);
		
		$data = Hash::extract($res, 'data.{n}');
		
		
		while ($res['to'] != $res['total']) {

			$queryData['conditions']['page'] = $res['current_page'] + 1;
			
			$res = $this->readProduct($model, $queryData);
			
			$result = Hash::remove($res, 'data');
			
			$data = array_merge($data, Hash::extract($res, 'data.{n}'));
			
		}
				
		
		return array($model->alias => $data);
	}

	private function endPoint($action = 'products'){

		return $this->config['url'].'/'.$action.'?email='.$this->config['email'].'&apikey='.$this->config['apiKey'];
	}
	
	/**
	 * Implement the R in CRUD. Calls to ``Model::find()`` arrive here.
	 */
	public function readProduct(Model $model, $queryData = array(),
			$recursive = null) {
		
		$queryData['conditions']['pagination'] = $this->config['pagination'];
		
		
		/**
		 * Here we do the actual count as instructed by our calculate()
		 * method above. We could either check the remote source or some
		 * other way to get the record count. Here we'll simply return 1 so
		 * ``update()`` and ``delete()`` will assume the record exists.
		 */
		if ($queryData['fields'] === 'COUNT') {
			return array(array(array('count' => 1)));
		}
		/**
		 * Now we get, decode and return the remote data.
		 */
		
		$queryData['conditions']['apiKey'] = $this->config['apiKey'];
		$json = $this->Http->get(
				$this->endPOint(),
				$queryData['conditions']
		);

		debug($json,2);
		

		$res = json_decode($json, true);
		
		if (is_null($res)) {
			$error = json_last_error();
			throw new CakeException($error);
		}
		
		
		return $res;
	}

	public function create(Model $model, $fields = null, $values = null) {

		return true;
	}
	/**
	 * Implement the C in CRUD. Calls to ``Model::save()`` without $model->id
	 * set arrive here.
	 *
	public function create(Model $model, $fields = null, $values = null) {
		$data = array_combine($fields, $values);
		
// 		$data['apiKey'] = $this->config['apiKey'];
// 		$data['email'] = $this->config['email'];

		$data = array(
				'email' => $config['email'],
				'apiKey'	=> $config['apiKey'],
				'name' => 'TEST ORDER',
				'address_line1' => '64586 Macy Keys',
				'address_line2' => 'Suite 062',
				'city'			=> 'West Willisbury',
				'state'			=> 'Massachusetts',
				"postcode" => "58292-7059",
				"country" => "United States",
				"shipping_method" => "UPSGround",
				'products'		=> array('model' => '18613', 'quantity' => 1, 'model' => '10024', 'quantity' => 2)
		);
		
		debug(json_encode($data));
		
		
		curl_close($ch);
		

		
// 		debug($json);
		
// 		$res = json_decode($json, true);
// 		if (is_null($res)) {
// 			$error = json_last_error();
// 			throw new CakeException($error);
// 		}
		return true;
	}

	/**
	 * Implement the U in CRUD. Calls to ``Model::save()`` with $Model->id
	 * set arrive here. Depending on the remote source you can just call
	 * ``$this->create()``.
	 */
	public function update(Model $model, $fields = null, $values = null,
			$conditions = null) {
		return $this->create($model, $fields, $values);
	}

	/**
	 * Implement the D in CRUD. Calls to ``Model::delete()`` arrive here.
	 */
	public function delete(Model $model, $id = null) {
		$json = $this->Http->get('http://example.com/api/remove.json', array(
				'id' => $id[$model->alias . '.id'],
				'apiKey' => $this->config['apiKey'],
		));
		$res = json_decode($json, true);
		if (is_null($res)) {
			$error = json_last_error();
			throw new CakeException($error);
		}
		return true;
	}

}

?>