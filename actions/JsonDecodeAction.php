<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JsonDecodeAction
 *
 * @author IBERLEY\oaviles
 */
class JsonDecodeAction extends ActionAbstract {
	public $uid='json_decode';
	public $label='JSON Decode';		
	
	public static function execute($input) {		
		return print_r(json_decode($input,true),true);
	}
}
