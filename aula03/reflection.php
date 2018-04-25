<?php 

class User
{
	public $nome = 'teste';
	private $email;

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    $this->nome = $nome;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    $this->email = $email;
	}
}
$user = new User();
$user->setNome('hamilton');
$classe = new ReflectionClass('User');

var_dump($classe->getProperty('nome')->getValue());

echo '<hr>';

$propr = $classe->getProperty('nome');
$propr->setAccessible(true);

var_dump($classe->getProperty('nome')->getValue(new User));

die();
$meth = $classe->getMethods();
echo '<pre>';
var_dump($meth);
die();
foreach($meth as $v)
{
     if($v->getName() == 'getNome'){
     	echo $v->getName();	

     }
     
}


 ?>