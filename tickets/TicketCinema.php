<?php

namespace Tickets;

include_once __DIR__ . "/Tickets.php";
include_once __DIR__ . "/ITickets.php";
use tickets\Tickets as Tickets;

class TicketCinema extends Tickets
{
    public $film;
    public $salle;
    public $ageMin;

    public function __construct($date, $ageClient, $place, $film, $salle, $horaire)
    {

        parent::__construct($date, $ageClient, $place, $film, $horaire);

        $this->film = $film;
        $this->salle = $salle;
        $this->setId();
    }

    public function canWatch($ageMin)
    {
        if ($ageMin >= $this->ageMin) {
            return "<span class=\"OK\">Achat Autorisé</span>";
        } else {
            return "<span class=\"NON\">Achat Non Authorisé</span>";
        }
    }

    public function displayTicketCinema()
    {

        echo "<div class=\"votreTicketTheatre\">";

        echo "<h2>Votre Film :</h2>";

        echo "<p> <u>Titre :</u> " . $this->film . "</p>";

        echo "<p> <u>Tarif :</u> " . $this->getTarif() . "</p>";

        echo "<p> <u>Salle :</u> " . $this->salle . "</p>";

        echo "<p> <u>Place :</u> " . $this->place . "</p>";

        echo "<p> <u>Horaire de la Séance :</u> " . $this->horaire . "</p>";

        echo "<p> <u>ID :</u> " . $this->idTicket . "</p>";

        echo "</div>";
    }
}

?>