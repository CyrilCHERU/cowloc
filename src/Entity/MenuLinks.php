<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuLinks
 *
 * @ORM\Table(name="menu_links", indexes={@ORM\Index(name="index_menu_links_on_community_and_sort", columns={"community_id", "sort_priority"})})
 * @ORM\Entity
 */
class MenuLinks
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
     * @var int|null
     *
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;

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
     * @var int|null
     *
     * @ORM\Column(name="sort_priority", type="integer", nullable=true)
     */
    private $sortPriority = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity_type", type="integer", nullable=true)
     */
    private $entityType = '0';


}
