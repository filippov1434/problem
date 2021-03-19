<?php

echo "


<h1> Таблица мокап статичная </h1>
                                <div class=\"table-responsive\">
                                    <table id=\"example3\" class=\"display\" style=\"min-width: 845px\">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Дата заявки</th>
                                                <th>База</th>
                                                <th>Тип проживания</th>
                                                <th>Даты</th>
                                                <th>Имя</th>
                                                <th>Телефон</th>

                                                <th>Статус</th>                                          
                                                <th>Действия</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>11:34 21.03.21</td>
                                                <td>Залучье</td>
                                                <td>Дом №8, Берлин</td>
                                                <td>26.03.21-28.03.21</td>
                                                <td>Анастасия</td>
                                                <td>8 999 555 55 55</td>
                                                <td><span class=\"badge light badge-success\">Подтверждена</span></td>
                                                <td>
             <div class=\"d-flex\">
              <a href=\"#\" class=\"btn btn-primary shadow btn-xs sharp mr-1\" data-t><i class=\"fa fa-pencil\"></i></a>
              <a href=\"#\" class=\"btn btn-danger shadow btn-xs sharp\"  id=\"213\" onClick=\"reply_click(this.id)\"><i class=\"fa fa-trash\"></i></a>
             </div>            
            </td>            
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>19:10 01.04.21</td>
                                                <td>Жемчужина</td>
                                                <td>Стандарт Семейный</td>
                                                <td>11.04.21-15.04.21</td>
                                                <td>Егор</td>
                                                <td>8 999 555 55 55</td>
                                                <td><span class=\"badge light badge-danger\">Новая</span></td>
                                                <td>
             <div class=\"d-flex\">
              <a href=\"#\" class=\"btn btn-primary shadow btn-xs sharp mr-1\"><i class=\"fa fa-pencil\"></i></a>
              <a href=\"#\" class=\"btn btn-danger shadow btn-xs sharp\" id=\"777\" ><i class=\"fa fa-trash\"></i></a>
             </div>            
            </td>            
                                            </tr>


                                            

                                        </tbody>
                                    </table>
                                </div>

";

?>