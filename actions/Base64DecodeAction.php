<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Base64DecodeAction
 *
 * @author IBERLEY\oaviles
 */
class Base64DecodeAction extends ActionAbstract {
	public $uid='base64_decode';
	public $label='base64 Decode';		
	
	public static function execute($input) {		
		return base64_decode($input);
	}
}
