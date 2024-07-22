/*
database name: pokewebdb
*/

CREATE TABLE Tipo(
    TipoId INT PRIMARY KEY AUTO_INCREMENT, 
    Nombre VARCHAR(50) NOT NULL
);    

CREATE TABLE Debilidad(
    DebilidadId INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(50) NOT NULL
);

CREATE TABLE Pokemon(
    PokemonId INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(50) NOT NULL,
    Descripcion VARCHAR(50),
    TipoId INT,
    FOREIGN KEY (TipoId) REFERENCES Tipo(TipoId)
);

CREATE TABLE Evolucion(
    EvolucionId INT PRIMARY KEY AUTO_INCREMENT,
    PokemonId INT,
    Nombre VARCHAR(50) NOT NULL,
    FOREIGN KEY (PokemonId) REFERENCES Pokemon(PokemonId)
);

CREATE TABLE PokemonDebilidad(
    PokemonDebilidadId INT PRIMARY KEY AUTO_INCREMENT,
    PokemonId INT,
    DebilidadId INT,
    FOREIGN KEY (PokemonId) REFERENCES Pokemon(PokemonId),
    FOREIGN KEY (DebilidadId) REFERENCES Debilidad(DebilidadId)
);