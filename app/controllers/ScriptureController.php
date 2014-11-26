<?php

class ScriptureController extends BaseController {


    protected $layout = 'layouts.master';
    
        
    public function showLine($line_id=null)
	{
	    if(!isset($line_id))
	        $line_id=1;
	    
		$this->tuk = Scripture::find($line_id);
		return $this->view('scripture');		
	}
	
}
