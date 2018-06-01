<?php
/* Smarty version 3.1.32, created on 2018-05-31 20:03:08
  from 'C:\MAMP\htdocs\ProgServ\coursphp\progcs\pokedex\includes\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1054fc75d0c8_14108617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0bcfd2d5d22cb6dbcd326556a46f1c8502c8c77' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ProgServ\\coursphp\\progcs\\pokedex\\includes\\templates\\registration.tpl',
      1 => 1527749237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b1054fc75d0c8_14108617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
<section class="hero is-alt is-fullheight">
    <div class="hero-body">
        <div class="container">
            <article class="card is-rounded">
                <form class="card-content" method="post" action="../../registration.php">
                    <h1 class="title">
                        Inscription
                    </h1>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="text" placeholder="Username" name="username" required>
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
                            <input class="input" type="password" placeholder="Password" name="password" required>
                        </p>
                    </div>
                    <div class="field">
                        <div class="g-recaptcha" data-sitekey="6Lf3qkQUAAAAAMDoTgaEzCPdQFWoRSgKxFIg_dYh"></div>
                    </div>
                    <div class="field">
                        <p class="control">
                            <input type="submit" class="button is-primary is-medium is-fullwidth" value="S'inscrire !">
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
