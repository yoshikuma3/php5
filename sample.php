<?php
    class Company{
        protected $name;
        protected $address;
        protected $tel;
        
         public function getName(){
            return $this->name;
         }
         public function getAddress(){
            return $this->address;
         }
         public function getTel(){
            return $this->tel;
         }
         
        public function setName($name){
            $this->name = $name;
        }
        public function setAddress($address){
            $this->address = $address;
        }
        public function setTel($tel){
            $this->tel = $tel;
        }

        public function displayCompany(){
            echo "会社名：" .$this->name."\n";
            echo "住所：" .$this->address."\n";
            echo "電話番号：" .$this->tel;
        }
    }
    class Department extends Company{
        private $category;
        private $affiliation;

        //クラス関数定義
        public function getCategory(){
            return $this->category;
        }
        public function getAffiliation(){
            return $this->affiliation;
        }

        public function setCategory($category){
            $this->category = $category;
        }
        public function setAffiliation($affiliation){
            $this->affiliation = $affiliation;
        }

        public function displayDepartment(){
            echo "部署名：" .$this->category."\n";
            echo "部長：" .$this->affiliation."\n";
        }
    }

    $companyA = new Department();
    $companyA -> setName("サンプルA");
    $companyA -> setAddress("市ヶ谷");
    $companyA -> setTel("080-xxxx-xxxx");
    $companyA -> setCategory("人事");
    $companyA -> setAffiliation("高田");

    $companyB = new Department();
    $companyB -> setName("サンプルB");
    $companyB -> setAddress("池袋");
    $companyB -> setTel("090-xxxx-xxxx");
    $companyB -> setCategory("総務");
    $companyB -> setAffiliation("田中");

    $companyC = new Department();
    $companyC -> setName("サンプルC");
    $companyC -> setAddress("新宿");
    $companyC -> setTel("070-xxxx-xxxx");
    $companyC -> setCategory("営業");
    $companyC -> setAffiliation("高橋");

    $companies = array($companyA,$companyB,$companyC);

    foreach ($companies as $company) {
        echo $company->displayCompany();
        echo "\n";
        echo $company->displayDepartment();
        echo "\n";
    }
?>