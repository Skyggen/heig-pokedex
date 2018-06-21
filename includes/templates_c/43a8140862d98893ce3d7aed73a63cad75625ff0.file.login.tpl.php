<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-06-20 17:11:10
         compiled from "/home/EINET/adrien.ciampone/public_html/progcs/pokedex/includes/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4254832085b2a6e8e808b92-06830300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a8140862d98893ce3d7aed73a63cad75625ff0' => 
    array (
      0 => '/home/EINET/adrien.ciampone/public_html/progcs/pokedex/includes/templates/login.tpl',
      1 => 1528369116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4254832085b2a6e8e808b92-06830300',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b2a6e8e84cfb0_72654368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a6e8e84cfb0_72654368')) {function content_5b2a6e8e84cfb0_72654368($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
<section class="hero is-alt is-fullheight">
    <div class="hero-body">
        <div class="container">
            <article class="card is-rounded">
                <form class="card-content" method="post" action="login.php">
                    <h1 class="title">
                        Pok Game login
                    </h1>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="text" placeholder="Username" name="pseudo">
                            <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                            <input class="input" type="password" placeholder="Password" name="password">
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <input type="submit" class="button is-danger is-primary is-medium is-fullwidth" value="Login">
                        </p>
                    </div>
                </form>
            </article>
        </div>
    </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
