<?php

namespace Agunbuhori\EasyMigration;

use Agunbuhori\EasyMigration\Contracts\EasyBlueprintContract;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;

class EasyBlueprint extends Blueprint implements EasyBlueprintContract
{
  /**
   * Create a string column for first name
   * @param string $column The column name
   * @param int $length The maximum length of the string
   * @return ColumnDefinition
   */
  public function firstName(string $column = 'first_name', int $length = 50)
  {
    return parent::string($column, $length);
  }

  /**
   * Create a string column for last name
   * @param string $column The column name
   * @param int $length The maximum length of the string
   * @return ColumnDefinition
   */
  public function lastName(string $column = 'last_name', int $length = 50)
  {
    return parent::string($column, $length);
  }

  /**
   * Create a string column for email address
   * @param string $column The column name
   * @param int $length The maximum length of the string
   * @return ColumnDefinition
   */
  public function email(string $column = 'email', int $length = 50)
  {
    return parent::string($column, $length);
  }

  /**
   * Create a string column for phone number
   * @param string $column The column name
   * @param int $length The maximum length of the string
   * @return ColumnDefinition
   */
  public function phoneNumber(string $column, int $length = 14)
  {
    return parent::string($column, $length);
  }

  /**
   * Create an enum column for gender
   * @param string $column The column name
   * @param array $options The enum options
   * @return ColumnDefinition
   */
  public function gender(string $column, $options = ['male','female'])
  {
    return parent::enum($column, $options);
  }
  
  /**
   * Create a date column for birthdate
   * @param string $column The column name
   * @return ColumnDefinition
   */
  public function birthdate(string $column = 'birthdate')
  {
    return parent::date($column);
  }

  /**
   * Create a string column for address code
   * @param string $column The column name
   * @param int $length The maximum length of the string
   * @return ColumnDefinition
   */
  public function addressCode(string $column = 'address_code', int $length = 13)
  {
    return parent::string($column, $length);
  }
  
  /**
   * Create a text column for full address
   * @param string $column The column name
   * @return ColumnDefinition
   */
  public function address(string $column = 'id')
  {
    return parent::text($column);
  }

  /**
   * Create a tiny integer auto-incrementing ID column
   * @param string $column The column name
   * @return ColumnDefinition
   */
  public function tinyId(string $column = 'id')
  {
    return parent::tinyIncrements($column);
  }

  /**
   * Create a small integer auto-incrementing ID column
   * @param string $column The column name
   * @return ColumnDefinition
   */
  public function smallId(string $column = 'id')
  {
    return parent::smallIncrements($column);
  }
  
  /**
   * Create a medium integer auto-incrementing ID column
   * @param string $column The column name
   * @return ColumnDefinition
   */
  public function mediumId(string $column = 'id')
  {
    return parent::mediumId($column);
  }

  /**
   * Create a regular integer auto-incrementing ID column
   * @param string $column The column name
   * @return ColumnDefinition
   */
  public function regularId(string $column = 'id')
  {
    return parent::increments($column);
  }

  /**
   * Create a tiny integer foreign ID column
   * @param string $column The column name
   * @return ForeignIdColumnDefinition
   */
  public function foreignTinyId(string $column)
  {
    return $this->generateForeignId($column, 'tinyInteger');
  }

  /**
   * Create a small integer foreign ID column
   * @param string $column The column name
   * @return ForeignIdColumnDefinition
   */
  public function foreignSmallId(string $column)
  {
    return $this->generateForeignId($column, 'smallInteger');
  }
  
  /**
   * Create a medium integer foreign ID column
   * @param string $column The column name
   * @return ForeignIdColumnDefinition
   */
  public function foreignMediumId(string $column)
  {
    return $this->generateForeignId($column, 'mediumInteger');
  }
  
  /**
   * Create a regular integer foreign ID column
   * @param string $column The column name
   * @return ForeignIdColumnDefinition
   */
  public function foreignRegularId(string $column)
  {
    return $this->generateForeignId($column, 'integer');
  }

  /**
   * Generate a foreign ID column with the specified type
   * @param string $column The column name
   * @param string $type The integer type
   * @return ForeignIdColumnDefinition
   */
  private function generateForeignId(string $column, string $type): ForeignIdColumnDefinition
  {
    return parent::addColumnDefinition(new ForeignIdColumnDefinition($this, [
        'type' => $type,
        'name' => $column,
        'autoIncrement' => false,
        'unsigned' => true,
    ]));
  }
}