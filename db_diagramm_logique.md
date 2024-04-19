# AVent Database
``` mermaid
erDiagram

    user {

        int user_id
        string nom
        string prenom
        string email
        string pseudo
        date date_naissance
        date date_inscription
        bool is_verif
        foreign_key is_marque
        foreign_key pp
        foreign_key genre
    }

    avent {

        int avent_id
        string nom
        date date_debut
        date date_fin
        string horaire_debut
        string horaire_fin
        string description
        string lien_site
        string lien_billeterie
        string lieu
        int capacity
        bool is_payant
        bool is_public
        string sous_genre
        date date_creation
        int age_minimum
        foreign_key state
        foreign_key createur
    }

    task {
        int task_id
        string content
        bool state
        foreign_key avent_id
        foreign_key finisseur
    }

    state {
        int id_state
        string state
    }

    brand {
        int id_brand
        string name
        int siret
    }

    genre {
        int id_genre
        string genre
    }

    theme {
        int id_theme 
        string name
    }

    photo {
        int photo_id
        blob photo
    }

    photo_for_avent {
        foreign_key photo_id
        foreign_key avent_id
    }

    fav_avent_for_user {
        foreign_key user_id
        foreign_key avent_id
    }

    fav_theme_for_user {
        foreign_key user_id
        foreign_key theme_id
    }

    organisateur_avent {
        foreign_key user_id
        foreign_key avent_id
    }

    sponso_avent {
        foreign_key brand_id
        foreign_key avent_id
    }

    theme_for_avent {
        foreign_key theme_id
        foreign_key avent_id
    }

    inscrit {
        foreign_key user_id
        foreign_key avent_id
    }

    user }|--o| brand : represents
    user }o--|| genre : is
    user }o--|| photo : has

    user }o--o{ fav_avent_for_user : a_fav
    fav_avent_for_user }o--o{ avent : a_fav

    user }o--o{ fav_theme_for_user : like 
    fav_theme_for_user }o--o{ theme : like 

    user }o--o{ inscrit : inscrit_a
    inscrit }o--o{ avent : inscrit_a
    
    avent }o--|| state : is
    avent }o--|| user : create
    avent }o--|{ photo_for_avent : has
    photo_for_avent }o--|{ photo : has
    avent ||--o{ task : has

    avent }o--|{ organisateur_avent : organize
    organisateur_avent }o--|{ user : organize

    avent }o--o{ sponso_avent : sponsorized_by
    sponso_avent }o--o{ brand : sponsorized_by

    avent }o--|{ theme_for_avent : has
    theme_for_avent }o--|{ theme : has

    task }o--o| user : finished

    

```