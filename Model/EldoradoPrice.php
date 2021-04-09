<?php
App::uses('AppModel', 'Model');
/**
 * EldoradoPrice Model
 *
 */
class EldoradoPrice extends AppModel {


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

				$data['EldoradoPrice']['SKU']				=(isset($row[0])) ? $row[0] : '';
				$data['EldoradoPrice']['UPC']				=(isset($row[1])) ? $row[1] : '';
				$data['EldoradoPrice']['PRICE']				=(isset($row[2])) ? $row[2] : '';
				$data['EldoradoPrice']['MAP']				=(isset($row[3])) ? $row[3] : '';
				$data['EldoradoPrice']['Manufacturer']		=(isset($row[4])) ? $row[4] : '';
				$data['EldoradoPrice']['Restriction']		=(isset($row[5])) ? $row[5] : '';

				// 				debug($data);


			}

			$this->create();
			if (!$this->save($data)) {
				debug( __(sprintf('EldoradoPrice for Row %d failed to save.',$i), true));
			}
			else{
				debug( __(sprintf('EldoradoPrice for Row %d was saved.',$i), true));
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

		return $this->query('TRUNCATE eldorado_prices');

	}

}
