<?php

print_r($_POST);

echo '<hr />';
echo '<pre>';
print_r($_FILES);

move_uploaded_file($_FILES["picture1"]["tmp_name"],__DIR__ .'/'.$_FILES["picture1"]["name"]);
move_uploaded_file($_FILES["picture2"]["tmp_name"],__DIR__ .'/'.$_FILES["picture2"]["name"]);