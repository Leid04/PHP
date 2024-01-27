CREATE TABLE Genero (
    id_genero INT PRIMARY KEY AUTO_INCREMENT,
    nombre_genero VARCHAR(50) NOT NULL
);


CREATE TABLE Interprete (
    id_interprete INT PRIMARY KEY AUTO_INCREMENT,
    nombre_actor VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE,
    nacionalidad VARCHAR(50)
);

CREATE TABLE Pelicula (
    id_pelicula INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    anio_estreno INT,
    duracion_minutos INT,
    id_genero INT,
    FOREIGN KEY (id_genero) REFERENCES Genero(id_genero)
);

CREATE TABLE PeliculaInterprete (
    id_pelicula INT,
    id_interprete INT,
    PRIMARY KEY (id_pelicula, id_interprete),
    FOREIGN KEY (id_pelicula) REFERENCES Pelicula(id_pelicula),
    FOREIGN KEY (id_interprete) REFERENCES Interprete(id_interprete)
);


INSERT INTO Genero (nombre_genero) VALUES
    ('Drama'),
    ('Acción'),
    ('Ciencia Ficción'),
    ('Crimen'),
    ('Aventura');


INSERT INTO Interprete (nombre_actor, fecha_nacimiento, nacionalidad) VALUES
    ('Tom Hanks', '1956-07-09', 'Estados Unidos'),
    ('Meryl Streep', '1949-06-22', 'Estados Unidos'),
    ('Christian Bale', '1974-01-30', 'Reino Unido'),
    ('Heath Ledger', '1979-04-04', 'Australia'),
    ('Leonardo DiCaprio', '1974-11-11', 'Estados Unidos'),
    ('Ellen Page', '1987-02-21', 'Canadá'),
    ('Morgan Freeman', '1937-06-01', 'Estados Unidos'),
    ('Tim Robbins', '1958-10-16', 'Estados Unidos'),
    ('John Travolta', '1954-02-18', 'Estados Unidos'),
    ('Uma Thurman', '1970-04-29', 'Estados Unidos'),
    ('Marlon Brando', '1924-04-03', 'Estados Unidos'),
    ('Al Pacino', '1940-04-25', 'Estados Unidos'),
    ('Sam Neill', '1947-09-14', 'Nueva Zelanda'),
    ('Laura Dern', '1967-02-10', 'Estados Unidos'),
    ('Russell Crowe', '1964-04-07', 'Nueva Zelanda'),
    ('Joaquin Phoenix', '1974-10-28', 'Puerto Rico'),
    ('Keanu Reeves', '1964-09-02', 'Canadá'),
    ('Carrie-Anne Moss', '1967-08-21', 'Canadá'),
    ('Anthony Hopkins', '1937-12-31', 'Gales'),
    ('Jodie Foster', '1962-11-19', 'Estados Unidos');


INSERT INTO Pelicula (titulo, anio_estreno, duracion_minutos, id_genero) VALUES
    ('Forrest Gump', 1994, 142, 1),
    ('The Dark Knight', 2008, 152, 2),
    ('Inception', 2010, 148, 3),
    ('The Shawshank Redemption', 1994, 142, 1),
    ('Pulp Fiction', 1994, 154, 4),
    ('The Godfather', 1972, 175, 1),
    ('Jurassic Park', 1993, 127, 5),
    ('Gladiator', 2000, 155, 2),
    ('The Matrix', 1999, 136, 3),
    ('The Silence of the Lambs', 1991, 118, 4);


INSERT INTO PeliculaInterprete (id_pelicula, id_interprete) VALUES
    (1, 1),
    (1, 2),
    (2, 3),
    (2, 4),
    (3, 5),
    (3, 6),
    (4, 7),
    (4, 8),
    (5, 9),
    (5, 10),
    (6, 11),
    (6, 12),
    (7, 13),
    (7, 14),
    (8, 15),
    (8, 16),
    (9, 17),
    (9, 18),
    (10, 19),
    (10, 20);