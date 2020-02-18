<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listings
 *
 * @ORM\Table(name="listings", uniqueConstraints={@ORM\UniqueConstraint(name="index_listings_on_uuid", columns={"uuid"})}, indexes={@ORM\Index(name="index_listings_on_new_category_id", columns={"category_id"}), @ORM\Index(name="index_listings_on_state", columns={"state"}), @ORM\Index(name="index_listings_on_listing_shape_id", columns={"listing_shape_id"}), @ORM\Index(name="index_listings_on_open", columns={"open"}), @ORM\Index(name="community_author_deleted", columns={"community_id", "author_id", "deleted"}), @ORM\Index(name="person_listings", columns={"community_id", "author_id"}), @ORM\Index(name="listings_homepage_query", columns={"community_id", "open", "state", "deleted", "valid_until", "sort_date"}), @ORM\Index(name="index_listings_on_community_id", columns={"community_id"}), @ORM\Index(name="index_listings_on_category_id", columns={"old_category_id"}), @ORM\Index(name="index_on_author_id_and_deleted", columns={"author_id", "deleted"}), @ORM\Index(name="listings_updates_email", columns={"community_id", "open", "state", "deleted", "valid_until", "updates_email_at", "created_at"})})
 * @ORM\Entity
 */
class Listings
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
     * @var binary
     *
     * @ORM\Column(name="uuid", type="binary", nullable=false)
     */
    private $uuid;

    /**
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author_id", type="string", length=255, nullable=true)
     */
    private $authorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_old", type="string", length=255, nullable=true)
     */
    private $categoryOld;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var int|null
     *
     * @ORM\Column(name="times_viewed", type="integer", nullable=true)
     */
    private $timesViewed = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updates_email_at", type="datetime", nullable=true)
     */
    private $updatesEmailAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_modified", type="datetime", nullable=true)
     */
    private $lastModified;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sort_date", type="datetime", nullable=true)
     */
    private $sortDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listing_type_old", type="string", length=255, nullable=true)
     */
    private $listingTypeOld;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origin", type="string", length=255, nullable=true)
     */
    private $origin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="destination", type="string", length=255, nullable=true)
     */
    private $destination;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="valid_until", type="datetime", nullable=true)
     */
    private $validUntil;

    /**
     * @var bool
     *
     * @ORM\Column(name="delta", type="boolean", nullable=false, options={"default"="1"})
     */
    private $delta = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="open", type="boolean", nullable=true, options={"default"="1"})
     */
    private $open = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="share_type_old", type="string", length=255, nullable=true)
     */
    private $shareTypeOld;

    /**
     * @var string|null
     *
     * @ORM\Column(name="privacy", type="string", length=255, nullable=true, options={"default"="private"})
     */
    private $privacy = 'private';

    /**
     * @var int|null
     *
     * @ORM\Column(name="comments_count", type="integer", nullable=true)
     */
    private $commentsCount = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subcategory_old", type="string", length=255, nullable=true)
     */
    private $subcategoryOld;

    /**
     * @var int|null
     *
     * @ORM\Column(name="old_category_id", type="integer", nullable=true)
     */
    private $oldCategoryId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true)
     */
    private $categoryId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="share_type_id", type="integer", nullable=true)
     */
    private $shareTypeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listing_shape_id", type="integer", nullable=true)
     */
    private $listingShapeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transaction_process_id", type="integer", nullable=true)
     */
    private $transactionProcessId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shape_name_tr_key", type="string", length=255, nullable=true)
     */
    private $shapeNameTrKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="action_button_tr_key", type="string", length=255, nullable=true)
     */
    private $actionButtonTrKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price_cents", type="integer", nullable=true)
     */
    private $priceCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true)
     */
    private $currency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quantity", type="string", length=255, nullable=true)
     */
    private $quantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_type", type="string", length=32, nullable=true)
     */
    private $unitType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quantity_selector", type="string", length=32, nullable=true)
     */
    private $quantitySelector;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_tr_key", type="string", length=64, nullable=true)
     */
    private $unitTrKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_selector_tr_key", type="string", length=64, nullable=true)
     */
    private $unitSelectorTrKey;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="require_shipping_address", type="boolean", nullable=true)
     */
    private $requireShippingAddress = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pickup_enabled", type="boolean", nullable=true)
     */
    private $pickupEnabled = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="shipping_price_cents", type="integer", nullable=true)
     */
    private $shippingPriceCents;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shipping_price_additional_cents", type="integer", nullable=true)
     */
    private $shippingPriceAdditionalCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="availability", type="string", length=32, nullable=true, options={"default"="none"})
     */
    private $availability = 'none';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="per_hour_ready", type="boolean", nullable=true)
     */
    private $perHourReady = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true, options={"default"="approved"})
     */
    private $state = 'approved';


}
