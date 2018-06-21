<?php
/* Smarty version 3.1.32, created on 2018-06-07 12:43:27
  from 'C:\MAMP\htdocs\ProgServ\coursphp\progcs\pokedex\includes\templates\loginOk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b19286fee0fc9_99226405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f0cc52f1ed57973c39deb9ad2aae1f8b21e494' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ProgServ\\coursphp\\progcs\\pokedex\\includes\\templates\\loginOk.tpl',
      1 => 1528374838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b19286fee0fc9_99226405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="hero is-alt is-fullheight">
    <div class="hero-body">
        <div class="container">
            <article class="card is-rounded">
                <div class="card-content">
                    <h1 class="title">
                        Bienvenue <?php echo $_smarty_tpl->tpl_vars['pseudo']->value;?>
 !
                    </h1>
                </div>
            </article>
        </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
