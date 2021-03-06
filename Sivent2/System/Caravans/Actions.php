array
(
      'Export' => array
      (
         'Public' => 1,
         'Person' => 0,
         "Admin" => 1,
         "Friend"     => 0,
         "Coordinator" => 1,
         "AccessMethod" => "CheckShowListAccess",
      ),
      'Search' => array
      (
         'Public' => 0,
         'Person' => 0,
         "Admin" => 1,
         "Friend"     => 1,
         "Coordinator" => 1,
         "AccessMethod" => "CheckShowListAccess",
      ),
      'Add' => array
      (
         'Public' => 0,
         'Person' => 0,
         "Admin" => 1,
         "Friend"     => 0,
         "Coordinator" => 1,
         "AccessMethod" => "CheckEditListAccess",
      ),
      'Copy' => array
      (
         'Public' => 0,
         'Person' => 0,
         "Admin" => 1,
         "Friend"     => 0,
         "Coordinator" => 1,
         "AccessMethod" => "CheckEditListAccess",
      ),
      'Show' => array
      (
         'Public' => 1,
         'Person' => 0,
         "Admin" => 1,
         "Friend"     => 0,
         "Coordinator" => 1,
         "AccessMethod" => "CheckShowAccess",
      ),
      'Edit' => array
      (
         'Public' => 0,
         'Person' => 0,
         "Admin" => 1,
         "Friend"     => 0,
         "Coordinator" => 1,
         "AccessMethod" => "CheckEditAccess",
      ),
      'EditList' => array
      (
         'Public' => 0,
         'Person' => 0,
         "Admin" => 1,
         "Friend"     => 0,
         "Coordinator" => 1,
         "Assessor"  => 0,
         "AccessMethod" => "CheckEditListAccess",
      ),
      'Delete' => array
      (
         'Public' => 0,
         'Person' => 0,
         "Admin" => 1,
         "Friend"     => 0,
         "Coordinator" => 1,
         "AccessMethod"  => "CheckDeleteAccess",
      ),
   "Caravaneers_Search" => array
   (
      "Href"     => "",
      "HrefArgs" => "?ModuleName=Caravaneers&Action=Search",
      "Title"    => "Participantes de Caravanas",
      "Title_UK" => "Caravan Participants",
      "Name"     => "Caravaneiros",
      "Name_UK"   => "Caravaneers",

      "Public"   => 0,
      "Person"   => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
      "Admin"    => 1,
      "Singular"    => TRUE,
      "AccessMethod"    => "CheckShowAccess",
  ),
   "Caravaneers" => array
   (
      "Href"     => "",
      "HrefArgs" => "?ModuleName=Caravans&Action=Caravaneers&ID=#ID",
      "Title"    => "Participantes da Caravana",
      "Title_UK" => "Caravan Participants",
      "Name"     => "Caravaneiros",
      "Name_UK"   => "Caravaneers",
      
      "Handler"   => "Caravan_Caravaneers_Handle",

      "Public"   => 0,
      "Person"   => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
      "Admin"    => 1,
      "Singular"    => TRUE,
      "AccessMethod"    => "CheckEditAccess",
  ),
   "Print_List" => array
   (
      "Href"     => "",
      "HrefArgs" => "?ModuleName=Caravans&Action=Caravaneers&ID=#ID&Latex=1",
      "Title"    => "Para Viagem",
      "Title_UK" => "For Travelling",
      "Name"     => "Lista de Participantes",
      "Name_UK"   => "List of Participants",
      
      "Handler"   => "Caravan_Caravaneers_Handle",

      "Public"   => 0,
      "Person"   => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
      "Admin"    => 1,
      "Singular"    => TRUE,
      "AccessMethod"    => "CheckEditAccess",
  ),
   "Print_Credencial" => array
   (
      "Href"     => "",
      "HrefArgs" => "?ModuleName=Caravans&Action=Caravaneers&ID=#ID&Latex=1&Cred=1",
      "Title"    => "Lista de Assinaturas",
      "Title_UK" => "Signatures List",
      "Name"     => "Lista de Assinaturas",
      "Name_UK"   => "Signatures List",
      
      "Handler"   => "Caravan_Caravaneers_Handle",

      "Public"   => 0,
      "Person"   => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
      "Admin"    => 1,
      "Singular"    => TRUE,
      "AccessMethod"    => "CheckEditAccess",
  ),
    "Emails" => array
    (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Caravans&Action=Emails",
        "Title"    => "Emails",
        "Title_UK" => "Emails",
        "ShortName"     => "Emails",
        "ShortName_UK"   => "Emails",
        "Name"     => "Emails",
        "Name_UK"   => "Emails",
        "Handler"   => "HandleEmails",

        'Public' => 0,
        'Person' => 0,
        "Admin" => 1,
        "Friend"     => 0,
        "Coordinator" => 1,
        "AccessMethod" => "CheckEditListAccess",
    ),
   "GenCert" => array
   (
      "Href"     => "",
      "HrefArgs" => "?ModuleName=Caravans&Action=GenCert&Latex=1&ID=#ID",
      "Title"    => "Gerar Certificado",
      "Title_UK" => "Generate Certificate",
      "Name"     => "Certificado(s)",
      "Name_UK"   => "Certificado(s)",
      
      "Handler"   => "Caravan_Handle_Certificate_Generate",
      "AccessMethod"  => "CheckCertAccess",

      "Icon"   => "fas fa-certificate",
      "Public"   => 0,
      "Person"   => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
      "Admin"    => 1,
   ),
   "GenCerts" => array
   (
      "Href"     => "",
      "HrefArgs" => "?ModuleName=Caravans&Action=GenCerts&Latex=1",

      "Title"    => "Gerar Certificados dos Caravanas",
      "Title_UK" => "Generate Caravan Certificates",
      "Name"     => "Certificados dos  Caravanas",
      "Name_UK"   => "Caravan Certificates",
       
      "Handler"   => "Caravans_Handle_Certificates_Generate",

      "Icon"   => "fas fa-file-pdf",
      "Public"   => 0,
      "Person"   => 0,
      "Friend"     => 1,
      "Coordinator" => 1,
      "Admin"    => 1,
   ),
    "Import" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Importar #ItemsName de outro Evento",
        "Title_UK" => "Import #ItemsName_UK from other Event",
        "Title_ES"    => "Importar #ItemsName_ES de outro Evento",
        "Name"     => "Importar",
        "Name_UK"  => "Import",
        "Name_ES"     => "Importar",
        //"Icon"     => "rubik.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Coordinator"   => 1,
        "Handler"   => "EventMod_Import_Events_Handle",
        "Singular"   => FALSE,
    ),
);
