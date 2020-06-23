<?php

namespace Adaptcms\FieldToggle;

use Adaptcms\Base\Models\Package;

class FieldToggle
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
