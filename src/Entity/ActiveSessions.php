<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActiveSessions
 *
 * @ORM\Table(name="active_sessions", indexes={@ORM\Index(name="index_active_sessions_on_community_id", columns={"community_id"}), @ORM\Index(name="index_active_sessions_on_person_id", columns={"person_id"}), @ORM\Index(name="index_active_sessions_on_refreshed_at", columns={"refreshed_at"})})
 * @ORM\Entity
 */
class ActiveSessions
{
    /**
     * @var binary
     *
     * @ORM\Column(name="id", type="binary", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="person_id", type="string", length=22, nullable=false)
     */
    private $personId;

    /**
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="refreshed_at", type="datetime", nullable=false)
     */
    private $refreshedAt;

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
