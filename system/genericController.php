<?php


/*
 * Created on 30/03/2011
 *
 *	CLASS Controlador Generico
 */

class genericController {

	protected $db;
	protected $template;
	/* ******************** METODOS ********************** */

	/**
	 * Constructora
	 * @param mysqli $db
	 */
	public function __construct($db) {
		$this->db = $db;
		$this->template= new Template();
	}


    public function getDB(){
        return $this->db;
    }



}
