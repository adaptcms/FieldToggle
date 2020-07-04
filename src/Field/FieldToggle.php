<?php

namespace Adaptcms\FieldToggle\Field;

use Adaptcms\Fields\FieldType;

class FieldToggle extends FieldType
{
  /**
  * Migration Command
  * When a package field is made from this field, you must supply a valid
  * migration string in string format.
  * Here is an example, please note the use of `:columnName` and having the command
  * in single quotes so the CMS can execute the command via migrations:
  *
  * '$table->string(":columnName")->nullable();'
  *
  * @return string
  */
  public function migrationCommand()
  {
    return '$table->boolean(":columnName")->default(false);';
  }
}
