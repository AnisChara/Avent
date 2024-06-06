<?php

if(isset($_FILES['myFile']["type"]) && isset($_FILES['myFile']["size"]))
{
    require '../m_insert_img.php';
    insert_img($_FILES);

    require '../m_connexion_bdd.php';

    $query = "SELECT photo_file FROM photo ORDER BY photo_id DESC LIMIT 1";
    $img = base64_encode(queryDB($db,$query)[0]['photo_file']);
    echo '<img src=data:image/jpg;base64,'.$img.' alt="" class="suggestion-image">';
}
else
{
    echo '
        <form method="POST" action="test_m_insert_img.php" enctype="multipart/form-data">
            <div>
              <label for="file">Choisir un fichier</label>
              <input type="file" id="file" name="myFile" />
            </div>
            <div>
              <button>Envoyer le fichier</button>
            </div>
          </form>
    ';

}
/*
echo '
        <form method="POST" action="test_m_insert_img.php" enctype="multipart/form-data">
            <div>
              <label for="file">Choisir un fichier</label>
              <input type="file" id="file" name="myFile" />
            </div>
            <div>
              <button>Envoyer le fichier</button>
            </div>
          </form>
';
*/

