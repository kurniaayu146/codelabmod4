<?php

namespace Controller;

abstract class Controller
{
    protected $controllerName; // Corrected property name
    protected $controllerMethod; // Corrected property name

    public function getControllerAttribute()
    {
        return [
            "controller-name" => $this->controllerName, // Corrected property name
            "controller-method" => $this->controllerMethod, // Corrected property name
        ];
    }
}
