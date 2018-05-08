<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UrlEncodeAction
 *
 * @author IBERLEY\oaviles
 */
class UrlEncodeAction extends ActionAbstract {
	public $uid='url_encode';
	public $label='URL Encode';		
	
	public static function execute($input) {		
		return urlencode($input);
	}
}
