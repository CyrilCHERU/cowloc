<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderPermissions
 *
 * @ORM\Table(name="order_permissions", indexes={@ORM\Index(name="index_order_permissions_on_paypal_account_id", columns={"paypal_account_id"})})
 * @ORM\Entity
 */
class OrderPermissions
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
     * @ORM\Column(name="request_token", type="string", length=255, nullable=true)
     */
    private $requestToken;

    /**
     * @var string
     *
     * @ORM\Column(name="paypal_username_to", type="string", length=255, nullable=false)
     */
    private $paypalUsernameTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scope", type="string", length=255, nullable=true)
     */
    private $scope;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verification_code", type="string", length=255, nullable=true)
     */
    private $verificationCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="onboarding_id", type="string", length=36, nullable=true)
     */
    private $onboardingId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="permissions_granted", type="boolean", nullable=true)
     */
    private $permissionsGranted;


}
