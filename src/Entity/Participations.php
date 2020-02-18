<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participations
 *
 * @ORM\Table(name="participations", indexes={@ORM\Index(name="index_participations_on_person_id", columns={"person_id"}), @ORM\Index(name="index_participations_on_conversation_id", columns={"conversation_id"})})
 * @ORM\Entity
 */
class Participations
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
     * @ORM\Column(name="conversation_id", type="integer", nullable=true)
     */
    private $conversationId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_read", type="boolean", nullable=true)
     */
    private $isRead = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_starter", type="boolean", nullable=true)
     */
    private $isStarter = '0';

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
     * @ORM\Column(name="last_sent_at", type="datetime", nullable=true)
     */
    private $lastSentAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_received_at", type="datetime", nullable=true)
     */
    private $lastReceivedAt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="feedback_skipped", type="boolean", nullable=true)
     */
    private $feedbackSkipped = '0';


}
