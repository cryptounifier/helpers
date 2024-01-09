<?php

namespace CryptoUnifier\Helpers\Concerns;

trait ExtraAgentFeatures
{
    public const DEVICE_TYPE_DESKTOP = 1;
    public const DEVICE_TYPE_MOBILE = 2;
    public const DEVICE_TYPE_TABLET = 3;

    public static function currentRequest(): static
    {
        $instance = new static();
        $instance->setUserAgent((string) optional(request())->header('User-Agent'));

        return $instance;
    }

    public static function make(string $userAgent): static
    {
        $instance = new static();
        $instance->setUserAgent($userAgent);

        return $instance;
    }

    public function platformName(): string
    {
        $platform = $this->platform();
        $version = $this->getVersion($platform);

        return trim("{$platform} ".(($version) ?: __('Unknown')));
    }

    public function browserName(): string
    {
        $browser = $this->browser();
        $version = $this->getVersion($browser);

        return trim("{$browser} ".(($version) ?: __('Unknown')));
    }

    public function deviceType(): int
    {
        if ($this->agent->isMobile()) {
            return self::DEVICE_TYPE_MOBILE;
        }

        if ($this->agent->isTablet()) {
            return self::DEVICE_TYPE_TABLET;
        }

        return self::DEVICE_TYPE_DESKTOP;
    }

    /**
     * @deprecated Waiting for https://github.com/serbanghita/Mobile-Detect/issues/940.
     */
    protected function getVersion(string $string): string|false
    {
        return false;
    }
}