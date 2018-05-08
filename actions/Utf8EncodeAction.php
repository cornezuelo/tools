<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utf8EncodeAction
 *
 * @author IBERLEY\oaviles
 */
class Utf8EncodeAction extends ActionAbstract {
	public $uid='utf8_encode';
	public $label='UTF8 Encode';		
	
	public static function execute($input) {		
		return utf8_encode($input);
	}
}
