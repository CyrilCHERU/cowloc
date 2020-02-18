<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emails
 *
 * @ORM\Table(name="emails", uniqueConstraints={@ORM\UniqueConstraint(name="index_emails_on_address_and_community_id", columns={"address", "community_id"})}, indexes={@ORM\Index(name="index_emails_on_address", columns={"address"}), @ORM\Index(name="index_emails_on_confirmation_token", columns={"confirmation_token"}), @ORM\Index(name="index_emails_on_person_id", columns={"person_id"}), @ORM\Index(name="index_emails_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class Emails
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
     * @ORM\Column(name="person_id", type="string", length=255, nullable=true)
     */
    private $personId;

    /**
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="confirmed_at", type="datetime", nullable=true)
     */
    private $confirmedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="confirmation_sent_at", type="datetime", nullable=true)
     */
    private $confirmationSentAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

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
     * @var bool|null
     *
     * @ORM\Column(name="send_notifications", type="boolean", nullable=true)
     */
    private $sendNotifications;


}
