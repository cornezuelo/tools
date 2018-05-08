<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StripTagsAction
 *
 * @author IBERLEY\oaviles
 */
class StripTagsAction extends ActionAbstract {
	public $uid='strip_tags';
	public $label='Strip Tags';		
	
	public static function execute($input) {		
		return strip_tags($input);
	}
}
