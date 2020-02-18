<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transactions
 *
 * @ORM\Table(name="transactions", indexes={@ORM\Index(name="index_transactions_on_starter_id", columns={"starter_id"}), @ORM\Index(name="community_starter_state", columns={"community_id", "starter_id", "current_state"}), @ORM\Index(name="index_transactions_on_conversation_id", columns={"conversation_id"}), @ORM\Index(name="index_transactions_on_last_transition_at", columns={"last_transition_at"}), @ORM\Index(name="index_transactions_on_deleted", columns={"deleted"}), @ORM\Index(name="index_transactions_on_listing_author_id", columns={"listing_author_id"}), @ORM\Index(name="index_transactions_on_listing_id", columns={"listing_id"}), @ORM\Index(name="index_transactions_on_community_id", columns={"community_id"}), @ORM\Index(name="transactions_on_cid_and_deleted", columns={"community_id", "deleted"})})
 * @ORM\Entity
 */
class Transactions
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
     * @ORM\Column(name="starter_id", type="string", length=255, nullable=false)
     */
    private $starterId;

    /**
     * @var binary
     *
     * @ORM\Column(name="starter_uuid", type="binary", nullable=false)
     */
    private $starterUuid;

    /**
     * @var int
     *
     * @ORM\Column(name="listing_id", type="integer", nullable=false)
     */
    private $listingId;

    /**
     * @var binary
     *
     * @ORM\Column(name="listing_uuid", type="binary", nullable=false)
     */
    private $listingUuid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="conversation_id", type="integer", nullable=true)
     */
    private $conversationId;

    /**
     * @var int
     *
     * @ORM\Column(name="automatic_confirmation_after_days", type="integer", nullable=false)
     */
    private $automaticConfirmationAfterDays;

    /**
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var binary
     *
     * @ORM\Column(name="community_uuid", type="binary", nullable=false)
     */
    private $communityUuid;

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
     * @ORM\Column(name="starter_skipped_feedback", type="boolean", nullable=true)
     */
    private $starterSkippedFeedback = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="author_skipped_feedback", type="boolean", nullable=true)
     */
    private $authorSkippedFeedback = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_transition_at", type="datetime", nullable=true)
     */
    private $lastTransitionAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="current_state", type="string", length=255, nullable=true)
     */
    private $currentState;

    /**
     * @var int|null
     *
     * @ORM\Column(name="commission_from_seller", type="integer", nullable=true)
     */
    private $commissionFromSeller;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minimum_commission_cents", type="integer", nullable=true)
     */
    private $minimumCommissionCents = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="minimum_commission_currency", type="string", length=255, nullable=true)
     */
    private $minimumCommissionCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_gateway", type="string", length=255, nullable=false, options={"default"="none"})
     */
    private $paymentGateway = 'none';

    /**
     * @var int|null
     *
     * @ORM\Column(name="listing_quantity", type="integer", nullable=true, options={"default"="1"})
     */
    private $listingQuantity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="listing_author_id", type="string", length=255, nullable=false)
     */
    private $listingAuthorId;

    /**
     * @var binary
     *
     * @ORM\Column(name="listing_author_uuid", type="binary", nullable=false)
     */
    private $listingAuthorUuid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listing_title", type="string", length=255, nullable=true)
     */
    private $listingTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_type", type="string", length=32, nullable=true)
     */
    private $unitType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unit_price_cents", type="integer", nullable=true)
     */
    private $unitPriceCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_currency", type="string", length=8, nullable=true)
     */
    private $unitPriceCurrency;

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
     * @var string|null
     *
     * @ORM\Column(name="payment_process", type="string", length=31, nullable=true, options={"default"="none"})
     */
    private $paymentProcess = 'none';

    /**
     * @var string|null
     *
     * @ORM\Column(name="delivery_method", type="string", length=31, nullable=true, options={"default"="none"})
     */
    private $deliveryMethod = 'none';

    /**
     * @var int|null
     *
     * @ORM\Column(name="shipping_price_cents", type="integer", nullable=true)
     */
    private $shippingPriceCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="availability", type="string", length=32, nullable=true, options={"default"="none"})
     */
    private $availability = 'none';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="booking_uuid", type="binary", nullable=true)
     */
    private $bookingUuid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="commission_from_buyer", type="integer", nullable=true)
     */
    private $commissionFromBuyer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minimum_buyer_fee_cents", type="integer", nullable=true)
     */
    private $minimumBuyerFeeCents = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="minimum_buyer_fee_currency", type="string", length=3, nullable=true)
     */
    private $minimumBuyerFeeCurrency;


}
