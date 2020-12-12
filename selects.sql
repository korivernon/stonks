/* profits */
SELECT SUM(purchasedPrice), SUM(soldPrice) FROM users JOIN Transaction WHERE Transaction.orgID == '1';
