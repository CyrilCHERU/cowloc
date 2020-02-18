<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LandingPageVersions
 *
 * @ORM\Table(name="landing_page_versions", uniqueConstraints={@ORM\UniqueConstraint(name="index_landing_page_versions_on_community_id_and_version", columns={"community_id", "version"})})
 * @ORM\Entity
 */
class LandingPageVersions
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
     * @var int
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="released", type="datetime", nullable=true)
     */
    private $released;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=false)
     */
    private $content;

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


}
