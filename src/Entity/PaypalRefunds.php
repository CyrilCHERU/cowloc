<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaypalRefunds
 *
 * @ORM\Table(name="paypal_refunds", uniqueConstraints={@ORM\UniqueConstraint(name="index_paypal_refunds_on_refunding_id", columns={"refunding_id"})})
 * @ORM\Entity
 */
class PaypalRefunds
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
     * @ORM\Column(name="paypal_payment_id", type="integer", nullable=true)
     */
    private $paypalPaymentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=8, nullable=true)
     */
    private $currency;

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
     * @var string|null
     *
     * @ORM\Column(name="refunding_id", type="string", length=64, nullable=true)
     */
    private $refundingId;

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


}
