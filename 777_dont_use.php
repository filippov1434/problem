
 <?php
//Тестовый массив как выборка нескольких строк из SQL
$array_example = array( 0 => array("id" => 1, "base" => "Залучье", "name" => "Максим Филиппов"),
                      1 => array("id" => 2, "base" => "Жемчужина", "name" => "Иван Чижов") );


//функция генерации грида НАЧАЛО
function generate_grid($array) {
    
    $result_grid = "";
    
    $first_part ="
    <div class=\"table-responsive\">  
        <table id=\"example3\" class=\"display\" style=\"min-width: 845px\">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>База</th>
                <th>Имя</th>
                <th>Действия</th>
            </tr>
        </thead>
                                                            
        <tbody>
    ";


    $final_part="
         </tbody>
         </table>
         </div>
    ";


    $dynamic_part = '';
    foreach ($array as &$value ) {
        
        $dynamic_part .= "<tr>";
        $dynamic_part .= "<td>{$value['id']}</td>";
        $dynamic_part .= "<td>{$value['base']}</td>";
        $dynamic_part .= "<td>{$value['name']}</td>";
        $dynamic_part .= "<td>
                            <div class=\"d-flex\">
                                <a href=\"#\" class=\"btn btn-primary shadow btn-xs sharp mr-1\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"#\" class=\"btn btn-danger shadow btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
                            </div>                                              
                          </td>  
        ";
        $dynamic_part .= "</tr>";

     };

    $result_grid .= "{$first_part} {$dynamic_part} {$final_part}";
    print($result_grid);
    return $result_grid;
};//end function



                                            
generate_grid($result);
//функция генерации грида КОНЕЦ





function generate_select($array) {
    
    $result_select = "";
        
    $first_part ="
        <select id=\"single-select-current-classroom\">
    ";


    $final_part="
        </select>
    ";


    $dynamic_part = '';
    foreach ($array as &$value ) {
        
        $dynamic_part .= "<option value=\"{$value['base']}\">{$value['base']}</option>";

     };

    $result_select .= "{$first_part} {$dynamic_part} {$final_part}";
    print($result_select);
    return $result_select;
};//end function



                                            
generate_select($array_example);





/*
//функция генерации МОДАЛКИ НАЧАЛО
function generate_modal() {
    
    $result_modal = "";
                             
              
    $first_part ="
    <div class=\"modal fade create-self-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" id=\"modal_2131213\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
    ";

	$title_part ="
    <h5 class=\"modal-title\">Это заголовок модалки</h5>
    ";
  
  	$second_part ="
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span>&times;</span> </button>
    </div>
     
     <div class=\"modal-body\">
    ";
  
	$body_part ="
    <h5>Это тело модалки</h5>
    ";  
  
      $final_part="
                    </div>
                </div>
            </div>
        </div>
    ";


   
    $result_modal .= "{$first_part} {$title_part} {$second_part} {$body_part} {$final_part}";
    print($result_modal);
  	
    return $result_modal;
};//end function
//функция генерации МОДАЛКИ КОНЕЦ

                                          
generate_modal();
*/
