<?php
include_once 'file-model.php';

class controller
{
    function __invoke()
    {
        $model_data = new model();
        $row_data = $model_data->getData();

        $data = "<table border=1>

        <tr><th>JUDUL</th><th>PENGARANG</th><th>PENERBIT</th><th>TAHUN</th</tr>";
        foreach ($row_data as $key => $value) {
            $data .= '<tr><td>' . $value->judul . "</td><td>" . $value->pengarang . "</td><td>" . $value->penerbit . "</td><td>" . $value->tahun . "</td><tr>";
        }
        $data .= "</table>";
        include("view.php");
    }
}
