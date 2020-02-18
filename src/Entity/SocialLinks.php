<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialLinks
 *
 * @ORM\Table(name="social_links", indexes={@ORM\Index(name="index_social_links_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class SocialLinks
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
     * @var int|null
     *
     * @ORM\Column(name="provider", type="integer", nullable=true)
     */
    private $provider;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_priority", type="integer", nullable=true)
     */
    private $sortPriority = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled = '0';

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
