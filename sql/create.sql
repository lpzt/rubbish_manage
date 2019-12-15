create table rubbish(
  name varchar(20),
  types varchar(10),
  primary key(name)
);

LOAD DATA LOCAL INFILE "D:/gis/data/rubbish.csv"
INTO TABLE rubbish FIELDS TERMINATED BY ",";