CREATE TABLE uzivatele (
    id_uzivatele INT AUTO_INCREMENT PRIMARY KEY,
    jmeno VARCHAR(255),
    prijmeni VARCHAR(255),
    email VARCHAR(255),
    heslo VARCHAR(255),
    role VARCHAR(255)
);

CREATE TABLE prispevky (
    id_prispevku INT AUTO_INCREMENT PRIMARY KEY,
    nazev VARCHAR(255),
    autor INT,
    tema VARCHAR(255),
    soubor_pdf LONGBLOB,
    obsah_text TEXT,
    stav VARCHAR(255),
    id_casopisu INT,
    FOREIGN KEY (autor) REFERENCES uzivatele(id_uzivatele),
    FOREIGN KEY (id_casopisu) REFERENCES casopis(id_casopisu)
);

CREATE TABLE recenze (
    id_recenze INT AUTO_INCREMENT PRIMARY KEY,
    id_prispevku INT,
    id_recenzenta INT,
    aktualnost INT,
    zajimavost_prinosnost INT,
    originalita INT,
    odborna_uroven INT,
    jazykova_a_stylova_uroven INT,
    vyjadreni TEXT,
    datum DATE,
    FOREIGN KEY (id_prispevku) REFERENCES prispevky(id_prispevku),
    FOREIGN KEY (id_recenzenta) REFERENCES uzivatele(id_uzivatele)
);

CREATE TABLE terminy (
    id_terminu INT AUTO_INCREMENT PRIMARY KEY,
    id_prispevku INT,
    typ_terminu VARCHAR(255),
    datum DATE,
    FOREIGN KEY (id_prispevku) REFERENCES prispevky(id_prispevku)
);

CREATE TABLE helpdesk (
    id_ticketu INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    predmet VARCHAR(255),
    popis TEXT,
    datum_zalozeni DATETIME,
    stav VARCHAR(255),
    FOREIGN KEY (email) REFERENCES uzivatel(email)
);

CREATE TABLE casopis (
    id_casopisu INT AUTO_INCREMENT PRIMARY KEY,
    rok INT,
    rocnik INT,
    cislo INT
);
