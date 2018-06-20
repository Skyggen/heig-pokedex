<?php
/* Smarty version 3.1.32, created on 2018-05-30 15:58:10
  from 'C:\MAMP\htdocs\ProgServ\coursphp\progcs\pokedex\includes\templates\pokedex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0eca122ea876_04320306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494815c897071d319cf2e59e2f7bb2fc5af959fc' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ProgServ\\coursphp\\progcs\\pokedex\\includes\\templates\\pokedex.tpl',
      1 => 1527695889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b0eca122ea876_04320306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pokemons']->value, 'pokemon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pokemon']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['pokemon']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['pokemon']->value['type'];?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
