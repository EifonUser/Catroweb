<?php

namespace App\Catrobat;

use Symfony\Component\HttpFoundation\Response;

class StatusCode
{
  /**
   * @var int
   */
  public const UPLOAD_EXCEEDING_FILESIZE = Response::HTTP_REQUEST_ENTITY_TOO_LARGE;
  /**
   * @var int
   */
  public const MISSING_POST_DATA = 501;

  /**
   * @var int
   */
  public const MISSING_CHECKSUM = 503;
  /**
   * @var int
   */
  public const INVALID_CHECKSUM = 504;

  /**
   * @var int
   */
  public const INVALID_FILE = 505;
  /**
   * @var int
   */
  public const INVALID_PROGRAM = 506;
  /**
   * @var int
   */
  public const PROJECT_XML_MISSING = 507;
  /**
   * @var int
   */
  public const INVALID_XML = 508;
  /**
   * @var int
   */
  public const MISSING_PROGRAM_TITLE = 509;
  /**
   * @var int
   */
  public const IMAGE_MISSING = 524;
  /**
   * @var int
   */
  public const UNEXPECTED_FILE = 525;
  /**
   * @var int
   */
  public const RUDE_WORD_IN_PROGRAM_NAME = 511;
  /**
   * @var int
   */
  public const RUDE_WORD_IN_DESCRIPTION = 512;
  /**
   * @var int
   */
  public const FILE_UPLOAD_FAILED = 521;

  /**
   * @var int
   */
  public const MEDIA_LIB_CATEGORY_NOT_FOUND = 522;
  /**
   * @var int
   */
  public const MEDIA_LIB_PACKAGE_NOT_FOUND = 523;

  /**
   * @var int
   */
  public const OLD_CATROBAT_LANGUAGE = 518;
  /**
   * @var int
   */
  public const OLD_APPLICATION_VERSION = 519;

  /**
   * @var int
   */
  public const PROGRAM_NAME_TOO_LONG = 526;
  /**
   * @var int
   */
  public const DESCRIPTION_TOO_LONG = 527;
  public const INVALID_FILE_UPLOAD = 528; //705; //upload failed but program still in DB

  public const LOGIN_ERROR = 601;

  public const RUDE_WORD_IN_NOTES_AND_CREDITS = Response::HTTP_UNPROCESSABLE_ENTITY;
  public const INVALID_PARAM = Response::HTTP_UNPROCESSABLE_ENTITY;

  /**
   * @var int
   */
  public const UPLOAD_UNSUPPORTED_MIME_TYPE = Response::HTTP_UNSUPPORTED_MEDIA_TYPE;
  /**
   * @var int
   */
  public const UPLOAD_UNSUPPORTED_FILE_TYPE = Response::HTTP_UNSUPPORTED_MEDIA_TYPE;

  public const NO_ADMIN_RIGHTS = Response::HTTP_FORBIDDEN;

  public const NOT_LOGGED_IN = Response::HTTP_UNAUTHORIZED;
  public const PASSWORD_INVALID = Response::HTTP_UNAUTHORIZED;

  public const REGISTRATION_ERROR = Response::HTTP_UNAUTHORIZED;

  public const USER_ADD_EMAIL_EXISTS = 757;
  public const USER_ADD_USERNAME_EXISTS = 777;

  public const CSRF_FAILURE = 706;
  public const NOTES_AND_CREDITS_TOO_LONG = 707;

  //8xx
  public const USER_COUNTRY_INVALID = 801;
  public const USER_PASSWORD_NOT_EQUAL_PASSWORD2 = 802;
  public const USERNAME_NOT_FOUND = 803;
  public const USERNAME_INVALID = 804;
  public const USER_PASSWORD_TOO_SHORT = 753;
  public const USER_PASSWORD_TOO_LONG = 806;
  public const USER_EMAIL_INVALID = 765;
  public const USER_EMAIL_MISSING = 808;
  public const USERNAME_CONTAINS_EMAIL = 809;
  public const USER_EMAIL_ALREADY_EXISTS = 810;
  public const USERNAME_MISSING = 811;
  public const USERNAME_ALREADY_EXISTS = 812;
  public const USER_USERNAME_PASSWORD_EQUAL = 813;
  public const USER_AVATAR_UPLOAD_ERROR = 814;
}
