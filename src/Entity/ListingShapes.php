<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListingShapes
 *
 * @ORM\Table(name="listing_shapes", indexes={@ORM\Index(name="index_listing_shapes_on_community_id", columns={"community_id"}), @ORM\Index(name="multicol_index", columns={"community_id", "deleted", "sort_priority"}), @ORM\Index(name="index_listing_shapes_on_name", columns={"name"})})
 * @ORM\Entity
 */
class ListingShapes
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
     * @ORM\Column(name="transaction_process_id", type="integer", nullable=false)
     */
    private $transactionProcessId;

    /**
     * @var bool
     *
     * @ORM\Column(name="price_enabled", type="boolean", nullable=false)
     */
    private $priceEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_enabled", type="boolean", nullable=false)
     */
    private $shippingEnabled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="availability", type="string", length=32, nullable=true, options={"default"="none"})
     */
    private $availability = 'none';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name_tr_key", type="string", length=255, nullable=false)
     */
    private $nameTrKey;

    /**
     * @var string
     *
     * @ORM\Column(name="action_button_tr_key", type="string", length=255, nullable=false)
     */
    private $actionButtonTrKey;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_priority", type="integer", nullable=false)
     */
    private $sortPriority = '0';

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
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
