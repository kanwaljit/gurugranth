<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	
	protected function view($name = null) {
	    if ( $name === null )
	        $name = Route::getCurrentRoute()->getName();
	
	    $contents = View::make( $name, get_object_vars($this) );
	    $response = Response::make( $contents, 200 );
	    return $response;
	}	

}
