<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversations
 *
 * @ORM\Table(name="conversations", indexes={@ORM\Index(name="index_conversations_on_last_message_at", columns={"last_message_at"}), @ORM\Index(name="index_conversations_on_starting_page", columns={"starting_page"}), @ORM\Index(name="index_conversations_on_community_id", columns={"community_id"}), @ORM\Index(name="index_conversations_on_listing_id", columns={"listing_id"})})
 * @ORM\Entity
 */
class Conversations
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listing_id", type="integer", nullable=true)
     */
    private $listingId;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_message_at", type="datetime", nullable=true)
     */
    private $lastMessageAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="community_id", type="integer", nullable=true)
     */
    private $communityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="starting_page", type="string", length=255, nullable=true)
     */
    private $startingPage;


}
