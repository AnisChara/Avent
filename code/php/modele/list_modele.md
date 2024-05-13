# liste des modeles

### **m_user**

- m_connexion (identifiants) => bool

- m_inscription (data) => bool

- m_recup_info_compte (user_id) => data

- m_update_info_compte (user_id, data) => bool

- m_collect_theme_user (user_id) => list of themes

    - m_collect_theme_fav_user (user_id) => list of themes
    - m_collect_theme_history_user (user_id) => list of themes

- m_tri_vu (user_id) => list of avent 

- m_gen_suggestion (user_themes, list of avent) => list of avent

    - m_compatibility (user_themes or user_search, info_avent)

- m_save_suggestion (list of avent, user_id) => bool

- m_clean_suggestion (user_id) => bool

- m_recup_suggestion (user_id) => list of avent

- m_recup_mes_avents (user_id) => list of avent

- m_recup_avent_inscrit (user_id) => list of avent

- m_recup_avent_fav (user_id) => list of avent

### **m_avent**
- m_collect_info_search (avent_id) => data

- m_collect_info_display (avent_id) => data

- m_collect_info_display_full (avent_id) => data

- m_add_task (avent_id, task_content) => bool

- m_delete_task (avent_id, task_id) => bool

- m_create_avent (data) => bool

- m_valid_unvalid_task (task_id) => bool

- m_edit_orga (avent_id) => bool

- m_delete_avent (avent_id) => bool

- m_edit_avent (avent_id, data) => bool

### **autres**

- m_fav_unfav_db (avent_id, user_id) => bool

- m_inscr_desinscr_db (avent_id, user_id) => bool

- m_mail

- m_add_image

- m_orga