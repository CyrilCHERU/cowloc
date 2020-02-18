<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookings
 *
 * @ORM\Table(name="bookings", indexes={@ORM\Index(name="index_bookings_on_per_hour", columns={"per_hour"}), @ORM\Index(name="index_bookings_on_end_time", columns={"end_time"}), @ORM\Index(name="index_bookings_on_transaction_id", columns={"transaction_id"}), @ORM\Index(name="index_bookings_on_start_time", columns={"start_time"})})
 * @ORM\Entity
 */
class Bookings
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
     * @var int|null
     *
     * @ORM\Column(name="transaction_id", type="integer", nullable=true)
     */
    private $transactionId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_on", type="date", nullable=true)
     */
    private $startOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_on", type="date", nullable=true)
     */
    private $endOn;

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

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="per_hour", type="boolean", nullable=true)
     */
    private $perHour = '0';


}
