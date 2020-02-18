<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionProcesses
 *
 * @ORM\Table(name="transaction_processes", indexes={@ORM\Index(name="index_transaction_process_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class TransactionProcesses
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
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;

    /**
     * @var string
     *
     * @ORM\Column(name="process", type="string", length=32, nullable=false)
     */
    private $process;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="author_is_seller", type="boolean", nullable=true)
     */
    private $authorIsSeller;

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
