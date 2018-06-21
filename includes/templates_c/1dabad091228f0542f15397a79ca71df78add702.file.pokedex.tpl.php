<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-06-20 17:16:56
         compiled from "/home/EINET/adrien.ciampone/public_html/progcs/pokedex/includes/templates/pokedex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3900041645b2a6fe8121640-35707825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dabad091228f0542f15397a79ca71df78add702' => 
    array (
      0 => '/home/EINET/adrien.ciampone/public_html/progcs/pokedex/includes/templates/pokedex.tpl',
      1 => 1529507018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3900041645b2a6fe8121640-35707825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rndPok' => 0,
    'tabPok' => 0,
    'pok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b2a6fe8152202_55752955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a6fe8152202_55752955')) {function content_5b2a6fe8152202_55752955($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
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

                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Niveau</th>
                            <th>Sexe</th>
                            <th>Description</th>

                        </tr>


                        <?php  $_smarty_tpl->tpl_vars['pok'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pok']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabPok']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pok']->key => $_smarty_tpl->tpl_vars['pok']->value) {
$_smarty_tpl->tpl_vars['pok']->_loop = true;
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
                        <?php } ?>


                    </table>

                </form>
            </article>
        </div>
    </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
