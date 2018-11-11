<?php
namespace Pulsestorm\HelloWorldMVVM\Controller\Adminhtml\Read;
class Read extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
$connection = $resource->getConnection();
$tableName = $resource->getTableName('employee'); //gives table name with prefix
 

$sql = "Select * FROM " . $tableName;
$result = $connection->fetchAll($sql);
//$result=$connection->query($sql);
        if($result==true){
			echo("<table>");
			 foreach($result as $element){
			echo '<tr><td><p style="color:red; font-size:14px;">'.$element["emp_id"].'</p></td>
			<td><p style="color:red; font-size:14px;">'.$element["mail"].'</p></td>
			<td><p style="color:red; font-size:14px;">'.$element["phone"].'</p></td>
			<td><p style="color:red; font-size:14px;">'.$element["message"].'</p></td>
			</tr>';
          } 
		  echo("</table>");
		  
        echo '<p style="color:red; font-size:20px;">'.'</p>';
		}
		else{
			echo '<p style="color:red; font-size:20px;">Помилка!</p>';
		}
        //var_dump(__METHOD__);
    }    
}




/* namespace Pulsestorm\HelloWorldMVVM\Controller\Hello;
class World extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
$connection = $resource->getConnection();
$tableName = $resource->getTableName('employee'); //gives table name with prefix
 

$sql = "Insert Into " . $tableName . " (emp_id, emp_name, emp_code, emp_salary) Values ('','bogdan','28121993','07')";
$connection->query($sql);
 
        echo '<p style="color:red; font-size:20px;">Привіт це богдан!</p>';
        var_dump(__METHOD__);
    }    
} */

//Select Data from table
/* $sql = "Select * FROM " . $tableName;
$result = $connection->fetchAll($sql); // gives associated array, table fields as key in array.
 
//Delete Data from table
$sql = "Delete FROM " . $tableName." Where emp_id = 10";
$connection->query($sql); */
 
//Insert Data into table
/* $sql = "Insert Into " . $tableName . " (emp_id, emp_name, emp_code, emp_salary) Values ('','bogdan','28121993','07')";
$connection->query($sql); */
 
//Update Data into table
/* $sql = "Update " . $tableName . "Set emp_salary = 20000 where emp_id = 12";
$connection->query($sql); */