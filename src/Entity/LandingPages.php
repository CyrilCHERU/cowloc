<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LandingPages
 *
 * @ORM\Table(name="landing_pages", uniqueConstraints={@ORM\UniqueConstraint(name="index_landing_pages_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class LandingPages
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
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="released_version", type="integer", nullable=true)
     */
    private $releasedVersion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}
