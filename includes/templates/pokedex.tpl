                 {include file="header.tpl"}
<script src='https://www.google.com/recaptcha/api.js'></script>
<section class="hero is-alt is-fullheight">
    <div class="hero-body">

        <div class="columns">
            <div class="column is-one-quarter">
                <div class="card is-fixed">
                    <article class="card-image">
                        <div class="card-content">
                            <h1 class="title">
                                Pok Game
                            </h1>
                        </div>
                        <figure class="image is-4by3">
                            <img src="./assets/img/{$rndPok->noFichePokemon}.png" alt=""
                                 width="200" height="100%">
                        </figure>
                    </article>
                    <div class="card-content">

                        <p>
                            Pokemon: {$rndPok->nom}
                        </p>
                        <p>
                            Pokémon No: {$rndPok->noFichePokemon}
                        </p>
                        <p>
                            Type: {$rndPok->nomType}
                        </p>
                        <p>Niveau: {$rndPok->nivPokemon}</p>
                        <p>Sexe: {$rndPok->sexe}</p>


                    </div>
                    <form class="card-footer buttons has-addons is-centered">

                        <a href="?IdPok={$rndPok->noPokemon}" class="button is-danger is-primary is-medium"
                           value="Capturer">Capturer</a>

                        <input type="submit" class="button is-warning is-primary is-medium" value="Fuire" size="100%">


                    </form>
                </div>
            </div>
            <div class="container columns">
                <article class="card is-rounded">
                    <form class="card-content" method="post">
                        <h2 class="title">
                            Pokémon(s) capturé(s) par {$smarty.session.pseudo}
                        </h2>

                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nom</th>
                                <th>Type(s)</th>
                                <th>Niveau</th>
                                <th>Sexe</th>
                                <th>Description</th>

                            </tr>


                            {foreach from=$tabPok item=pok}
                                <tr>
                                    <td>{$pok->noPokemon}</td>
                                    <td>{$pok->nom}</td>
                                    <td>{$pok->nomType}</td>
                                    <td>{$pok->nivPokemon}</td>
                                    <td>{$pok->sexe}</td>
                                    <td>{$pok->description}</td>


                                </tr>
                            {/foreach}


                        </table>

                    </form>
                </article>
            </div>
        </div>
    </div>
</section>
{include file="footer.tpl"}