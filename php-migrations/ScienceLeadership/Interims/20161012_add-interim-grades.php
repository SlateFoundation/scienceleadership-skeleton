<?php

$tableName = Slate\Progress\SectionInterimReport::$tableName;
$historyTableName = Slate\Progress\SectionInterimReport::getHistoryTableName();
$columnName = 'Grade';
$columnType = "enum('A','B','C','D','F','N/A')";

// skip conditions
if (!static::tableExists($tableName)) {
    printf("Skipping migration because table `%s` does not exist yet\n", $tableName);
    return static::STATUS_SKIPPED;
}

if (static::getColumnType($tableName, $columnName) == $columnType) {
    printf("Skipping migration because `%s` column already has correct type\n", $columnName);
    return static::STATUS_SKIPPED;
}


// migration
DB::nonQuery(
    'ALTER TABLE `%1$s` CHANGE `%2$s` `%2$s` %3$s NULL default NULL',
    [
        $tableName,
        $columnName,
        $columnType
    ]
);

DB::nonQuery(
    'ALTER TABLE `%1$s` CHANGE `%2$s` `%2$s` %3$s NULL default NULL',
    [
        $historyTableName,
        $columnName,
        $columnType
    ]
);


// done
return static::STATUS_EXECUTED;