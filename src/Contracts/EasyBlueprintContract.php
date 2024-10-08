<?php

namespace Agunbuhori\EasyMigration\Contracts;

use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;

/**
 * Interface EasyBlueprintContract
 *
 * This interface defines methods for creating common column types in database migrations.
 */
interface EasyBlueprintContract
{
    /**
     * Create a string column for first name
     * @param string $column The column name
     * @param int $length The maximum length of the string
     * @return ColumnDefinition
     */
    public function firstName(string $column = 'first_name', int $length = 50);

    /**
     * Create a string column for last name
     * @param string $column The column name
     * @param int $length The maximum length of the string
     * @return ColumnDefinition
     */
    public function lastName(string $column = 'last_name', int $length = 50);

    /**
     * Create a string column for email address
     * @param string $column The column name
     * @param int $length The maximum length of the string
     * @return ColumnDefinition
     */
    public function email(string $column = 'email', int $length = 50);

    /**
     * Create a string column for phone number
     * @param string $column The column name
     * @param int $length The maximum length of the string
     * @return ColumnDefinition
     */
    public function phoneNumber(string $column, int $length = 14);

    /**
     * Create an enum column for gender
     * @param string $column The column name
     * @param array $options The enum options
     * @return ColumnDefinition
     */
    public function gender(string $column, $options = ['male', 'female']);

    /**
     * Create a date column for birthdate
     * @param string $column The column name
     * @return ColumnDefinition
     */
    public function birthdate(string $column = 'birthdate');

    /**
     * Create a string column for address code
     * @param string $column The column name
     * @param int $length The maximum length of the string
     * @return ColumnDefinition
     */
    public function addressCode(string $column = 'address_code', int $length = 13);

    /**
     * Create a text column for full address
     * @param string $column The column name
     * @return ColumnDefinition
     */
    public function address(string $column = 'address_code');

    /**
     * Create a tiny integer auto-incrementing ID column
     * @param string $column The column name
     * @return ColumnDefinition
     */
    public function tinyId(string $column = 'id');

    /**
     * Create a small integer auto-incrementing ID column
     * @param string $column The column name
     * @return ColumnDefinition
     */
    public function smallId(string $column = 'id');

    /**
     * Create a medium integer auto-incrementing ID column
     * @param string $column The column name
     * @return ColumnDefinition
     */
    public function mediumId(string $column = 'id');

    /**
     * Create a regular integer auto-incrementing ID column
     * @param string $column The column name
     * @return ColumnDefinition
     */
    public function regularId(string $column = 'id');

    /**
     * Create a tiny integer foreign ID column
     * @param string $column The column name
     * @return ForeignIdColumnDefinition
     */
    public function foreignTinyId(string $column);

    /**
     * Create a small integer foreign ID column
     * @param string $column The column name
     * @return ForeignIdColumnDefinition
     */
    public function foreignSmallId(string $column);

    /**
     * Create a medium integer foreign ID column
     * @param string $column The column name
     * @return ForeignIdColumnDefinition
     */
    public function foreignMediumId(string $column);

    /**
     * Create a regular integer foreign ID column
     * @param string $column The column name
     * @return ForeignIdColumnDefinition
     */
    public function foreignRegularId(string $column);
}
