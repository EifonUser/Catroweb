<?php

namespace App\Catrobat\CatrobatCode\Statements;

class ChangeXByNStatement extends BaseChangeByNStatement
{
  /**
   * @var string
   */
  public const BEGIN_STRING = 'X';
  /**
   * @var string
   */
  public const END_STRING = ')<br/>';

  /**
   * ChangeXByNStatement constructor.
   *
   * @param mixed $statementFactory
   * @param mixed $xmlTree
   * @param mixed $spaces
   */
  public function __construct($statementFactory, $xmlTree, $spaces)
  {
    parent::__construct($statementFactory, $xmlTree, $spaces,
      self::BEGIN_STRING,
      self::END_STRING);
  }

  public function getBrickText(): string
  {
    $formula_string = $this->getFormulaListChildStatement()->executeChildren();
    $formula_string_without_markup = preg_replace('#<[^>]*>#', '', $formula_string);

    return 'Change X by '.$formula_string_without_markup;
  }

  public function getBrickColor(): string
  {
    return '1h_brick_blue.png';
  }
}
