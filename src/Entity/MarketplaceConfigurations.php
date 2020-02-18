<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarketplaceConfigurations
 *
 * @ORM\Table(name="marketplace_configurations", indexes={@ORM\Index(name="index_marketplace_configurations_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class MarketplaceConfigurations
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
     * @var string
     *
     * @ORM\Column(name="main_search", type="string", length=255, nullable=false, options={"default"="keyword"})
     */
    private $mainSearch = 'keyword';

    /**
     * @var string
     *
     * @ORM\Column(name="distance_unit", type="string", length=255, nullable=false, options={"default"="metric"})
     */
    private $distanceUnit = 'metric';

    /**
     * @var int|null
     *
     * @ORM\Column(name="limit_priority_links", type="integer", nullable=true)
     */
    private $limitPriorityLinks;

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

    /**
     * @var bool
     *
     * @ORM\Column(name="limit_search_distance", type="boolean", nullable=false, options={"default"="1"})
     */
    private $limitSearchDistance = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="display_about_menu", type="boolean", nullable=false, options={"default"="1"})
     */
    private $displayAboutMenu = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="display_contact_menu", type="boolean", nullable=false, options={"default"="1"})
     */
    private $displayContactMenu = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="display_invite_menu", type="boolean", nullable=false, options={"default"="1"})
     */
    private $displayInviteMenu = '1';


}
