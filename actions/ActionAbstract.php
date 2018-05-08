<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActionAbstract
 *
 * @author IBERLEY\oaviles
 */
abstract class ActionAbstract {	
	public $uid;
	public $label;		
	
	abstract public static function execute($input);			
	
	function getUid() {
		return $this->uid;
	}

	function getLabel() {
		return $this->label;
	}		
}
