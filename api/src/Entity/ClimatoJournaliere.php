<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ClimatoJournaliere
 *
 * @ApiResource()
 *
 * @ORM\Table(name="climato_journaliere", indexes={@ORM\Index(name="tx", columns={"tx"}), @ORM\Index(name="mois", columns={"mois"}), @ORM\Index(name="rr", columns={"rr"}), @ORM\Index(name="annee", columns={"annee"}), @ORM\Index(name="id_station", columns={"id_station"}), @ORM\Index(name="ymd", columns={"annee", "mois", "jour"}), @ORM\Index(name="tn", columns={"tn"}), @ORM\Index(name="jour", columns={"jour"})})
 * @ORM\Entity(repositoryClass="App\Repository\ClimatoJournaliereRepository")
 */
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: ['get'],
)]
class ClimatoJournaliere
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_station", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idStation;

    /**
     * @var bool
     *
     * @ORM\Column(name="jour", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $jour;

    /**
     * @var bool
     *
     * @ORM\Column(name="mois", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mois;

    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $annee;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tn", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $tn = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tx", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $tx = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="rr", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $rr = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ens", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $ens = NULL;

    public function getIdStation(): ?string
    {
        return $this->idStation;
    }

    public function getJour(): ?bool
    {
        return $this->jour;
    }

    public function getMois(): ?bool
    {
        return $this->mois;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function getTn(): ?float
    {
        return $this->tn;
    }

    public function setTn(?float $tn): self
    {
        $this->tn = $tn;

        return $this;
    }

    public function getTx(): ?float
    {
        return $this->tx;
    }

    public function setTx(?float $tx): self
    {
        $this->tx = $tx;

        return $this;
    }

    public function getRr(): ?float
    {
        return $this->rr;
    }

    public function setRr(?float $rr): self
    {
        $this->rr = $rr;

        return $this;
    }

    public function getEns(): ?float
    {
        return $this->ens;
    }

    public function setEns(?float $ens): self
    {
        $this->ens = $ens;

        return $this;
    }

}
