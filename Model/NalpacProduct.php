<?php
App::uses('AppModel', 'Model');
/**
 * NalpacProduct Model
 *
 */
class NalpacProduct extends AppModel {
	
	public $useTable = 'nalpac_products';

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
			
				debug($row);
	
				$data['NalpacProduct']['Nalpac_Item_Number']					=(isset($row[0])) ? $row[0] : '';
				$data['NalpacProduct']['Description']			=(isset($row[1])) ? $row[1] : '';
				$data['NalpacProduct']['weight']				= (isset($row[2])) ? $row[2] : '';
				$data['NalpacProduct']['MFG_Number']					= (isset($row[3])) ? $row[3] : '';
				$data['NalpacProduct']['MFG_Name']		=(isset($row[4])) ? $row[4] : '';
				$data['NalpacProduct']['WholeSale_Price']			=(isset($row[5])) ? $row[5] : '';
				$data['NalpacProduct']['Selling_UOM']				=(isset($row[6])) ? $row[6] : '';
				$data['NalpacProduct']['Long_Description']					=(isset($row[7])) ? $row[7] : '';
				$data['NalpacProduct']['extended_desc']					=(isset($row[8])) ? $row[8] : '';
				$data['NalpacProduct']['Quantity_Onhand']			=(isset($row[9])) ? $row[9] : '';
				$data['NalpacProduct']['UPC']				=(isset($row[10])) ? $row[10] : '';
				$data['NalpacProduct']['Category_ID']					=(isset($row[11])) ? $row[11] : '';
				$data['NalpacProduct']['Category_Description']					=(isset($row[12])) ? $row[12] : '';
				
				debug($data);
	
	
			}
	
			$this->create();
			if (!$this->save($data)) {
				debug( __(sprintf('NalpacProduct for Row %d failed to save.',$i), true));
			}
			else{
				debug( __(sprintf('NalpacProduct for Row %d was saved.',$i), true));
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
	
		return $this->query('TRUNCATE nalpac_products');
	
	}
	

}
