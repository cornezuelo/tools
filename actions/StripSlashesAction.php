<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StripSlashesAction
 *
 * @author IBERLEY\oaviles
 */
class StripSlashesAction extends ActionAbstract {
	public $uid='stripslashes';
	public $label='Strip Slashes';		
	
	public static function execute($input) {		
		return stripslashes($input);
	}
}
