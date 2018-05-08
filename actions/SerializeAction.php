<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SerializeAction
 *
 * @author IBERLEY\oaviles
 */
class SerializeAction extends ActionAbstract {
	public $uid='serialize';
	public $label='Serialize';		
	
	public static function execute($input) {		
		return serialize($input);
	}
}
