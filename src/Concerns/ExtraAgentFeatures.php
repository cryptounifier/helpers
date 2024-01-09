<?php

namespace CryptoUnifier\Helpers\Concerns;

trait ExtraAgentFeatures
{
    public const DEVICE_TYPE_DESKTOP = 1;
    public const DEVICE_TYPE_MOBILE = 2;
    public const DEVICE_TYPE_TABLET = 3;

    public static function currentRequest(): self
    {
        return (new static())->setUserAgent((string) optional(request())->header('User-Agent'));
    }

    public static function make(string $userAgent): self
    {
        return (new static())->setUserAgent($userAgent);
    }

    public function platformName(): string
    {
        $platform = $this->platform();
        $version = $this->version($platform);

        return trim("{$platform} ".(($version) ?: __('Unknown')));
    }

    public function browserName(): string
    {
        $browser = $this->browser();
        $version = $this->version($browser);

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
    protected function version(string $string): string|false
    {
        return false;
    }
}