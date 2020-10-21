<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\CompteModel;
 
class Compte extends Controller
{
 
    public function index()
    {    
        $model = new CompteModel();
 
        $data['compte'] = $model->orderBy('id', 'ASC')->findAll();
        
        return view('compte', $data);
    }    
 
    public function create()
    {    
        return view('create-compte');
    }
 
    public function store()
    {  
 
         
        helper(['form', 'url']);
         
        $model = new CompteModel();
        $db=\config\DATABASE::connect();
        $receive=$db->table('Compte');
       
        $data = [
 
            'cleRib' => $this->request->getVar('cleRib'),
            'Etat'  => $this->request->getVar('Etat'),
            'typecompte'  => $this->request->getVar('typecompte'),
            'datedebut'  => $this->request->getVar('datedebut'),
            'datefin'  => $this->request->getVar('datefin'),
            'numCmpte'  => $this->request->getVar('numCmpte'),
            'Frouverture'  => $this->request->getVar('Frouverture'),
            'Solde'  => $this->request->getVar('Solde'),
            'numAgence'  => $this->request->getVar('numAgence'),
            'Agios'  => $this->request->getVar('Agios'),
            
            ];
            
        $save = $receive->insert($data);
 
        return view('create-compte');
    }
 
    public function edit($id = null)
    {
      
     $model = new CompteModel();
 
     $data['compte'] = $model->where('id', $id)->first();
 
     return view('public/index.php/edit-compte', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new CompteModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            
            'cleRip' => $this->request->getVar('cleRip'),
            'Etat'  => $this->request->getVar('Etat'),
            'typecompte'  => $this->request->getVar('typecompte'),
            'datedebut'  => $this->request->getVar('datedebut'),
            'datefin'  => $this->request->getVar('datefin'),
            'numCmpte'  => $this->request->getVar('numCmpte'),
            'Frouverture'  => $this->request->getVar('Frouverture'),
            'Solde'  => $this->request->getVar('Solde'),
            'numAgence'  => $this->request->getVar('numAgence'),
            'Agios'  => $this->request->getVar('Agios'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/compte') );
    }
 
    public function delete($id = null)
    {
 
     $model = new Compte();
 
  //   $data['compte'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/compte') );
    }
}