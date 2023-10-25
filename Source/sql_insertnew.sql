INSERT INTO uzivatele (jmeno, prijmeni, email, heslo, role)
VALUES
    ('Petr', 'Novák', 'petr.novak@gmail.com', 'heslo_autor', 'autor'),
    ('Jana', 'Nováková', 'jana.novakova@gmail.com', 'heslo_recenzent', 'recenzent'),
    ('Martin', 'Vlček', 'martin.vlcek@gmail.com', 'heslo_redaktor', 'redaktor'),
    ('Karolína', 'Malá', 'karolina.mala@gmail.com', 'heslo_sefredaktor', 'sefredaktor'),
    ('David', 'Kovařík', 'david.kovarik@gmail.com', 'heslo_admin', 'admin');

 INSERT INTO prispevky (nazev, autor, tema, text, stav)
VALUES
    ('Studie o kosmických anomáliích', 1, 'Věda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'podáno'),
    ('Vývoj nových léků na onemocnění', 1, 'Věda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'přijato'),
    ('Oceánografie: Tajemství hlubin oceánů', 1, 'Věda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'podáno'),
    ('Astronomie: Cesta k novým objevům', 1, 'Věda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'přijato'),
    ('Chirurgické inovace v moderní medicíně', 1, 'Věda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'podáno'),
    ('Inovace v automobilovém průmyslu', 1, 'Technika', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'přijato'),
    ('Budoucnost robotiky', 1, 'Technika', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'podáno'),
    ('Školní atletické úspěchy', 1, 'Školní sportovní úspěchy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'přijato'),
    ('Vítězná sezóna školního fotbalového týmu', 1, 'Školní sportovní úspěchy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'podáno'),
    ('Moderní přístupy k programování', 1, 'Programování', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'přijato'),
    ('Programování pro začátečníky', 1, 'Programování', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'podáno'),
    ('Algoritmy: Cesta ke kódování', 1, 'Programování', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'přijato'),
    ('Nástroje pro vývoj softwaru', 1, 'Programování', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'podáno');

    INSERT INTO recenze (id_prispevku, id_recenzenta, aktualnost, zajimavost_prinosnost, originalita, odborna_uroven, jazykova_a_stylova_uroven, vyjadreni, datum)
VALUES
    (1, 2, 4, 4, 5, 4, 5, 'Autor názorně představil problematiku a poskytl detailní analýzu. Práce obsahuje nový pohled na dané téma, což ji činí originální. Jediným drobným nedostatkem je jazyk, který místy potřebuje gramatickou úpravu.', '2020-06-15'),
    (2, 2, 4, 4, 5, 4, 4, 'Příspěvek je zajímavý a dobře napsaný. Zaujímavá diskuze na dané téma. Kladu důraz na jeho originalitu a odbornou úroveň.', '2021-02-28'),
    (3, 2, 3, 4, 4, 4, 3, 'Příspěvek je solidní, i když místy trochu nejasný. Téma je pročerpáno, ale bylo by vhodné více důrazu na originalitu.', '2022-07-10'),
    (4, 2, 5, 4, 5, 4, 5, 'Autor prokázal vysokou odbornou úroveň a schopnost psát ve výborném jazyce. Toto je skvělý příspěvek.', '2020-12-05'),
    (5, 2, 3, 4, 3, 4, 4, 'Téma je podáno solidně, ale části textu by mohly být více zajímavé. Doporučuji více původního přístupu k tématu.', '2022-09-20'),
    (6, 2, 4, 4, 4, 4, 3, 'Autor názorně představil problematiku a poskytl detailní analýzu. Práce obsahuje nový pohled na dané téma, což ji činí originální. Jediným drobným nedostatkem je jazyk, který místy potřebuje gramatickou úpravu.', '2021-04-30'),
    (7, 2, 4, 3, 4, 4, 3, 'Článek mapuje školní sportovní události, ale mohl být více zajímavý. Potřebuje více prvků originality a odborného pohledu.', '2020-11-12'),
    (8, 2, 3, 3, 3, 3, 4, 'Článek poskytuje dobré informace o školních sportovních úspěších, ale jazyk může být vylepšen. Autor by mohl lépe zdůraznit jeho zajímavost.', '2022-02-19'),
    (9, 2, 5, 4, 5, 5, 5, 'Tento příspěvek je excelentní. Autor dokázal prezentovat náročné technické informace jednoduše a jasně. Text je dobře napsán a originální.', '2021-07-07'),
    (10, 2, 4, 4, 4, 4, 4, 'Autor představil zajímavé programovací koncepty. Text je dobře napsán a má solidní odbornou úroveň.', '2022-10-14'),
    (11, 2, 4, 3, 4, 3, 4, 'Příspěvek je solidní a poskytuje dobré informace. Měl by ale více zaujmout a zdůraznit originalitu tématu.', '2023-01-28'),
    (12, 2, 4, 4, 4, 4, 4, 'Autor poskytl výborný pohled na programování. Tento příspěvek je vynikající.', '2020-03-19');

    INSERT INTO terminy (id_prispevku, typ_terminu, datum)
VALUES
    (1, 'datum odevzdání příspěvku', '2020-06-15'),
    (6, 'datum odeslání příspěvku recenzentům', '2020-06-20'),
    (5, 'datum doručení posudku recenzentem', '2020-06-30'),
    (1, 'datum doručení posudků autorovi', '2020-07-05'),
    (12, 'datum doručení opraveného příspěvku recenzentům', '2020-07-15'),
    (11, 'datum schválení příspěvku', '2020-07-25'),
    (2, 'datum odevzdání příspěvku', '2021-02-10'),
    (10, 'datum odeslání příspěvku recenzentům', '2021-02-15'),
    (2, 'datum doručení posudku recenzentem', '2021-02-25'),
    (2, 'datum doručení posudků autorovi', '2021-03-05'),
    (2, 'datum doručení opraveného příspěvku recenzentům', '2021-03-15'),
    (8, 'datum schválení příspěvku', '2021-03-25'),
    (3, 'datum odevzdání příspěvku', '2022-09-10'),
    (3, 'datum odeslání příspěvku recenzentům', '2022-09-15'),
    (9, 'datum doručení posudku recenzentem', '2022-09-25'),
    (3, 'datum doručení posudků autorovi', '2022-10-05'),
    (5, 'datum doručení opraveného příspěvku recenzentům', '2022-10-15'),
    (3, 'datum schválení příspěvku', '2022-10-25');

    INSERT INTO casopis (rok, rocnik, cislo)
VALUES
(2020, 1, 1),
(2020, 1, 2),
(2020, 1, 3),
(2021, 2, 1),
(2021, 2, 2),
(2021, 2, 3),
(2022, 3, 1),
(2022, 3, 2),
(2022, 3, 3);