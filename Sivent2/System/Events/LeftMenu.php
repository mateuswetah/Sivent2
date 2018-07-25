array
(
   "00_ShowEvent" => array
   (
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 1,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Events&Action=Show&Event=".$this->Event("ID"),
      "Name" => "Sobre o Evento",
      "Name_ES" => "Sobre el Evento",
      "Name_UK" => "About the Event",
      "Person" => 0,
      "Public" => 1,
   ),
   "01_Conf" => array
   (
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 0,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Events&Action=Config&Event=".$this->Event("ID"),
      "Name" => "Configuração do Evento",
      "Name_ES" => "Configuracion del Evento",
      "Name_UK" => "Event Configuration",
      "Person" => 0,
      "Public" => 0,
      "ShortName" => "Configuração",
      "ShortName_ES" => "Configuracion",
      "ShortName_UK" => "Configuration",
      "Title" => "Setup do Evento",
      "Title_ES" => "Setup del Evento",
      "Title_UK" => "Event Setup",
      
      "AccessMethod" => "Current_User_Event_May_Edit",
      "Handler" => "MyEvents_Handle_Conf",
   ),
   "02_Sponsors" => array
   (
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 1,
      "Person" => 1,
      "Public" => 1,
      
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Sponsors&Action=Search&Event=".$this->Event("ID"),
      "Name" => "Patrocinadores",
      "Name_ES" => "Patrocinadores",
      "Name_UK" => "Sponsors",
   ),
   "03_Inscriptions" => array
   (
      "AccessMethod" => "Coordinator_Inscriptions_Access_Has",
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 0,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Inscriptions&Action=EditList&Event=".$this->Event("ID"),
      "Name" => "Inscrições",
      "Name_ES" => "Inscriciones",
      "Name_UK" => "Inscriptions",
      "Person" => 0,
      "Public" => 0,
      "ShortName" => "Inscrições",
      "ShortName_ES" => "Inscriciones",
      "ShortName_UK" => "Inscriptions",
      "Title" => "Inscrições",
      "Title_ES" => "Inscriciones",
      "Title_UK" => "Inscriptions",
   ),
   "04_Collaborations" => array
   (
      "AccessMethod" => "Event_Collaborations_Has",
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 1,
      "Person" => 1,
      "Public" => 1,
      
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Collaborations&Action=Search&Event=".$this->Event("ID"),
      "Name" => "Colaborações",
      "Name_ES" => "Colaboraciones",
      "Name_UK" => "Collaborations",
       "ShortName" => "Colaborações",
      "ShortName_ES" => "Colaboraciones",
      "ShortName_UK" => "Collaborations",
      "Title" => "Colaborações",
      "Title_ES" => "Colaboraciones",
      "Title_UK" => "Collaborations",
   ),
   "05_Caravans" => array
   (
      "AccessMethod" => "Event_Caravans_Has",
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 0,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Caravans&Action=Search&Event=".$this->Event("ID"),
      "Name" => "Caravanas",
      "Name_ES" => "Caravanas",
      "Name_UK" => "Caravans",
      "Person" => 0,
      "Public" => 0,
      "ShortName" => "Caravanas",
      "ShortName_ES" => "Caravanas",
      "ShortName_UK" => "Caravans",
      "Title" => "Gerenciar Caravanas",
      "Title_ES" => "Caravanas",
      "Title_UK" => "Manage Caravans",
   ),
   "06_Submissions" => array
   (
      "AccessMethod" => "Current_User_Event_Submissions_May_Show",
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 0,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Submissions&Action=Search&Event=".$this->Event("ID"),
      "Name" => "Atividades",
      "Name_ES" => "Actividades",
      "Name_UK" => "Activities",
      "Person" => 0,
      "Public" => 0,
      "ShortName" => "Atividades",
      "ShortName_ES" => "Actividades",
      "ShortName_UK" => "Activities",
      "Title" => "Gerenciar Atividades",
      "Title_ES" => "Actividades",
      "Title_UK" => "Manage Activities",
   ),
   "07_Schedule" => array
   (
      "AccessMethod" => "Current_User_Event_Schedule_May_Show",
      "Admin" => 0,
      "Coordinator" => 0,
      "Friend" => 1,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Schedules&Action=Schedule&Event=".$this->Event("ID"),
      "Name" => "Grade",
      "Name_ES" => "Grade",
      "Name_UK" => "Schedule",
      "Person" => 0,
      "Public" => 1,
      "ShortName" => "Grade",
      "ShortName_ES" => "Grade",
      "ShortName_UK" => "Schedule",
      "Title" => "Mostrar Grade do Evento",
      "Title_ES" => "Mostrar Grade del Evento",
      "Title_UK" => "Show Event Schedule",
   ),
   "09_PreInscriptions" => array
   (
      "AccessMethod" => "Coordinator_PreInscriptions_Access_Has",
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 0,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=PreInscriptions&Action=Search&Event=".$this->Event("ID"),
      "Name" => "Preinscrições",
      "Name_ES" => "Preinscriciones",
      "Name_UK" => "Preinscriptions",
      "Person" => 0,
      "Public" => 0,
      "ShortName" => "Preinscrições",
      "ShortName_ES" => "Preinscriciones",
      "ShortName_UK" => "Preinscriptions",
      "Title" => "Preinscrições",
      "Title_ES" => "Preinscriciones",
      "Title_UK" => "Preinscriptions",
      'AccessMethod'    => "Current_User_Event_PreInscriptions_May_Edit",
   ),
   "10_Presences" => array
   (
      "AccessMethod" => "Coordinator_Presences_Access_Has",
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 0,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Presences&Action=Search&Event=".$this->Event("ID"),
      "Name" => "Presenças",
      "Name_ES" => "Presencias",
      "Name_UK" => "Presences",
      "Person" => 0,
      "Public" => 0,
      "ShortName" => "Presenças",
      "ShortName_ES" => "Presencias",
      "ShortName_UK" => "Presences",
      "Title" => "Presenças",
      "Title_ES" => "Presencias",
      "Title_UK" => "Presences",
   ),
   "16_Statistics" => array
   (
      "Admin" => 1,
      "Coordinator" => 1,
      "Friend" => 1,
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Events&Action=Statistics&Event=".$this->Event("ID"),
      "Name" => "Estatisticas",
      "Name_ES" => "Estatisticas",
      "Name_UK" => "Statistics",
      "Person" => 1,
      "Public" => 1,
      "Title" => "Estatisticas do Evento",
      "Title_ES" => "Estatisticas do Evento",
      "Title_UK" => "Event Statistics",
   ),
);

