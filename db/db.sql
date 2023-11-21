USE dacoma;

CREATE TABLE IF NOT EXISTS user (
  nombre varchar(255) NOT NULL PRIMARY KEY,
  edad INT NOT NULL,
  musica varchar(255) NOT NULL
);

INSERT INTO user (nombre, edad, musica) VALUES
('Davit Costa',22,'nose'),
('Roberto Martinez',22,'nose');
