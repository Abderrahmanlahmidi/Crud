-- 1
CREATE DATABASE Crud;

USE Crud;
-- 2
CREATE TABLE Utilisateurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULl,
  password VARCHAR(100) NOT NULL,
  email VARCHAR(255) UNIQUE
)

-- 3
CREATE TABLE Articles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULl,
  contenu VARCHAR(100) NOT NULL,
  dateDePublication DATE,
  utilisateur_id INT NOT NULL,
  Foreign Key (utilisateur_id) REFERENCES Utilisateurs(id)
)

INSERT INTO Utilisateurs (nom, password, email) VALUES
('Dupont', '234343434', 'jean.dupont@example.com'),
('Martin', '2342343', 'sophie.martin@example.com'),
('Leroy', '23432534343', 'pierre.leroy@example.com');

INSERT INTO Articles (titre, contenu, dateDePublication, Utilisateur_id) VALUES
('Introduction to SQL', 'Learn the basics of SQL and database management.', '2025-02-15', 1),
('React vs Vue', 'Comparison between two popular front-end frameworks.', '2025-02-16', 2),
('Best Practices in PHP', 'Coding standards and security tips.', '2025-02-19', 3);
