<?php

namespace Core\Abstracts;

use Core\Config;
use Core\Interfaces\ControllerInterface;
use Core\RenderEngine;

abstract class Controller implements ControllerInterface {

    public function render($template_name, $variables = [])
    {
        $e = RenderEngine::get();

        if ($variables)
            foreach ($variables as $key => $value)
                $e->assign($key, $value);

        return $e->display($template_name . ".tpl");
    }
}