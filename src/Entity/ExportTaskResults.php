<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExportTaskResults
 *
 * @ORM\Table(name="export_task_results")
 * @ORM\Entity
 */
class ExportTaskResults
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
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_file_name", type="string", length=255, nullable=true)
     */
    private $fileFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_content_type", type="string", length=255, nullable=true)
     */
    private $fileContentType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="file_file_size", type="integer", nullable=true)
     */
    private $fileFileSize;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="file_updated_at", type="datetime", nullable=true)
     */
    private $fileUpdatedAt;

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
