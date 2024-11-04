# Crypto Unifier Helpers

This package is intended for internal usage and implementation of helper classes for Crypto Unifier projects.

## Installation

```sh
composer require cryptounifier/helpers
```

## Integrations

- Adds a Captcha class helper ([hCaptcha](https://www.hcaptcha.com/), [reCaptcha](https://developers.google.com/recaptcha?hl=pt-br), [Turnstile](https://www.cloudflare.com/pt-br/products/turnstile/), [GeeTest](https://www.geetest.com/en/) supported).
- Adds an IP address class helper ([ProxyCheck](https://proxycheck.io/), [IpRegistry](https://ipregistry.co/), [IPQualityScore](https://www.ipqualityscore.com/) supported).
- Adds an Agent class helper (On top of [MobileDetect](https://github.com/serbanghita/Mobile-Detect)).


## Env Variables

```sh
CAPTCHA_ON_AUTH=false
CAPTCHA_DRIVER=
CAPTCHA_SITE_KEY=
CAPTCHA_SECRET_KEY=

IP_ADDRESS_ON_AUTH=false
IP_ADDRESS_DRIVER=
IP_ADDRESS_DRIVER_KEY=
IP_ADDRESS_CACHE_DURATION=1440 # Minutes
```

# License

Crypto Unifier Helpers is open-sourced software licensed under the [MIT license](LICENSE).
