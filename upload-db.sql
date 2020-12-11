CREATE TABLE Organization(
  OrgID varchar(256) primary key,
  compName varchar(256), /* KORI WHAT */
  Address varchar(256),
  UserID varchar(256)
);
CREATE TABLE Transaction(
  TransactionID varchar(256) primary key,
  Ticker varchar(256), /* TODO KORI WHAT IS THIS? */
  purchasedPrice bigint, 
  soldPrice bigint, 
  Security_type varchar(256),
  Reasoning varchar(8192),
  orgID varchar(256) references Organization(orgID) /* might need to add this afterwards? */
);
CREATE TABLE Users(
  UserID varchar(256),
  First varchar(256),
  Last varchar(256),
  Username varchar(256),
  Password varchar(256), /* never do this in practice */
  SSN varchar(9) primary key, /* also this, while we're at it */
  Address varchar(256),
  OrgID varchar(256) references Organization(OrgID)
);
CREATE TABLE Market(
  MarketID varchar(256) primary key,
  MarketType varchar(256) /* TODO KORI WHAT IS THIS */
);
