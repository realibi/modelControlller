<?php

namespace Core\Interfaces;

interface ControllerInterface {

    public function render($template_name, $variables = []);

}