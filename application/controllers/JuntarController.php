<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 15/10/2015
 * Time: 20:50
 */

namespace controllers;

use models\JuntarModel;
class JuntarController
{
    /**
     * @var JuntarModel
     */
    private $model;
    function __construct(JuntarModel $model)
    {
        $this->model = $model;
    }

    public function juntarAction()
    {
        $action = 'doJuntar';
        require 'application/views/form.phtml';
    }

    public function doJuntarAction()
    {
        $this->model->setCadena1($_POST['cadena1']);
        $this->model->setCadena2($_POST['cadena2']);
        $this->model->juntar();
        $result = $this->model->getResult();
        require 'application/views/result.phtml';
    }
}