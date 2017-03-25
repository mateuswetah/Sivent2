array
(
     //Access pertaining (strictly) to the application
     "Help" => array
     (
        "Href"     => "",
        "HrefArgs" => "ModuleName=#Module&Action=Help",
        "Name"    => "Ajuda",
        "Title"     => "Ajuda",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"   => 1,
        "Distributor"   => 1,
        "Coordinator"   => 1,
        "Teacher"   => 1,
        "Handler"   => "MyApp_Handle_Help",
        "AccessMethod"   => "MyApp_Handle_HasHelp",
      ),
      "Start" => array
      (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Início",
        "Title_UK" => "Start",
        "Name"     => "Início",
        "Name_UK"     => "Start",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"    => 1,

        "Handler"   => "HandleStart",
      ),
      "Logon" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Efetuar Login",
        "Title_UK" => "Do Login",
        "Name"     => "Login",
        "Name_UK"     => "Login",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"    => 1,
        "Handler"   => "MyApp_Handle_Logon",
       ),
       "Logoff" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Sair do Sistema",
        "Title_UK" => "Logoff from the system",
        "Name"     => "Logoff",
        "Name_UK"  => "Logoff",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "MyApp_Handle_Logoff",
        "NoHeads"   => 1,
       ),
       "NewPassword" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Trocar sua Senha",
        "Title_UK" => "Change Your Password",
        "Name"     => "Alterar Senha",
        "Name_UK"  => "Change Password",
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "ChangePasswordForm",
       ),
       "NewLogin" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Alterar Email (Login)",
        "Title_UK" => "Change Email (Login)",
        "Name"     => "Alterar Email",
        "Name_UK"  => "Change Email",
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "ChangeLoginForm",
       ),
       "MyData" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Atualizar seus Dados Pessoas",
        "Title_UK" => "Update Your Personal Data",
        "Name"     => "Dados Pessoa",
        "Name_UK"  => "Personal Data",
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "HandleMyData",
       ),
       "SU" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "AddIDArg"   => 0,
        "Title"    => "Trocar Usuário",
        "Title_UK" => "Become Another User",
        "Name"     => "SU",
        "Name_UK"  => "SU",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Coordinator"   => 1,
        "Handler"   => "MyApp_Handle_SU",
       ),
       "UnSU" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "AddIDArg"   => 0,
        "Title"    => "Voltar para Usuário Prévia",
        "Title_UK" => "Return to Previous User",
        "Name"     => "Voltar SU",
        "Name_UK"  => "Undo SU",
        "Public"   => 0,
        "Person"   => 0,
        //"Distributor"   => 0,
        "AccessMethod"   => "UnSUAccess",
        "Admin"   => 0,
        "Handler"   => "MyApp_Handle_UnSU",
       ),
       "Log" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Ver os Logs",
        "Title_UK" => "See the Logs",
        "Name"     => "Logging",
        "Name_UK"  => "Logging",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "MyApp_Handle_Log",
       ),
       "Backup" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Efetuar Backup",
        "Title_UK" => "Perform Backup",
        "Name"     => "Backup",
        "Name_UK"  => "Backup",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "MyApp_Handle_Backup",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
       ),
       "Setup" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Editar Setup",
        "Title_UK" => "Edit Setup",
        "Name"     => "Setup",
        "Name_UK"  => "Setup",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "MyApp_Handle_Setup",
       ),
       "Modules" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Permissões e Perfís por Módulo",
        "Title_UK" => "Permissions and Profiles per Module",
        "Name"     => "Módulos",
        "Name_UK"  => "Modules",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "MyApp_Handle_ModuleSetup",
       ),
       "Admin" => array
       (
        "Href"     => "",
        "HrefArgs" => "Admin=1",
        "AddIDArg"   => 0,
        "Title"    => "Login como Administrador",
        "Title_UK" => "Become Administrator",
        "Name"     => "Admin",
        "Name_UK"  => "Admin",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "ConditionalAdmin"   => 1,
        "Handler"   => "MyApp_Handle_Admin",
       ),
       "NoAdmin" => array
       (
        "Href"     => "",
        "HrefArgs" => "Admin=0",
        "AddIDArg"   => 0,
        "Title"    => "Deixar de ser Admin",
        "Title_UK" => "Leave Admin Mode",
        "Name"     => "NoAdmin",
        "Name_UK"  => "NoAdmin",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "ConditionalAdmin"   => 1,
        "Handler"   => "MyApp_Handle_NoAdmin",
       ),
       "ModPerms" => array
       (
        "Href"     => "",
        "HrefArgs" => "Action=ModPerms",
        "AddIDArg"   => 0,
        "Title"    => "Módulos e Permissões",
        "Title_UK" => "Modules and Permissions",
        "Name"     => "Módulos",
        "Name_UK"  => "Modules",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "ConditionalAdmin"   => 1,
        "Handler"   => "MyApp_Handle_ModPerms",
       ),

       "Register" => array
       (
          "Href"     => "",
          "HrefArgs" => "?Action=Register",
          "Title"    => "Cadastrar-se",
          "Title_UK" => "Register",
          "Name"     => "Cadastrar-se",
          "Name_UK"     => "Register",
          "Public"   => 1,
          "Person"   => 0,
          "Admin"    => 0,
          "Handler"   => "HandleNewRegistration",
       ),
       "Confirm" => array
       (
          "Href"     => "",
          "HrefArgs" => "?&Action=Confirm",
          "Title"    => "Confirmar Cadastro",
          "Title_UK" => "Confirm Registration",
          "Name"     => "Confirmar Cadastro",
          "Name_UK"  => "Confirm Registration",
          "Public"   => 1,
          "Person"   => 0,
          "Admin"    => 0,
          "Handler"   => "HandleNewRegistration",
       ),
       "ResendConfirm" => array
       (
          "Href"     => "",
          "HrefArgs" => "?Action=ResendConfirm",
          "Title"    => "Reenviar Código de Confirmação",
          "Title_UK" => "Resend Confirmation Code",
          "Name"     => "Reenviar Código de Confirmação",
          "Name_UK"  => "Resend Confirmation Code",
          "Public"   => 1,
          "Person"   => 0,
          "Admin"    => 0,
          "Handler"   => "HandleNewRegistration",
       ),
       "Recover" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Recuperar sua Senha",
        "Title_UK" => "Recover Your Password",
        "Name"     => "Recuperar Senha",
        "Name_UK"  => "Recover Password",
        "Public"   => 1,
        "Person"   => 0,
        "Admin"   => 0,
        "Handler"   => "HandleRecover",
       ),
       "Sessions" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Mostrar Sessões Logadas",
        "Title_UK" => "Show Logged on Sessions",
        "Name"     => "Mostrar Sessões Logadas",
        "Name_UK"  => "Show Logged on Sessions",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleShowSessions",
       ),
       "Verify_Certs" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Verificar Certificados",
        "Title_UK" => "Verify Certificates",
        "Name"     => "Verificar Certificados",
        "Name_UK"  => "Verify Certificates",
        "Public"   => 1,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "Certificates_Handle_Verify",
       ),
       "Uploads" => array
        (
           "Href"     => "",
           "HrefArgs" => "?Action=Uploads",
           "Title"    => "Arquivos Carregados",
           "Title_UK" => "Uploaded Files",
           "Name"     => "Gerenciar Arquivos Carregados",
           "Name_UK"     => "Administer Uploaded Files",

           "Public"   => 0,
           "Person"   => 0,
           "Admin"    => 1,
           "Monitor"   => 0,
           "Coordinator"   => 1,
           "Advisor"    => 0,
           "Handler"    => "ShowDir_Handle",
        ),
     "ZIP" => array
     (
        "Href"     => "",
        "HrefArgs" => "?Action=Uploads&Zip=1",
        "Title"    => "ZIP Arquivos Carregados",
        "Title_UK" => "ZIP Uploaded Files",
        "Name"     => "ZIP Arquivos Carregados",
        "Name_UK"     => "ZIP Uploaded Files",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Monitor"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "Handler"    => "ShowDir_Handle",
      ),
     /* "Messages" => array */
     /* ( */
     /*    "Href"     => "", */
     /*    "HrefArgs" => "?Action=Messages&Event=".$this->Event("ID"), */
     /*    "Title"    => "Gerenciar Mensagens dos Sistema", */
     /*    "Title_UK" => "Manage System Messages", */
     /*    "Name"     => "Mensagens dos Sistema", */
     /*    "Name_UK"     => "System Messages", */

     /*    "Public"   => 0, */
     /*    "Person"   => 0, */
     /*    "Admin"    => 1, */
     /*    "Friend"   => 0, */
     /*    "Coordinator"   => 0, */
     /*    "Advisor"    => 0, */
     /*    "Handler"    => "MyApp_Messages_Edit_Handle", */
     /*  ), */

     
     /* "Inscriptions" => array //Move to App/Actions.php? */
     /* ( */
     /*    "Href"     => "", */
     /*    "HrefArgs" => "?ModuleName=Inscriptions&Action=Inscriptions&Event=#Event", */
     /*    "Title"    => "Gerenciar Inscrições", */
     /*    "Title_UK" => "Manage Inscriptions", */
     /*    "Name"     => "Inscrições", */
     /*    "Name_UK"     => "Inscriptions", */

     /*    "Public"   => 0, */
     /*    "Person"   => 0, */
     /*    "Admin"    => 1, */
     /*    "Friend"   => 0, */
     /*    "Coordinator"   => 1, */
     /*    "Advisor"    => 0, */
     /*  ), */


     "Event_Configuration" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Event&Action=Edit&Event=".$this->Event("ID"),
        "Title"    => "Configuração do Evento",
        "Title_UK" => "Event Configuration",
        "Name"     => "Configuração",
        "Name_UK"     => "Event Configuration",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Inscriptions_May_Edit",
      ),
     
     "Datas" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Events&Action=Datas&Event=".$this->Event("ID"),
        "Title"    => "Questionário",
        "Title_UK" => "Questionary",
        "Name"     => "Questionário",
        "Name_UK"     => "Questionary",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Inscriptions_May_Edit",
      ),
     "DataGroups" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Events&Action=DataGroups&Event=".$this->Event("ID"),
        "Title"    => "Questionário, Grupos",
        "Title_UK" => "Questionary, Groups",
        "Name"     => "Questionário, Grupos",
        "Name_UK"     => "Questionary, Groups",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Inscriptions_May_Edit",
      ),
     
     "Inscriptions" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Inscriptions&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Inscrições",
        "Title_UK" => "Manage Inscriptions",
        "Name"     => "Inscrições",
        "Name_UK"     => "Inscriptions",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Inscriptions_May_Edit",
      ),
     "Types" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Types&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Tipos de Inscrição",
        "Title_UK" => "Manage Inscription Types",
        "Name"     => "Tipos de Inscrição",
        "Name_UK"     => "Inscription Types",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Inscriptions_May_Edit",
      ),
     "Lots" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Lots&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Lotes",
        "Title_UK" => "Manage Lots",
        "Name"     => "Lotes",
        "Name_UK"     => "Lots",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Inscriptions_May_Edit",
      ),
     "Certificates" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Inscriptions&Action=EditList&Inscriptions_GroupName=Certificates&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Certificados",
        "Title_UK" => "Manage Certificates",
        "Name"     => "Certificados",
        "Name_UK"     => "Certificates",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Inscriptions_May_Edit",
      ),
     "Payments" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Inscriptions&Action=EditList&Inscriptions_GroupName=Payments&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Pagamentos",
        "Title_UK" => "Manage Payments",
        "Name"     => "Pagamentos",
        "Name_UK"     => "Payments",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Inscriptions_May_Edit",
      ),


     
     "Submissions" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Submissions&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Atividades",
        "Title_UK" => "Manage Activities",
        "Name"     => "Atividades",
        "Name_UK"     => "Activities",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        //"AccessMethod"    => "Event_Submissions_Has",
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
      ),
     "Areas" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Areas&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Trilhas",
        "Title_UK" => "Manage Areas of Interest",
        "Name"     => "Trilhas",
        "Name_UK"     => "Areas of Interest",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
      ),
      "Criterias" => array
     (
         "Href"     => "",
         "HrefArgs" => "?ModuleName=Criterias&Action=EditList&Event=".$this->Event("ID"),
         "Title"    => "Gerenciar Critérios",
         "Title_UK" => "Manage Criterias",
         "Name"     => "Critérios",
         "Name_UK"     => "Criterias",

         "Public"   => 0,
         "Person"   => 0,
         "Admin"    => 1,
         "Friend"   => 0,
         "Coordinator"   => 1,
         "Advisor"    => 0,
         'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
     ),
     "Assessors" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Assessors&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Avaliadores",
        "Title_UK" => "Manage Assessors",
        "Name"     => "Avaliadores",
        "Name_UK"     => "Assessors",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
     ),
     "Assessments" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Assessments&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Avaliações",
        "Title_UK" => "Manage Assessments",
        "Name"     => "Avaliações",
        "Name_UK"     => "Assessments",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
     ),
     "Submissions_Certificates" => array
     (
        "Href"     => "",
        "HrefArgs" => "ModuleName=Submissions&Action=EditList&Submissions_GroupName=Certificates&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Certificados",
        "Title_UK" => "Manage Certificates",
        "Name"     => "Certificados",
        "Name_UK"     => "Certificates",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
     ),
     "Dates" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Dates&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Datas do Evento",
        "Title_UK" => "Manage Event Dates",
        "Name"     => "Datas",
        "Name_UK"     => "Dates",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array("Date","Time","Place","Room"),
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
      ),
     "Times" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Times&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Horários do Evento",
        "Title_UK" => "Manage Event Time Slots",
        "Name"     => "Horários",
        "Name_UK"  => "Time Slots",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array("Time","Place","Room"),
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
      ),
     "Places" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Places&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Locais do Evento",
        "Title_UK" => "Manage Event Places",
        "Name"     => "Locais",
        "Name_UK"  => "Places",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array("Date","Time","Place","Room"),
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
      ),
     "Rooms" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Rooms&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Salas do Evento",
        "Title_UK" => "Manage Event Rooms",
        "Name"     => "Salas",
        "Name_UK"  => "Rooms",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array("Date","Time","Room"),
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
      ),
      "Schedule" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Schedules&Action=Schedule&Event=".$this->Event("ID"),
        "Title"    => "Mostrar Grade do Evento",
        "Title_UK" => "Show Event Schedule",
        "Name"     => "Mostrar Grade",
        "Name_UK"     => "Show Schedule",

        "Public"   => 1,
        "Person"   => 0,
        "Admin"    => 0,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
      ),
     "ScheduleEdit" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Schedules&Action=EditSchedule&Event=".$this->Event("ID"),
        "Title"    => "Editar Grade do Evento",
        "Title_UK" => "Edit Event Schedule",
        "Name"     => "Editar Grade",
        "Name_UK"     => "Edit Schedule",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
      ),
     "Speakers" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Speakers&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Palestrantes",
        "Title_UK" => "Manage Speakers",
        "Name"     => "Palestrantes",
        "Name_UK"  => "Speakers",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array("Date","Time","Room"),
        'AccessMethod'    => "Current_User_Event_Submissions_May_Edit",
      ),

     "Collaborations" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Collaborations&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Colaborações",
        "Title_UK" => "Manage Collaborations",
        "Name"     => "Colaborações",
        "Name_UK"  => "Collaborations",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array(),
        'AccessMethod'    => "Current_User_Event_Collaborations_May_Edit",
      ),

     "Collaborators" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Collaborators&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Colaboradores",
        "Title_UK" => "Manage Collaborators",
        "Name"     => "Colaboradores",
        "Name_UK"  => "Collaborators",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array(),
        'AccessMethod'    => "Current_User_Event_Collaborations_May_Edit",
      ),

     "Collaborators_Certificates" => array
     (
        "Href"     => "",
        "HrefArgs" => "ModuleName=Collaborators&Action=EditList&Collaborators_GroupName=Certificates&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Certificados",
        "Title_UK" => "Manage Certificates",
        "Name"     => "Certificados",
        "Name_UK"     => "Certificates",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Collaborations_May_Edit",
     ),
     
     "Caravans" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Caravans&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Caravanas",
        "Title_UK" => "Manage Caravans",
        "Name"     => "Caravanas",
        "Name_UK"  => "Caravans",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array(),
        'AccessMethod'    => "Current_User_Event_Caravans_May_Edit",
      ),

     "Caravaneers" => array
     (
        "Href"     => "",
        "HrefArgs" => "?ModuleName=Caravaneers&Action=EditList&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Caravaneiros",
        "Title_UK" => "Manage Caravaneers",
        "Name"     => "Caravaneiros",
        "Name_UK"  => "Caravaneers",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        "NonGetVars" => array(),
        'AccessMethod'    => "Current_User_Event_Caravans_May_Edit",
      ),
     "Caravaneers_Certificates" => array
     (
        "Href"     => "",
        "HrefArgs" => "ModuleName=Caravaneers&Action=EditList&Caravaneers_GroupName=Certificates&Event=".$this->Event("ID"),
        "Title"    => "Gerenciar Certificados",
        "Title_UK" => "Manage Certificates",
        "Name"     => "Certificados",
        "Name_UK"     => "Certificates",

        "Public"   => 0,
        "Person"   => 0,
        "Admin"    => 1,
        "Friend"   => 0,
        "Coordinator"   => 1,
        "Advisor"    => 0,
        'AccessMethod'    => "Current_User_Event_Collaborations_May_Edit",
     ),


     
);
