<?php


namespace Notorious\Shugar\Core;


class Controller
{
    public function renderPage($content, $template, $date =[])
    {
        extract($date);
        ob_start();
        include_once __DIR__ . '/../Views/' . $template;
        $page = ob_get_contents();
        ob_end_clean();
        return $page;
    } 
}