<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 15/10/2015
 * Time: 20:51
 */

namespace models;


class JuntarModel
{
    private $cadena1;
    private $cadena2;
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function juntar()
    {
        $this->result = $this->cadena1.$this->cadena2;
    }

    /**
     * @return mixed
     */
    public function getCadena1()
    {
        return $this->cadena1;
    }

    /**
     * @param mixed $cadena1
     */
    public function setCadena1($cadena1)
    {
        $this->cadena1 = $cadena1;
    }

    /**
     * @return mixed
     */
    public function getCadena2()
    {
        return $this->cadena2;
    }

    /**
     * @param mixed $cadena2
     */
    public function setCadena2($cadena2)
    {
        $this->cadena2 = $cadena2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

}