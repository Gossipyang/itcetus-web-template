
<!-- 网页头部引入 -->
<?php require_once('./public/head.php'); ?>

<!-- 按需引入当前页面所需css -->
<link rel="stylesheet" href="/static/css/index.css">
<link rel="stylesheet" href="./static/css/nav.css">
</head>

<body>
    <!-- 导航栏引入 -->
<?php require_once('./public/nav.php'); ?>
    <!-- banner引入 -->
<?php include('./public/banner.php'); ?>
<?php //include('./public/banner.php'); ?>

<!-- 内容展示模块 -->

<div class="content col-lg-8 col-lg-offset-2">

    <h1>首页内容展示模块</h1>

</div>


<!-- footer 引入 -->
<?php require_once('./public/footer.php'); ?>

    <!-- 公共js引入 -->
<?php require_once('./public/js.php'); ?>

</body>