<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table(name="locations", indexes={@ORM\Index(name="index_locations_on_listing_id", columns={"listing_id"}), @ORM\Index(name="index_locations_on_person_id", columns={"person_id"}), @ORM\Index(name="index_locations_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class Locations
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
     * @var float|null
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float|null
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_address", type="string", length=255, nullable=true)
     */
    private $googleAddress;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listing_id", type="integer", nullable=true)
     */
    private $listingId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="person_id", type="string", length=255, nullable=true)
     */
    private $personId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_type", type="string", length=255, nullable=true)
     */
    private $locationType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;


}
