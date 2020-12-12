/* example data here */

/* Organization */
insert into Organization(compName, Address) values ('JustStonks', '69 rd');
insert into Organization(compName, Address) values ('OnlyStonks', '360 rd');
insert into Organization(compName, Address) values ('StonkHub', '420 rd');
insert into Organization(compName, Address) values ('WSBHedgeHog', '9001 rd');

/* Users */

INSERT INTO Users VALUES ('Kori', 'Vernon', 'Soccermomkori', 'iloveorcas87', '123456789', '3412 Birk Bluff', 1);
INSERT INTO Users VALUES ('Chuwei', 'Guo', 'Chewwybar', 'notachewybar', '123446789', '1234 Awesome Address', 2);
INSERT INTO Users VALUES ('Artur', 'Janik', 'NativeVex', 'NotANativeVex', '123444789' , '1235 Awesome Address', 3);

/* Transaction table populate */
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                ('CHEGG', 110,            140,       'OPTION',      'CHEGG PRINTER GO BRR',   '123444789', 2);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                 ('AAPL', 110,            120,       'OPTION',      'Apple Moon',             '123456789', 1);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                  ('NIO', 110,            300,       'OPTION',      'NIO Moon',               '123456789', 1);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                 ('PLTR', 110,            69,        'OPTION',      'PLTR Moon',              '123456789', 1);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                 ('PLTR', 110,            120,       'OPTION',      'MONEY PRINTER GO BRR',   '123446789', 2);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                 ('AAPL', 110,            140,       'OPTION',      'TUITION PRINTER GO BRR', '123446789', 2);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                ('CHEGG', 110,            140,       'OPTION',      'CHEGG PRINTER GO BRR',   '123446789', 2);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                 ('COOL', 110,            190,       'OPTION',      'COOL PRINTER GO BRR',    '123444789', 3);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                  ('ICE', 110,            170,       'OPTION',      'ICEEY PRINTER GO BRR',   '123444789', 3);
INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, Reasoning,                UserID,      orgID)
VALUES                 ('COOL', 80,             70,        'OPTION',      'COOL PRINTER GO BRR',    '123444789', 3);

/* Market */

INSERT INTO Market(MarketType) VALUES ('NYSE');
/*
insert into transaction (Ticker, purchasedPrice, soldPrice, Security_type, Reasoning, UserID) values ('AAPL', 1110, 1130, 'Option', 'Just because', '765');
insert into transaction (Ticker, purchasedPrice, soldPrice, Security_type, Reasoning, orgID) values ('AAPL', 1110, 1130, 'Option', 'Just because', '765');
insert into transaction (Ticker, purchasedPrice, soldPrice, Security_type, Reasoning, orgID) values ('AAPL', 1110, 1130, 'Option', 'Just because', '765');
*/
/*insert into transaction values ('AAPL', 110, 120, 'OPTION', 'Apple Moon', */
