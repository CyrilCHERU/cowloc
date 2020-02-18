<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CheckoutAccounts
 *
 * @ORM\Table(name="checkout_accounts")
 * @ORM\Entity
 */
class CheckoutAccounts
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
     * @ORM\Column(name="company_id_or_personal_id", type="string", length=255, nullable=true)
     */
    private $companyIdOrPersonalId;

    /**
     * @var string
     *
     * @ORM\Column(name="merchant_id", type="string", length=255, nullable=false)
     */
    private $merchantId;

    /**
     * @var string
     *
     * @ORM\Column(name="merchant_key", type="string", length=255, nullable=false)
     */
    private $merchantKey;

    /**
     * @var string
     *
     * @ORM\Column(name="person_id", type="string", length=255, nullable=false)
     */
    private $personId;

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
