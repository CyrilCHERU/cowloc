<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionTransitions
 *
 * @ORM\Table(name="transaction_transitions", uniqueConstraints={@ORM\UniqueConstraint(name="index_transaction_transitions_on_sort_key_and_conversation_id", columns={"sort_key", "transaction_id"})}, indexes={@ORM\Index(name="index_transaction_transitions_on_conversation_id", columns={"transaction_id"})})
 * @ORM\Entity
 */
class TransactionTransitions
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
     * @ORM\Column(name="to_state", type="string", length=255, nullable=true)
     */
    private $toState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="metadata", type="text", length=65535, nullable=true)
     */
    private $metadata;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_key", type="integer", nullable=true)
     */
    private $sortKey = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="transaction_id", type="integer", nullable=true)
     */
    private $transactionId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="most_recent", type="boolean", nullable=true)
     */
    private $mostRecent;


}
