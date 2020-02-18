<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Testimonials
 *
 * @ORM\Table(name="testimonials", indexes={@ORM\Index(name="index_testimonials_on_receiver_id", columns={"receiver_id"}), @ORM\Index(name="index_testimonials_on_author_id", columns={"author_id"}), @ORM\Index(name="index_testimonials_on_transaction_id", columns={"transaction_id"})})
 * @ORM\Entity
 */
class Testimonials
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
     * @var float|null
     *
     * @ORM\Column(name="grade", type="float", precision=10, scale=0, nullable=true)
     */
    private $grade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author_id", type="string", length=255, nullable=true)
     */
    private $authorId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="participation_id", type="integer", nullable=true)
     */
    private $participationId;

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
     * @var string|null
     *
     * @ORM\Column(name="receiver_id", type="string", length=255, nullable=true)
     */
    private $receiverId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="blocked", type="boolean", nullable=true)
     */
    private $blocked = '0';


}
