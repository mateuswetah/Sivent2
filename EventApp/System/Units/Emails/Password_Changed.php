array
(
   "Name" => "Email de Alteração de Senha, Confirmação",
   "Name_UK" => "Change Password Mail, Confirmation",
   "Title" => "Email de Confirmação, Confirmação",
   "Title_UK" => "Confirmation Email, Confirmation",
   
   "Data" => array("Subject","Body"),
   "Data_UK" => array("Subject_UK","Body_UK"),
   
   "Subject" => array
   (
      "Size" => "50",
      "Sql"          => "TEXT",
      
      "Default"      => "#ApplicationName: Senha alterada, #Unit_Title, #Institution",
      "Default_UK"   => "#ApplicationName: Password changed, #Unit_Title, #Institution",

      "Public"   => 0,
      "Person"   => 1,
      "Friend"    => 1,
      "Admin"    => 2,
      "Coordinator" => 2,
   ),
   "Body" => array
   (
      "Size" => "50x10",
      "Sql"          => "TEXT",
      
      "Default"      =>
        "Informamos que sua senha foi alterada:\n\n".
        "Usuário: #Email\n".
        "Senha: #Password\n\n".
        "Por favor, acesse seu cadastro, utilizando o seguinte link:\n\n".
        "#Href"
      ,
      "Default_UK"   =>
        "We hereby inform, that yoour password has been changed:\n\n".
        "User: #Email\n".
        "Password: #Password\n\n".
        "Please use the following link to access your registration:\n\n".
        "#Href"
      ,
      
      "Public"   => 0,
      "Person"   => 1,
      "Friend"    => 1,
      "Admin"    => 2,
      "Coordinator" => 2,
   ),
);