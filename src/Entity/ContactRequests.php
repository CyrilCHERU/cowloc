<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactRequests
 *
 * @ORM\Table(name="contact_requests")
 * @ORM\Entity
 */
class ContactRequests
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
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

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
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plan_type", type="string", length=255, nullable=true)
     */
    private $planType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marketplace_type", type="string", length=255, nullable=true)
     */
    private $marketplaceType;


}
