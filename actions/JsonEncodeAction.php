<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JsonEncodeAction
 *
 * @author IBERLEY\oaviles
 */
class JsonEncodeAction extends ActionAbstract {
	public $uid='json_encode';
	public $label='JSON Encode';		
	
	public static function execute($input) {		
		return json_encode($input);
	}
}
