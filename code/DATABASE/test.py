import random
from datetime import datetime, timedelta

# Fonction pour générer une date aléatoire entre deux dates
def random_date(start, end):
    return start + timedelta(seconds=random.randint(0, int((end - start).total_seconds())))

# Données de base pour les événements
event_names = ["Concert Rock", "Conférence Tech", "Festival de Jazz", "Salon du Livre", "Marathon", "Compétition de Jeux Vidéo"]
locations = ["Parc Central", "Centre de Conférences", "Place du Marché", "Stade Municipal", "Centre Culturel", "Salle de Concert"]

# Dates de référence
now = datetime.now()
start_date = now + timedelta(days=1)
end_date = now + timedelta(days=60)

# Initialisation des requêtes SQL
insert_avent = "INSERT INTO avent (nom, date_debut, date_fin, fin_inscription, information, lien_site, lien_billeterie, lieu, capacity, etat, is_payant, is_public, age_minimum, createur) VALUES\n"
insert_theme = "INSERT INTO theme_for_avent (avent_id, theme_id) VALUES\n"
insert_sous_theme = "INSERT INTO sous_theme (sous_theme_name, avent_id) VALUES\n"
insert_photo = "INSERT INTO photo_for_avent (photo_id, avent_id) VALUES\n"

# Génération des événements
for i in range(1, 201):
    name = random.choice(event_names)
    date_debut = random_date(start_date, end_date)
    date_fin = date_debut + timedelta(hours=random.randint(2, 12))
    fin_inscription = date_debut - timedelta(days=1)
    information = f"Information sur {name.lower()}."
    lien_site = f"http://{name.lower().replace(' ', '')}.com"
    is_payant = random.choice([0, 1])
    lien_billeterie = f"http://billeterie.com/{name.lower().replace(' ', '')}" if is_payant else "NULL"
    lieu = random.choice(locations)
    capacity = random.randint(50, 1000)
    etat = 1
    is_public = 1
    age_minimum = random.randint(10, 18)
    createur = 1

    insert_avent += f"('{name}', '{date_debut}', '{date_fin}', '{fin_inscription}', '{information}', '{lien_site}', '{lien_billeterie}', '{lieu}', {capacity}, {etat}, {is_payant}, {is_public}, {age_minimum}, {createur}),\n"

    # Génération des thèmes pour chaque événement
    themes = random.sample(range(1, 32), 3)
    for theme in themes:
        insert_theme += f"({i}, {theme}),\n"

    # Génération des sous-thèmes pour chaque événement
    sous_themes = ["Sous-thème 1", "Sous-thème 2", "Sous-thème 3"]
    for sous_theme in sous_themes:
        insert_sous_theme += f"('{sous_theme}', {i}),\n"

    # Génération des photos pour chaque événement
    insert_photo += f"(1, {i}),\n"

# Enlèvement de la dernière virgule et ajout de point-virgule
insert_avent = insert_avent.rstrip(",\n") + ";\n"
insert_theme = insert_theme.rstrip(",\n") + ";\n"
insert_sous_theme = insert_sous_theme.rstrip(",\n") + ";\n"
insert_photo = insert_photo.rstrip(",\n") + ";\n"

# Écriture dans un fichier
with open("insert_events.sql", "w") as file:
    file.write(insert_avent)
    file.write(insert_theme)
    file.write(insert_sous_theme)
    file.write(insert_photo)

print("Fichier SQL généré avec succès.")