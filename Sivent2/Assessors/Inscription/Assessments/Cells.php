<?php



class AssessorsInscriptionAssessmentsCells extends AssessorsInscriptionAssessmentsRead
{
    //*
    //* function Assessor_Inscription_Assessment_Link, Parameter list: $assessor
    //*
    //* Creates row with $inscription $assessor, friend and submissiondata.
    //*

    function Assessor_Inscription_Assessment_Link($assessor,$id)
    {
        $value=$this->CGI_GETint("Assessor");

        $args=$this->CGI_URI2Hash();
        $message="Assessments_Inscriptions_Assessment_Link_Title";
        
        if ($value==$assessor[ "ID" ])
        {
            unset($args[ "Assessor" ]);
            $message="Assessments_Inscriptions_Assessment_UnLink_Title";
        }
        else
        {
            $args[ "Assessor" ]=$assessor[ "ID" ];
        }
                
        return
            $this->Href
            (
               "?".$this->CGI_Hash2URI($args),
               $this->MyLanguage_GetMessage($message),
               "",
               $target="",
               $class="",
               $noqueryargs=FALSE,
               $options=array
               (
                   "ID" => $id,
               ),
               $anchor="ASSESS_".$assessor[ "ID" ]
            );
    }

}

?>