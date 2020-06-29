<?php

namespace App\Entity;

use App\Repository\FacturaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FacturaRepository::class)
 */
class Factura
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_generada;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_vencimiento;

    /**
     * @ORM\Column(type="integer")
     */
    private $valor;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pagada;

    /**
     * @ORM\ManyToOne(targetEntity=Cliente::class, inversedBy="facturas")
     */
    private $cliente;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaDePago;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $external_reference;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaGenerada(): ?\DateTimeInterface
    {
        return $this->fecha_generada;
    }

    public function setFechaGenerada(\DateTimeInterface $fecha_generada): self
    {
        $this->fecha_generada = $fecha_generada;

        return $this;
    }

    public function getFechaVencimiento(): ?\DateTimeInterface
    {
        return $this->fecha_vencimiento;
    }

    public function setFechaVencimiento(\DateTimeInterface $fecha_vencimiento): self
    {
        $this->fecha_vencimiento = $fecha_vencimiento;

        return $this;
    }

    public function getValor(): ?int
    {
        return $this->valor;
    }

    public function setValor(int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getPagada(): ?bool
    {
        return $this->pagada;
    }

    public function setPagada(bool $pagada): self
    {
        $this->pagada = $pagada;

        return $this;
    }

    public function getCliente(): ?Cliente
    {
        return $this->cliente;
    }

    public function setCliente(?Cliente $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }
    
    public function __toString()
    {
        return (string)$this->id;
    }

    public function getFechaDePago(): ?\DateTimeInterface
    {
        return $this->fechaDePago;
    }

    public function setFechaDePago(?\DateTimeInterface $fechaDePago): self
    {
        $this->fechaDePago = $fechaDePago;

        return $this;
    }

    public function getExternalReference(): ?string
    {
        return $this->external_reference;
    }

    public function setExternalReference(string $external_reference): self
    {
        $this->external_reference = $external_reference;

        return $this;
    }
}
