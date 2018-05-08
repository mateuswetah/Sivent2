array
    (
     "Help" => array
     (
        "Href"     => "",
        "HrefArgs" => "Action=Help",
        "Name"    => "Ajuda",
        "Title"     => "Ajuda",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "MyApp_Handle_Help",
        //"AccessMethod"   => "MyApp_Handle_HasHelp",
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

        "Handler"   => "MyApp_Handle_Start",
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
        "Handler"   => "MyApp_Login_Password_Change_Form",
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
        "Handler"   => "Login_Password_Recover_Handle",
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
    );
