<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

App::uses('LowestOfferListingsForSKU', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	public $lowestOfferListingsForSKU;
	
	/**
	 * Return a populated object with the data provided on the parameter
	 *
	 * @param array $data -> Data fetched using $this->find
	 * @param int $buildBelongingObjects Defines if associated models(belongsTo) have to be instanciated as well.
	 *          (
	 *              0 => It is not instanciated any related model
	 *              1 => The direct related models are instanciated
	 *              2 => The related models of related models are instanciate
	 *          )
	 *
	 * @return Model
	 */
	protected function buildObject($data, $buildBelongingObjects = 0, $className = null){
		$tmpObject = clone $this;
		if($className && count($data[$className]) > 0){
			$tmpObject->data[$this->alias]   = $data[$className];
			$tmpObject->id					 = $data[$className][$tmpObject->primaryKey];
		}else{
			$tmpObject->data[$this->alias]   = $data[$this->alias];
			$tmpObject->id					 = $data[$this->alias][$tmpObject->primaryKey];
		}
	
		if($buildBelongingObjects > 0){
			if($buildBelongingObjects > 0){
				$buildBelongingObjects--;
			}
			foreach($this->belongsTo as $key => $value){
					
				if(isset($data[$key])){
					$belongObj = $this->loadModel($value['className']);
					$tmpObject->$key = $belongObj->buildObject($data,$buildBelongingObjects,$key);
				}
					
			}
				
			foreach($this->hasOne as $key => $value){
				if(isset($data[$key])){
					$hasOneObj = $this->loadModel($value['className']);
					$tmpObject->$key = $hasOneObj->buildObject($data,$buildBelongingObjects,$key);
				}
			}
				
		}else{
			$belongsToAlias = array();
			foreach($this->belongsTo as $key => $value){
				$belongsToAlias[] = $key;
			}
	
			$hasOneAlias = array();
			foreach($this->hasOne as $key => $value){
				$hasOneAlias[] = $key;
			}
	
			foreach($tmpObject as $k => $v){
				if(is_object($v) && isset($v->alias) && (in_array($v->alias,$belongsToAlias) || in_array($v->alias,$hasOneAlias))){
					unset($tmpObject->$k);
				}
			}
				
				
		}
	
		return $tmpObject;
	}
	

	
	/**
	 * Return an array with objects populated with the data provided on the parameter
	 *
	 * @param array $data -> Data fetched using $this->find
	 * @param int $buildBelongingObjects Defines if associated models(belongsTo) have to be instanciated as well.
	 *          (
	 *              0 => It is not instanciated any related model
	 *              1 => The direct related models are instanciated
	 *              2 => The related models of related models are instanciate
	 *          )
	 *
	 * @return Model
	 */
	protected function buildObjectList($data, $buildBelongingObjects = 0){
		if(is_array($data)){
			$arrReturn = array();
			foreach($data as $key => $value){
				$arrReturn[] = $this->buildObject($value,$buildBelongingObjects);
			}
		}else{
			return true;
		}
	
		return $arrReturn;
	}
	
	
	function findObjects($type='first', $query=array(),$buildBelongingObjects=0){
		if($buildBelongingObjects == 0){
			$query['recursive'] = -1;
		}
		if(!isset($query['recursive'])){
			$query['recursive'] = 0;
		}
	
		if($buildBelongingObjects >= 1){
			$query['recursive'] = 0;
		}
	
		if($query['recursive'] == -1){
			$buildBelongingObjects = 0;
		}
	
			
		if($type == 'first'){
			return $this->buildObject($this->find($type,$query),$buildBelongingObjects);
		}else{
			return $this->buildObjectList($this->find($type,$query),$buildBelongingObjects);
		}
	}
	
// 	function findAllTitleTagsByUri($request = null){
// 		$obj_seo_uri= $this->findObjects('first', array(
// 				'conditions' => array(
// 						"uri" => $request,
// 						"is_approved" => true
// 				),
// 		));
// 		//si no esta vacia
// 		if(!empty($obj_seo_uri)){
// 			return $obj_seo_uri;
// 		}
// 	}


}
