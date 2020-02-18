<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunityCustomizations
 *
 * @ORM\Table(name="community_customizations", indexes={@ORM\Index(name="index_community_customizations_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class CommunityCustomizations
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
     * @var string|null
     *
     * @ORM\Column(name="locale", type="string", length=255, nullable=true)
     */
    private $locale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slogan", type="string", length=255, nullable=true)
     */
    private $slogan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

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
     * @ORM\Column(name="blank_slate", type="text", length=65535, nullable=true)
     */
    private $blankSlate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="welcome_email_content", type="text", length=65535, nullable=true)
     */
    private $welcomeEmailContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="how_to_use_page_content", type="text", length=16777215, nullable=true)
     */
    private $howToUsePageContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="about_page_content", type="text", length=16777215, nullable=true)
     */
    private $aboutPageContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="terms_page_content", type="text", length=16777215, nullable=true)
     */
    private $termsPageContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="privacy_page_content", type="text", length=16777215, nullable=true)
     */
    private $privacyPageContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signup_info_content", type="text", length=65535, nullable=true)
     */
    private $signupInfoContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="private_community_homepage_content", type="text", length=16777215, nullable=true)
     */
    private $privateCommunityHomepageContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verification_to_post_listings_info_content", type="text", length=16777215, nullable=true)
     */
    private $verificationToPostListingsInfoContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_placeholder", type="string", length=255, nullable=true)
     */
    private $searchPlaceholder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_agreement_label", type="string", length=255, nullable=true)
     */
    private $transactionAgreementLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_agreement_content", type="text", length=16777215, nullable=true)
     */
    private $transactionAgreementContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_media_title", type="string", length=255, nullable=true)
     */
    private $socialMediaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_media_description", type="text", length=65535, nullable=true)
     */
    private $socialMediaDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_meta_title", type="string", length=255, nullable=true)
     */
    private $searchMetaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_meta_description", type="text", length=65535, nullable=true)
     */
    private $searchMetaDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listing_meta_title", type="string", length=255, nullable=true)
     */
    private $listingMetaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listing_meta_description", type="text", length=65535, nullable=true)
     */
    private $listingMetaDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_meta_title", type="string", length=255, nullable=true)
     */
    private $categoryMetaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_meta_description", type="text", length=65535, nullable=true)
     */
    private $categoryMetaDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_meta_title", type="string", length=255, nullable=true)
     */
    private $profileMetaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_meta_description", type="text", length=65535, nullable=true)
     */
    private $profileMetaDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
     */
    private $metaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="text", length=65535, nullable=true)
     */
    private $metaDescription;


}
