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
        $version = $this->version($platform ?? '');

        return trim("{$platform} ".(($version) ?: __('Unknown')));
    }

    public function browserName(): string
    {
        $browser = $this->browser();
        $version = $this->version($browser ?? '');

        return trim("{$browser} ".(($version) ?: __('Unknown')));
    }

    public function deviceType(): int
    {
        if ($this->isMobile()) {
            return self::DEVICE_TYPE_MOBILE;
        }

        if ($this->isTablet()) {
            return self::DEVICE_TYPE_TABLET;
        }

        return self::DEVICE_TYPE_DESKTOP;
    }
}