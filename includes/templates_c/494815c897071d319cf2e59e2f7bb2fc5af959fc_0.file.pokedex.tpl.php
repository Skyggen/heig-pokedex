<?php
/* Smarty version 3.1.32, created on 2018-06-20 12:37:06
  from 'C:\MAMP\htdocs\ProgServ\coursphp\progcs\pokedex\includes\templates\pokedex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2a4a72a89101_95981801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494815c897071d319cf2e59e2f7bb2fc5af959fc' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ProgServ\\coursphp\\progcs\\pokedex\\includes\\templates\\pokedex.tpl',
      1 => 1529498223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b2a4a72a89101_95981801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
<section class="hero is-alt is-fullheight">
    <div class="hero-body">
        <div class="container">
            <article class="card is-rounded">
                <div class="card-content">
                    <h1 class="title">
                        Bienvenue <?php echo $_SESSION['pseudo'];?>
 !
                    </h1>
                </div>
            </article>
            <article class="card is-rounded">
                <form class="card-content">
                    <h1 class="title">
                        Pok Game
                    </h1>
                    <div class="field">
                        <p>
                            Pokemon: <?php echo $_smarty_tpl->tpl_vars['rndPok']->value->nom;?>

                        </p>
                        <p>
                            Pokémon No: <?php echo $_smarty_tpl->tpl_vars['rndPok']->value->noFichePokemon;?>

                        </p>
                        <p>
                            Type: <?php echo $_smarty_tpl->tpl_vars['rndPok']->value->nomType;?>

                        </p>
                        <img src="./assets/img/<?php echo $_smarty_tpl->tpl_vars['rndPok']->value->noFichePokemon;?>
.png" alt=""
                             width="200" height="100%">
                        <p>Niveau: <?php echo $_smarty_tpl->tpl_vars['rndPok']->value->nivPokemon;?>
</p>
                        <p>Sexe: <?php echo $_smarty_tpl->tpl_vars['rndPok']->value->sexe;?>
</p>
                    </div>


                    <div class="field">

                        <a href="?IdPok=<?php echo $_smarty_tpl->tpl_vars['rndPok']->value->noPokemon;?>
" class="button is-danger is-primary is-medium"
                           value="Capturer">Capturer</a>

                        <input type="submit" class="button is-warning is-primary is-medium" value="Fuire">


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
                            <th>Type</th>
                            <th>Niveau</th>
                            <th>Sexe</th>
                            <th>Description</th>

                        </tr>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabPok']->value, 'pok');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pok']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['pok']->value->noPokemon;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pok']->value->nom;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pok']->value->nomType;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pok']->value->nivPokemon;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pok']->value->sexe;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pok']->value->description;?>
</td>


                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                    </table>

                </form>
            </article>
        </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
