<?php

namespace App\Entity;

use App\Repository\PagosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PagosRepository::class)
 */
class Pagos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collection_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collection_status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $external_reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $payment_type;

    /**
     * @ORM\Column(type="integer")
     */
    private $preference_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCollectionId(): ?string
    {
        return $this->collection_id;
    }

    public function setCollectionId(string $collection_id): self
    {
        $this->collection_id = $collection_id;

        return $this;
    }

    public function getCollectionStatus(): ?string
    {
        return $this->collection_status;
    }

    public function setCollectionStatus(string $collection_status): self
    {
        $this->collection_status = $collection_status;

        return $this;
    }

    public function getExternalReference(): ?string
    {
        return $this->external_reference;
    }

    public function setExternalReference(?string $external_reference): self
    {
        $this->external_reference = $external_reference;

        return $this;
    }

    public function getPaymentType(): ?string
    {
        return $this->payment_type;
    }

    public function setPaymentType(string $payment_type): self
    {
        $this->payment_type = $payment_type;

        return $this;
    }

    public function getPreferenceId(): ?int
    {
        return $this->preference_id;
    }

    public function setPreferenceId(int $preference_id): self
    {
        $this->preference_id = $preference_id;

        return $this;
    }
}
