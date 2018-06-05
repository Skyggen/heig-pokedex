<?php
/* Smarty version 3.1.32, created on 2018-06-05 13:35:37
  from 'C:\MAMP\htdocs\ProgServ\coursphp\progcs\pokedex\includes\templates\pokedex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1691a97879b4_51234532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494815c897071d319cf2e59e2f7bb2fc5af959fc' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ProgServ\\coursphp\\progcs\\pokedex\\includes\\templates\\pokedex.tpl',
      1 => 1528205727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b1691a97879b4_51234532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
<section class="hero is-alt is-fullheight">
    <div class="hero-body">
        <div class="container">
            <article class="card is-rounded">
                <form class="card-content" method="post">
                    <h1 class="title">
                        Pok Game
                    </h1>
                    <div class="field">
                        <p>
                           pour commencer la recherche de pokémon appuyer sur le bouton recherche
                        </p>
                    </div>

                    <div class="field">

                            <input type="submit" class="button is-danger is-primary is-medium is-fullwidth" value="Recherche">

                    </div>
                </form>
            </article>
            <article class="card is-rounded">
                <form class="card-content" method="post">
                    <h2 class="title">
                        Pokémon(s) capturé(s)
                    </h2>

                    <table>
                        <tr>
                            <th>No</th>
                            <th>Nom</th>
                            <th>Type 1</th>
                            <th>Type 2</th>
                            <th>Niveau</th>
                            <th>Sexe</th>
                            <th>Description</th>

                        </tr>
                        <tr>
                            <ul>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pok']->value->getPokCapFromDresseur(), 'noPok');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noPok']->value) {
?>
                                    <span class="tag is-rounded is-info"><?php echo $_smarty_tpl->tpl_vars['noPok']->value;?>
</span>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                                                        <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                        </tr>
                        <tr>
                            <td>Ernst Handel</td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                        </tr>
                        <tr>
                            <td>Island Trading</td>
                            <td>Helen Bennett</td>
                            <td>UK</td>
                        </tr>
                        <tr>
                            <td>Laughing Bacchus Winecellars</td>
                            <td>Yoshi Tannamuri</td>
                            <td>Canada</td>
                        </tr>
                        <tr>
                            <td>Magazzini Alimentari Riuniti</td>
                            <td>Giovanni Rovelli</td>
                            <td>Italy</td>
                        </tr>
                    </table>

                </form>
            </article>
        </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
