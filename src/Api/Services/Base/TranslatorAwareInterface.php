<?php

namespace App\Api\Services\Base;

use Symfony\Contracts\Translation\TranslatorInterface;

interface TranslatorAwareInterface
{
  public function initTranslator(TranslatorInterface $translator): void;

  public function __(string $id, array $parameter = [], ?string $locale = null): string;

  public function trans(string $id, array $parameter = [], ?string $locale = null): string;

  public function sanitizeLocale(?string $locale = null): string;

  public function isLocaleAValidLocaleWithUnderscore(string $locale): bool;

  public function isLocaleAValidTwoLetterLocale(string $locale): bool;

  public function mapLocaleToLocaleWithUnderscore(string $locale): string;

  public function mapLocaleWithUnderscoreToTwoLetterCode(string $locale_with_underscore): string;

  public function mapTwoLetterCodeToLocaleWithUnderscore(string $two_letter_code): string;

  public function getUsedLocale(): string;

  public function getLocaleFallback(): string;
}
