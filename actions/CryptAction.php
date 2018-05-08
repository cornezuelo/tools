<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CryptAction
 *
 * @author IBERLEY\oaviles
 */
class CryptAction extends ActionAbstract {
	public $uid='crypt';
	public $label='Crypt';		
	
	public static function execute($input) {		
		return crypt($input);
	}
}
