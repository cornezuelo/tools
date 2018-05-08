<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crc32Action
 *
 * @author IBERLEY\oaviles
 */
class Crc32Action extends ActionAbstract {
	public $uid='crc32';
	public $label='CRC32';		
	
	public static function execute($input) {		
		return crc32($input);
	}
}
