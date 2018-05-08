<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StrLenAction
 *
 * @author IBERLEY\oaviles
 */
class StrLenAction extends ActionAbstract {
	public $uid='strlen';
	public $label='strlen';		
	
	public static function execute($input) {		
		return strlen($input);
	}
}
