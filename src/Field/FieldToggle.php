<?php

namespace Adaptcms\FieldToggle\Field;

use Adaptcms\Fields\FieldType;

class FieldToggle extends FieldType
{
  /**
  * @var array
  */
  public $defaultSettings = [
    'options' => [
      'is_sortable'        => true,
      'is_searchable'      => false,
      'is_required_create' => false,
      'is_required_edit'   => false
    ],
    'action_rules' => [
      'index'  => false,
      'create' => true,
      'edit'   => true,
      'show'   => true,
      'search' => false
    ]
  ];

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

  /**
  * Get Value
  *
  * @param mixed $value
  *
  * @return bool
  */
  public function getValue($value)
  {
    return ($value === 1);
  }
}
