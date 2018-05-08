<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nl2BrAction
 *
 * @author IBERLEY\oaviles
 */
class Nl2BrAction extends ActionAbstract {
	public $uid='nl2br';
	public $label='nl2br';		
	
	public static function execute($input) {		
		return strrev($input);
	}
}
