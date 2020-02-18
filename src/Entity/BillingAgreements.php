<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BillingAgreements
 *
 * @ORM\Table(name="billing_agreements", indexes={@ORM\Index(name="index_billing_agreements_on_paypal_account_id", columns={"paypal_account_id"})})
 * @ORM\Entity
 */
class BillingAgreements
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
     * @ORM\Column(name="paypal_account_id", type="integer", nullable=false)
     */
    private $paypalAccountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billing_agreement_id", type="string", length=255, nullable=true)
     */
    private $billingAgreementId;

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
     * @var string
     *
     * @ORM\Column(name="paypal_username_to", type="string", length=255, nullable=false)
     */
    private $paypalUsernameTo;

    /**
     * @var string
     *
     * @ORM\Column(name="request_token", type="string", length=255, nullable=false)
     */
    private $requestToken;


}
