<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaypalPayments
 *
 * @ORM\Table(name="paypal_payments", uniqueConstraints={@ORM\UniqueConstraint(name="index_paypal_payments_on_authorization_id", columns={"authorization_id"}), @ORM\UniqueConstraint(name="index_paypal_payments_on_order_id", columns={"order_id"}), @ORM\UniqueConstraint(name="index_paypal_payments_on_transaction_id", columns={"transaction_id"})}, indexes={@ORM\Index(name="index_paypal_payments_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class PaypalPayments
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
     * @ORM\Column(name="transaction_id", type="integer", nullable=false)
     */
    private $transactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="payer_id", type="string", length=64, nullable=false)
     */
    private $payerId;

    /**
     * @var string
     *
     * @ORM\Column(name="receiver_id", type="string", length=64, nullable=false)
     */
    private $receiverId;

    /**
     * @var string
     *
     * @ORM\Column(name="merchant_id", type="string", length=255, nullable=false)
     */
    private $merchantId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_id", type="string", length=64, nullable=true)
     */
    private $orderId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=true)
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=8, nullable=false)
     */
    private $currency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_total_cents", type="integer", nullable=true)
     */
    private $orderTotalCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="authorization_id", type="string", length=64, nullable=true)
     */
    private $authorizationId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="authorization_date", type="datetime", nullable=true)
     */
    private $authorizationDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="authorization_expires_date", type="datetime", nullable=true)
     */
    private $authorizationExpiresDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="authorization_total_cents", type="integer", nullable=true)
     */
    private $authorizationTotalCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_id", type="string", length=64, nullable=true)
     */
    private $paymentId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=true)
     */
    private $paymentDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="payment_total_cents", type="integer", nullable=true)
     */
    private $paymentTotalCents;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fee_total_cents", type="integer", nullable=true)
     */
    private $feeTotalCents;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_status", type="string", length=64, nullable=false)
     */
    private $paymentStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pending_reason", type="string", length=64, nullable=true)
     */
    private $pendingReason;

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
     * @ORM\Column(name="commission_payment_id", type="string", length=64, nullable=true)
     */
    private $commissionPaymentId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="commission_payment_date", type="datetime", nullable=true)
     */
    private $commissionPaymentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="commission_status", type="string", length=64, nullable=false, options={"default"="not_charged"})
     */
    private $commissionStatus = 'not_charged';

    /**
     * @var string|null
     *
     * @ORM\Column(name="commission_pending_reason", type="string", length=64, nullable=true)
     */
    private $commissionPendingReason;

    /**
     * @var int|null
     *
     * @ORM\Column(name="commission_total_cents", type="integer", nullable=true)
     */
    private $commissionTotalCents;

    /**
     * @var int|null
     *
     * @ORM\Column(name="commission_fee_total_cents", type="integer", nullable=true)
     */
    private $commissionFeeTotalCents;


}
