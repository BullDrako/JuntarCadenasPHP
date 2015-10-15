<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 15/10/2015
 * Time: 20:49
 */

namespace controllers;


class IndexController
{
    public function indexAction()
    {
        require 'application/views/index.phtml';
    }
}