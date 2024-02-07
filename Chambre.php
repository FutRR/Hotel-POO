<?php

class Chambre
{
    private string $numero;
    private float $prix;
    private int $nbLits;
    private bool $wifi;
    private bool $etat = false;
    private Hotel $hotel;
    private array $reservations;

    public function __construct(string $numero, float $prix, int $nbLits, bool $wifi, Hotel $hotel)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
        $this->hotel->addChambres($this);
        $this->reservations = [];
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbLits(): int
    {
        return $this->nbLits;
    }

    public function setNbLits(int $nbLits)
    {
        $this->nbLits = $nbLits;

        return $this;
    }

    public function getWifi(): bool
    {
        return $this->wifi;
    }

    public function setWifi(bool $wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function getEtat(): bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    public function getHotel(): Hotel
    {
        return $this->hotel;
    }

    public function setHotel(Hotel $hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function addReservations(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    public function afficherNumero()
    {
        return "Chambre $this->numero";
    }

    public function getInfos()
    {
        if ($this->wifi) {
            $hasWifi = "Oui";
        } else {
            $hasWifi = "Non";
        }
        return "$this->nbLits lits - $this->prix € - Wifi : $hasWifi";
    }

    public function afficherEtat()
    {
        if ($this->etat === true) {
            return "Réservé";
        } else {
            return "Disponible";
        }
    }

}