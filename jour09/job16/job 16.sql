SELECT MAX(salles.capacite), etages.nom, salles.nom AS 'Biggest Room' FROM `etages` JOIN `salles` ON salles.id_etage=etages.id; 
