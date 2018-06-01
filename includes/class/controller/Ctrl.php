<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 29.05.2018
 * Time: 14:01
 */
//require('C:/MAMP/bin/php/php7.1.7/lib/Smarty/Smarty.class.php');
class Ctrl

{
    private $tpl;

    public function __construct() {

        $this->tpl = new Smarty();
        $this->tpl->template_dir = TEMPLATESPATH;
        $this->tpl->compile_dir = TEMPLATECOMPILEDPATH;
    }

    public function getTPL()
    {
        return $this->tpl;
    }
}