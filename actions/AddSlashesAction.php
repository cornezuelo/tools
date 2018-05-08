<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddSlashesAction
 *
 * @author IBERLEY\oaviles
 */
class AddSlashesAction extends ActionAbstract {
	public $uid='addslashes';
	public $label='Add Slashes';		
	
	public static function execute($input) {		
		return addslashes($input);
	}
}
