<?php

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\CoreExtension;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* upgrade.html */
class __TwigTemplate_dada0e5bfec8608eb9f123444f9396788d2220a0663c5d2c4a893ecbc6a06709 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'after_javascript' => [$this, 'block_after_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "upgrade.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<style>
  body { background: white; }
  #wpbody-content { padding-top: 64px; }
</style>
<div class=\"mailpoet-top-bar\">
  <a role=\"button\" class=\"mailpoet-top-bar-logo\" title=\"";
        // line 9
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Back to section root", "mailpoet");
        yield "\" tabindex=\"0\" href=\"admin.php?page=mailpoet-homepage\">
    <div class=\"mailpoet-top-bar-logo-desktop\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 80 24\"><path fill=\"#FF5301\" d=\"M.781 17.716c.418-.332 1.014-.313 1.41.045.522.438 1.18.682 1.86.69h31.622c1.48 0 2.898.589 3.945 1.635l.165.165.165-.165c1.045-1.049 2.465-1.637 3.945-1.635h30.975c.681-.008 1.339-.252 1.86-.69.398-.351.99-.37 1.41-.045l.36.285c.248.206.404.503.434.825.01.323-.122.636-.36.855-1.016.908-2.328 1.415-3.69 1.425H43.875c-1.323-.001-2.484.883-2.835 2.16v.03c-.015.105-.165.66-1.275.66-1.11 0-1.26-.555-1.275-.66v-.03c-.35-1.277-1.511-2.161-2.835-2.16H4.051c-1.362-.01-2.674-.517-3.69-1.425-.243-.216-.376-.53-.36-.855.014-.324.168-.625.422-.825zm52.335-14.07c.708-.006 1.41.121 2.07.375.597.23 1.139.582 1.59 1.035.46.463.813 1.02 1.035 1.635.247.677.37 1.394.36 2.115.01.735-.111 1.467-.36 2.16-.221.622-.574 1.19-1.035 1.665-.46.457-1.005.819-1.605 1.065-.66.252-1.362.379-2.07.375-.721.005-1.438-.122-2.113-.375-.604-.239-1.15-.602-1.605-1.065-.438-.476-.788-1.024-1.037-1.62-.234-.691-.35-1.416-.345-2.145-.005-.732.122-1.459.375-2.145.227-.62.585-1.183 1.05-1.65.462-.458 1.014-.816 1.62-1.05.66-.26 1.362-.387 2.07-.375zM71.373.96c.345 0 .615.09.765.27.128.154.205.342.222.54l.003.12v2.04h1.41c.257-.026.504.104.63.33.11.218.167.46.165.705 0 .857-.383 1.082-.74 1.107l-.07.003h-1.395v4.86c0 .255.045.435.135.525.108.102.256.152.405.135.118.006.236-.015.345-.06l.155-.065.16-.055.285-.135c.121-.06.255-.091.39-.09.327-.022.637.148.795.435.15.26.227.555.225.855.007.2-.029.4-.105.585-.084.189-.226.347-.405.45-.24.147-.5.262-.77.339l-.205.05-.273.059c-.364.068-.736.1-1.107.092-.842 0-1.547-.225-2.057-.69-.467-.427-.72-1.067-.76-1.91l-.005-.235V2.28c-.005-.224.058-.443.18-.63.12-.165.274-.303.45-.405.18-.095.373-.166.572-.21.197-.047.398-.072.6-.075zm-7.305 2.655c1.38 0 2.505.435 3.315 1.29s1.23 2.1 1.23 3.69c0 .39-.12.675-.375.84-.253.137-.533.214-.818.226l-.172-.001h-5.265c.165 1.38.93 2.055 2.355 2.055.329.01.657-.052.96-.18.27-.135.525-.24.705-.345.18-.105.345-.195.51-.3.197-.111.42-.168.645-.165.285 0 .54.15.78.42.22.254.342.578.345.915.003.239-.076.472-.225.66-.19.223-.419.411-.675.555-.45.274-.941.471-1.455.585-.54.13-1.094.196-1.65.195-.721.006-1.44-.095-2.13-.3-.608-.19-1.167-.513-1.635-.945-.452-.458-.814-.998-1.065-1.59-.255-.728-.377-1.495-.36-2.265-.004-.666.092-1.328.285-1.965.184-.624.49-1.206.9-1.71.424-.511.957-.921 1.56-1.2.698-.327 1.464-.486 2.235-.465zm-40.11.015c1.455 0 2.52.285 3.165.87.599.543.926 1.358.97 2.444l.005.256v5.55c0 .39-.105.69-.315.87-.21.18-.54.27-1.005.27-.339.015-.674-.074-.96-.255-.223-.158-.343-.407-.37-.739l-.005-.146v-.015c-.075.09-.165.18-.255.27-.19.191-.407.353-.645.48-.275.15-.567.265-.87.345-.378.094-.766.14-1.155.135-1.005 0-1.817-.27-2.402-.78-.585-.54-.885-1.26-.885-2.145-.012-.455.08-.907.27-1.32.171-.354.417-.666.72-.915.315-.262.676-.46 1.065-.585.412-.137.833-.242 1.26-.315.48-.09.975-.165 1.44-.21.31-.03.627-.06.955-.086l.5-.034v-.24c-.001-.178-.027-.354-.075-.525-.044-.164-.12-.317-.225-.45-.118-.145-.274-.254-.45-.315-.235-.085-.484-.126-.735-.12-.175-.006-.35.004-.525.03-.158.024-.314.064-.465.12-.159.065-.314.14-.465.225-.195.105-.385.22-.568.345-.165.105-.315.21-.465.285-.184.081-.384.122-.585.12-.318 0-.621-.13-.84-.36-.246-.222-.383-.54-.375-.87.009-.275.11-.539.285-.75.222-.29.503-.53.825-.705.419-.235.868-.412 1.335-.525.604-.147 1.223-.218 1.845-.21zM5.968.509l.2.002c.57 0 1.005.105 1.32.33.272.198.484.465.616.773l.059.157 3.075 8.805L14.19 1.83c.117-.425.39-.79.765-1.02.437-.218.923-.32 1.41-.3.54 0 .975.105 1.29.315.292.195.472.514.495.86V12.75c.004.297-.103.586-.3.81-.195.225-.555.345-1.08.345-.48 0-.825-.12-1.035-.33-.189-.216-.299-.489-.315-.773V5.281l-2.715 7.5c-.09.316-.3.585-.585.75-.273.14-.577.213-.885.21-.48 0-.84-.105-1.08-.3-.21-.181-.378-.405-.493-.656l-.062-.154-2.548-6.765v6.855c.004.297-.103.586-.3.81-.195.225-.555.345-1.08.345-.495 0-.84-.105-1.065-.315-.167-.18-.268-.427-.294-.758l-.006-.172V1.906c0-.495.18-.855.525-1.08.29-.164.61-.266.938-.303L5.969.51zM43.084.57c1.665 0 2.895.375 3.66 1.11.765.735 1.155 1.785 1.155 3.135 0 .481-.065.96-.195 1.425-.145.502-.396.967-.735 1.365-.4.45-.898.804-1.455 1.035-.547.24-1.224.373-2.031.4l-.31.005h-2.1v3.645c.008.297-.087.589-.27.825-.194.24-.554.36-1.094.36-1.123 0-1.41-.593-1.438-1.14l-.002-.09V1.56c-.016-.284.107-.558.33-.735.194-.146.425-.233.665-.252l.145-.003h3.675zm-7.89-.136c.327-.002.65.086.93.256.26.167.422.45.436.754l-.001.116v11.145c0 .42-.135.72-.39.9-.299.193-.65.287-1.005.27-1.123 0-1.41-.552-1.425-1.057V1.636c0-.555.255-1.2 1.455-1.2zm-3.255 3.646c.223.194.36.467.386.759l.004.126v7.725c0 .42-.135.72-.39.9-.299.193-.65.287-1.005.27-1.123 0-1.41-.552-1.438-1.044l-.002-.081v-7.8c.018-.295.139-.578.345-.795.24-.225.615-.345 1.11-.345.353-.023.703.078.99.285zm-6.525 5.28c-.42.045-.825.09-1.215.15-.42.06-.735.12-.945.165-.57.12-.93.285-1.095.495-.16.17-.247.396-.24.63-.018.247.075.489.255.66.18.165.495.24.945.24.735 0 1.305-.18 1.71-.51.34-.277.548-.68.58-1.112l.005-.163V9.36zm27.705-3.345c-.69 0-1.23.24-1.62.735-.405.495-.6 1.185-.6 2.085 0 .9.21 1.605.6 2.085.397.48.997.746 1.62.72.72 0 1.245-.24 1.65-.72.405-.48.6-1.2.6-2.085s-.195-1.59-.585-2.085c-.39-.495-.945-.735-1.665-.735zm10.935-.165c-.48-.01-.947.15-1.32.45-.302.272-.507.633-.588 1.028l-.027.172h3.72c-.013-.174-.049-.346-.105-.51-.078-.207-.19-.4-.33-.57-.142-.183-.328-.328-.54-.42-.258-.102-.533-.153-.81-.15zM42.858 2.956h-1.785V6.69h1.785c.35.005.7-.046 1.035-.15.241-.073.462-.201.645-.375.156-.162.274-.357.345-.57.073-.238.109-.486.105-.735.004-.245-.032-.488-.105-.72-.07-.223-.188-.428-.345-.6-.18-.189-.4-.333-.645-.42-.332-.118-.683-.174-1.035-.165zM30.933 0c.385 0 .759.126 1.065.36.345.255.51.63.51 1.14.016.41-.142.807-.435 1.095-.314.276-.722.42-1.14.405-.418.018-.827-.127-1.14-.405-.296-.292-.454-.696-.435-1.11-.006-.35.113-.688.334-.956l.1-.11.122-.099c.293-.216.652-.33 1.019-.32z\"></path></svg>
    </div>
    <div class=\"mailpoet-top-bar-logo-mobile\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 39 40\"><path fill=\"#FF5301\" d=\"M34.987 29.367c.673-.59 1.67-.623 2.38-.076l.608.481c.441.345.717.86.76 1.418.016.546-.206 1.073-.608 1.443-1.714 1.534-3.929 2.389-6.228 2.405H26.43c-2.234-.001-4.193 1.491-4.784 3.646v.05c-.026.177-.304 1.114-2.152 1.114s-2.127-.937-2.152-1.114v-.05c-.592-2.155-2.551-3.647-4.785-3.646H7.089c-2.3-.016-4.515-.871-6.228-2.405-.411-.364-.635-.895-.608-1.443.023-.545.282-1.053.709-1.393l.608-.48c.705-.56 1.711-.528 2.38.075.88.74 1.989 1.152 3.139 1.165h5.443c2.497.002 4.891.994 6.658 2.76l.278.278.279-.304c1.764-1.769 4.16-2.762 6.658-2.76h5.418c1.158-.007 2.277-.42 3.164-1.164zM10.4.25l.262.004c.962 0 1.696.177 2.228.557.536.39.934.94 1.139 1.57l5.19 14.86L24.18 2.482c.197-.716.659-1.331 1.29-1.722.739-.366 1.557-.54 2.38-.506.912 0 1.646.177 2.178.532.553.371.87 1.006.835 1.67v18.456c.007.503-.173.99-.506 1.367-.33.38-.937.583-1.823.583-.81 0-1.392-.203-1.747-.557-.372-.426-.563-.98-.531-1.545V8.304l-4.583 12.658c-.15.535-.505.989-.987 1.266-.461.238-.974.36-1.494.354-.81 0-1.417-.177-1.822-.506-.427-.366-.75-.837-.937-1.367L12.129 9.29v11.57c.007.503-.174.99-.506 1.367-.33.38-.937.582-1.823.582-.835 0-1.392-.177-1.772-.532-.33-.354-.506-.86-.506-1.57v-18.1c0-.836.303-1.443.886-1.823.686-.386 1.467-.57 2.253-.532z\"></path></svg>
    </div>
  </a>
</div>
<div class=\"mailpoet-premium-page\">
  ";
        // line 19
        if (((($context["subscriber_count"] ?? null) < 1000) &&  !($context["has_valid_api_key"] ?? null))) {
            // line 20
            yield "  <div class=\"mailpoet-premium-page-section mailpoet-premium-page-section-narrow mailpoet-premium-page-text-center\">
    <h1 class=\"mailpoet-h0\">
      ";
            // line 22
            yield $this->extensions['MailPoet\Twig\I18n']->translate("MailPoet Starter plan is yours for free");
            yield "
    </h1>
    <p class=\"mailpoet-premium-page-section-large\">
      ";
            // line 25
            yield $this->extensions['MailPoet\Twig\I18n']->translate("Website owners with less than 1,000 subscribers, like you, can get their emails delivered reliably for free with MailPoet Sending Service.");
            yield "
    </p>
    <a
      target=\"_blank\"
      href=\"";
            // line 29
            yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&g=starter&billing=monthly&utm_source=plugin&utm_medium=premium&utm_campaign=purchase&ref=plugin-upgrade-page&email=") . $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 29))), "html", null, true);
            yield "\"
      class=\"mailpoet-button button button-primary button-hero mailpoet-premium-shop-link\"
    >
      ";
            // line 32
            yield $this->extensions['MailPoet\Twig\I18n']->translate("Sign up for free");
            yield "
    </a>
  </div>

  <hr>
  ";
        }
        // line 38
        yield "
  <div class=\"mailpoet-premium-page-get-started mailpoet-premium-page-section mailpoet-premium-page-text-center\">
    <h1 class=\"mailpoet-h0\">
      ";
        // line 41
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Take your email marketing strategy<br> to the next level");
        yield "
    </h1>
    <p class=\"mailpoet-premium-page-section-narrow\">
      ";
        // line 44
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Ready to level up your email marketing efforts?");
        yield "<br>
      ";
        // line 45
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Upgrade your plan to unlock MailPoet’s <b>advanced features</b>, access to <b>detailed analytics</b>, and <b>priority support</b>.");
        yield "
    </p>
    <div class=\"mailpoet-premium-page-options mailpoet-grid-two-columns\">
      <div>
        <div class=\"mailpoet-premium-page-options-label-wrap\">
          <div class=\"mailpoet-premium-page-options-label\">
            ";
        // line 51
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Recommended");
        yield "
          </div>
        </div>
        <h1 class=\"mailpoet-h0\">
          <b>";
        // line 55
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Business");
        yield "</b>
        </h1>
        <p class=\"mailpoet-premium-page-text-large\">
          ";
        // line 58
        yield $this->extensions['MailPoet\Twig\I18n']->translate("From <b>\$10/month</b><br>for 500 contacts");
        yield "
        </h3>
        <ul>
          <li>";
        // line 61
        yield $this->extensions['MailPoet\Twig\I18n']->translate("MailPoet Sending Service");
        yield "</li>
          <li>";
        // line 62
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Send unlimited emails per month");
        yield "</li>
          <li>";
        // line 63
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Remove MailPoet branding");
        yield "</li>
          <li>";
        // line 64
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Priority customer support");
        yield "</li>
          <li>";
        // line 65
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Subscriber segmentation");
        yield "</li>
          <li>";
        // line 66
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Targeted marketing automation");
        yield "</li>
          <li>";
        // line 67
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Detailed email engagement and ecommerce statistics");
        yield "</li>
        </ul>
        <a
          target=\"_blank\"
          ";
        // line 71
        if (($context["has_valid_api_key"] ?? null)) {
            // line 72
            yield "            href=\"";
            yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape((("https://account.mailpoet.com/orders/upgrade/" . ($context["plugin_partial_key"] ?? null)) . "?utm_source=plugin&utm_medium=premium&utm_campaign=upgrade&ref=plugin-upgrade-page"), "html", null, true);
            yield "\"
          ";
        } else {
            // line 74
            yield "            href=\"";
            yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape((((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&g=business&billing=monthly&email=") . CoreExtension::getAttribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 74)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase&ref=plugin-upgrade-page"), "html", null, true);
            yield "\"
          ";
        }
        // line 76
        yield "        class=\"mailpoet-button button button-primary button-hero mailpoet-premium-shop-link\"
        >
          ";
        // line 78
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Get started");
        yield "
        </a>
      </div>
      <div>
        <div class=\"mailpoet-premium-page-options-label-wrap\"></div>
        <h1 class=\"mailpoet-h0\">
          <b>";
        // line 84
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Creator");
        yield "</b>
        </h1>
        <p class=\"mailpoet-premium-page-text-large\">
          ";
        // line 87
        yield $this->extensions['MailPoet\Twig\I18n']->translate("From <b>\$8/month</b><br>for 500 contacts");
        yield "
        </p>
        <div class=\"mailpoet-premium-page-options-divider\"></div>
        <p>
          ";
        // line 91
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Want to manage your own email sending? Our Creator plan offers all the features of the Business plan <b>without the MailPoet Sending Service</b>.");
        yield "
        </p>
        <div class=\"mailpoet-premium-page-options-divider\"></div>
        <a
          target=\"_blank\"
          ";
        // line 96
        if (($context["has_valid_api_key"] ?? null)) {
            // line 97
            yield "            href=\"";
            yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape((("https://account.mailpoet.com/orders/upgrade/" . ($context["plugin_partial_key"] ?? null)) . "?utm_source=plugin&utm_medium=premium&utm_campaign=upgrade&ref=plugin-upgrade-page"), "html", null, true);
            yield "\"
          ";
        } else {
            // line 99
            yield "            href=\"";
            yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape((((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&g=creator&billing=monthly&email=") . CoreExtension::getAttribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 99)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase&ref=plugin-upgrade-page"), "html", null, true);
            yield "\"
          ";
        }
        // line 101
        yield "          class=\"mailpoet-button button button-primary button-hero mailpoet-premium-shop-link\"
        >
          ";
        // line 103
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Get started");
        yield "
        </a>
      </div>
    </div>
  </div>

  <hr>

  <div class=\"mailpoet-premium-page-section mailpoet-premium-page-section-narrow mailpoet-premium-page-text-center\">
    <h1 class=\"mailpoet-h0\">
      ";
        // line 113
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Get started today!");
        yield "
    </h1>
    <p class=\"mailpoet-premium-page-text-large\">
      ";
        // line 116
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(MailPoetVendor\Twig\Extension\CoreExtension::replace($this->extensions['MailPoet\Twig\I18n']->translate("Over %s people trust MailPoet to power their email marketing campaigns – why not join them?"), ["%s" => "600,000"]), "html", null, true);
        yield "
      ";
        // line 117
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Upgrade now to grow your business and achieve your business goals.");
        yield "
    </p>
    <a
      target=\"_blank\"
      ";
        // line 121
        if (($context["has_valid_api_key"] ?? null)) {
            // line 122
            yield "        href=\"";
            yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape((("https://account.mailpoet.com/orders/upgrade/" . ($context["plugin_partial_key"] ?? null)) . "?utm_source=plugin&utm_medium=premium&utm_campaign=upgrade&ref=plugin-upgrade-page"), "html", null, true);
            yield "\"
      ";
        } else {
            // line 124
            yield "        href=\"";
            yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape((((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&g=business&billing=monthly&email=") . CoreExtension::getAttribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 124)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase&ref=plugin-upgrade-page"), "html", null, true);
            yield "\"
      ";
        }
        // line 126
        yield "      class=\"mailpoet-button button button-primary button-hero mailpoet-premium-shop-link\"
    >
      ";
        // line 128
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Get started");
        yield "
    </a>
    <p>
      ";
        // line 131
        $context["allowedHtml"] = ["a" => ["href" => [], "target" => []]];
        // line 132
        yield "      ";
        yield $this->extensions['MailPoet\Twig\Filters']->wpKses(MailPoet\Util\Helpers::replaceLinkTags($this->extensions['MailPoet\Twig\I18n']->translate("And if you’re not sure which plan is the right one for you, our [link]Customer Support team[/link] are on hand to help you decide."), "https://www.mailpoet.com/support/sales-pre-sales-questions/?ref=plugin-upgrade-page", ["target" => "_blank"]),         // line 135
($context["allowedHtml"] ?? null));
        // line 136
        yield "
    </p>
  </div>
</div>

<div class=\"mailpoet-premium-page-footer-image\">
  <img
    src=\"";
        // line 143
        yield $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("premium/5-footer.png");
        yield "\"
    alt=\"";
        // line 144
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Image rooster crowing");
        yield "\"
  >
</div>
";
        return; yield '';
    }

    // line 149
    public function block_after_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<script type=\"text/javascript\">
  MailPoet.trackEvent('Premium page viewed');

  jQuery(function(\$) {
    \$('.mailpoet-premium-page a.mailpoet-premium-shop-link').on('click', function() {
      MailPoet.trackEvent('Upgrade page CTA clicked');
    });
  });
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "upgrade.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  328 => 149,  319 => 144,  315 => 143,  306 => 136,  304 => 135,  302 => 132,  300 => 131,  294 => 128,  290 => 126,  284 => 124,  278 => 122,  276 => 121,  269 => 117,  265 => 116,  259 => 113,  246 => 103,  242 => 101,  236 => 99,  230 => 97,  228 => 96,  220 => 91,  213 => 87,  207 => 84,  198 => 78,  194 => 76,  188 => 74,  182 => 72,  180 => 71,  173 => 67,  169 => 66,  165 => 65,  161 => 64,  157 => 63,  153 => 62,  149 => 61,  143 => 58,  137 => 55,  130 => 51,  121 => 45,  117 => 44,  111 => 41,  106 => 38,  97 => 32,  91 => 29,  84 => 25,  78 => 22,  74 => 20,  72 => 19,  59 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "upgrade.html", "/home/circleci/mailpoet/mailpoet/views/upgrade.html");
    }
}
