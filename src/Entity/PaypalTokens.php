<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaypalTokens
 *
 * @ORM\Table(name="paypal_tokens", uniqueConstraints={@ORM\UniqueConstraint(name="index_paypal_tokens_on_token", columns={"token"})}, indexes={@ORM\Index(name="index_paypal_tokens_on_community_id", columns={"community_id"}), @ORM\Index(name="index_paypal_tokens_on_transaction_id", columns={"transaction_id"})})
 * @ORM\Entity
 */
class PaypalTokens
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
     * @ORM\Column(name="token", type="string", length=64, nullable=true)
     */
    private $token;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transaction_id", type="integer", nullable=true)
     */
    private $transactionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_action", type="string", length=32, nullable=true)
     */
    private $paymentAction;

    /**
     * @var string
     *
     * @ORM\Column(name="merchant_id", type="string", length=255, nullable=false)
     */
    private $merchantId;

    /**
     * @var string
     *
     * @ORM\Column(name="receiver_id", type="string", length=255, nullable=false)
     */
    private $receiverId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=255, nullable=true)
     */
    private $itemName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity", type="integer", nullable=true)
     */
    private $itemQuantity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_price_cents", type="integer", nullable=true)
     */
    private $itemPriceCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=8, nullable=true)
     */
    private $currency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="express_checkout_url", type="string", length=255, nullable=true)
     */
    private $expressCheckoutUrl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shipping_total_cents", type="integer", nullable=true)
     */
    private $shippingTotalCents;


}
