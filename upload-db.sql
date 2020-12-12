CREATE TABLE Organization(
  OrgID serial primary key,
  compName varchar(256),
  Address varchar(256)
);

-- CREATE TABLE UserGroup(
--   UserID varchar(9) primary key references Users(SSN);
-- );
CREATE TABLE Users(
  First varchar(256),
  Last varchar(256),
  Username varchar(256),
  Password varchar(256), /* never do this in practice */
  SSN varchar(9) primary key, /* also this, while we're at it */
  Address varchar(256),
  OrgID serial references Organization(OrgID) /* TODO if we allow users to work at more than one place */
);
CREATE TABLE Transaction(
  TransactionID serial primary key,
  Ticker varchar(256), /* TODO KORI WHAT IS THIS? */
  purchasedPrice bigint,
  soldPrice bigint,
  Security_type varchar(256),
  Reasoning varchar(8192),
  orgID serial references Organization(orgID), /* might need to add this afterwards? */
  UserID varchar(9) references Users(SSN)
);

/* TODO delete if not used */
CREATE TABLE Market(
  MarketID serial primary key,
  MarketType varchar(256) /* TODO KORI WHAT IS THIS */
);
