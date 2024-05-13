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
        int FK_is_marque
        int FK_pp
        int FK_genre
    }

    avent {

        int avent_id
        string nom
        datetime date_debut
        datetime date_fin
        datetime fin_inscription 
        string description
        string lien_site
        string lien_billeterie
        string lieu
        int capacity
        bool is_payant
        bool is_public
        int  FK_sous_genre
        date date_creation
        int age_minimum
        int FK_state
        int FK_createur
    }

    task {
        int task_id
        string content
        bool state
        int FK_avent_id
        int FK_finisseur
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
        int FK_photo_id
        int FK_avent_id
    }

    fav_avent_for_user {
        int FK_user_id
        int FK_avent_id
    }

    fav_theme_for_user {
        int FK_user_id
        int FK_theme_id
    }

    organisateur_avent {
        int FK_user_id
        int FK_avent_id
    }

    sponso_avent {
        int FK_brand_id
        int FK_avent_id
    }

    theme_for_avent {
        int FK_theme_id
        int FK_avent_id
    }

    inscrit {
        int FK_user_id
        int FK_avent_id
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
        datetime date_view
    }

    user }|--o| brand : represents
    user }o--|| genre : is
    user }o--|| photo : has

    user ||--o{ suggestion : has_suggestion
    avent ||--o{ suggestion : suggested_for

    user ||--o{ views : saw
    avent ||--o{ views : saw_by

    user ||--o{ fav_avent_for_user : a_fav
    fav_avent_for_user }o--|| avent : a_fav

    user ||--o{ fav_theme_for_user : like 
    fav_theme_for_user }o--|| theme : like 

    user ||--o{ inscrit : inscrit_a
    inscrit }o--|| avent : inscrit_a
    
    avent }o--|| state : is
    avent }o--|| user : create
    avent ||--|{ photo_for_avent : has
    photo_for_avent }o--|| photo : has
    avent ||--o{ task : has
    avent ||--o{ sous_genre : has

    avent ||--|{ organisateur_avent : organize
    organisateur_avent }o--|| user : organize

    avent ||--o{ sponso_avent : sponsorized_by
    sponso_avent }o--|| brand : sponsorized_by

    avent ||--|{ theme_for_avent : has
    theme_for_avent }o--|| theme : has

    task }o--o| user : finished

    

```