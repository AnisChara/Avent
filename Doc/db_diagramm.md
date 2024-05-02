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
        date date_creation
        int age_minimum
    }

    task {
        int task_id
        string content
        bool state
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

    sous_genre {
        int sous_genre_id
        string sous_genre_name
    }

    suggestion {
        int user_id
        int avent_id
        int order
    }

    views {
        int user_id
        int avent_id
    }

    user }|--o| brand : represents
    user }o--|| genre : is
    user }o--|| photo : has
    user }o--o{ avent : a_fav
    user }o--o{ theme : like 
    user }o--o{ avent : inscrit_a
    user }o--o{ avent : saw
    user }o--o{ avent : suggested_for
    
    avent }o--|| state : is
    avent }o--|| user : create
    avent }o--|{ photo : has
    avent ||--o{ task : has
    avent }o--|{ user : organize
    avent }o--o{ brand : sponsorized_by
    avent }o--|{ theme : has
    avent ||--o{ sous_genre : has

    task }o--|| user : finished

    

```