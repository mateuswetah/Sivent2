array
(
   "ID" => array
   (
      "Name" => "ID",
      "Sql" => "INT NOT NULL PRIMARY KEY AUTO_INCREMENT",
      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 1,
      "Friend" => 1,
      "Coordinator" => 1,
   ),
   "Unit" => array
   (
      "Name" => "Unidade",
      "Name_UK" => "Unit",

      "Sql" => "INT",
      "SqlClass" => "Units",
      "Search" => FALSE,
      "SqlDerivedData" => array("Name"),
      "GETSearchVarName"  => "Unit",

      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 2,
      "Friend" => 1,
      "Coordinator" => 1,
      
      "Compulsory" => 1,
   ),
   "Event" => array
   (
      "Name" => "Evento",
      "Name_UK" => "Event",
      
      "SqlClass" => "Events",
      "Search" => TRUE,
      "Compulsory"  => TRUE,

      "SqlDerivedData" => array("Name"),
      "GETSearchVarName"  => "Event",
      "Sql" => "INT",
      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 2,
      "Friend"     => 1,
      "Coordinator" => 1,
    ),
   "Name" => array
   (
      "Name" => "Título (PT)",
      "Title" => "Título (PT)",
      "Name_UK" => "Title (PT)",
      "Title_UK" => "Title (PT)",

      "Size" => "50",
      "Sql" => "VARCHAR(256)",
      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 2,
      "Friend" => 1,
      "Coordinator" => 2,
      
      "Search"  => TRUE,
      "Compulsory"  => TRUE,
   ),
   "Name_UK" => array
   (
      "Name" => "Título (UK)",
      "Title" => "Título (UK)",
      "Name_UK" => "Title (UK)",
      "Title_UK" => "Title (UK)",

      "Size" => "50",
      "Sql" => "VARCHAR(256)",
      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 2,
      "Friend" => 1,
      "Coordinator" => 2,
      
      "Search"  => TRUE,
      "Compulsory"  => FALSE,
   ),
   "TimeLoad" => array
   (
      "Name" => "CH",
      "Title" => "CH Padrão",
      "Name_UK" => "Timeload",
      "Title_UK" => "Default Timeload",

      "Size" => "2",
      "Sql" => "INT",
      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 2,
      "Friend" => 1,
      "Coordinator" => 2,
      
      "Default"  => 20,
      "Search"  => TRUE,
      "Compulsory"  => TRUE,
   ),
   "CertText" => array
   (
      "Name" => "Texto (Cert)",
      "Title" => "Texto (Certificado)",
      "Name_UK" => "Text (Cert)",
      "Title_UK" => "Text (Certificate)",

      "Size" => "50",
      "Sql" => "VARCHAR(256)",
      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 2,
      "Friend" => 1,
      "Coordinator" => 2,
      
      "Search"  => TRUE,
      "Compulsory"  => FALSE,
   ),
   "Inscriptions" => array
   (
      "Name" => "Inscrições",
      "Title" => "Colaboração Participa em Inscrições",
      "Name_UK" => "Inscriptions",
      "Title_UK" => "Collaboration Participates in Inscriptions",
      
      "Sql" => "ENUM",
      "Default" => 2,
      "Values" => array("Não","Sim"),
      "Values_UK" => array("No","Yes"),
      
      "Public"   => 1,
      "Person"   => 0,
      "Admin"    => 2,
      "Friend" => 1,
      "Coordinator" => 2,
      
      "Search"  => TRUE,
      "Compulsory"  => FALSE,
   ),
);