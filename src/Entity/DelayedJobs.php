<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DelayedJobs
 *
 * @ORM\Table(name="delayed_jobs", indexes={@ORM\Index(name="index_delayed_jobs_on_locked_created", columns={"locked_at", "created_at"}), @ORM\Index(name="delayed_jobs_priority", columns={"priority", "run_at"}), @ORM\Index(name="index_delayed_jobs_on_attempts_and_run_at_and_priority", columns={"attempts", "run_at", "priority"})})
 * @ORM\Entity
 */
class DelayedJobs
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
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="attempts", type="integer", nullable=true)
     */
    private $attempts = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="handler", type="text", length=65535, nullable=true)
     */
    private $handler;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_error", type="text", length=65535, nullable=true)
     */
    private $lastError;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="run_at", type="datetime", nullable=true)
     */
    private $runAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="locked_at", type="datetime", nullable=true)
     */
    private $lockedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="failed_at", type="datetime", nullable=true)
     */
    private $failedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locked_by", type="string", length=255, nullable=true)
     */
    private $lockedBy;

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
     * @ORM\Column(name="queue", type="string", length=255, nullable=true)
     */
    private $queue;


}
