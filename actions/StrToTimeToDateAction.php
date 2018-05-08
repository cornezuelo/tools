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
class StrToTimeToDateAction extends ActionAbstract {
	public $uid='strtotime_to_date';
	public $label='Strtotime To Date';		
	
	public static function execute($input) {		
		return date("Y-m-d H:i:s",$input);
	}
}
