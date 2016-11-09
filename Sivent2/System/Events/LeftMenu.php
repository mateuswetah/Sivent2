array
(
   "01_EditEvent" => array
   (
      "AccessMethod" => "Current_User_Event_May_Edit",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Events&Action=Edit&Event=#Event",
      "Name" => "Configuração do Evento",
      "Name_ES" => "Configuracion del Evento",
      "Name_UK" => "Event Configuration",
      "Person" => "0",
      "Public" => "1",
      "ShortName" => "Configuração",
      "ShortName_ES" => "Configuracion",
      "ShortName_UK" => "Configuration",
      "Title" => "Setup do Evento",
      "Title_ES" => "Setup",
      "Title_UK" => "Event Setup",
   ),
   "02_ShowEvent" => array
   (
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "1",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Events&Action=Show&Event=#Event",
      "Name" => "Sobre o Evento",
      "Name_ES" => "Sobre el Evento",
      "Name_UK" => "About the Event",
      "Person" => "0",
      "Public" => "1",
   ),
   /* "032_Assessments" => array */
   /* ( */
   /*    "AccessMethod" => "Friend_Assessors_Has", */
   /*    "Admin" => "1", */
   /*    "Coordinator" => "1", */
   /*    "Friend" => "1", */
   /*    "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Inscriptions&Action=Inscription&Event=#Event", */
   /*    "Name" => "Minhas Avaliações", */
   /*    "Name_ES" => "Mi Avaliaciones", */
   /*    "Name_UK" => "My Asessments", */
   /*    "Person" => "0", */
   /*    "Public" => "0", */
   /* ), */
   "04_Inscriptions" => array
   (
      "AccessMethod" => "Coordinator_Inscriptions_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Inscriptions&Action=Search&Event=#Event",
      "Name" => "Inscrições",
      "Name_ES" => "Inscriciónes",
      "Name_UK" => "Inscriptions",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Inscrições",
      "ShortName_ES" => "Inscriciónes",
      "ShortName_UK" => "Inscriptions",
      "Title" => "Inscrições do Evento",
      "Title_ES" => "Inscriciónes do Evento",
      "Title_UK" => "Event Inscriptions",
   ),
   "05_Certificates" => array
   (
       //"AccessMethod" => "Current_User_Event_Certificates_May_Edit",
      "AccessMethod" => "Coordinator_Inscriptions_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Inscriptions&Action=EditList&Event=#Event&Inscriptions_GroupName=Certificates",
      "Name" => "Certificados",
      "Name_ES" => "Certificados",
      "Name_UK" => "Certificates",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Certificados",
      "ShortName_ES" => "Certificados",
      "ShortName_UK" => "Certificates",
      "Title" => "Presenças e Certificados",
      "Title_ES" => "Certificados",
      "Title_UK" => "Presences and Certificates",
   ),
   "061_Collaborations" => array
   (
      "AccessMethod" => "Coordinator_Collaborations_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Collaborations&Action=EditList&Event=#Event",
      "Name" => "Colaborações",
      "Name_ES" => "Colaboraciones",
      "Name_UK" => "Collaborations",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Colaborações",
      "ShortName_ES" => "Colaboraciones",
      "ShortName_UK" => "Collaborations",
      "Title" => "Colaborações",
      "Title_ES" => "Colaboraciones",
      "Title_UK" => "Collaborations",
   ),
   "062_Collaborators" => array
   (
      "AccessMethod" => "Coordinator_Collaborations_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Collaborators&Action=EditList&Event=#Event",
      "Name" => "Colaboradores",
      "Name_ES" => "Colaboradores",
      "Name_UK" => "Collaborators",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Colaborações",
      "ShortName_ES" => "Colaboraciones",
      "ShortName_UK" => "Collaborations",
      "Title" => "Colaborações",
      "Title_ES" => "Colaboraciones",
      "Title_UK" => "Collaborations",
   ),
   "07_Caravans" => array
   (
      "AccessMethod" => "Coordinator_Caravans_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Caravans&Action=Search&Event=#Event",
      "Name" => "Caravanas",
      "Name_ES" => "Caravanas",
      "Name_UK" => "Caravans",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Caravanas",
      "ShortName_ES" => "Caravanas",
      "ShortName_UK" => "Caravans",
      "Title" => "Gerenciar Caravanas",
      "Title_ES" => "Caravanas",
      "Title_UK" => "Manage Caravans",
   ),
   "091_Submissions" => array
   (
      "AccessMethod" => "Current_User_Event_Submissions_May_Edit",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Submissions&Action=Search&Event=#Event",
      "Name" => "Atividades",
      "Name_ES" => "Actividades",
      "Name_UK" => "Activities",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Atividades",
      "ShortName_ES" => "Actividades",
      "ShortName_UK" => "Activities",
      "Title" => "Gerenciar Atividades",
      "Title_ES" => "Actividades",
      "Title_UK" => "Manage Activities",
   ),
   "092_Submissions" => array
   (
      "AccessMethod" => "Current_User_Event_Submissions_May_Edit",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Submissions&Action=EditList&Event=#Event&Submissions_GroupName=Assessments",
      "Name" => "Avaliações",
      "Name_ES" => "Avaliaciones",
      "Name_UK" => "Assessments",
      "Person" => "0",
      "Public" => "0",
   ),
   "10_Submissions_Pub" => array
   (
      "AccessMethod" => "SubmissionsPublic",
      "Admin" => "0",
      "Coordinator" => "0",
      "Friend" => "1",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Submissions&Action=Search&Event=#Event",
      "Name" => "Palestres",
      "Name_ES" => "Palestres",
      "Name_UK" => "Talks",
      "Person" => "0",
      "Public" => "1",
      "ShortName" => "Palestres",
      "ShortName_ES" => "Palestres",
      "ShortName_UK" => "Talks",
      "Title" => "Palestres do Event",
      "Title_ES" => "Palestres",
      "Title_UK" => "Talks at the Event",
   ),
   "11_Schedule" => array
   (
      "AccessMethod" => "SchedulePublic",
      "Admin" => "0",
      "Coordinator" => "0",
      "Friend" => "1",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Schedules&Action=Schedule&Event=#Event",
      "Name" => "Grade",
      "Name_ES" => "Grade",
      "Name_UK" => "Schedule",
      "Person" => "0",
      "Public" => "1",
      "ShortName" => "Grade",
      "ShortName_ES" => "Grade",
      "ShortName_UK" => "Schedule",
      "Title" => "Mostrar Grade do Evento",
      "Title_ES" => "Mostrar Grade del Evento",
      "Title_UK" => "Show Event Schedule",
   ),
   "12_Schedule" => array
   (
      "AccessMethod" => "Coordinator_Submissions_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Schedules&Action=Schedule&Event=#Event",
      "Name" => "Grade",
      "Name_ES" => "Grade",
      "Name_UK" => "Schedule",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Grade",
      "ShortName_ES" => "Grade",
      "ShortName_UK" => "Schedule",
      "Title" => "Grade do Evento",
      "Title_ES" => "Grade",
      "Title_UK" => "Event Schedule",
   ),
   "13_Speakers" => array
   (
      "AccessMethod" => "Coordinator_Submissions_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Speakers&Action=Search&Event=#Event",
      "Name" => "Palestrantes",
      "Name_ES" => "Palestrantes",
      "Name_UK" => "Speakers",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Palestrantes",
      "ShortName_ES" => "Palestrantes",
      "ShortName_UK" => "Speakers",
      "Title" => "Palestrantes",
      "Title_ES" => "Palestrantes",
      "Title_UK" => "Speakers",
   ),
   "14_PreInscriptions" => array
   (
      "AccessMethod" => "Coordinator_PreInscriptions_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=PreInscriptions&Action=Search&Event=#Event",
      "Name" => "Preinscrições",
      "Name_ES" => "Preinscriciones",
      "Name_UK" => "Preinscriptions",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Preinscrições",
      "ShortName_ES" => "Preinscriciones",
      "ShortName_UK" => "Preinscriptions",
      "Title" => "Preinscrições",
      "Title_ES" => "Preinscriciones",
      "Title_UK" => "Preinscriptions",
   ),
   "15_Presences" => array
   (
      "AccessMethod" => "Coordinator_Presences_Access_Has",
      "Admin" => "1",
      "Coordinator" => "1",
      "Friend" => "0",
      "Href" => "?Unit=".$this->Unit("ID")."&ModuleName=Presences&Action=Search&Event=#Event",
      "Name" => "Presenças",
      "Name_ES" => "Presencias",
      "Name_UK" => "Presences",
      "Person" => "0",
      "Public" => "0",
      "ShortName" => "Presenças",
      "ShortName_ES" => "Presencias",
      "ShortName_UK" => "Presences",
      "Title" => "Presenças",
      "Title_ES" => "Presencias",
      "Title_UK" => "Presences",
   ),
);

