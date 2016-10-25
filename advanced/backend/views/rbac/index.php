<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-10-24
 * Time: 14:59
 */
use yii\bootstrap\Html;

?>

<?= Html::beginForm(['/setting/rolenode','name'=>$name],'post')?>
    <table width="100%" class="lr10">
        <thead>
        <tr>
            <th align="center"><?= Html::checkbox('check',false,['id'=>'check_all'])?></th>
            <th align="center">权限名称</th>
            <th align="center">标书</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($nodes as $v){?>
            <tr>
                <td align="center"><?= Html::checkbox('node[]',in_array($v->name,$roleNodes)?true:false,['value'=>$v->name,'class'=>'node_check'])?></td>
                <td align="center"><?= $v->name?></td>
                <td align="center"><?= $v->description?></td>
            </tr>
        <?php }?>


        <tr>
            <td align="center" colspan="3">
                <?= Html::submitButton('提交',['class'=>'btn btn-primary'])?>
            </td>
        </tr>
        </tbody>
    </table>
<?= Html::endForm()?>