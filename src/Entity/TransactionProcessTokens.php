<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionProcessTokens
 *
 * @ORM\Table(name="transaction_process_tokens", uniqueConstraints={@ORM\UniqueConstraint(name="index_transaction_process_tokens_on_process_token", columns={"process_token"}), @ORM\UniqueConstraint(name="index_paypal_process_tokens_on_transaction", columns={"transaction_id", "community_id", "op_name"})})
 * @ORM\Entity
 */
class TransactionProcessTokens
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
     * @var binary|null
     *
     * @ORM\Column(name="process_token", type="binary", nullable=true)
     */
    private $processToken;

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
     * @var bool
     *
     * @ORM\Column(name="op_completed", type="boolean", nullable=false)
     */
    private $opCompleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="op_name", type="string", length=64, nullable=false)
     */
    private $opName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="op_input", type="text", length=65535, nullable=true)
     */
    private $opInput;

    /**
     * @var string|null
     *
     * @ORM\Column(name="op_output", type="text", length=65535, nullable=true)
     */
    private $opOutput;

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
