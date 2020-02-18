<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FollowerRelationships
 *
 * @ORM\Table(name="follower_relationships", uniqueConstraints={@ORM\UniqueConstraint(name="index_follower_relationships_on_person_id_and_follower_id", columns={"person_id", "follower_id"})}, indexes={@ORM\Index(name="index_follower_relationships_on_person_id", columns={"person_id"}), @ORM\Index(name="index_follower_relationships_on_follower_id", columns={"follower_id"})})
 * @ORM\Entity
 */
class FollowerRelationships
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
     * @ORM\Column(name="person_id", type="string", length=255, nullable=false)
     */
    private $personId;

    /**
     * @var string
     *
     * @ORM\Column(name="follower_id", type="string", length=255, nullable=false)
     */
    private $followerId;

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
