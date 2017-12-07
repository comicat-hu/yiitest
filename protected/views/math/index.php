<a href="<?php echo $this->createUrl('math/add');?>"><button>ADD(+)</button></a>
<a href="<?php echo $this->createUrl('math/sub');?>"><button>SUB(-)</button></a>
<a href="<?php echo $this->createUrl('math/mul');?>"><button>MUL(*)</button></a>
<a href="<?php echo $this->createUrl('math/div');?>"><button>DIV(/)</button></a>
<?php echo 'hostInfo: ' . Yii::app()->request->hostInfo;?>