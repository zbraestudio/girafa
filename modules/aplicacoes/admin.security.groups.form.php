<?
$form = new nbrAdminForms('sis_grupos');

$form->AddFieldString('Name', 'Nome', 100, 3);

//Lookup Multiselect..
$title = 'Segurança de Módulos';
$description  = 'Informe abaixo o(s) Módulo(s) a qual este Grupo de Usuários se relaciona.';
$description .= '<br>';
$description .= 'O(s) Módulo(s) relacionado(s) a este Grupo de Usuáro controlará as sessões do CMS exibidas.';
$form->AddLkpMultselect('SEGURANCAMODULO', $title, $description, 'sis_modulos_grupos', 'Group', 'sis_modulos', 'Module', 'Name');

$form->PrintHTML();
?>