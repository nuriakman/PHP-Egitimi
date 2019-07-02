# MySQL Functions

## MySQL String Functions
|Function|Description|
|----|----|
|ASCII|Returns the ASCII value for the specific character|
|CHAR_LENGTH|Returns the length of a string (in characters)|
|CHARACTER_LENGTH|Returns the length of a string (in characters)|
|CONCAT|Adds two or more expressions together|
|CONCAT_WS|Adds two or more expressions together with a separator|
|FIELD|Returns the index position of a value in a list of values|
|FIND_IN_SET|Returns the position of a string within a list of strings|
|FORMAT|Formats a number to a format like "#,###,###.##", rounded to a specified number of decimal places|
|INSERT|Inserts a string within a string at the specified position and for a certain number of characters|
|INSTR|Returns the position of the first occurrence of a string in another string|
|LCASE|Converts a string to lower-case|
|LEFT|Extracts a number of characters from a string (starting from left)|
|LENGTH|Returns the length of a string (in bytes)|
|LOCATE|Returns the position of the first occurrence of a substring in a string|
|LOWER|Converts a string to lower-case|
|LPAD|Left-pads a string with another string, to a certain length|
|LTRIM|Removes leading spaces from a string|
|MID|Extracts a substring from a string (starting at any position)|
|POSITION|Returns the position of the first occurrence of a substring in a string|
|REPEAT|Repeats a string as many times as specified|
|REPLACE|Replaces all occurrences of a substring within a string, with a new substring|
|REVERSE|Reverses a string and returns the result|
|RIGHT|Extracts a number of characters from a string (starting from right)|
|RPAD|Right-pads a string with another string, to a certain length|
|RTRIM|Removes trailing spaces from a string|
|SPACE|Returns a string of the specified number of space characters|
|STRCMP|Compares two strings|
|SUBSTR|Extracts a substring from a string (starting at any position)|
|SUBSTRING|Extracts a substring from a string (starting at any position)|
|SUBSTRING_INDEX|Returns a substring of a string before a specified number of delimiter occurs|
|TRIM|Removes leading and trailing spaces from a string|
|UCASE|Converts a string to upper-case|
|UPPER|Converts a string to upper-case|

## MySQL Numeric Functions
|Function|Description|
|----|----|
|ABS|Returns the absolute value of a number|
|ACOS|Returns the arc cosine of a number|
|ASIN|Returns the arc sine of a number|
|ATAN|Returns the arc tangent of one or two numbers|
|ATAN2|Returns the arc tangent of two numbers|
|AVG|Returns the average value of an expression|
|CEIL|Returns the smallest integer value that is >= to a number|
|CEILING|Returns the smallest integer value that is >= to a number|
|COS|Returns the cosine of a number|
|COT|Returns the cotangent of a number|
|COUNT|Returns the number of records returned by a select query|
|DEGREES|Converts a value in radians to degrees|
|DIV|Used for integer division|
|EXP|Returns e raised to the power of a specified number|
|FLOOR|Returns the largest integer value that is <= to a number|
|GREATEST|Returns the greatest value of the list of arguments|
|LEAST|Returns the smallest value of the list of arguments|
|LN|Returns the natural logarithm of a number|
|LOG|Returns the natural logarithm of a number, or the logarithm of a number to a specified base|
|LOG10|Returns the natural logarithm of a number to base 10|
|LOG2|Returns the natural logarithm of a number to base 2|
|MAX|Returns the maximum value in a set of values|
|MIN|Returns the minimum value in a set of values|
|MOD|Returns the remainder of a number divided by another number|
|PI|Returns the value of PI|
|POW|Returns the value of a number raised to the power of another number|
|POWER|Returns the value of a number raised to the power of another number|
|RADIANS|Converts a degree value into radians|
|RAND|Returns a random number|
|ROUND|Rounds a number to a specified number of decimal places|
|SIGN|Returns the sign of a number|
|SIN|Returns the sine of a number|
|SQRT|Returns the square root of a number|
|SUM|Calculates the sum of a set of values|
|TAN|Returns the tangent of a number|
|TRUNCATE|Truncates a number to the specified number of decimal places|

