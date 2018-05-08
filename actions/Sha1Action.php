<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sha1Action
 *
 * @author IBERLEY\oaviles
 */
class Sha1Action extends ActionAbstract {
	public $uid='sha1';
	public $label='SHA1';		
	
	public static function execute($input) {		
		return sha1($input);
	}
}
