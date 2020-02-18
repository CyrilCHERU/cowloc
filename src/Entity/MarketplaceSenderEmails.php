<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarketplaceSenderEmails
 *
 * @ORM\Table(name="marketplace_sender_emails", indexes={@ORM\Index(name="index_marketplace_sender_emails_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class MarketplaceSenderEmails
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
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="verification_status", type="string", length=32, nullable=false)
     */
    private $verificationStatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="verification_requested_at", type="datetime", nullable=true)
     */
    private $verificationRequestedAt;

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
