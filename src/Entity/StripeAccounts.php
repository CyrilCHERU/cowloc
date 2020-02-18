<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StripeAccounts
 *
 * @ORM\Table(name="stripe_accounts", indexes={@ORM\Index(name="index_stripe_accounts_on_person_id", columns={"person_id"}), @ORM\Index(name="index_stripe_accounts_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class StripeAccounts
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
     * @var string|null
     *
     * @ORM\Column(name="person_id", type="string", length=255, nullable=true)
     */
    private $personId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_seller_id", type="string", length=255, nullable=true)
     */
    private $stripeSellerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_bank_id", type="string", length=255, nullable=true)
     */
    private $stripeBankId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_customer_id", type="string", length=255, nullable=true)
     */
    private $stripeCustomerId;

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
