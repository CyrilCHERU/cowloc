<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitations
 *
 * @ORM\Table(name="invitations", indexes={@ORM\Index(name="index_invitations_on_inviter_id", columns={"inviter_id"}), @ORM\Index(name="index_invitations_on_code", columns={"code"})})
 * @ORM\Entity
 */
class Invitations
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
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usages_left", type="integer", nullable=true)
     */
    private $usagesLeft;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="valid_until", type="datetime", nullable=true)
     */
    private $validUntil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="information", type="string", length=255, nullable=true)
     */
    private $information;

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
     * @ORM\Column(name="inviter_id", type="string", length=255, nullable=true)
     */
    private $inviterId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;


}
