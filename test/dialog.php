<?php  $title='弹出框测试' ?>
<?php include("./templates/header.php"); ?>

    <div id="d1">
      <p>这是第一个弹出框</p>
    </div>
    <button id="btnShow" class="button button-primary">显示</button>
    <button id="btnHide" class="button button-primary">隐藏</button>
    
    <?php $url = 'bui/overlay'?>
    <?php include("./templates/script.php"); ?>

    <script type="text/javascript" src="specs/dialog-spec.js"></script>

<?php include("./templates/footer.php"); ?>