<?php

namespace Tickets;

include_once __DIR__ . "/ITickets.php";
use Tickets\ITickets;

abstract class Tickets implements ITickets
{
    protected $date;
    protected $place;
    protected $ageClient;
    protected $tarif;
    protected $idTicket;
    protected $horaire;

    public function __construct($date, $ageClient, $place, $tarif, $horaire)
    {
        $this->date = $date;
        $this->ageClient = $ageClient;
        $this->place = $place;
        $this->setTarif();
        $this->horaire = $horaire;
    }

    public function setId()
    {
        $this->idTicket = (date('m-y') . "-" . (rand(10, 99)));
    }

    public function setTarif()
    {
        if ($this->ageClient <= 15) {
            return

                ($this->tarif = "Tarif Enfant");
        }

        if ($this->ageClient > 16) {
            return

                ($this->tarif = "Tarif Adulte");
        }
    }

    public function getId()
    {
        return
            $this->idTicket;
    }

    public function getTarif()
    {
        return
            $this->tarif;
    }
}
?>