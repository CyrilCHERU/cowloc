<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFields
 *
 * @ORM\Table(name="custom_fields", indexes={@ORM\Index(name="index_custom_fields_on_search_filter", columns={"search_filter"}), @ORM\Index(name="index_custom_fields_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class CustomFields
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
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_priority", type="integer", nullable=true)
     */
    private $sortPriority;

    /**
     * @var bool
     *
     * @ORM\Column(name="search_filter", type="boolean", nullable=false, options={"default"="1"})
     */
    private $searchFilter = '1';

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
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="required", type="boolean", nullable=true, options={"default"="1"})
     */
    private $required = '1';

    /**
     * @var float|null
     *
     * @ORM\Column(name="min", type="float", precision=10, scale=0, nullable=true)
     */
    private $min;

    /**
     * @var float|null
     *
     * @ORM\Column(name="max", type="float", precision=10, scale=0, nullable=true)
     */
    private $max;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="allow_decimals", type="boolean", nullable=true)
     */
    private $allowDecimals = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity_type", type="integer", nullable=true)
     */
    private $entityType = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="assignment", type="integer", nullable=true)
     */
    private $assignment = '0';


}
