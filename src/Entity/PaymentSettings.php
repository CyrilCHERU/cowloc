<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentSettings
 *
 * @ORM\Table(name="payment_settings", indexes={@ORM\Index(name="index_payment_settings_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class PaymentSettings
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
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_gateway", type="string", length=64, nullable=true)
     */
    private $paymentGateway;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_process", type="string", length=64, nullable=true)
     */
    private $paymentProcess;

    /**
     * @var int|null
     *
     * @ORM\Column(name="commission_from_seller", type="integer", nullable=true)
     */
    private $commissionFromSeller;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minimum_price_cents", type="integer", nullable=true)
     */
    private $minimumPriceCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="minimum_price_currency", type="string", length=3, nullable=true)
     */
    private $minimumPriceCurrency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minimum_transaction_fee_cents", type="integer", nullable=true)
     */
    private $minimumTransactionFeeCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="minimum_transaction_fee_currency", type="string", length=3, nullable=true)
     */
    private $minimumTransactionFeeCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="confirmation_after_days", type="integer", nullable=false)
     */
    private $confirmationAfterDays;

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
     * @var string|null
     *
     * @ORM\Column(name="api_client_id", type="string", length=255, nullable=true)
     */
    private $apiClientId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="api_private_key", type="string", length=255, nullable=true)
     */
    private $apiPrivateKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="api_publishable_key", type="string", length=255, nullable=true)
     */
    private $apiPublishableKey;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="api_verified", type="boolean", nullable=true)
     */
    private $apiVerified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="api_visible_private_key", type="string", length=255, nullable=true)
     */
    private $apiVisiblePrivateKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="api_country", type="string", length=255, nullable=true)
     */
    private $apiCountry;

    /**
     * @var int|null
     *
     * @ORM\Column(name="commission_from_buyer", type="integer", nullable=true)
     */
    private $commissionFromBuyer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minimum_buyer_transaction_fee_cents", type="integer", nullable=true)
     */
    private $minimumBuyerTransactionFeeCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="minimum_buyer_transaction_fee_currency", type="string", length=3, nullable=true)
     */
    private $minimumBuyerTransactionFeeCurrency;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="key_encryption_padding", type="boolean", nullable=true)
     */
    private $keyEncryptionPadding = '0';


}
