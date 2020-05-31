<?php

namespace App\Catrobat\Services\CatrobatCodeParser\Bricks;

use App\Catrobat\Services\CatrobatCodeParser\Constants;

class RunningStitchBrick extends Brick
{
  protected function create(): void
  {
    $this->type = Constants::RUNNING_STITCH_BRICK;
    $this->caption = 'Stitch is running';
    $this->setImgFile(Constants::EMBROIDERY_BRICK_IMG);
  }
}
