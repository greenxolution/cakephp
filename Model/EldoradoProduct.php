<?php
App::uses('AppModel', 'Model');
/**
 * EldoradoProduct Model
 *
 */
class EldoradoProduct extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'SKU';
	
	
	public function import($filename = null){
		// to avoid having to tweak the contents of
		// $data you should use your db field name as the heading name
		// eg: Post.id, Post.title, Post.description
	
		// set the filename to read CSV from
		$filename = WWW_ROOT.'files'.DS . $filename;
		
		debug($filename);
		
		$this->truncate();
	
		// open the file
		$handle = fopen($filename, "r");
	
		if(!$handle) return null;
			
	
		// create a message container
		$return = array(
				'messages' => array(),
				'errors' => array(),
		);
	
	
		$i = 0;
		// read each data row in the file
		while (($row = fgetcsv($handle, 0, ',')) !== FALSE) {
			$i++;
			$data = array();
	
	
			foreach ($row as $k=>$head) {
				// get the data field from Model.field
				
// 				debug($row);
	
				$data['EldoradoProduct']['SKU']					=(isset($row[0])) ? $row[0] : '';
				$data['EldoradoProduct']['Description']			=(isset($row[1])) ? $row[1] : '';
				$data['EldoradoProduct']['PRICE']				= (isset($row[14])) ? $row[14] : '';
// 				$data['EldoradoProduct']['MAP']					= (isset($row[1])) ? $row[1] : '';

				$data['EldoradoProduct']['Grouping_Class']		=(isset($row[2])) ? $row[2] : '';
				$data['EldoradoProduct']['Product_Class']			=(isset($row[3])) ? $row[3] : '';
				$data['EldoradoProduct']['Inventory_Class']				=(isset($row[4])) ? $row[4] : '';
				$data['EldoradoProduct']['Battery_Type']					=(isset($row[5])) ? $row[5] : '';

				$data['EldoradoProduct']['Date_Active']					=(isset($row[6])) ? $row[6] : '';
				$data['EldoradoProduct']['Date_Expected']			=(isset($row[7])) ? $row[7] : '';
// 				$data['EldoradoProduct']['Preferred_Vendor']				=(isset($row[2])) ? $row[2] : '';
// 				$data['EldoradoProduct']['Manufacturer']					=(isset($row[3])) ? $row[3] : '';

// 				$data['EldoradoProduct']['Inactive']					=(isset($row[0])) ? $row[0] : '';
// 				$data['EldoradoProduct']['Length']			=(isset($row[1])) ? $row[1] : '';
// 				$data['EldoradoProduct']['Closeout']				=(isset($row[2])) ? $row[2] : '';
				$data['EldoradoProduct']['UPC']					=(isset($row[80])) ? $row[80] : '';
				$data['EldoradoProduct']['Brand']				=(isset($row[81])) ? $row[81] : '';
				$data['EldoradoProduct']['Remarks']					=(isset($row[82])) ? $row[82] : '';
				
// 				debug($data);
	
	
			}
	
			$this->create();
			if (!$this->save($data)) {
				debug( __(sprintf('EldoradoProduct for Row %d failed to save.',$i), true));
			}
			else{
				debug( __(sprintf('EldoradoProduct for Row %d was saved.',$i), true));
			}
	
		}
		
		debug('items amount: '.$i);
		
	
		// close the file
		fclose($handle);
	
		// return the messages
		return $return;
	}
	
	
	/**
	 * Truncate the table
	 *
	 */
	private function truncate(){
	
		return $this->query('TRUNCATE eldorado_products');
	
	}
	

}
