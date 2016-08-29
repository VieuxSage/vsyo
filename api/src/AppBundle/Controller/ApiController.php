<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 29/08/16
 * Time: 11:05
 */

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;

class ApiController extends FOSRestController
{
    public function getTestAction() {
         return array(
            'foo', 'bar'
        );
    }
}