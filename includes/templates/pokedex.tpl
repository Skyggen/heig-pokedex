{include file="header.tpl"}
<script src='https://www.google.com/recaptcha/api.js'></script>
<section class="hero is-alt is-fullheight">
    <div class="hero-body">
        <div class="container">
            <article class="card is-rounded">
                <div class="card-content">
                    <h1 class="title">
                        Bienvenue {$smarty.session.pseudo} !
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
                            Pokemon: {$rndPok->nom}
                        </p>
                        <p>
                            Pokémon No: {$rndPok->noFichePokemon}
                        </p>
                        <p>
                            Type: {$rndPok->nomType}
                        </p>
                        <img src="./assets/img/{$rndPok->noFichePokemon}.png" alt=""
                             width="200" height="100%">
                        <p>Niveau: {$rndPok->nivPokemon}</p>
                        <p>Sexe: {$rndPok->sexe}</p>
                    </div>


                    <div class="field">

                        <a href="?IdPok={$rndPok->noPokemon}" class="button is-danger is-primary is-medium" value="Capturer">Capturer</a>

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
                            <th>Type 1</th>
                            <th>Type 2</th>
                            <th>Niveau</th>
                            <th>Sexe</th>
                            <th>Description</th>

                        </tr>
                        <tr>
                            <ul>

                                {foreach from=$pok->getPokCapFromDresseur() item=noPok}
                                    <span class="tag is-rounded is-info">{$noPok}</span>
                                {/foreach}
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
{include file="footer.tpl"}