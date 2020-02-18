<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaypalIpnMessages
 *
 * @ORM\Table(name="paypal_ipn_messages")
 * @ORM\Entity
 */
class PaypalIpnMessages
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
     * @ORM\Column(name="body", type="text", length=65535, nullable=true)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=64, nullable=true)
     */
    private $status;

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
