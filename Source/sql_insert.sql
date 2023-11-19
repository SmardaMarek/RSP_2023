INSERT INTO uzivatele (jmeno, prijmeni, email, heslo, role)
VALUES
    ('Jan', 'Novák', 'jan.novak@gmail.com', 'heslo1', 'autor'),
    ('Petr', 'Svoboda', 'petr.svoboda@gmail.com', 'heslo2', 'recenzent'),
    ('Eva', 'Novotná', 'eva.novotna@gmail.com', 'heslo3', 'redaktor'),
    ('Karolína', 'Kučerová', 'karolina.kucerova@gmail.com', 'heslo4', 'šéfredaktor'),
    ('Tomáš', 'Procházka', 'tomas.prochazka@gmail.com', 'heslo5', 'admin');

INSERT INTO prispevky (nazev, autor, tema, obsah_text, stav)
VALUES
    ('Výzkum v oblasti kvantové fyziky', 1, 'Věda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor metus ut quam lacinia.', ''),
    ('Nové technologie v informačním sektoru', 1, 'Technika', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor metus ut quam lacinia.', ''),
    ('Školní sportovní úspěchy za rok 2022', 1, 'školní sportovní úspěchy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor metus ut quam lacinia.', ''),
    ('Pomoc prvákům během jejich prvního roku', 1, 'Pomoc prvákům', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor metus ut quam lacinia.', '');

INSERT INTO recenze (id_prispevku, id_recenzenta, aktualnost, zajimavost_prinosnost, originalita, odborna_uroven, jazykova_a_stylova_uroven, vyjadreni, datum)
VALUES
    (1, 2, 5, 4, 5, 4, 4, 'Výborný příspěvek s vysokou kvalitou.', '2022-03-15'),
    (2, 2, 4, 4, 4, 3, 4, 'Dobrý článek, ale potřebuje trochu více detailů.', '2022-06-20'),
    (3, 2, 5, 5, 5, 4, 4, 'Vynikající práce na sportovním článku.', '2022-09-10'),
    (4, 2, 3, 2, 3, 3, 4, 'Autor by měl pracovat na jazykové stránce textu.', '2022-12-05');

INSERT INTO terminy (id_prispevku, typ_terminu, datum)
VALUES
    (1, 'Datum odevzdání příspěvku', '2022-04-10'),
    (2, 'Datum odeslání příspěvku recenzentům', '2022-07-15'),
    (3, 'Datum doručení posudku recenzentem', '2022-10-20'),
    (4, 'Datum doručení posudků autorovi', '2022-12-25');