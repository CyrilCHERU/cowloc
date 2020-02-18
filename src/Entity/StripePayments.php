<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StripePayments
 *
 * @ORM\Table(name="stripe_payments")
 * @ORM\Entity
 */
class StripePayments
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
     * @ORM\Column(name="transaction_id", type="integer", nullable=true)
     */
    private $transactionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payer_id", type="string", length=255, nullable=true)
     */
    private $payerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="receiver_id", type="string", length=255, nullable=true)
     */
    private $receiverId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sum_cents", type="integer", nullable=true)
     */
    private $sumCents;

    /**
     * @var int|null
     *
     * @ORM\Column(name="commission_cents", type="integer", nullable=true)
     */
    private $commissionCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true)
     */
    private $currency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_charge_id", type="string", length=255, nullable=true)
     */
    private $stripeChargeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_transfer_id", type="string", length=255, nullable=true)
     */
    private $stripeTransferId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fee_cents", type="integer", nullable=true)
     */
    private $feeCents;

    /**
     * @var int|null
     *
     * @ORM\Column(name="real_fee_cents", type="integer", nullable=true)
     */
    private $realFeeCents;

    /**
     * @var int|null
     *
     * @ORM\Column(name="subtotal_cents", type="integer", nullable=true)
     */
    private $subtotalCents;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="transfered_at", type="datetime", nullable=true)
     */
    private $transferedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_on", type="datetime", nullable=true)
     */
    private $availableOn;

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
     * @ORM\Column(name="buyer_commission_cents", type="integer", nullable=true)
     */
    private $buyerCommissionCents = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_payment_intent_id", type="string", length=255, nullable=true)
     */
    private $stripePaymentIntentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_payment_intent_status", type="string", length=255, nullable=true)
     */
    private $stripePaymentIntentStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_payment_intent_client_secret", type="string", length=255, nullable=true)
     */
    private $stripePaymentIntentClientSecret;


}
