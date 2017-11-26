{include file='_header.tpl'}


</head>

<body class="navigation-horizontal page-scrolling dark-scheme">


    {include file="_nav.tpl"}

    <!-- Content -->
    <div id="content">

    <!-- 自動載入 $op 對應的樣板檔 -->
    {include file="op_`$op`.tpl"}

    </div>
    <!-- Content / End -->

    {include file="_footer.tpl"}

</body>

</html>