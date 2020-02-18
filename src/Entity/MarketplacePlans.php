<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarketplacePlans
 *
 * @ORM\Table(name="marketplace_plans", indexes={@ORM\Index(name="index_marketplace_plans_on_created_at", columns={"created_at"}), @ORM\Index(name="index_marketplace_plans_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class MarketplacePlans
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
     * @ORM\Column(name="status", type="string", length=22, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="features", type="text", length=65535, nullable=true)
     */
    private $features;

    /**
     * @var int|null
     *
     * @ORM\Column(name="member_limit", type="integer", nullable=true)
     */
    private $memberLimit;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

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
