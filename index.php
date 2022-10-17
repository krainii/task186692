<?php
function d($val) {
    echo '<pre>';
    print_r($val);
    echo  '</pre>';
}

$data = file_get_contents('https://crm4-digital.bitrix24.ru/rest/7/lztgfhjr62b7pqu8/crm.deal.list');
$data = json_decode($data, true);
?>
<style>
    table,
    td {
        border: 1px solid #333;
    }

    thead,
    tfoot {
        background-color: #333;
        color: #fff;
    }

</style>
<table>
    <thead>
    <tr>
        <th>id сделки</th>
        <th>название сделки</th>
        <th>дата создания сделки</th>
    </tr>
    </thead>
    <tbody>
    <?foreach ($data['result'] as $deal):?>
    <tr>
        <td><?=$deal['ID']?></td>
        <td><?=$deal['TITLE']?></td>
        <td><?=$deal['DATE_CREATE']?></td>
    </tr>
    <?endforeach;?>
    </tbody>
</table>
