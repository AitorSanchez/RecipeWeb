<?php


/*
 * Created on 16/03/2011
 *
 * MODELO GENERICO
 */

class genericModel
{

    /* ******************** ATRIBUTOS ******************** */
    /** @var mysqli $db */
    protected $db;

    /* ******************** METODOS ********************** */
    /**
     * genericModel constructor.
     * @param genericController $instancier
     */
    public function __construct($instancier)
    {
        $this->db = $instancier->getDB();
    }


    protected function selectAll($table, $limit = null, $offset = null)
    {
        $result_array = array();
        $resultado = $this->db->query("SELECT * FROM $table");

        while ($fila = $resultado->fetch_assoc()) {
            $result_array[] = $fila;
        }

        $resultado->free();
        return $result_array;
    }


}