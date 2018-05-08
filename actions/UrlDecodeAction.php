<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UrlDecodeAction
 *
 * @author IBERLEY\oaviles
 */
class UrlDecodeAction extends ActionAbstract {
	public $uid='url_decode';
	public $label='URL Decode';		
	
	public static function execute($input) {		
		return urldecode($input);
	}
}
