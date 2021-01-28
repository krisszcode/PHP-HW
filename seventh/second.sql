CREATE TABLE auto (
  id int(11) NOT NULL,
  marka varchar(20) NOT NULL,
  tipus varchar(20) NOT NULL,
  ar int(10) NOT NULL,
  ev DATE NOT NULL,
  muszaki int(1) DEFAULT NULL,
  ember_id int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ember (
  id int(11) NOT NULL,
  nev varchar(30) DEFAULT NULL,
  lakhely varchar(50) DEFAULT NULL,
  szuletes DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE szerviz (
  id int(11) NOT NULL,
  auto_id int(11) NOT NULL,
  datum DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE auto
  ADD PRIMARY KEY (id),
  ADD KEY ember_id (ember_id);


ALTER TABLE ember
  ADD PRIMARY KEY (id);


ALTER TABLE szerviz
  ADD PRIMARY KEY (id),
  ADD KEY auto_id (auto_id);


