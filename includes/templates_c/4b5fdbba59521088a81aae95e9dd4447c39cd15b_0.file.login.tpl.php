<?php
/* Smarty version 3.1.32, created on 2018-06-01 13:22:00
  from 'C:\MAMP\htdocs\ProgServ\coursphp\progcs\pokedex\includes\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b114878682d78_50648686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b5fdbba59521088a81aae95e9dd4447c39cd15b' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ProgServ\\coursphp\\progcs\\pokedex\\includes\\templates\\login.tpl',
      1 => 1527859317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b114878682d78_50648686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
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
                            <input class="input" type="text" placeholder="Pseudo" name="username">
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
