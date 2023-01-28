<?php

class monMail
{
    private $adresse = 'mail';
    private $objet = 'mon objet';
    private $text = "message";

    public function getadresse(): string {
        return $this->adresse;
    }

    public function setadresse(string $adresse): void {
        $this->adresse = $adresse;
    }

    public function getobjet(): string {
        return $this->objet;
    }

    public function setobjet(string $objet): void {
        $this->objet = $objet;
    }

    public function gettext(): string {
        return $this->text;
    }

    public function settext(string $text): void {
        $this->text = $text;
    }
}