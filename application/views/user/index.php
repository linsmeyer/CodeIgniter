
<!-- Basic Styles -->
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/font-awesome.min.css">

<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/smartadmin-production-plugins.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/smartadmin-production.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/smartadmin-skins.min.css">

<!-- SmartAdmin RTL Support -->
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/smartadmin-rtl.min.css">

<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/demo.min.css">

<style type="text/css">
    #container
    {
        width:900px;
        background-color: #ffffff;
        margin: auto;
        padding:20px;
        font-size:14px;
        font-family:tahoma;
    }
    .crud
    {
        font-size: 12px;
        width: 100%;
    }
    .crud th
    {
        background-color: #242424;
        color:#efefef;
        padding:10px;
    }
    .crud td
    {
        background-color: #efefef;
        padding:10px;
        color:#242424;
    }
    .crud tr.even td
    {
        background-color: #fefefe;
    }
</style>
<div id="container">
    <h1>Listando Usuários</h1>
    <?php if($msg = $this->session->flashdata("message")): ?>

        <p class="success">
            <?=$msg?>
        </p>

    <?php endif; ?>
    <p><a href="<?=site_url('user/create')?>">Novo Usuário</a></p>

    <?=$pagination?>

    <table class="crud" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Telefone</th>
            <th>RG</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($users as $user): ?>
            <tr <?=($i % 2 == 0) ? 'class="even"' : '' ?>>
                <td><?=$user->id?></td>
                <td><?=$user->user_name?></td>
                <td><?=$user->user_email?></td>
                <td><?=$user->user_phone?></td>
                <td><?=$user->user_rg?></td>
                <td><a href="<?=site_url("user/edit/".$user->id)?>">editar</a> <a href="<?=site_url("user/delete/".$user->id)?>">deletar</a></td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="https://dash.chooseapps.me/smartadmin/js/app.config.js"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="https://dash.chooseapps.me/smartadmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="https://dash.chooseapps.me/smartadmin/js/bootstrap/bootstrap.min.js"></scri

<!-- Demo purpose only -->
<script src="https://dash.chooseapps.me/smartadmin/js/demo.min.js"></script>

<!-- MAIN APP JS FILE -->
<script src="https://dash.chooseapps.me/smartadmin/js/app.min.js"></script>