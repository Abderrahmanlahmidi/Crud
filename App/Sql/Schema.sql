-- 1
CREATE DATABASE Crud;

-- 2
CREATE TABLE Utilisateurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NUL,
  prenom VARCHAR(100) NOT NULL,
  email VARCHAR(255) UNIQUE,
)

-- 3
CREATE TABLE Articles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NUL,
  contenu VARCHAR(100) NOT NULL,
  date DATE,
  Utilisateur_id INT NOT NULL,
  Foreign Key (Utilisateur_id) REFERENCES Utilisateur(id)
)

-- Inserting fake users
INSERT INTO Utilisateurs (nom, prenom, email) VALUES
('Dupont', 'Jean', 'jean.dupont@example.com'),
('Martin', 'Sophie', 'sophie.martin@example.com'),
('Bernard', 'Luc', 'luc.bernard@example.com'),
('Morel', 'Camille', 'camille.morel@example.com'),
('Leroy', 'Pierre', 'pierre.leroy@example.com');

-- Inserting fake articles
INSERT INTO Articles (titre, contenu, date, Utilisateur_id) VALUES
('Introduction to SQL', 'Learn the basics of SQL and database management.', '2025-02-15', 1),
('React vs Vue', 'Comparison between two popular front-end frameworks.', '2025-02-16', 2),
('How to Optimize Your Website', 'Performance tips for web developers.', '2025-02-17', 3),
('AI in 2025', 'Trends and predictions for artificial intelligence.', '2025-02-18', 4),
('Best Practices in PHP', 'Coding standards and security tips.', '2025-02-19', 5);
