<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Md5Action
 *
 * @author IBERLEY\oaviles
 */
class Md5Action extends ActionAbstract {
	public $uid='md5';
	public $label='MD5';		
	
	public static function execute($input) {		
		return md5($input);
	}
}
