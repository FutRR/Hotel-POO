<?php

class Chambre
{
    private string $numero;
    private int $prix;
    private int $nbLits;
    private bool $wifi;
    private bool $etat;
    private array $reservations;


    public function __construct(string $numero, int $prix, int $nbLits, bool $wifi, bool $etat)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->etat = $etat;
        $this->resrvations = [];
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

    public function getPrix(): int
    {
        return $this->prix;
    }

    public function setPrix(int $prix)
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

}