<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParseStrAction
 *
 * @author IBERLEY\oaviles
 */
class ParseStrAction extends ActionAbstract {
	public $uid='parse_str';
	public $label='parse_str';		
	
	public static function execute($input) {		
		parse_str($input,$ar);
		return print_r($ar,true);
	}
}
