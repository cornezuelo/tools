<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnserializeAction
 *
 * @author IBERLEY\oaviles
 */
class UnserializeAction extends ActionAbstract {
	public $uid='unserialize';
	public $label='Unserialize';		
	
	public static function execute($input) {		
		return unserialize($input);
	}
}
