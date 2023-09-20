<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use App\Models\Piece;

use App\Models\Typologie;

use Maatwebsite\Excel\Concerns\WithHeadings;

class ClassExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $pieces = Piece::all();
          $typologie = Typologie::all();

          $global = [];

          for ($i=0; $i < count($typologie) ; $i++) { 
              for ($j=0; $j < count($pieces) ; $j++) { 
                   $global[] = array('nom_dossier' => $typologie[$i]->nom_dossier, 'entite' => $typologie[$i]->entite ,'pieces' => $pieces[$j]->pieces, 'matricule' => $pieces[$j]->matricule) ;
              }
          }

          return collect($global);
          
    }
    public function headings(): array
    {
        // Définissez les noms de colonnes ici
        return [
            'nom_dossier',
            'entite',
            'pieces',
            'matricule',
            // Ajoutez autant de colonnes que nécessaire
        ];
    }
}
