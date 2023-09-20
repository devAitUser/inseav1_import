<?php

namespace App\Imports;

use App\Models\Piece;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use App\Models\Field_table_inventaire;  
use Illuminate\Http\Request;




class UsersImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */

    protected $inventaireId;
    protected $champs;


    
    public function __construct($inventaireId, $champs)
    {
        $this->inventaireId = $inventaireId;
        $this->champs = $champs;
    }


    public function collection(Collection $rows)
    {
        

        

        // foreach ($rows as $row) {
        //     $newLine = new Field_table_inventaire();
        //     $newLine->inventaire_id = $this->inventaireId;
        //     $newLine->save();
        //     foreach ($row as $champ) {
        //         $newName = new Value_field();
        //         $newName->value = $champ;
        //         $newName->id_field_inventaire = $newLine->id;
        //         $newName->save();
        //     }
          
        // }


        // foreach ($rows as $row) {
        //     $newLine = new Field_table_inventaire();
        //     $newLine->inventaire_id = $this->inventaireId;
        //     $newLine->save();
        //     foreach ($row as $key => $value) {
        //         if($key == 'date' ||  $key == 'date2'||  $key == 'date3'||  $key == 'date4' ){
        //             $date = $value;

        //             if (preg_match("/^\d{5}$/", $date)) {
        //                 $value_date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value)->format('d-m-Y') ;
        //                 $newName = new Value_field();
        //                 $newName->value = $value_date;
        //                 $newName->id_field_inventaire = $newLine->id;
        //                 $newName->save();
    
        //             }else {
        //                 $newName = new Value_field();
        //                 $newName->value = $value;
        //                 $newName->id_field_inventaire = $newLine->id;
        //                 $newName->save();

        //             }

        //         } else {

        //             $newName = new Value_field();
        //             $newName->value = $value;
        //             $newName->id_field_inventaire = $newLine->id;
        //             $newName->save();

        //         }
                
        //     }
        // }



        for ($i=0; $i < count($rows) ; $i++) { 
              $newName = new Piece();
              $newName->pieces = $rows[$i]['pieces'];
              $newName->matricule = $rows[$i]['matricule'];
              $newName->save();
        }
    
        echo 'Importation réussie.';
    }         

    


    }






