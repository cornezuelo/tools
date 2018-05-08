<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StrToTimeAction
 *
 * @author IBERLEY\oaviles
 */
class StrToTimeAction extends ActionAbstract {
	public $uid='strtotime';
	public $label='Str To Time';		
	
	public static function execute($input) {		
		return strtotime($input);
	}
}
