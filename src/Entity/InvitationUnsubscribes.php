<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvitationUnsubscribes
 *
 * @ORM\Table(name="invitation_unsubscribes", indexes={@ORM\Index(name="index_invitation_unsubscribes_on_email", columns={"email"}), @ORM\Index(name="index_invitation_unsubscribes_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class InvitationUnsubscribes
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
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

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
