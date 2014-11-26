<?php

class ScriptureController extends BaseController {


    protected $layout = 'layouts.master';
    
        
    public function showLine($line_id=null)
	{
	    if(!isset($line_id))
	        $line_id=1;
	    
		$this->tuk = Scripture::find($line_id);
		return $this->view('line');		
	}

	
	public function showPage($page_id=null)
	{
	    if(!isset($page_id))
	        $page_id=1;
	     
	    $this->tuks = Scripture::where('page', '=', $page_id)->get();
	    return $this->view('page');
	}	
}
