<?php
require_once ("../Model/catModel.php");
class CatController {
    private $post;
    private $type;
    function addPic(){
        if(isset($_FILES['photo'])){
            $name_photo=$_FILES['photo']['name'];
            $picsize=$_FILES['photo']['size'];
            $pictmpname=$_FILES['photo']['tmp_name'];
        
            if($_FILES['photo']['error']===0){
                    $img_ex = pathinfo($name_photo, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
        
                    $allowed_exs=array("jpg","jpeg","png");
        
                    if(in_array($img_ex_lc,$allowed_exs)){
                        $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                        $img_upload_path='upload/'.$new_img_name;
                        move_uploaded_file($pictmpname,$img_upload_path);
                        return $img_upload_path;
                    }
                    
            }     
        }
    }
    function addCat(){
           $this->post=[
           'name'=> $_POST['name'],
           'description'=> $_POST['description'],
           'photo'=> $this->addPic()
        ];
        $produit=new CatModel;
        $produit->addCatToDb($this->post);
        
    }
    function select($id){
        $select=new CatModel;
        return $select->selectCatDb($id);
    }
    function updateCat(){
      
            if(isset($_FILES['photo'])&&$_FILES['photo']['error']===0){
                $this->post=['name'=> $_POST['name'],
           'description'=> $_POST['description'],
           'photo'=> $this->addPic()
                     ];
                $bool=true;
            }else{
                $this->post=[
                    'name'=> $_POST['name'],
                    'description'=> $_POST['description']
                 
                     ];
                $bool=false;
            }
         $update=new CatModel;
         $update->updateCattInDb($this->post,$_GET["id"],$bool);
        
    }
    function deleteCat() {
            $delete=new CatModel;
            $delete->deleteCatInDb($_GET['id']);
    }
    function getCat() {
        $get = new CatModel;
        return $get->getCatFromDb();
    }
   
} 
$categorie=new CatController;
$cat=$categorie->getCat();
if (isset($_POST["enregistrer"])) {
$test=new CatController;
$test->addCat();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
    header('location:/cate');
    }
};    
// suprimer
if(isset($_GET["a"])){
   
if (isset($_GET["id"])) {
   
    $p=new CatController();
    $p->deleteCat();
    header("location:/cate");
}
}
if (isset($_GET["b"])) {
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
        if (isset($_GET["c"])) {
            $produit = new CatController();
            $produit->updateCat();
            header("location:/cate");
        }
    }
}
            
//    Categorie     
    
if(isset($_GET["t"])){
        $cat=$_GET["t"];

}
if(isset($_GET["p"])){
    $id = $_GET["id"];
}