<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListingUnits
 *
 * @ORM\Table(name="listing_units", indexes={@ORM\Index(name="index_listing_units_on_listing_shape_id", columns={"listing_shape_id"})})
 * @ORM\Entity
 */
class ListingUnits
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_type", type="string", length=32, nullable=false)
     */
    private $unitType;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_selector", type="string", length=32, nullable=false)
     */
    private $quantitySelector;

    /**
     * @var string
     *
     * @ORM\Column(name="kind", type="string", length=32, nullable=false)
     */
    private $kind;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_tr_key", type="string", length=64, nullable=true)
     */
    private $nameTrKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="selector_tr_key", type="string", length=64, nullable=true)
     */
    private $selectorTrKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listing_shape_id", type="integer", nullable=true)
     */
    private $listingShapeId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;


}
