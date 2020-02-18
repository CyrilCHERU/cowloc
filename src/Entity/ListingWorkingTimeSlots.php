<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListingWorkingTimeSlots
 *
 * @ORM\Table(name="listing_working_time_slots", indexes={@ORM\Index(name="index_listing_working_time_slots_on_listing_id", columns={"listing_id"})})
 * @ORM\Entity
 */
class ListingWorkingTimeSlots
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listing_id", type="integer", nullable=true)
     */
    private $listingId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="week_day", type="integer", nullable=true)
     */
    private $weekDay;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from", type="string", length=255, nullable=true)
     */
    private $from;

    /**
     * @var string|null
     *
     * @ORM\Column(name="till", type="string", length=255, nullable=true)
     */
    private $till;

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
