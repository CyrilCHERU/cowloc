<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaypalAccounts
 *
 * @ORM\Table(name="paypal_accounts", indexes={@ORM\Index(name="index_paypal_accounts_on_payer_id", columns={"payer_id"}), @ORM\Index(name="index_paypal_accounts_on_community_id", columns={"community_id"}), @ORM\Index(name="index_paypal_accounts_on_person_id", columns={"person_id"})})
 * @ORM\Entity
 */
class PaypalAccounts
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payer_id", type="string", length=255, nullable=true)
     */
    private $payerId;

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
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active = '0';


}
