<?php
            $servername = "localhost";
            $username = "root";
            $password = "toto";
            $db = "geoip";
            $conn = mysqli_connect($servername, $username, $password, $db);
    //MYSQL MYADDMINPHP TO CSV
            if (isset($_REQUEST['btn_export']))
            {
                $data_op = "";
                $sql = $conn->query("select * from geoip"); //Change Your Table Name          
                while ($row1 = $sql->fetch_field())
                {
                    $data_op .= '"' . $row1->name . '",';
                }
                $data_op .="\n";
                while ($row = $sql->fetch_assoc())
                {
                    foreach ($row as $key => $value)
                    {
                        $data_op .='"' . $value . '",';
                    }
                    $data_op .="\n";
                }
                $filename = "geoip.csv"; //Change File type CSV/TXT etc
                header('Content-type: application/csv'); //Change File type CSV/TXT etc
                header('Content-Disposition: attachment; filename=' . $filename);
                echo $data_op;
                exit;
            }
    //CSV To MYSQL MYADDMINPHP


    function lire_csv($nom_fichier, $separateur =";"){
        $row = 0;
        $donnee = array();    
        $f = fopen ($nom_fichier,"r");
        $taille = filesize($nom_fichier)+1;
        while ($donnee = fgetcsv($f, $taille, $separateur)) {
            $result[$row] = $donnee;
            $row++;
        }
        fclose ($f);
        return $result;
    }



    function requete_insert($donnees_csv, $table){
        $insert = array();
        $i = 0;
        while (list($key, $val) = @each($donnees_csv)){
    /*On ajoute une valeur vide ' ' en début pour le champs d'auto-incrémentation  s'il existe, sinon enlever cette valeur*/
               if ($i>0){
                $insert[$i] = "INSERT into ".$table." VALUES(' ',".$id_user.",'";
                $insert[$i] .= implode("','", $val);
                $insert[$i] .= "')";                      
       }$i++;
            }       
        return $insert;
    }
            if (isset($_REQUEST['btn_import']))
            {
                $fichier=geoip.csv;
                $nom_table = "geoip";
                $donnees = lire_csv($fichier);
                $requetes= requete_insert($donnees, "$nom_table");
                $filename = 'geoip.csv';
                $fp = fopen($filename, 'r');
                foreach($requetes as $requete)
                {
                    $result = mysql_query($requete) or die('Erreur SQL !'. $requete.'<br />'.mysql_error());
                }
                
                fclose($fp);
            }
?>



    
