
/* Profit for user where users.orgid=1 */
SELECT sum(soldPrice) - sum(purchasedPrice) FROM (SELECT * FROM users WHERE users.username='NativeVex') AS u1 JOIN transaction ON (u1.orgid = transaction.orgid);

/* profit by orgid */
SELECT u1.orgid, sum(soldPrice) - sum(purchasedPrice) FROM (SELECT * FROM users) AS u1 JOIN transaction ON (u1.orgid = transaction.orgid) GROUP BY u1.orgid;

/* profit by user */
SELECT * from users JOIN (select sum(soldPrice) - sum(purchasedPrice) as profit, userid FROM transaction GROUP BY userid) AS usrprft ON (usrprft.userid=users.ssn);
