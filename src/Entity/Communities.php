<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communities
 *
 * @ORM\Table(name="communities", uniqueConstraints={@ORM\UniqueConstraint(name="index_communities_on_uuid", columns={"uuid"})}, indexes={@ORM\Index(name="index_communities_on_domain", columns={"domain"}), @ORM\Index(name="index_communities_on_ident", columns={"ident"})})
 * @ORM\Entity
 */
class Communities
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
     * @var binary
     *
     * @ORM\Column(name="uuid", type="binary", nullable=false)
     */
    private $uuid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ident", type="string", length=255, nullable=true)
     */
    private $ident;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=true)
     */
    private $domain;

    /**
     * @var bool
     *
     * @ORM\Column(name="use_domain", type="boolean", nullable=false)
     */
    private $useDomain = '0';

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
     * @ORM\Column(name="settings", type="text", length=65535, nullable=true)
     */
    private $settings;

    /**
     * @var string|null
     *
     * @ORM\Column(name="consent", type="string", length=255, nullable=true)
     */
    private $consent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="transaction_agreement_in_use", type="boolean", nullable=true)
     */
    private $transactionAgreementInUse = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="email_admins_about_new_members", type="boolean", nullable=true)
     */
    private $emailAdminsAboutNewMembers = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_fb_like", type="boolean", nullable=true)
     */
    private $useFbLike = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="real_name_required", type="boolean", nullable=true, options={"default"="1"})
     */
    private $realNameRequired = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="automatic_newsletters", type="boolean", nullable=true, options={"default"="1"})
     */
    private $automaticNewsletters = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="join_with_invite_only", type="boolean", nullable=true)
     */
    private $joinWithInviteOnly = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="allowed_emails", type="text", length=16777215, nullable=true)
     */
    private $allowedEmails;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="users_can_invite_new_users", type="boolean", nullable=true, options={"default"="1"})
     */
    private $usersCanInviteNewUsers = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="private", type="boolean", nullable=true)
     */
    private $private = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_date_in_listings_list", type="boolean", nullable=true)
     */
    private $showDateInListingsList = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="all_users_can_add_news", type="boolean", nullable=true, options={"default"="1"})
     */
    private $allUsersCanAddNews = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="custom_frontpage_sidebar", type="boolean", nullable=true)
     */
    private $customFrontpageSidebar = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="event_feed_enabled", type="boolean", nullable=true, options={"default"="1"})
     */
    private $eventFeedEnabled = '1';

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
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var int|null
     *
     * @ORM\Column(name="members_count", type="integer", nullable=true)
     */
    private $membersCount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_limit", type="integer", nullable=true)
     */
    private $userLimit;

    /**
     * @var float|null
     *
     * @ORM\Column(name="monthly_price_in_euros", type="float", precision=10, scale=0, nullable=true)
     */
    private $monthlyPriceInEuros;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo_file_name", type="string", length=255, nullable=true)
     */
    private $logoFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo_content_type", type="string", length=255, nullable=true)
     */
    private $logoContentType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="logo_file_size", type="integer", nullable=true)
     */
    private $logoFileSize;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="logo_updated_at", type="datetime", nullable=true)
     */
    private $logoUpdatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cover_photo_file_name", type="string", length=255, nullable=true)
     */
    private $coverPhotoFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cover_photo_content_type", type="string", length=255, nullable=true)
     */
    private $coverPhotoContentType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cover_photo_file_size", type="integer", nullable=true)
     */
    private $coverPhotoFileSize;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cover_photo_updated_at", type="datetime", nullable=true)
     */
    private $coverPhotoUpdatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="small_cover_photo_file_name", type="string", length=255, nullable=true)
     */
    private $smallCoverPhotoFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="small_cover_photo_content_type", type="string", length=255, nullable=true)
     */
    private $smallCoverPhotoContentType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="small_cover_photo_file_size", type="integer", nullable=true)
     */
    private $smallCoverPhotoFileSize;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="small_cover_photo_updated_at", type="datetime", nullable=true)
     */
    private $smallCoverPhotoUpdatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_color1", type="string", length=255, nullable=true)
     */
    private $customColor1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_color2", type="string", length=255, nullable=true)
     */
    private $customColor2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slogan_color", type="string", length=6, nullable=true)
     */
    private $sloganColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_color", type="string", length=6, nullable=true)
     */
    private $descriptionColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stylesheet_url", type="string", length=255, nullable=true)
     */
    private $stylesheetUrl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="stylesheet_needs_recompile", type="boolean", nullable=true)
     */
    private $stylesheetNeedsRecompile = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_logo_style", type="string", length=255, nullable=true, options={"default"="full-logo"})
     */
    private $serviceLogoStyle = 'full-logo';

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=3, nullable=false)
     */
    private $currency;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="facebook_connect_enabled", type="boolean", nullable=true, options={"default"="1"})
     */
    private $facebookConnectEnabled = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="minimum_price_cents", type="integer", nullable=true)
     */
    private $minimumPriceCents;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hide_expiration_date", type="boolean", nullable=true, options={"default"="1"})
     */
    private $hideExpirationDate = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook_connect_id", type="string", length=255, nullable=true)
     */
    private $facebookConnectId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook_connect_secret", type="string", length=255, nullable=true)
     */
    private $facebookConnectSecret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_analytics_key", type="string", length=255, nullable=true)
     */
    private $googleAnalyticsKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_maps_key", type="string", length=64, nullable=true)
     */
    private $googleMapsKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_display_type", type="string", length=255, nullable=true, options={"default"="first_name_with_initial"})
     */
    private $nameDisplayType = 'first_name_with_initial';

    /**
     * @var string|null
     *
     * @ORM\Column(name="twitter_handle", type="string", length=255, nullable=true)
     */
    private $twitterHandle;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_community_location_as_default", type="boolean", nullable=true)
     */
    private $useCommunityLocationAsDefault = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="preproduction_stylesheet_url", type="string", length=255, nullable=true)
     */
    private $preproductionStylesheetUrl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_category_in_listing_list", type="boolean", nullable=true)
     */
    private $showCategoryInListingList = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_browse_view", type="string", length=255, nullable=true, options={"default"="grid"})
     */
    private $defaultBrowseView = 'grid';

    /**
     * @var string|null
     *
     * @ORM\Column(name="wide_logo_file_name", type="string", length=255, nullable=true)
     */
    private $wideLogoFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="wide_logo_content_type", type="string", length=255, nullable=true)
     */
    private $wideLogoContentType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wide_logo_file_size", type="integer", nullable=true)
     */
    private $wideLogoFileSize;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="wide_logo_updated_at", type="datetime", nullable=true)
     */
    private $wideLogoUpdatedAt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="listing_comments_in_use", type="boolean", nullable=true)
     */
    private $listingCommentsInUse = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_listing_publishing_date", type="boolean", nullable=true)
     */
    private $showListingPublishingDate = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="require_verification_to_post_listings", type="boolean", nullable=true)
     */
    private $requireVerificationToPostListings = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_price_filter", type="boolean", nullable=true)
     */
    private $showPriceFilter = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="price_filter_min", type="integer", nullable=true)
     */
    private $priceFilterMin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="price_filter_max", type="integer", nullable=true, options={"default"="100000"})
     */
    private $priceFilterMax = '100000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="automatic_confirmation_after_days", type="integer", nullable=true, options={"default"="14"})
     */
    private $automaticConfirmationAfterDays = '14';

    /**
     * @var string|null
     *
     * @ORM\Column(name="favicon_file_name", type="string", length=255, nullable=true)
     */
    private $faviconFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="favicon_content_type", type="string", length=255, nullable=true)
     */
    private $faviconContentType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="favicon_file_size", type="integer", nullable=true)
     */
    private $faviconFileSize;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="favicon_updated_at", type="datetime", nullable=true)
     */
    private $faviconUpdatedAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_min_days_between_community_updates", type="integer", nullable=true, options={"default"="7"})
     */
    private $defaultMinDaysBetweenCommunityUpdates = '7';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="listing_location_required", type="boolean", nullable=true)
     */
    private $listingLocationRequired = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_head_script", type="text", length=65535, nullable=true)
     */
    private $customHeadScript;

    /**
     * @var bool
     *
     * @ORM\Column(name="follow_in_use", type="boolean", nullable=false, options={"default"="1"})
     */
    private $followInUse = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="logo_processing", type="boolean", nullable=true)
     */
    private $logoProcessing;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="wide_logo_processing", type="boolean", nullable=true)
     */
    private $wideLogoProcessing;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cover_photo_processing", type="boolean", nullable=true)
     */
    private $coverPhotoProcessing;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="small_cover_photo_processing", type="boolean", nullable=true)
     */
    private $smallCoverPhotoProcessing;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="favicon_processing", type="boolean", nullable=true)
     */
    private $faviconProcessing;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="end_user_analytics", type="boolean", nullable=true, options={"default"="1"})
     */
    private $endUserAnalytics = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_slogan", type="boolean", nullable=true, options={"default"="1"})
     */
    private $showSlogan = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_description", type="boolean", nullable=true, options={"default"="1"})
     */
    private $showDescription = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="hsts_max_age", type="integer", nullable=true)
     */
    private $hstsMaxAge;

    /**
     * @var int|null
     *
     * @ORM\Column(name="footer_theme", type="integer", nullable=true)
     */
    private $footerTheme = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="footer_copyright", type="text", length=65535, nullable=true)
     */
    private $footerCopyright;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="footer_enabled", type="boolean", nullable=true)
     */
    private $footerEnabled = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo_link", type="string", length=255, nullable=true)
     */
    private $logoLink;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="google_connect_enabled", type="boolean", nullable=true)
     */
    private $googleConnectEnabled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_connect_id", type="string", length=255, nullable=true)
     */
    private $googleConnectId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_connect_secret", type="string", length=255, nullable=true)
     */
    private $googleConnectSecret;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="linkedin_connect_enabled", type="boolean", nullable=true)
     */
    private $linkedinConnectEnabled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="linkedin_connect_id", type="string", length=255, nullable=true)
     */
    private $linkedinConnectId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="linkedin_connect_secret", type="string", length=255, nullable=true)
     */
    private $linkedinConnectSecret;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pre_approved_listings", type="boolean", nullable=true)
     */
    private $preApprovedListings = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="allow_free_conversations", type="boolean", nullable=true, options={"default"="1"})
     */
    private $allowFreeConversations = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="email_admins_about_new_transactions", type="boolean", nullable=true)
     */
    private $emailAdminsAboutNewTransactions = '0';


}
