<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Category $Category
 */
class Product extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'SKU';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasAndBelongsToMany = array(
			'Category' => array(
					'className' => 'Category',
					'joinTable' => 'products_category',
					'foreignKey' => 'product_id',
					'associationForeignKey' => 'category_id',
					'unique' => 'keepExisting',
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'finderQuery' => '',
			)
	);

	public function load(){

		App::uses('Xml', 'Utility');
		App::uses('File', 'Utility');

		$file = new File(WWW_ROOT.'files/XML_FILES/xmlfile-feb-2016.xml');

		$xmlObject = new Xml();

		$xmlArray = $xmlObject->toArray(Xml::build($file->read()));

		$items = Set::classicExtract($xmlArray, 'SHOP.SHOPITEM');

		$i = 0;

				foreach($items as $key => $value){
					
					$data['Products'] = $value;
					
					$category = Set::classicExtract($value, '{(CATEGORY_[0-9])}');
					
					$category = array();

					foreach($value as $key2 => $value2){

						$pos = strpos($value2, 'Exclusives');

						if ($pos === false) {


						}
						else{

							array_push($category, $value2);
							
							++$i;
						}
						
						$pos = strpos($value2, 'Best Sellers');
						
						if ($pos === false) {
						
						
						}
						else{
						
							array_push($category, $value2);
								
							++$i;
						}
						
						
						debug($category);
						
					}
					
					$data['Category'] = $category;
					
					
					debug($data);

				}
				
				
				// 		debug($items);

		// 		debug($i);

	}


	public function saveAssociated($data = null, $options = array()) {
		foreach ($data as $alias => $modelData) {
			if (!empty($this->hasAndBelongsToMany[$alias])) {
				$habtm = array();
				$Model = ClassRegistry::init($this->hasAndBelongsToMany[$alias]['className']);
				foreach ($modelData as $modelDatum) {
					if (empty($modelDatum['id'])) {
						$Model->create();
					}
					$Model->save($modelDatum);
					$habtm[] = empty($modelDatum['id']) ? $Model->getInsertID() : $modelDatum['id'];
				}
				$data[$alias] = array($alias => $habtm);
			}
		}
		return parent::saveAssociated($data, $options);
	}
}
