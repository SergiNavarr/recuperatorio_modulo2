import mysqlconecction from "mysql2/promise";

const properties = {
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'navarro_s'
};

export const pool = mysqlconecction.createPool(properties);
