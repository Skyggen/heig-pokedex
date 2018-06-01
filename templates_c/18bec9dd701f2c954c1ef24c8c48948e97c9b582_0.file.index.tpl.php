<?php
/* Smarty version 3.1.32, created on 2018-05-31 16:16:27
  from 'C:\MAMP\htdocs\ProgServ\coursphp\progcs\pokedex\includes\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b101fdb561e92_76777007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18bec9dd701f2c954c1ef24c8c48948e97c9b582' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ProgServ\\coursphp\\progcs\\pokedex\\includes\\templates\\index.tpl',
      1 => 1518021172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b101fdb561e92_76777007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="section mainSection">
    <div class="container content">
        <h1>
            Application quizz par Verdon Arthur
        </h1>
        <hr>

        <h2>Cahier des charges</h2>
        <h3>Interface Client</h3>
        <ul>
            <li>La page d’accueil permet de choisir entre les différents quizzs existant et de les trier/filtrer par
                catégorie, nom ou date de création
            </li>
            <li>Les nouveaux utilisateurs peuvent créer un compte.</li>
        </ul>

        <h3>Interface Administration</h3>
        <p>L’interface d’administration permet à des utilisateurs de créer des quizzs.</p>

        <h3>Fonctionnalité des quizz</h3>
        <ul>
            <li>Un Quizz peut comporter différents types de question avec du texte, un lien vers une vidéo YouTube ou
                encore
                un extrait audio / video.
            </li>
            <li>Les réponses des questions peuvent sous forme de bouton radio, checkbox ou
                textuel.
            </li>
            <li>Les Quizzs peuvent appartenir à différentes catégories qui seront encore à définir.</li>
            <li>Les Quizzs ont un nom.</li>
        </ul>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
