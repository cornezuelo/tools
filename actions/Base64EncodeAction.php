<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Base64EncodeAction
 *
 * @author IBERLEY\oaviles
 */
class Base64EncodeAction extends ActionAbstract {
	public $uid='base64_encode';
	public $label='base64 Encode';		
	
	public static function execute($input) {		
		return base64_encode($input);
	}
}
