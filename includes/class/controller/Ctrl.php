<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 29.05.2018
 * Time: 14:01
 */

class Ctrl

{
    private $tpl;

    public function __construct()
    {

        $this->tpl = new Smarty();
        $this->tpl->template_dir = TEMPLATESPATH;
        $this->tpl->compile_dir = TEMPLATECOMPILEDPATH;
    }

    public function getTPL()
    {
        return $this->tpl;
    }
}