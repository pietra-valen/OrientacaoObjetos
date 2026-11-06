<?php

require_once "Cliente.php";

class ClientePJ extends Cliente
{
    private string $razaoSocial;
    private string $cnpj;

    public function getNome(): string
    {
        return $this->razaoSocial;
    }

    public function getNroDoc(): string
    {
        return $this->cnpj;
    }

    public function getTipo(): string
    {
        return "J";
    }

    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}