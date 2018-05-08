<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StrRevAction
 *
 * @author IBERLEY\oaviles
 */
class StrRevAction extends ActionAbstract {
	public $uid='strrev';
	public $label='strrev';		
	
	public static function execute($input) {		
		return strrev($input);
	}
}
