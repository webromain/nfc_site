# nfc_site
site with NFC authentication


# La base de donnée SQLITE

-- Création de la table pour stocker les tokens NFC
CREATE TABLE tokens (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    token TEXT UNIQUE NOT NULL,
    description TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Exemple d'insertion de tokens NFC valides
INSERT INTO tokens (token, description) VALUES 
('token123', 'Badge élève 1'),
('token456', 'Badge élève 2'),
('token789', 'Badge prof');

------------------------------------------

-- SQLite
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL,
    prenom TEXT NOT NULL,
    sexe TEXT CHECK(sexe IN ('H', 'F', 'A')) NOT NULL,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL,
    phone TEXT,
    adress TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    token TEXT UNIQUE,
    is_admin INTEGER DEFAULT 0
);





# Allumer le site et kiwix

php -S localhost:8080
php -S 0.0.0.0:8000


---------------------------------

cd C:\kiwix-tools
.\kiwix-serve.exe --port=8080 C:\Users\ROMAIN\Documents\ADEVELOPPEMENT\AEPSI\nfc_site\vikidia_fr_all_maxi_2023-07.zim
