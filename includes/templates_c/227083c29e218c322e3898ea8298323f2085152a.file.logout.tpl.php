<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-06-20 17:21:14
         compiled from "/home/EINET/adrien.ciampone/public_html/progcs/pokedex/includes/templates/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15849323085b2a70ea1b6387-25784035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '227083c29e218c322e3898ea8298323f2085152a' => 
    array (
      0 => '/home/EINET/adrien.ciampone/public_html/progcs/pokedex/includes/templates/logout.tpl',
      1 => 1518021172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15849323085b2a70ea1b6387-25784035',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b2a70ea1bf6c1_06175411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a70ea1bf6c1_06175411')) {function content_5b2a70ea1bf6c1_06175411($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="hero is-alt is-fullheight">
    <div class="hero-body">
        <div class="container">
            <article class="card is-rounded">
                <div class="card-content">
                    <h1 class="title">
                       Deconnection OK
                    </h1>
                </div>
            </article>
        </div>
    </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
