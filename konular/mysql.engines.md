
# MySQL Engines: InnoDB vs. MyISAM

## A Comparison of Pros and Cons

The 2 major types of table storage engines for MySQL databases are InnoDB and MyISAM. To summarize the differences of features and performance,

- InnoDB is newer while MyISAM is older.
- InnoDB is more complex while MyISAM is simpler.
- InnoDB is more strict in data integrity while MyISAM is loose.
- InnoDB implements row-level lock for inserting and updating while MyISAM implements table-level lock.
- InnoDB has transactions while MyISAM does not.
- InnoDB has foreign keys and relationship contraints while MyISAM does not.
- InnoDB has better crash recovery while MyISAM is poor at recovering data integrity at system crashes.
- MyISAM has full-text search index while InnoDB has not.

In light of these differences, InnoDB and MyISAM have their unique advantages and disadvantages against each other. They each are more suitable in some scenarios than the other.

### Advantages of InnoDB

- InnoDB should be used where data integrity comes a priority because it inherently takes care of them by the help of relationship constraints and transactions.
- Faster in write-intensive (inserts, updates) tables because it utilizes row-level locking and only hold up changes to the same row that’s being inserted or updated.

### Disadvantages of InnoDB

- Because InnoDB has to take care of the different relationships between tables, database administrator and scheme creators have to take more time in designing the data models which are more complex than those of MyISAM.
- Consumes more system resources such as RAM. As a matter of fact, it is recommended by many that InnoDB engine be turned off if there’s no substantial need for it after installation of MySQL.
- No full-text indexing.

### Advantages of MyISAM

- Simpler to design and create, thus better for beginners. No worries about the foreign relationships between tables.
- Faster than InnoDB on the whole as a result of the simpler structure thus much less costs of server resources.
- Full-text indexing.
- Especially good for read-intensive (select) tables.

### Disadvantages of MyISAM

- No data integrity (e.g. relationship constraints) check, which then comes a responsibility and overhead of the database administrators and application developers.
- Doesn’t support transactions which is essential in critical data applications such as that of banking.
- Slower than InnoDB for tables that are frequently being inserted to or updated, because the entire table is locked for any insert or update.

The comparison is pretty straightforward. InnoDB is more suitable for data critical situations that require frequent inserts and updates. MyISAM, on the other hand, performs better with applications that don’t quite depend on the data integrity and mostly just select and display the data.

