array
(
    
   "ID"           =>  array
   (
      "Sql"   => "INT NOT NULL PRIMARY KEY AUTO_INCREMENT",
      "Name"  => "ID",
      "Type"  => "",
      "Size" => "",
      "Compulsory" => FALSE,
      "Visible" => 0,
      "Admin" => 1,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
   ),
   "Unit" => array
   (
      "Name" => "Entidade",
      "Name_UK" => "Entity",

      "Sql" => "INT",
      "SqlClass" => "Units",
      "Search" => FALSE,
      "SqlDerivedData" => array("ame"),
      "GETSearchVarName"  => "Unit",

      "Default"   => $this->CGI_GET("Unit"),
      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 2,
      "Friend" => 1,
      "Coordinator" => 1,
      
      "Compulsory" => 1,
   ),
   "Language"         => array
   (
      "Sql" => "VARCHAR(4)",
      "ShortName"  => "Idioma",
      "ShortName_UK"  => "Language",
      "Name"  => "Idioma",
      "Name_UK"  => "Language",
      "Title"  => "Idioma",
      "Title_UK"  => "Language",
      "Type"  => "",

      "Size" => 2,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
      "Search"  => TRUE,
   ),
   "Name"         => array
   (
      "Sql" => "VARCHAR(256)",
      "ShortName"  => "Nome",
      "ShortName_UK"  => "Nome",
      "Name"  => "Nome Completo",
      "Name_UK"  => "Full Name",
      "Title"  => "Nome Completo",
      "Title_UK"  => "Full Name",
      "Type"  => "",
      "Size" => "35",
      "Compulsory" => 1,
      "TrimCase" => 1,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
      "Search"  => TRUE,
      "TrimCase"  => TRUE,
   ),
   "TextName"         => array
   (
      "Sql" => "VARCHAR(256)",
      "ShortName"  => "Nome (texto)",
      "ShortName_UK"  => "Nome (texto)",
      "Name"  => "Nome Completo (texto)",
      "Name_UK"  => "Full Name (texto)",
      "Title"  => "Nome Completo (texto)",
      "Title_UK"  => "Full Name (texto)",
      "Type"  => "",
      "Size" => "35",
      "Compulsory" => FALSE,
      "TrimCase" => 1,
      "Admin" => 1,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
      "Search"  => FALSE,
   ),
   "Email"        => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Email (Login)",
      "Name_UK"  => "Email (Login)",
      "Title"  => "Email (utilizado para acessar o sistema de registro)",
      "Title_UK"  => "Email (used to access the registration system)",
      "ShortName"  => "Email",
      "Type"  => "",
      "Size" => "25",
      "Compulsory" => 1,
      "ShowOnly" => 1,
      "Unique" => 1,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 1,
      "Coordinator" => 2,
      "Iconify" => 1,
      "IconColors" => array(20,20,20),
      "BkIconColors" => array(200,200,200),
      "Search"  => TRUE,
   ),
   "Password"     => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Senha de Acesso",
      "Name_UK"  => "Password",
      "Type"  => "",
      "Size" => "10",
      "Compulsory" => FALSE,

      #"Crypt" => "BlowFish",
      "Crypt" => "MD5",
      "Password" => 1,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 0,
      "Coordinator" => 2,
    ),
   "RecoverCode" => array
   (
      "Name" => "Código de Recuperação de Senha",
      "Name_UK" => "Time, Password Recovery Code",
      "Sql" => "VARCHAR(20)",
      "Search" => FALSE,
      "ReadOnly" => TRUE,
      "AdminReadOnly" => TRUE,

      "Admin" => 1,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
   ),
   "RecoverMTime" => array
   (
      "Name" => "Horário da Geração do Código de Recuperação",
      "Name_UK" => "Time, Recovery Code",
      
      "Sql" => "INT",
      "Search" => FALSE,
      "ReadOnly" => TRUE,
      "AdminReadOnly" => TRUE,
      "TimeType" => TRUE,
      "Default" => 0,

      "Admin" => 1,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
   ),
   "CondEmail"        => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Email (a ser confirmado)",
      "Name_UK"  => "Email (to be confirmed)",
      "Type"  => "",
      "Size" => "25",
      "Compulsory" => FALSE,
      "Visible" => 0,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 1,
      "Coordinator" => 1,

      "Search"  => TRUE,
      "NoAdd"  => TRUE,
   ),
   "ConfirmCode"        => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Código de Confirmação",
      "Name_UK"  => "Confirm Code",
      "Title"  => "Código usado para confirmar registro",
      "Title_UK"  => "Code used to confirm registration",
      "Type"  => "",
      "Size" => "20",
      "Compulsory" => FALSE,
      "Visible" => 0,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      
      "Friend"     => 1,
      "Coordinator" => 1,
      
      "Search"  => TRUE,
      "NoAdd"  => TRUE,
   ),
   "ConfirmDate"       => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Data de Confirmação",
      "Name_UK"  => "Date of Confirmation",
      "Type"  => "",
      "Compulsory" => FALSE,
      "TimeType"=> 1,
      "Admin" => 1,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
    ),

   "Titulation"     => array
   (
      "Sql" => "ENUM",
      "Name"  => "Titulação",
      "Name_UK"  => "Titulation",
      "Type"  => "",
      "Values" => array
      (
       "Graduado(a)","Especialista","Mestre","Doutor",
       "Ensino Médio Completo","Ensino Fundamental Completo"
       ),
      "Values_UK" => array
      (
         "Graduated","Especialist","Master","Dr./PhD",
         "High School Complete","Fund. Complete"
      ),
      "Compulsory" => FALSE,
      "NoSelectSort" => TRUE,

      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
   ),
   "Institution"     => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Instituição ou Empresa",
      "Name_UK"  => "Institution or Company",
      "Size"  => 30,

      "Compulsory" => FALSE,

      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
    ),
   "Department"     => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Departamento",
      "Name_UK"  => "Department",
      "Size"  => 30,

      "Compulsory" => FALSE,

      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
    ),

   "Phone"        => array
   (
      "Sql" => "VARCHAR(32)",
      "Name"  => "N&ordm; Fone",
      "Name_UK"  => "Phone",
      "Type"  => "",
      "Size" => "13",
      "Compulsory" => FALSE,
      
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
      "Assessor"  => 2,
    ),
   "Cell"         => array
   (
      "Sql" => "VARCHAR(32)",
      "Name"  => "N&ordm; Celular",
      "Name_UK"  => "Mobile",
      "Type"  => "",
      "Size" => "13",
      "Compulsory" => FALSE,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
    ),
   "Address"         => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Endereço",
      "Name_UK"  => "Home Address",
      "Type"  => "",
      "Size" => "50",
      "Compulsory" => FALSE,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
   ),
  
   "Lattes"       => array
   (
      "Sql" => "VARCHAR(256)",
      "Name"  => "Currículo (Lattes)",
      "Name_UK"  => "Curriculum",
      "Title"  => "Currículo Lattes (URL)",
      "Title_UK"  => "Curriculum (URL)",
      "Type"  => "",
      "Size" => 30,
      "Compulsory" => FALSE,
      "Admin" => 2,
      "Person" => 0,
      "Public" => 0,
      "Friend"     => 2,
      "Coordinator" => 2,
      "HRefIt" => 1,
    ),
);
