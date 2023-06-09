<!DOCTYPE html>

<html>

<head>
    <title> NOS PIÈCES DE THÉÂTRE </title>
    <link rel='stylesheet' href='../style.css'>
    <meta charset="utf-8" />
</head>

<body>

    <?php

    include_once __DIR__ . "/../tickets/TicketTheatre.php";
    use tickets\TicketTheatre as TicketTheatre;

    ?>

    <header>
        <div class="titre">
            <h1 class="titre">NOS PIÈCES DE THÉÂTRE</h1>

        </div>
    </header>

    <div class="buttonsAccueil">

        <a href="./index.php" id="indexId" class="aClassTheatre">RETOURNER À L'ACCUEIL</a>

        <a href="./indexCinema.php" id="cinemaId" class="aClassTheatre">ALLER À L'ESPACE CINÉMA</a>

    </div>

    <div class="selector">

        <div class="container">

            <form action="indexTheatre.php" method="POST">

                <input type="date" id="dateTheatreId" class="form-item" name="date" placeholder="Date" value="date"
                    min="2023-06-12" max="2023-06-30" />

                <input type="number" id="ageClientId" class="form-item" name="ageClient" placeholder="Votre Âge"
                    value="ageClient" />

                <select id="placeTheatreId" class="form-item" name="place">
                    <option value="Front Rows">Front Rows</option>
                    <option value="Middle Rows">Middle Rows</option>
                    <option value="Back Rows">Back Rows</option>
                </select>

                <!-- <select id="tarifTheatreId" class="form-item" name="tarifTheatre" value="">
                    <option value="tarifEnfant">Tarif Enfant</option>
                    <option value="tarifAdulte">Tarif Adulte</option>
                </select> -->

                <select id="pieceId" class="form-item" name="piece">
                    <option value="Frankenstein">Frankenstein</option>
                    <option value="Hamlet">Hamlet</option>
                    <option value="Les Mouches">Les Mouches</option>
                    <option value="Rhinoceros">Rhinoceros</option>
                </select>

                <select id="horaireId" class="form-item" name="horaire">
                    <option value="18:00">18:00</option>
                    <option value="21:00">21:00</option>
                </select>

                <input id="submitInputId" class="form-item" name="submitInput" type="submit"
                    value="SÉLECTIONNER"></input>

            </form>

        </div>
    </div>

    <div class="filmsInfo">

        <div class="deuxDivs">

            <div class="infoCards">

                <h2 class="title">Frankenstein</h2>

                <img class="posterSum" src="../public/frankenstein.jpeg" />

                <p class="infoFilm"><i>Nick Dear</i></p>

                <p class="summary">Victor Frankenstein creates a monster from human corpses. Once the Creature is
                    brought to life, however, Victor is appalled by his creation's deformed appearance and flees in
                    terror.</p>

            </div>

            <div class="infoCards">

                <h2 class="title">Hamlet</h2>

                <img class="posterSum" src="../public/hamlet.jpg" />

                <p class="infoFilm"><i>William Shakespeare</i></p>

                <p class="summary">The Tragedy of Hamlet, Prince of Denmark, often shortened to <i>Hamlet</i>, is a
                    tragedy written by William Shakespeare sometime between 1599 and 1601. It is Shakespeare's longest
                    play, with 29,551 words. Set in Denmark, the play depicts Prince Hamlet and his attempts to exact
                    revenge against his uncle, Claudius, who has murdered Hamlet's father in order to seize his throne
                    and marry Hamlet's mother.

                    Hamlet is considered among the "most powerful and influential tragedies in the English language",
                    with a story capable of "seemingly endless retelling and adaptation by others".</p>

            </div>

        </div>

        <div class="deuxDivs">

            <div class="infoCards">

                <h2 class="title">Les Mouches</h2>

                <img class="posterSum" src="../public/mouches.jpg" />

                <p class="infoFilm"><i>Jean-Paul Sartre</i></p>

                <p class="summary">Les Mouches is a play by Jean-Paul Sartre, produced in 1943. It
                    is an adaptation of the Electra myth. The play recounts the story of Orestes and his sister Electra
                    in their quest to
                    avenge the death of their father Agamemnon, king of Argos, by killing their mother Clytemnestra and
                    her husband Aegisthus, who had deposed and killed him.</p>

            </div>

            <div class="infoCards">

                <h2 class="title">Rhinoceros</h2>

                <img class="posterSum" src="../public/rhinoceros.png" />

                <p class="infoFilm"><i>Eugène Ionesco</i></p>

                <p class="summary">Rhinoceros is a play by Eugène Ionesco, written in 1959. Over the course of three
                    acts, the inhabitants of a small, provincial French town turn into rhinoceroses; ultimately
                    the only human who does not succumb to this mass metamorphosis is the central character, Bérenger, a
                    flustered everyman figure who is initially criticized in the play for his drinking, tardiness, and
                    slovenly lifestyle and then, later, for his increasing paranoia and obsession with the rhinoceroses.
                </p>

            </div>

        </div>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $generer = new TicketTheatre($_POST["date"], $_POST["ageClient"], $_POST["place"], $_POST["piece"], $_POST["horaire"]);

            "<div class=\"displayTicketCinema\">";
            $generer->displayTicketTheatre();
            "</div>";
        }
        ;
        ?>

        <footer>
            <p>© A GLOBE COMPANY</p>
        </footer>

</body>

</html>