## MySQL Date Functions
|Function|Description|
|----|----|
|ADDDATE|Adds a time/date interval to a date and then returns the date|
|ADDTIME|Adds a time interval to a time/datetime and then returns the time/datetime|
|CURDATE|Returns the current date|
|CURRENT_DATE|Returns the current date|
|CURRENT_TIME|Returns the current time|
|CURRENT_TIMESTAMP|Returns the current date and time|
|CURTIME|Returns the current time|
|DATE|Extracts the date part from a datetime expression|
|DATEDIFF|Returns the number of days between two date values|
|DATE_ADD|Adds a time/date interval to a date and then returns the date|
|DATE_FORMAT|Formats a date|
|DATE_SUB|Subtracts a time/date interval from a date and then returns the date|
|DAY|Returns the day of the month for a given date|
|DAYNAME|Returns the weekday name for a given date|
|DAYOFMONTH|Returns the day of the month for a given date|
|DAYOFWEEK|Returns the weekday index for a given date|
|DAYOFYEAR|Returns the day of the year for a given date|
|EXTRACT|Extracts a part from a given date|
|FROM_DAYS|Returns a date from a numeric datevalue|
|HOUR|Returns the hour part for a given date|
|LAST_DAY|Extracts the last day of the month for a given date|
|LOCALTIME|Returns the current date and time|
|LOCALTIMESTAMP|Returns the current date and time|
|MAKEDATE|Creates and returns a date based on a year and a number of days value|
|MAKETIME|Creates and returns a time based on an hour, minute, and second value|
|MICROSECOND|Returns the microsecond part of a time/datetime|
|MINUTE|Returns the minute part of a time/datetime|
|MONTH|Returns the month part for a given date|
|MONTHNAME|Returns the name of the month for a given date|
|NOW|Returns the current date and time|
|PERIOD_ADD|Adds a specified number of months to a period|
|PERIOD_DIFF|Returns the difference between two periods|
|QUARTER|Returns the quarter of the year for a given date value|
|SECOND|Returns the seconds part of a time/datetime|
|SEC_TO_TIME|Returns a time value based on the specified seconds|
|STR_TO_DATE|Returns a date based on a string and a format|
|SUBDATE|Subtracts a time/date interval from a date and then returns the date|
|SUBTIME|Subtracts a time interval from a datetime and then returns the time/datetime|
|SYSDATE|Returns the current date and time|
|TIME|Extracts the time part from a given time/datetime|
|TIME_FORMAT|Formats a time by a specified format|
|TIME_TO_SEC|Converts a time value into seconds|
|TIMEDIFF|Returns the difference between two time/datetime expressions|
|TIMESTAMP|Returns a datetime value based on a date or datetime value|
|TO_DAYS|Returns the number of days between a date and date "0000-00-00"|
|WEEK|Returns the week number for a given date|
|WEEKDAY|Returns the weekday number for a given date|
|WEEKOFYEAR|Returns the week number for a given date|
|YEAR|Returns the year part for a given date|
|YEARWEEK|Returns the year and week number for a given date|

## MySQL Advanced Functions
|Function|Description|
|----|----|
|BIN|Returns a binary representation of a number|
|BINARY|Converts a value to a binary string|
|CASE|Goes through conditions and return a value when the first condition is met|
|CAST|Converts a value (of any type) into a specified datatype|
|COALESCE|Returns the first non-null value in a list|
|CONNECTION_ID|Returns the unique connection ID for the current connection|
|CONV|Converts a number from one numeric base system to another|
|CONVERT|Converts a value into the specified datatype or character set|
|CURRENT_USER|Returns the user name and host name for the MySQL account that the server used to authenticate the current client|
|DATABASE|Returns the name of the current database|
|IF|Returns a value if a condition is TRUE, or another value if a condition is FALSE|
|IFNULL|Return a specified value if the expression is NULL, otherwise return the expression|
|ISNULL|Returns 1 or 0 depending on whether an expression is NULL|
|LAST_INSERT_ID|Returns the AUTO_INCREMENT id of the last row that has been inserted or updated in a table|
|NULLIF|Compares two expressions and returns NULL if they are equal. Otherwise, the first expression is returned|
|SESSION_USER|Returns the current MySQL user name and host name|
|SYSTEM_USER|Returns the current MySQL user name and host name|
|USER|Returns the current MySQL user name and host name|
|VERSION|Returns the current version of the MySQL database|


KAYNAK: https://www.w3schools.com/sql/sql_ref_mysql.asp

